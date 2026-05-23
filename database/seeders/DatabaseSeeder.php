<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama a tu CareerSeeder una única vez aquí de manera limpia
        $this->call([
            CareerSeeder::class,
        ]);
    }
}