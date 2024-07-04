<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->count(150)->create();
        // Product::create([
        //     'name' => 'Product 1',
        //     'short_description'=> 'Lorem ipsun dolor sit amet',
        //     'description' => 'lorem ipsum dolor sit amet consectetur adipiscing elit',
        //     'price' => 100
        // ]);
        // Product::create([
        //     'name' => 'Product 2',
        //     'short_description'=> 'Lorem ipsun dolor sit amet',
        //     'description' => 'lorem ipsum dolor sit amet consectetur adipiscing elit',
        //     'price' => 11
        // ]);
        // Product::create([
        //     'name' => 'Product 3',
        //     'short_description'=> 'Lorem ipsun dolor sit amet',
        //     'description' => 'lorem ipsum dolor sit amet consectetur adipiscing elit',
        //     'price' => 150
        // ]);
    }
}
