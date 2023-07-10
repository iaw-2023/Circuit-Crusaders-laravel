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
            'name' => 'Jorge Martinez',
            'email' => 'jorgexeneize@gmail.com',
            'password' => 'jorgemartinez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Martin Gomez',
            'email' => 'martinsito@gmail.com',
            'password' => 'martingomez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Agustin Uios',
            'email' => 'agusuios@gmail.com',
            'password' => 'agustinuios',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Pablo Garcia',
            'email' => 'pablogarcia@gmail.com',
            'password' => 'pablogarcia',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Maria Lopez',
            'email' => 'marialopez@gmail.com',
            'password' => 'marialopez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Luis Fernandez',
            'email' => 'luisfernandez@gmail.com',
            'password' => 'luisfernandez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Carolina Rodriguez',
            'email' => 'carolinarodriguez@gmail.com',
            'password' => 'carolinarodriguez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Juan Gonzalez',
            'email' => 'juangonzalez@gmail.com',
            'password' => 'juangonzalez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Laura Perez',
            'email' => 'lauraperez@gmail.com',
            'password' => 'lauraperez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Ana Ramirez',
            'email' => 'anaramirez@gmail.com',
            'password' => 'anaramirez',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Carlos Silva',
            'email' => 'carlossilva@gmail.com',
            'password' => 'carlossilva',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Sofia Torres',
            'email' => 'sofiatorres@gmail.com',
            'password' => 'sofiatorres',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Diego Rojas',
            'email' => 'diegorojas@gmail.com',
            'password' => 'diegorojas',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Julia Santos',
            'email' => 'juliasantos@gmail.com',
            'password' => 'juliasantos',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Andres Morales',
            'email' => 'andresmorales@gmail.com',
            'password' => 'andresmorales',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Valentina Cruz',
            'email' => 'valentinacruz@gmail.com',
            'password' => 'valentinacruz',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Felipe Ortega',
            'email' => 'felipeortega@gmail.com',
            'password' => 'felipeortega',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Camila Vargas',
            'email' => 'camilavargas@gmail.com',
            'password' => 'camilavargas',
        ]);
        
        DB::table('clientes')->insert([
            'name' => 'Juan Mendoza',
            'email' => 'juanmendoza@gmail.com',
            'password' => 'juanmendoza',
        ]);
                
    }
}
