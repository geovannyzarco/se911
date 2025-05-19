<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_permisos')->insert([
            ['tipo' => 'PERMISO PERSONAL'],
            ['tipo' => 'POR TIEMPO COMPENSATORIO'],
            ['tipo' => 'CUMPLEAÑOS'],
            ['tipo' => 'LICENCIA DE 8 DIAS POR MATERNIDAD'],
            ['tipo' => 'DELEGACIONES DEPORTIVAS, CULTURAL O CIENTIFICAS'],
            ['tipo' => 'TRATAMIENTO DE ENFERMEDAD EN EL EXTRANJERO'],
            ['tipo' => 'CONSULTA MEDICA'],
            ['tipo' => 'ENFERMEDAD O DUELO'],
            ['tipo' => 'ESTUDIOS/HORAS SOCIALES'],
            ['tipo' => 'DILIGENCIAS JUDICIALES/EXTRAJUDICIALES'],
            ['tipo' => 'FALTA DE MARCACION'],
            ['tipo' => 'LICENCIA POR ENFERMEDAD SIN INCAPACIDAD'],
            ['tipo' => 'MISIÓN OFICIAL'],
            ['tipo' => 'PATERNIDAD'],
            ['tipo' => 'POR LACTANCIA'],
            ['tipo' => 'POR IMPARTIR CLASES'],
        ]);
    }
}
