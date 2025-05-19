<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grupo::insert([
            ['grupo' => 'GRUPO A', 'limite_permisos' => 3],
            ['grupo' => 'GRUPO B', 'limite_permisos' => 3],
            ['grupo' => 'GRUPO C', 'limite_permisos' => 3],
            ['grupo' => 'GRUPO D', 'limite_permisos' => 3],
            ['grupo' => 'ADMINISTRACION', 'limite_permisos' => 3],
            ['grupo' => 'TECNICOS', 'limite_permisos' => 3],
        ]);
    }
}
