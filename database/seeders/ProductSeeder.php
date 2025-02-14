<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->truncate();

        DB::table('products')->insert([
            [
                'id' => 100,
                'name' => 'Black&Decker A7062 40 Parça Cırcırlı Tornavida Seti',
                'category_id' => 1,
                'price' => 120.75,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 101,
                'name' => 'Reko Mini Tamir Hassas Tornavida Seti 32\'li',
                'category_id' => 1,
                'price' => 49.50,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 102,
                'name' => 'Viko Karre Anahtar - Beyaz',
                'category_id' => 2,
                'price' => 11.28,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 103,
                'name' => 'Legrand Salbei Anahtar, Alüminyum',
                'category_id' => 2,
                'price' => 22.80,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 104,
                'name' => 'Schneider Asfora Beyaz Komütatör',
                'category_id' => 2,
                'price' => 12.95,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
