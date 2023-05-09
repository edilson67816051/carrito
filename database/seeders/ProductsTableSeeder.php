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
            'stock' => 28,
            'oferta' => 0,
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
            'stock' => 28,
            'oferta' => 0,
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
            'stock' => 28,
            'oferta' => 0,
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
            'stock' => 28,
            'oferta' => 1,
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
            'stock' => 28,
            'oferta' => 0,
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
            'stock' => 28,
            'oferta' => 0,
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
            'stock' => 28,
            'oferta' => 1,
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
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '8.jpg'
        ]);

        #======================datos de las ropas=========================================

        Product::create([
            'name' => 'Blusa de vestir',
            'slug' => 'Blusa de vestir 1',
            'details' => 'T',
            'price' => 50,
            'shipping_cost' => 10,
            'description' => 'Una blusa muy buena',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '11.jpg'
        ]);

        Product::create([
            'name' => 'Blusa de vestir gris',
            'slug' => 'Blusa de vestir gris nueva',
            'details' => 'T',
            'price' => 80,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '12.jpg'
        ]);

        Product::create([
            'name' => 'Blusa de vestir cortos',
            'slug' => 'nike plus21',
            'details' => 'T',
            'price' => 60,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '13.jpg'
        ]);

        Product::create([
            'name' => 'Vestido elegante',
            'slug' => 'vestido elegante 2023',
            'details' => 'T',
            'price' => 160,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 0,
            'oferta' => 1,
            'image_path' => '14.jpg'
        ]);

        Product::create([
            'name' => 'Camisa con mangas anchas',
            'slug' => 'camisa',
            'details' => 'T',
            'price' => 35,
            'shipping_cost' => 10,
            'description' => 'Camisa con mangas anchas comoda',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '15.jpg'
        ]);

        Product::create([
            'name' => 'blusa dorada comoda',
            'slug' => 'dorada',
            'details' => 'T',
            'price' => 45,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '16.jpg'
        ]);

        Product::create([
            'name' => 'Blusa Negro con puntos blancos',
            'slug' => 'negra',
            'details' => 'T',
            'price' => 65,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 1,
            'image_path' => '17.jpg'
        ]);
        Product::create([
            'name' => 'Blusa rosa corta',
            'slug' => 'rosa',
            'details' => 'T',
            'price' => 55,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '18.jpg'
        ]);
        Product::create([
            'name' => 'Camisa gris ancha',
            'slug' => 'Camisa gris ancha comoda',
            'details' => 'T',
            'price' => 55,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 0,
            'image_path' => '19.jpg'
        ]);
        Product::create([
            'name' => 'Blusa celeste comoda',
            'slug' => 'Blusa comoda celeste',
            'details' => 'T',
            'price' => 55,
            'shipping_cost' => 10,
            'description' => 'MackBook Pro',
            'category_id' => 1,
            'stock' => 28,
            'oferta' => 1,
            'image_path' => '20.jpg'
        ]);

    }
}
