<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@se911.com',
        ], [
            'name' => 'Administrador',
            'email' => 'admin@se911.com',
            'password' => Hash::make('100504'), // Cambia por una contraseña segura
        ]);
    }
}
