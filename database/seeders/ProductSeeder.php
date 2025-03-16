<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 49.99,
                'stock' => 100,
                'category_id' => 38,
            ],

            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 99.99,
                'stock' => 100,
                'category_id' => 39,
            ],

            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 149.99,
                'stock' => 100,
                'category_id' => 40,
            ],

            [
                'name' => 'Product 4',
                'description' => 'Description for product 4',
                'price' => 199.99,
                'stock' => 100,
                'category_id' => 41,
            ],

            [
                'name' => 'Product 5',
                'description' => 'Description for product 5',
                'price' => 249.99,
                'stock' => 100,
                'category_id' => 42,
            ],

            [
                'name' => 'Product 6',
                'description' => 'Description for product 6',
                'price' => 299.99,
                'stock' => 100,
                'category_id' => 43,
            ],

            [
                'name' => 'Product 7',
                'description' => 'Description for product 7',
                'price' => 349.99,
                'stock' => 100,
                'category_id' => 44,
            ],

            [
                'name' => 'Product 8',
                'description' => 'Description for product 8',
                'price' => 399.99,
                'stock' => 100,
                'category_id' => 44,
            ],

            [
                'name' => 'Product 9',
                'description' => 'Description for product 9',
                'price' => 449.99,
                'stock' => 100,
                'category_id' => 44,
            ],

            [
                'name' => 'Product 10',
                'description' => 'Description for product 10',
                'price' => 499.99,
                'stock' => 100,
                'category_id' => 44,
            ],

            


        ]);
    }
}

