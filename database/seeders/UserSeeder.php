<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('12345678'),
            'cliente'=>'0',
            'estado'=>'1',
        ]);

        User::create([
            'name'=>'Juan',
            'apellido_p'=>'Montaño',
            'apellido_m'=>'Miranda',
            'name'=>'Juan',
            'email'=>'j@gmail.com',
            'password'=> bcrypt('12345678'),
            'celular'=>'67816051',
            'cliente'=>'1',
            'estado'=>'1',
        ]);
    }
}
