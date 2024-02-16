<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Faker\Factory as Faker;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        for($i = 0; $i <= 10; $i++ ){

        $faker = Faker::create();
        $usuario = new Usuario();
        $usuario->nombre = $faker->firstName;
        $usuario->email = $faker->email;
        $usuario->created_at= date('Y-m-d H:m:s');
        $usuario->updated_at = date('Y-m-d H:m:s');
        $usuario->save();
        //
    }
    }
}
