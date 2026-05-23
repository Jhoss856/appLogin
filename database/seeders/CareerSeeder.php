<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;
use Illuminate\Support\Facades\Schema; // Importante para desactivar las llaves foráneas

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Desactivar temporalmente la revisión de llaves foráneas
        Schema::disableForeignKeyConstraints();

        // 2. Ahora sí puedes vaciar la tabla sin errores
        Career::truncate();

        // 3. Reactivar la revisión de llaves foráneas
        Schema::enableForeignKeyConstraints();

        // 4. Insertar los Datos de Prueba ordenados alfabéticamente
        Career::create(['name' => 'Computación e Informática']);
        Career::create(['name' => 'Desarrollo de Software']);
        Career::create(['name' => 'Diseño Gráfico Digital']);
        Career::create(['name' => 'Ingeniería de Ciberseguridad']);
        Career::create(['name' => 'Ingeniería de Cloud Computing y Data Center']);
        Career::create(['name' => 'Ingeniería de Software']);
        Career::create(['name' => 'Marketing Digital']);
        Career::create(['name' => 'Redes y Seguridad Informática']);
    }
}