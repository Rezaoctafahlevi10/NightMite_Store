<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function checkout()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();

        if($carts == null)
        {
            return Redirect::back();
        }

        $order = Order::create([
            'user_id' => $user_id
        ]);

        foreach ($carts as $cart) {
            $product = Product::find($cart->product_id);

            $product->update([
                'stock' => $product->stock - $cart->amount
            ]);

            Transaction::create([
                'amount' => $cart->amount,
                'order_id' => $order->id,
                'product_id' => $cart->product_id
            ]);

            $cart->delete();
        }

        return Redirect::route('show_order', $order);
    }

    public function index_order()
    {
        $user = Auth::user();
        $is_admin = $user->is_admin;
        if($is_admin)
        {
            $orders = Order::all();
        }
        else
        {
            $orders = Order::where('user_id', $user->id)->get();
        }
        return view('index_order', compact('orders'));
    }

    public function show_order(Order $order)
    {
        $user = Auth::user();
        $is_admin = $user->is_admin;

        if ($is_admin || $order->user_id == $user->id)
        {
            return view('show_order', compact('order'));
        }

        return Redirect::route('index_order');
    }

    public function submit_payment_receipt(Order $order, Request $request)
    {
        $file = $request->file('payment_receipt');
        $path = time() . '_' . $order->id . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $order->update([
            'payment_receipt' => $path
        ]);

        return Redirect::back();
    }

    public function confirm_payment(Order $order)
    {
        $order->update([
            'is_paid' => true
        ]);

        return Redirect::back();
    }

    public function chart() {
        $result = DB::table('products')
        ->join('transactions', 'products.id', '=', 'transactions.product_id')
        ->select('products.price', 'transactions.amount')
        ->addSelect(DB::raw('transactions.amount * products.price AS income'))
        ->get();

        foreach ($result as $row) {
            $amount = $row->amount;
            $price = $row->price;
            $allIncome = $row->income;
        };

        $total_income = Transaction::select(DB::raw("SELECT transactions.amount, transactions.product_id 
        FROM transactions JOIN products ON transactions.price = products.price 
        WHERE transactions.products_id == products.id"))
        ->addSelect(DB::raw("transactions.amount * transactions.price AS income"));

        // $total_income = sum($allIncome);
        
        // $total_income = Transaction::select(DB::raw("CAS(SUM(total_harga) as int) as total_income"))
        // ->GroupBy(DB::raw("Month(created_at)"))
        // ->pluck('total_income');
        
        $month = Order::select(DB::raw("MONTHNAME(created_at) as month"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('month');

        return view('reporting', compact('total_income', 'month'));
    }
}