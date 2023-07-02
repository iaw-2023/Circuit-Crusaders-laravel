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
            'apellido' => 'Martinez',
            'nombre' => 'Jorge',
            'dni' => '23424225',
            'email' => 'jorgexeneize@gmail.com',
            'fecha_nac' => '2000-09-09',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Gomez',
            'nombre' => 'Martin',
            'dni' => '25659692',
            'email' => 'martinsito@gmail.com',
            'fecha_nac' => '1989-02-09',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Uios',
            'nombre' => 'Agustin',
            'dni' => '32342425',
            'email' => 'agusuios@gmail.com',
            'fecha_nac' => '1970-09-08',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Garcia',
            'nombre' => 'Pablo',
            'dni' => '42342425',
            'email' => 'pablogarcia@gmail.com',
            'fecha_nac' => '1990-03-08',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Lopez',
            'nombre' => 'Maria',
            'dni' => '32547896',
            'email' => 'marialopez@gmail.com',
            'fecha_nac' => '1985-07-15',
        ]);
        
        DB::table('clientes')->insert([
            'apellido' => 'Fernandez',
            'nombre' => 'Luis',
            'dni' => '27856987',
            'email' => 'luisfernandez@gmail.com',
            'fecha_nac' => '1992-12-03',
        ]);
        
        DB::table('clientes')->insert([
            'apellido' => 'Rodriguez',
            'nombre' => 'Carolina',
            'dni' => '33569874',
            'email' => 'carolinarodriguez@gmail.com',
            'fecha_nac' => '1988-06-20',
        ]);
        
        DB::table('clientes')->insert([
            'apellido' => 'Gonzalez',
            'nombre' => 'Juan',
            'dni' => '28547896',
            'email' => 'juangonzalez@gmail.com',
            'fecha_nac' => '1978-09-28',
        ]);
        
        DB::table('clientes')->insert([
            'apellido' => 'Perez',
            'nombre' => 'Laura',
            'dni' => '37896541',
            'email' => 'lauraperez@gmail.com',
            'fecha_nac' => '1995-02-10',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Ramirez',
            'nombre' => 'Ana',
            'dni' => '29784512',
            'email' => 'anaramirez@gmail.com',
            'fecha_nac' => '1993-05-18',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Silva',
            'nombre' => 'Carlos',
            'dni' => '36458971',
            'email' => 'carlossilva@gmail.com',
            'fecha_nac' => '1987-10-25',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Torres',
            'nombre' => 'Sofia',
            'dni' => '40967895',
            'email' => 'sofiatorres@gmail.com',
            'fecha_nac' => '1999-03-12',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Rojas',
            'nombre' => 'Diego',
            'dni' => '26873459',
            'email' => 'diegorojas@gmail.com',
            'fecha_nac' => '1991-07-30',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Santos',
            'nombre' => 'Julia',
            'dni' => '31548697',
            'email' => 'juliasantos@gmail.com',
            'fecha_nac' => '1986-09-14',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Morales',
            'nombre' => 'Andres',
            'dni' => '37659841',
            'email' => 'andresmorales@gmail.com',
            'fecha_nac' => '1994-01-05',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Cruz',
            'nombre' => 'Valentina',
            'dni' => '29478563',
            'email' => 'valentinacruz@gmail.com',
            'fecha_nac' => '1997-11-22',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Ortega',
            'nombre' => 'Felipe',
            'dni' => '38257694',
            'email' => 'felipeortega@gmail.com',
            'fecha_nac' => '1990-04-08',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Vargas',
            'nombre' => 'Camila',
            'dni' => '40857926',
            'email' => 'camilavargas@gmail.com',
            'fecha_nac' => '1998-08-17',
        ]);

        DB::table('clientes')->insert([
            'apellido' => 'Mendoza',
            'nombre' => 'Juan',
            'dni' => '36429587',
            'email' => 'juanmendoza@gmail.com',
            'fecha_nac' => '1989-06-02',
        ]);
        
    }
}
