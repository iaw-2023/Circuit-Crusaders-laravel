<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstilosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estilos')->insert([
            'nombre' => 'STREET',
            'descripcion' => 'Motos diseñadas para transitar por rutas asfaltadas, una carcateristica es que sus llantas son lisas. Los motores son generalmente de 125 cc en adelante. La mayoría de motos denominadas “street” pueden alcanzar velocidades hasta 160 km/h y algunas de mayor cilindraje llegan a los 200 km/h.',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'ENDURO',
            'descripcion' => 'Las motocicletas enduro se caracterizan por tener suspensión de largo recorrido para absorber los baches y obstáculos del terreno, así como neumáticos con tacos para brindar tracción en terrenos sueltos. Además, su altura de asiento elevada y su diseño generalmente liviano las hacen más fáciles de manejar en terrenos difíciles.',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'CAFE RACER',
            'descripcion' => 'Las motocicletas Cafe Racer a menudo presentan un manillar bajo y estrecho, asiento de una sola pieza, una posición de conducción inclinada hacia adelante y una eliminación de elementos innecesarios como guardabarros y faros excesivamente grandes. El estilo Cafe Racer también se caracteriza por su atención al detalle, con la incorporación de piezas y acabados de alta calidad y diseño elegante, así como una paleta de colores simple y elegante.',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'BRAT',
            'descripcion' => 'Las motocicletas Brat se modifican con un enfoque en la funcionalidad, la simplicidad y la comodidad. Los rasgos distintivos del estilo Brat incluyen un asiento plano y acolchado, un chasis recortado y un manillar más alto y ancho. A menudo se eliminan elementos innecesarios como los guardabarros y los faros grandes, y se reemplazan con piezas más pequeñas y minimalistas. También se puede ajustar la altura de la suspensión y cambiar los neumáticos para dar a la motocicleta una apariencia más robusta y agresiva.',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'CRUISER',
            'descripcion' => 'Estas motos Cruiser tienen un estilo derivado de las ya legendarias y épicas Harley Davidson e Indian. Estas motocicletas definieron un estilo propio y característico propulsado por un motor de dos cilindros en V. Esta disposición y su ángulo son los que le brindan ese sonido tan especial que ha hecho amantes de las motocicletas. Este sonido que hasta Harley Davidson lo ha patentado. Aunque hay otras configuraciones de motor de Cruiser con distintos tipos de desplazamiento de motor. Los motores de Cruiser están configurados para tener un bajo caballaje y un gran torque, haciendo que su motor tenga más fuerza a menor cantidad de revoluciones. ',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'TRACKER',
            'descripcion' => 'Las motocicletas Tracker se caracterizan por un aspecto minimalista y una construcción sencilla. Suelen tener un asiento plano y bajo, manillares anchos y elevados, y neumáticos de tacos gruesos que brindan una mayor tracción en terrenos no pavimentados. También se eliminan muchos elementos innecesarios, como guardabarros y faros grandes, para reducir el peso y la complejidad de la motocicleta.',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'SPORT',
            'descripcion' => 'Motos diseñadas para alto rendimiento y velocidad. Tienen un aspecto aerodinámico y suelen ser ligeras. Son ideales para carreras y emocionantes paseos en carreteras.',
        ]);
        
        DB::table('estilos')->insert([
            'nombre' => 'OFF-ROAD',
            'descripcion' => 'Motos diseñadas para el uso fuera de carretera. Tienen suspensión de largo recorrido, neumáticos de tacos y mayor altura libre al suelo. Son ideales para terrenos irregulares y aventuras todoterreno.',
        ]);
        
        DB::table('estilos')->insert([
            'nombre' => 'TOURING',
            'descripcion' => 'Motos de gran tamaño y equipamiento diseñadas para viajes largos y cómodos. Tienen carenado, parabrisas, maletas y asientos ergonómicos. Son perfectas para recorrer largas distancias con comodidad y capacidad de carga.',
        ]);
        
        DB::table('estilos')->insert([
            'nombre' => 'SCOOTER',
            'descripcion' => 'Motos de pequeño tamaño y bajo consumo de combustible. Tienen una plataforma plana para los pies y transmisión automática. Son ideales para desplazamientos urbanos y cortas distancias.',
        ]);

        DB::table('estilos')->insert([
            'nombre' => 'CHOPPER',
            'descripcion' => 'Las motocicletas Chopper se caracterizan por tener un estilo personalizado con un marco alargado y horquillas extendidas. Suelen tener un manillar alto y asientos individualizados. El estilo Chopper se enfoca en la estética y la apariencia única de la motocicleta.',
        ]);
            
        DB::table('estilos')->insert([
            'nombre' => 'SPORT TOURING',
            'descripcion' => 'Las motocicletas Sport Touring combinan características de motocicletas deportivas y de turismo. Son ágiles y potentes como las motos deportivas, pero también están diseñadas para ofrecer comodidad en viajes largos. Estas motos suelen tener carenado, manillar ergonómico y asientos cómodos.',
        ]);
        
    }
}
