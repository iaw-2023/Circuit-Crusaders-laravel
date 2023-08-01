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
        $image = file_get_contents('public/seed_images/street/fz.jpg');
        $image = base64_encode($image);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'FZ',
            'anio' => '2022',
            'cilindrada' => '150cc.',
            'patente' => 'A 897 AAA',
            'id_estilo' => '1',
            'monto' => '1150000',
            'foto' => $image
        ]);

        $image = file_get_contents('public/seed_images/street/GSX-S750.jpeg');
        $image = base64_encode($image);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'GSX-S750',
            'anio' => '2018',
            'cilindrada' => '300cc.',
            'patente' => 'B 123 CCC',
            'id_estilo' => '1',
            'monto' => '750000',
            'foto' => $image
        ]);

        $image = file_get_contents('public/seed_images/sport/CBR600.webp');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'CBR600RR',
            'anio' => '2021',
            'cilindrada' => '600cc.',
            'patente' => 'C 456 DDD',
            'id_estilo' => '7',
            'monto' => '850000',
            'foto' => $image
        ]);

        $image = file_get_contents('public/seed_images/off-road/himalayan.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'Himalayan',
            'anio' => '2020',
            'cilindrada' => '350cc.',
            'patente' => 'D 789 EEE',
            'id_estilo' => '8',
            'monto' => '600000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/sport/ninja650.jpg');
        $image = base64_encode($image);

        DB::table('motos')->insert([
            'marca' => 'KAWASAKI',
            'modelo' => 'Ninja 650',
            'anio' => '2019',
            'cilindrada' => '400cc.',
            'patente' => 'E 012 FFF',
            'id_estilo' => '7',
            'monto' => '700000',
            'foto' => $image
        ]);

        $image = file_get_contents('public/seed_images/brat/duke390.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'KTM',
            'modelo' => 'Duke 390',
            'anio' => '2020',
            'cilindrada' => '400cc.',
            'patente' => 'F 345 GGG',
            'id_estilo' => '4',
            'monto' => '650000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/sport/S1000RR.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'BMW',
            'modelo' => 'S1000RR',
            'anio' => '2021',
            'cilindrada' => '500cc.',
            'patente' => 'G 678 HHH',
            'id_estilo' => '7',
            'monto' => '900000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/off-road/tripleRS.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Street Triple RS',
            'anio' => '2022',
            'cilindrada' => '600cc.',
            'patente' => 'H 901 III',
            'id_estilo' => '8',
            'monto' => '950000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/off-road/tiger1200.webp');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Tiger 1200 Rally',
            'anio' => '2019',
            'cilindrada' => '600cc.',
            'patente' => 'J 234 JJJ',
            'id_estilo' => '8',
            'monto' => '1200000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/brat/fortytwo.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'JAWA',
            'modelo' => 'Forty Two',
            'anio' => '2021',
            'cilindrada' => '650cc.',
            'patente' => 'K 567 KKK',
            'id_estilo' => '4',
            'monto' => '400000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/sport/f3.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'MV AGUSTA',
            'modelo' => 'F3 800',
            'anio' => '2022',
            'cilindrada' => '650cc.',
            'patente' => 'L 890 LLL',
            'id_estilo' => '7',
            'monto' => '1100000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/sport_touring/RSV4.webp');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'APRILIA',
            'modelo' => 'RSV4',
            'anio' => '2020',
            'cilindrada' => '700cc.',
            'patente' => 'M 123 MMM',
            'id_estilo' => '12',
            'monto' => '1050000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/street/MT-07.jpg');
        $image = base64_encode($image);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'MT-07',
            'anio' => '2017',
            'cilindrada' => '750cc.',
            'patente' => 'N 456 NNN',
            'id_estilo' => '1',
            'monto' => '550000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/off-road/V-Strom650.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'V-Strom 650',
            'anio' => '2016',
            'cilindrada' => '800cc.',
            'patente' => 'P 789 PPP',
            'id_estilo' => '8',
            'monto' => '500000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/off-road/CB500X.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'CB500X',
            'anio' => '2015',
            'cilindrada' => '900cc.',
            'patente' => 'R 012 RRR',
            'id_estilo' => '8',
            'monto' => '520000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/brat/Classic350.webp');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'Classic 350',
            'anio' => '2020',
            'cilindrada' => '900cc.',
            'patente' => 'S 345 SSS',
            'id_estilo' => '4',
            'monto' => '470000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/brat/Z900.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'KAWASAKI',
            'modelo' => 'Z900',
            'anio' => '2019',
            'cilindrada' => '1100cc.',
            'patente' => 'T 678 TTT',
            'id_estilo' => '4',
            'monto' => '650000',
            'foto' => $image
        ]);

        $image = file_get_contents('public/seed_images/tracker/YZF-R6.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'YZF-R6',
            'anio' => '2018',
            'cilindrada' => '1100cc.',
            'patente' => 'U 901 UUU',
            'id_estilo' => '6',
            'monto' => '720000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/cafe_racer/RC390.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'KTM',
            'modelo' => 'RC 390',
            'anio' => '2017',
            'cilindrada' => '1200cc.',
            'patente' => 'V 234 VVV',
            'id_estilo' => '3',
            'monto' => '480000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/scooter/Agility.avif');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'KYMCO',
            'modelo' => 'Agility',
            'anio' => '2020',
            'cilindrada' => '150cc.',
            'patente' => 'Y 012 YYY',
            'id_estilo' => '10',
            'monto' => '850000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/tracker/BonnevilleT120.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Bonneville T120',
            'anio' => '2019',
            'cilindrada' => '1500cc.',
            'patente' => 'X 890 XXX',
            'id_estilo' => '6',
            'monto' => '980000',
            'foto' => $image
        ]);
        $image = file_get_contents('public/seed_images/touring/StreetGlide.jpg');
        $image = base64_encode($image);
        DB::table('motos')->insert([
            'marca' => 'HARLEY-DAVIDSON',
            'modelo' => 'Street Glide',
            'anio' => '2021',
            'cilindrada' => '1500cc.',
            'patente' => 'W 567 WWW',
            'id_estilo' => '9',
            'monto' => '1300000',
            'foto' => $image
        ]);        
    }
}
