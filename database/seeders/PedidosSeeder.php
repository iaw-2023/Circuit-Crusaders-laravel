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
            'id_cliente'=> '1',
        ]);

        DB::table('pedidos')->insert([  
            'fecha_pedido' => '2007-02-07',
            'id_cliente'=> '4',
        ]);

        DB::table('pedidos')->insert([  
            'fecha_pedido' => '2019-06-07',
            'id_cliente'=> '4',
        ]);

        DB::table('pedidos')->insert([  
            'fecha_pedido' => '2015-06-07',
            'id_cliente'=> '2',
        ]);

        DB::table('pedidos')->insert([  
            'fecha_pedido' => '2013-08-01',
            'id_cliente'=> '3',
        ]);
    }
}
