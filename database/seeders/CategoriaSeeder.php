<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert([
            ['categoria'=>'Administrativo', 'h_personales'=>40],
            ['categoria'=>'Operativo', 'h_personales'=>60],
        ]);
    }
}

