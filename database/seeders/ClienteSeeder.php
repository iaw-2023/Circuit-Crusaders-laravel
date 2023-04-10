<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('clientes')->insert([
            'apellido' => 'Martinez',
            'nombre' => 'Jorge',
            'dni' => '23424225',
            'email' => 'jorgexeneize@gmail.com',
            'fecha_nac' => '2000-09-09',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Gomez',
            'nombre' => 'Martin',
            'dni' => '25659692',
            'email' => 'martinsito@gmail.com',
            'fecha_nac' => '1989-02-09',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Uios',
            'nombre' => 'Agustin',
            'dni' => '32342425',
            'email' => 'agusuios@gmail.com',
            'fecha_nac' => '1970-09-08',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Garcia',
            'nombre' => 'Pablo',
            'dni' => '42342425',
            'email' => 'pablogarcia@gmail.com',
            'fecha_nac' => '1990-03-08',
        ]);
    }
}
