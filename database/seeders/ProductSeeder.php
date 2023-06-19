<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => '3Second T-Shirt Retro Back Tee 070423',
                'price' => 183200,
                'description' => '<p>Detail</p>
                <p>100% Produk Original 3Second</p>
                <p>Bahan: 100% Cotton</p>
                <p>Terdapat pilihan warna:</p> 
                <p>> Jet Black (Hitam)</p>
                
                <p>Miliki kaos dari 3Second ini untuk tampil terbaik dengan gaya yang classic!</p>
                <p>● Dibuat menggunakan bahan katun yang lembut, halus, perawatan yang mudah, serta menyerap keringat dengan baik</p> 
                <p>● Dapat di padu-padankan dengan fashion items yang lain karena desain yang minimalis</p>',
                'image' => 'Avril.jpg',
                'stock' => 36,
            ],
            [
                'name' => '3Second T-Shirt Retro Back Tee 070423',
                'price' => 183200,
                'description' => '<p>Detail</p>
                <p>100% Produk Original 3Second</p>
                <p>Bahan: 100% Cotton</p>
                <p>Terdapat pilihan warna:</p> 
                <p>> Jet Black (Hitam)</p>
                
                <p>Miliki kaos dari 3Second ini untuk tampil terbaik dengan gaya yang classic!</p>
                <p>● Dibuat menggunakan bahan katun yang lembut, halus, perawatan yang mudah, serta menyerap keringat dengan baik</p> 
                <p>● Dapat di padu-padankan dengan fashion items yang lain karena desain yang minimalis</p>',
                'image' => 'Avril.jpg',
                'stock' => 36,
            ],
            [
                'name' => '3Second T-Shirt Retro Back Tee 070423',
                'price' => 183200,
                'description' => '<p>Detail</p>
                <p>100% Produk Original 3Second</p>
                <p>Bahan: 100% Cotton</p>
                <p>Terdapat pilihan warna:</p> 
                <p>> Jet Black (Hitam)</p>
                
                <p>Miliki kaos dari 3Second ini untuk tampil terbaik dengan gaya yang classic!</p>
                <p>● Dibuat menggunakan bahan katun yang lembut, halus, perawatan yang mudah, serta menyerap keringat dengan baik</p> 
                <p>● Dapat di padu-padankan dengan fashion items yang lain karena desain yang minimalis</p>',
                'image' => 'Avril.jpg',
                'stock' => 36,
            ],
            [
                'name' => '3Second T-Shirt Retro Back Tee 070423',
                'price' => 183200,
                'description' => '<p>Detail</p>
                <p>100% Produk Original 3Second</p>
                <p>Bahan: 100% Cotton</p>
                <p>Terdapat pilihan warna:</p> 
                <p>> Jet Black (Hitam)</p>
                
                <p>Miliki kaos dari 3Second ini untuk tampil terbaik dengan gaya yang classic!</p>
                <p>● Dibuat menggunakan bahan katun yang lembut, halus, perawatan yang mudah, serta menyerap keringat dengan baik</p> 
                <p>● Dapat di padu-padankan dengan fashion items yang lain karena desain yang minimalis</p>',
                'image' => 'Avril.jpg',
                'stock' => 36,
            ],
            [
                'name' => '3Second T-Shirt Retro Back Tee 070423',
                'price' => 183200,
                'description' => '<p>Detail</p>
                <p>100% Produk Original 3Second</p>
                <p>Bahan: 100% Cotton</p>
                <p>Terdapat pilihan warna:</p> 
                <p>> Jet Black (Hitam)</p>
                
                <p>Miliki kaos dari 3Second ini untuk tampil terbaik dengan gaya yang classic!</p>
                <p>● Dibuat menggunakan bahan katun yang lembut, halus, perawatan yang mudah, serta menyerap keringat dengan baik</p> 
                <p>● Dapat di padu-padankan dengan fashion items yang lain karena desain yang minimalis</p>',
                'image' => 'Avril.jpg',
                'stock' => 36,
            ],
        ];

        Product::insert($products);
    }
}
