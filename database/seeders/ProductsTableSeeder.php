<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 1299990,
            'shipping_cost' => 2990,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'MacBook_Pro.jpg'
        ]);

        Product::create([
            'name' => 'Dell G3 Gamer',
            'slug' => 'g3gamer',
            'details' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'price' => 899990,
            'shipping_cost' => 2990,
            'description' => 'Dell G3 Gamer',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'DellG3_Gamer.jpg'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 599990,
            'shipping_cost' => 2990,
            'description' => 'iPhone 11 Pro',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'iPhone11Pro.png'
        ]);

        Product::create([
            'name' => 'Razer Overwatch Headset',
            'slug' => 'razer',
            'details' => '6.1 pulgadas, 64GB 4GB RAM',
            'price' => 99990,
            'shipping_cost' => 2990,
            'description' => 'Razer Overwatch Headset',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'OverwatchHS.jpg'
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'details' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'price' => 329990,
            'shipping_cost' => 2990,
            'description' => 'Samsung LED TV',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'Samsung.jpg'
        ]);

        Product::create([
            'name' => 'Samsung Camara Digital',
            'slug' => 'samsung-mv800',
            'details' => '16.1MP, 5x Optical Zoom',
            'price' => 110990,
            'shipping_cost' => 2990,
            'description' => 'Samsung Digital Camera',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'Camara.jpg'
        ]);

        Product::create([
            'name' => 'iPhone 13 Pro Max',
            'slug' => 'iphone-13-pro-max',
            'details' => '5.5 pulgadas, 32GB 4GB RAM',
            'price' => 1200000,
            'shipping_cost' => 2990,
            'description' => 'iPhone 13 Pro Max',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'iPhone13PM.jpg'
        ]);
    }
}
