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
            'monto' => '100000',
            'id_pedido' => '1',
            'id_moto' => '1',

        ]);

        DB::table('detalles')->insert([
            'monto' => '500000',
            'id_pedido' => '3',
            'id_moto' => '4',

        ]);

        DB::table('detalles')->insert([
            'monto' => '200000',
            'id_pedido' => '3',
            'id_moto' => '2',

        ]);

        DB::table('detalles')->insert([
            'monto' => '123000',
            'id_pedido' => '3',
            'id_moto' => '6',

        ]);

        DB::table('detalles')->insert([
            'monto' => '1000000',
            'id_pedido' => '2',
            'id_moto' => '3',

        ]);

        DB::table('detalles')->insert([
            'monto' => '20000',
            'id_pedido' => '5',
            'id_moto' => '5',

        ]);

        DB::table('detalles')->insert([
            'monto' => '140000',
            'id_pedido' => '4',
            'id_moto' => '10',

        ]);
        DB::table('detalles')->insert([
            'monto' => '10000',
            'id_pedido' => '3',
            'id_moto' => '9',

        ]);
        DB::table('detalles')->insert([
            'monto' => '140000',
            'id_pedido' => '5',
            'id_moto' => '8',

        ]);
        DB::table('detalles')->insert([
            'monto' => '140000',
            'id_pedido' => '5',
            'id_moto' => '7',

        ]);

    }
}
