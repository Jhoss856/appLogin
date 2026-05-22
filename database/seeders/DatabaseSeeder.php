<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  User::withoutModelEvents();

        //  User::factory(10)->create();

        // Comenta estas líneas poniéndoles // al inicio:
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // Agrega el llamado a tu CareerSeeder aquí abajo:
        $this->call([
            CareerSeeder::class,
        ]);
    }
}