<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalles')->insert([
            'id_pedido' => 13,
            'id_moto' => 6,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 14,
            'id_moto' => 3,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 15,
            'id_moto' => 7,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 16,
            'id_moto' => 4,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 17,
            'id_moto' => 9,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 18,
            'id_moto' => 5,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 19,
            'id_moto' => 2,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 20,
            'id_moto' => 8,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 21,
            'id_moto' => 10,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 22,
            'id_moto' => 1,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 23,
            'id_moto' => 6,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 24,
            'id_moto' => 3,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 25,
            'id_moto' => 7,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 1,
            'id_moto' => 4,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 2,
            'id_moto' => 9,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 3,
            'id_moto' => 5,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 4,
            'id_moto' => 2,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 5,
            'id_moto' => 8,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 6,
            'id_moto' => 10,
        ]);
        
        DB::table('detalles')->insert([
            'id_pedido' => 7,
            'id_moto' => 1,
        ]);


    }
}
