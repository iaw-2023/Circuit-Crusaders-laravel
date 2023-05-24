<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2016-09-09',
            'id_cliente' => 1,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2007-02-07',
            'id_cliente' => 4,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2019-06-07',
            'id_cliente' => 4,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2015-06-07',
            'id_cliente' => 2,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2013-08-01',
            'id_cliente' => 3,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2022-11-15',
            'id_cliente' => 5,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2018-05-20',
            'id_cliente' => 6,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2020-09-30',
            'id_cliente' => 7,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2017-12-25',
            'id_cliente' => 8,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2019-04-10',
            'id_cliente' => 9,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2021-07-05',
            'id_cliente' => 10,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2018-03-12',
            'id_cliente' => 11,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2020-08-18',
            'id_cliente' => 12,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2016-06-01',
            'id_cliente' => 13,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2019-10-28',
            'id_cliente' => 14,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2022-05-10',
            'id_cliente' => 15,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2023-01-15',
            'id_cliente' => 16,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2021-11-20',
            'id_cliente' => 17,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2022-03-05',
            'id_cliente' => 18,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2023-04-18',
            'id_cliente' => 19,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2022-12-10',
            'id_cliente' => 1,
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2023-06-01',
            'id_cliente' => '16',
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2022-04-15',
            'id_cliente' => '17',
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2023-07-20',
            'id_cliente' => '18',
        ]);
        
        DB::table('pedidos')->insert([
            'fecha_pedido' => '2022-08-05',
            'id_cliente' => '19',
        ]);
        
    }
}


