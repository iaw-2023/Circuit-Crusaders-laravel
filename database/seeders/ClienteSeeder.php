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
            'dni' => '2342425',
            'email' => 'jorgexeneize@gmail.com',
            'fecha_nac' => '2000-09-09',
        ]);
    }
}
