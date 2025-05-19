<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unidades')->insert([
            ['unidad' => 'ADMINISTRACION'],
            ['unidad' => 'DALLDE'],
            ['unidad' => 'CCTV'],
            ['unidad' => 'DESIT'],
            ['unidad' => 'SIEP'],
            ['unidad' => 'CCEE'],
        ]);
    }
}
