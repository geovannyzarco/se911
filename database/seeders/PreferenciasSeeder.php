<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('preferencias')->insert([
            ['entidad' => 'División de Emergencias 911',
            'direccion' => 'Autopista Norte, Mejicanos, El Salvador',
            'telefono' => '25290007',
            'correo' => 'contacto@empresa.com',
            'jefe' => 'Subcomisionado Miguel Felipe Vega Palacios'],
        ]);
    }
}
