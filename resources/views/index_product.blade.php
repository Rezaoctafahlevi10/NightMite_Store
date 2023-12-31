@extends('layouts.app')
@section('contents')
    <div class="container">
        @for ($i = 0; $i < count($products)/5; $i++)
        <div class="row justify-content-center">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                            <div class="card m-3">
                                <img class="card-img-top" height="250px" width="250px" src="{{ url('storage/' . $product->image)}}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $product->name }}</p>
                                    <form action="{{ route('show_product', $product) }}" method="get">
                                        <button type="submit" class="btn btn-primary">Lihat Detail</button>
                                    </form>
                                    @if (Auth::check() && Auth::user()->is_admin)  
                                        <form action="{{ route('delete_product', $product) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mt-2">Hapus product</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
@endsection
