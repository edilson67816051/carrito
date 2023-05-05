<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Zapatilla Nike',
            'slug' => 'nike plus',
            'details' => 'T',
            'price' => 180,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '1.jpg'
        ]);

        Product::create([
            'name' => 'Zapatilla Mercurial',
            'slug' => 'nike plus1',
            'details' => 'T',
            'price' => 250,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '2.jpg'
        ]);

        Product::create([
            'name' => 'Zapatilla Adidas 2023',
            'slug' => 'nike plus2',
            'details' => 'T',
            'price' => 170,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '3.jpg'
        ]);

        Product::create([
            'name' => 'Zapatilla Irun 2023',
            'slug' => 'nike plus2023',
            'details' => 'T',
            'price' => 380,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '4.jpg'
        ]);

        Product::create([
            'name' => 'Pantunfla plus',
            'slug' => 'nike plus4',
            'details' => 'T',
            'price' => 180,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '5.jpg'
        ]);

        Product::create([
            'name' => 'Zapatilla Ipamela',
            'slug' => 'nike plus11',
            'details' => 'T',
            'price' => 90,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '6.jpg'
        ]);

        Product::create([
            'name' => 'Zapatilla Irun 2022',
            'slug' => 'nikes plus5',
            'details' => 'T',
            'price' => 190,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '7.jpg'
        ]);
        Product::create([
            'name' => 'Zapatilla Irun',
            'slug' => 'Irun plus',
            'details' => 'T',
            'price' => 290,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 3,
            'brand_id' => 1,
            'image_path' => '8.jpg'
        ]);

    }
}
