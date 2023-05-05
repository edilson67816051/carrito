<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'name' => 'Juan',
            'last_name' => 'Cardoso',
            'email' => 'juan@gmail.com',
            'estado'=> 0,
            'password' =>bcrypt('12345678'),
        ]);

        Cliente::create([
            'name' => 'Laya',
            'last_name' => 'Miranda',
            'email' => 'layamiranda@gmail.com',
            'estado'=> 0,
            'password' =>bcrypt('12345678'),
        ]);

        Cliente::create([
            'name' => 'Elmer',
            'last_name' => 'Nogale',
            'email' => 'elmercito@gmail.com',
            'estado'=> 0,
            'password' =>bcrypt('12345678'),
        ]);
        Cliente::create([
            'name' => 'Miguel angel',
            'last_name' => 'Cayoja',
            'email' => 'cayoja@gmail.com',
            'estado'=> 0,
            'password' =>bcrypt('12345678'),
        ]);
    }
}
