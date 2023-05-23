<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
            'id_estilo' => '1',
            'monto' => '20000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'GSX-S750',
            'anio' => '2018',
            'cilindrada' => '300cc.',
            'patente' => 'B 123 CCC',
            'id_estilo' => '3',
            'monto' => '750000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'CBR600RR',
            'anio' => '2021',
            'cilindrada' => '600cc.',
            'patente' => 'C 456 DDD',
            'id_estilo' => '5',
            'monto' => '850000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'Himalayan',
            'anio' => '2020',
            'cilindrada' => '350cc.',
            'patente' => 'D 789 EEE',
            'id_estilo' => '2',
            'monto' => '600000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KAWASAKI',
            'modelo' => 'Ninja 650',
            'anio' => '2019',
            'cilindrada' => '400cc.',
            'patente' => 'E 012 FFF',
            'id_estilo' => '6',
            'monto' => '700000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KTM',
            'modelo' => 'Duke 390',
            'anio' => '2020',
            'cilindrada' => '400cc.',
            'patente' => 'F 345 GGG',
            'id_estilo' => '4',
            'monto' => '650000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'BMW',
            'modelo' => 'S1000RR',
            'anio' => '2021',
            'cilindrada' => '500cc.',
            'patente' => 'G 678 HHH',
            'id_estilo' => '7',
            'monto' => '900000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Street Triple RS',
            'anio' => '2022',
            'cilindrada' => '600cc.',
            'patente' => 'H 901 III',
            'id_estilo' => '9',
            'monto' => '950000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'DUCATI',
            'modelo' => 'Panigale V4',
            'anio' => '2019',
            'cilindrada' => '600cc.',
            'patente' => 'J 234 JJJ',
            'id_estilo' => '8',
            'monto' => '1200000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'JAWA',
            'modelo' => 'Forty Two',
            'anio' => '2021',
            'cilindrada' => '650cc.',
            'patente' => 'K 567 KKK',
            'id_estilo' => '10',
            'monto' => '400000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'MV AGUSTA',
            'modelo' => 'F3 800',
            'anio' => '2022',
            'cilindrada' => '650cc.',
            'patente' => 'L 890 LLL',
            'id_estilo' => '11',
            'monto' => '1100000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'APRILIA',
            'modelo' => 'RSV4',
            'anio' => '2020',
            'cilindrada' => '700cc.',
            'patente' => 'M 123 MMM',
            'id_estilo' => '12',
            'monto' => '1050000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'MT-07',
            'anio' => '2017',
            'cilindrada' => '750cc.',
            'patente' => 'N 456 NNN',
            'id_estilo' => '3',
            'monto' => '550000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'V-Strom 650',
            'anio' => '2016',
            'cilindrada' => '800cc.',
            'patente' => 'P 789 PPP',
            'id_estilo' => '2',
            'monto' => '500000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'CB500X',
            'anio' => '2015',
            'cilindrada' => '900cc.',
            'patente' => 'R 012 RRR',
            'id_estilo' => '1',
            'monto' => '520000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'Classic 350',
            'anio' => '2020',
            'cilindrada' => '900cc.',
            'patente' => 'S 345 SSS',
            'id_estilo' => '5',
            'monto' => '470000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KAWASAKI',
            'modelo' => 'Z900',
            'anio' => '2019',
            'cilindrada' => '1100cc.',
            'patente' => 'T 678 TTT',
            'id_estilo' => '4',
            'monto' => '650000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'YZF-R6',
            'anio' => '2018',
            'cilindrada' => '1100cc.',
            'patente' => 'U 901 UUU',
            'id_estilo' => '6',
            'monto' => '720000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KTM',
            'modelo' => 'RC 390',
            'anio' => '2017',
            'cilindrada' => '1200cc.',
            'patente' => 'V 234 VVV',
            'id_estilo' => '3',
            'monto' => '480000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'BMW',
            'modelo' => 'R nineT',
            'anio' => '2020',
            'cilindrada' => '1200cc.',
            'patente' => 'Y 012 YYY',
            'id_estilo' => '10',
            'monto' => '850000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Bonneville T120',
            'anio' => '2019',
            'cilindrada' => '1500cc.',
            'patente' => 'X 890 XXX',
            'id_estilo' => '8',
            'monto' => '980000',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HARLEY-DAVIDSON',
            'modelo' => 'Street Glide',
            'anio' => '2021',
            'cilindrada' => '1500cc.',
            'patente' => 'W 567 WWW',
            'id_estilo' => '9',
            'monto' => '1300000',
        ]);        
    }
}
