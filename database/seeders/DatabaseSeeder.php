<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ClienteSeeder::class);        
        $this->call(PedidosSeeder::class);
        $this->call(EstilosSeeder::class);
        $this->call(MotosSeeder::class);
        $this->call(DetallesSeeder::class);
        $this->call(UserSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
