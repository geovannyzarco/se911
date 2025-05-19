<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert([
            [
                'codigo' => 'EP00116',
                'nombre' => 'CARLOS GEOVANNY ESCOBAR PORTILLO',
                'id_unidad' => 4, // Asegúrate de que exista en la tabla unidades
                'id_categoria' => 1, // Asegúrate de que exista en la tabla categorias
                'id_grupo' => 5, // Asegúrate de que exista en la tabla grupos
                'id_estado_empleado' => 1, // Asegúrate de que exista en la tabla estado_empleados
            ],
            [
                'codigo' => 'MC00412',
                'nombre' => 'YANCY YESENIA MARTINEZ DE SALINAS',
                'id_unidad' => 2,
                'id_categoria' => 1,
                'id_grupo' => 1,
                'id_estado_empleado' => 1,
            ],
            [
                'codigo' => 'MS00296',
                'nombre' => 'EVELIN FRANCISCA MENA SANCHEZ',
                'id_unidad' => 2,
                'id_categoria' => 1,
                'id_grupo' => 1,
                'id_estado_empleado' => 1,
            ],
        ]);
    }
}
