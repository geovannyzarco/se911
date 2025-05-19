<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstadoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_empleados')->insert([
            ['estado' => 'ACTIVO'],
            ['estado' => 'INACTIVO'],
            ['estado' => 'SUSPENDIDO'],
            ['estado' => 'TRASLADADO'],
            ['estado' => 'RETIRADO'],
        ]);

    }
}
