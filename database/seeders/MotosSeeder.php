<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'FZ',
            'anio' => '2022',
            'cilindrada' => '150cc.',
            'patente' => 'A 897 AAA',
            'id_detalle' => '1',
            'id_estilo' => '1',
        ]);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'YBR ED',
            'anio' => '2018',
            'cilindrada' => '125cc.',
            'patente' => 'C 087 AHG',
            'id_detalle' => '3',
            'id_estilo' => '1',
        ]);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'GN - H',
            'anio' => '2020',
            'cilindrada' => '125cc.',
            'patente' => 'A 004 FDA',
            'id_detalle' => '5',
            'id_estilo' => '4',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'TWISTTER',
            'anio' => '2022',
            'cilindrada' => '250cc.',
            'patente' => 'D 897 THW',
            'id_detalle' => '5',
            'id_estilo' => '3',
        ]);

        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'CONTINENTAL GT',
            'anio' => '2023',
            'cilindrada' => '650cc.',
            'patente' => 'G 999 AAA',
            'id_detalle' => '4',
            'id_estilo' => '3',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'XR (TORNADO)',
            'anio' => '2022',
            'cilindrada' => '250cc.',
            'patente' => 'A 111 AAA',
            'id_detalle' => '2',
            'id_estilo' => '2',
        ]);

        DB::table('motos')->insert([
            'marca' => 'JAWA',
            'modelo' => 'DYTONA',
            'anio' => '2015',
            'cilindrada' => '320cc.',
            'patente' => 'H 456 TRS',
            'id_detalle' => '2',
            'id_estilo' => '5',
        ]);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'FAZER',
            'anio' => '2022',
            'cilindrada' => '250cc.',
            'patente' => 'L 192 MHT',
            'id_detalle' => '1',
            'id_estilo' => '1',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'WAVE',
            'anio' => '2022',
            'cilindrada' => '125cc.',
            'patente' => 'A 827 AFA',
            'id_detalle' => '1',
            'id_estilo' => '1',
        ]);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'XTZ',
            'anio' => '2022',
            'cilindrada' => '125cc.',
            'patente' => 'A 897 OPA',
            'id_detalle' => '1',
            'id_estilo' => '2',
        ]);
    }
}
