<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar Datos de Prueba Automaticamente
        Career::create(['name' => 'Desarollo de Software']);
        Career::create(['name' => 'Diseño Grafico']);
        Career::create(['name' => 'Administracion Industrial']);  
    }
}
