<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@iaw.com',
            'password' => Hash::make("admin123"),
            'rol' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'jose',
            'email' => 'josesito@iaw.com',
            'password' => Hash::make("nashe"),
            'rol' => 'empleado',
        ]);
    }
}
