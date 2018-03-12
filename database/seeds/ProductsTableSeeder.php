<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
            'code' => 'Z0001',
            'name' => 'Formal blue shirt',
            'brand_id' => 1,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 45.99,
            'image' => 'images/img/m1.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0002',
            'name' => 'Gabi Full Sleeve Sweatshirt',
            'brand_id' => 2,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 45.99,
            'image' => 'images/img/m2.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0003',
            'name' => 'Dark Blue Track Pants',
            'brand_id' => 1,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 80.99,
            'image' => 'images/img/m3.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0004',
            'name' => 'Round Neck Black T-Shirt',
            'brand_id' => 2,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 190.99,
            'image' => 'images/img/m4.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0005',
            'name' => 'Men\'s Black Jeans',
            'brand_id' => 1,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 60.99,
            'image' => 'images/img/m5.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0006',
            'name' => 'Analog Watch',
            'brand_id' => 1,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 160.99,
            'image' => 'images/img/m7.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0007',
            'name' => 'Reversible Belt',
            'brand_id' => 2,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 30.99,
            'image' => 'images/img/m6.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0008',
            'name' => 'Party Men\'s Blazer',
            'brand_id' => 2,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 260.99,
            'image' => 'images/img/m8.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0009',
            'name' => 'A-line Black Skirt',
            'brand_id' => 1,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 130.99,
            'image' => 'images/img/w1.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0010',
            'name' => 'Sleeveless Solid Blue Top',
            'brand_id' => 2,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 145.99,
            'image' => 'images/img/w2.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0011',
            'name' => 'Skinny Jeans',
            'brand_id' => 1,
            'category_id' => 1,
            'description' => str_random(40),
            'price' => 150.99,
            'image' => 'images/img/w3.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0012',
            'name' => 'Black Basic Shorts',
            'brand_id' => 2,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 120.99,
            'image' => 'images/img/w4.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0013',
            'name' => 'Pink Track Pants',
            'brand_id' => 1,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 220.99,
            'image' => 'images/img/w5.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0014',
            'name' => 'Analog Watch',
            'brand_id' => 1,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 320.99,
            'image' => 'images/img/w7.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0015',
            'name' => 'Ankle Length Socks',
            'brand_id' => 2,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 30.99,
            'image' => 'images/img/w6.jpg'
        ]);
        App\Product::create([
            'code' => 'Z0016',
            'name' => 'Reebok Women\'s Tights',
            'brand_id' => 2,
            'category_id' => 2,
            'description' => str_random(40),
            'price' => 130.99,
            'image' => 'images/img/w8.jpg'
        ]);
    }
}
