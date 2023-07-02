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
            'monto' => '1150000',
            'foto_url' => 'https://www.deruedas.com.ar/images/vehiculos/5354_im.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'GSX-S750',
            'anio' => '2018',
            'cilindrada' => '300cc.',
            'patente' => 'B 123 CCC',
            'id_estilo' => '1',
            'monto' => '750000',
            'foto_url' => 'https://motoblog.com/wp-content/uploads/2022/09/Suzuki-GSX-S750-16.jpeg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'CBR600RR',
            'anio' => '2021',
            'cilindrada' => '600cc.',
            'patente' => 'C 456 DDD',
            'id_estilo' => '7',
            'monto' => '850000',
            'foto_url' => 'https://lamoto.com.ar/wp-content/uploads/2020/08/HONDA-CBR600-2.jpeg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'Himalayan',
            'anio' => '2020',
            'cilindrada' => '350cc.',
            'patente' => 'D 789 EEE',
            'id_estilo' => '8',
            'monto' => '600000',
            'foto_url' => 'https://royalenfieldar.com/wp-content/uploads/2022/08/AL55396-1.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KAWASAKI',
            'modelo' => 'Ninja 650',
            'anio' => '2019',
            'cilindrada' => '400cc.',
            'patente' => 'E 012 FFF',
            'id_estilo' => '7',
            'monto' => '700000',
            'foto_url' => 'https://www.formulamoto.es/wp-content/uploads/2021/05/prueba-kawasaki-ninja-40g-1200x800.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KTM',
            'modelo' => 'Duke 390',
            'anio' => '2020',
            'cilindrada' => '400cc.',
            'patente' => 'F 345 GGG',
            'id_estilo' => '4',
            'monto' => '650000',
            'foto_url' => 'https://lamoto.com.ar/wp-content/uploads/2023/05/KTM-390-Duke-Cafe-Racer-lateral.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'BMW',
            'modelo' => 'S1000RR',
            'anio' => '2021',
            'cilindrada' => '500cc.',
            'patente' => 'G 678 HHH',
            'id_estilo' => '7',
            'monto' => '900000',
            'foto_url' => 'https://lamoto.com.ar/wp-content/uploads/2022/09/BMW-S1000-RR-2023-lateral.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Street Triple RS',
            'anio' => '2022',
            'cilindrada' => '600cc.',
            'patente' => 'H 901 III',
            'id_estilo' => '8',
            'monto' => '950000',
            'foto_url' => 'https://lamoto.com.ar/wp-content/uploads/2022/11/Triumph-Street-Triple-2023-RS-1.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Tiger 1200 Rally',
            'anio' => '2019',
            'cilindrada' => '600cc.',
            'patente' => 'J 234 JJJ',
            'id_estilo' => '8',
            'monto' => '1200000',
            'foto_url' => 'https://i0.wp.com/gripriders.com/wp-content/uploads/2022/03/Tiger-1200-2022-FAMILY-1.jpeg?ssl=1',
        ]);

        DB::table('motos')->insert([
            'marca' => 'JAWA',
            'modelo' => 'Forty Two',
            'anio' => '2021',
            'cilindrada' => '650cc.',
            'patente' => 'K 567 KKK',
            'id_estilo' => '4',
            'monto' => '400000',
            'foto_url' => 'https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cdni.autocarindia.com/Reviews/2021-Jawa-Forty-Two-side.jpg&c=0',
        ]);

        DB::table('motos')->insert([
            'marca' => 'MV AGUSTA',
            'modelo' => 'F3 800',
            'anio' => '2022',
            'cilindrada' => '650cc.',
            'patente' => 'L 890 LLL',
            'id_estilo' => '7',
            'monto' => '1100000',
            'foto_url' => 'https://cdp.azureedge.net/products-private/prod/824d9872-d284-4e06-bcdb-ce44f3d190ec/fccc0674-afed-4072-922d-a7fc00cdd653/00000000-0000-0000-0000-000000000000/db56192f-97d3-4254-ae2c-ab4f007c4e75/6db8d22a-3ac5-445e-b7a6-ad0201406769/6000000001.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'APRILIA',
            'modelo' => 'RSV4',
            'anio' => '2020',
            'cilindrada' => '700cc.',
            'patente' => 'M 123 MMM',
            'id_estilo' => '12',
            'monto' => '1050000',
            'foto_url' => 'https://motos.espirituracer.com/archivos/2021/08/yamaha-fjr-1300as-2014-4.webp',
        ]);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'MT-07',
            'anio' => '2017',
            'cilindrada' => '750cc.',
            'patente' => 'N 456 NNN',
            'id_estilo' => '1',
            'monto' => '550000',
            'foto_url' => 'https://i.ytimg.com/vi/Hi04Mt0VFAo/maxresdefault.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'SUZUKI',
            'modelo' => 'V-Strom 650',
            'anio' => '2016',
            'cilindrada' => '800cc.',
            'patente' => 'P 789 PPP',
            'id_estilo' => '8',
            'monto' => '500000',
            'foto_url' => 'https://999motos.com.ar/wp-content/uploads/2022/06/DL650XAM1_action06-768x512-1.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HONDA',
            'modelo' => 'CB500X',
            'anio' => '2015',
            'cilindrada' => '900cc.',
            'patente' => 'R 012 RRR',
            'id_estilo' => '8',
            'monto' => '520000',
            'foto_url' => 'https://www.hondamotovalencia.es/wp-content/uploads/2021/09/HONDA_CB500X-5-2.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'ROYAL ENFIELD',
            'modelo' => 'Classic 350',
            'anio' => '2020',
            'cilindrada' => '900cc.',
            'patente' => 'S 345 SSS',
            'id_estilo' => '4',
            'monto' => '470000',
            'foto_url' => 'https://cdn.motor1.com/images/mgl/6ZKNME/s3/royal-enfield-argentina-lanzo-la-classic-350-en-autoclasica-2022.webp',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KAWASAKI',
            'modelo' => 'Z900',
            'anio' => '2019',
            'cilindrada' => '1100cc.',
            'patente' => 'T 678 TTT',
            'id_estilo' => '4',
            'monto' => '650000',
            'foto_url' => 'https://caferacerpasion.com/wp-content/uploads/2015/09/triumph-bonneville-brat-style-vida-bandida-motocicletas-1.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'YAMAHA',
            'modelo' => 'YZF-R6',
            'anio' => '2018',
            'cilindrada' => '1100cc.',
            'patente' => 'U 901 UUU',
            'id_estilo' => '6',
            'monto' => '720000',
            'foto_url' => 'https://donkeymotorbikes.com/wp-content/uploads/2021/10/Yamaha-Virago-Street-Tracker.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KTM',
            'modelo' => 'RC 390',
            'anio' => '2017',
            'cilindrada' => '1200cc.',
            'patente' => 'V 234 VVV',
            'id_estilo' => '3',
            'monto' => '480000',
            'foto_url' => 'https://www.motouutiset.fi/get_img?ImageId=27161&ImageWidth=957&ImageHeight=718',
        ]);

        DB::table('motos')->insert([
            'marca' => 'KYMCO',
            'modelo' => 'Agility',
            'anio' => '2020',
            'cilindrada' => '150cc.',
            'patente' => 'Y 012 YYY',
            'id_estilo' => '10',
            'monto' => '850000',
            'foto_url' => 'https://img.freepik.com/fotos-premium/moto-scooter-retro-calle-estilo-urbano_613910-15469.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'TRIUMPH',
            'modelo' => 'Bonneville T120',
            'anio' => '2019',
            'cilindrada' => '1500cc.',
            'patente' => 'X 890 XXX',
            'id_estilo' => '6',
            'monto' => '980000',
            'foto_url' => 'https://motos0km.com.ar/models/triumph-bonneville-t120-black-gallery-120181121173624.jpg',
        ]);

        DB::table('motos')->insert([
            'marca' => 'HARLEY-DAVIDSON',
            'modelo' => 'Street Glide',
            'anio' => '2021',
            'cilindrada' => '1500cc.',
            'patente' => 'W 567 WWW',
            'id_estilo' => '9',
            'monto' => '1300000',
            'foto_url' => 'https://fotos.perfil.com/2019/04/03/trim/1280/720/harley-davidson-street-glide-special-655646.jpg',
        ]);        
    }
}
