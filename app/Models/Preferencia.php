<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'entidad',
        'direccion',
        'telefono',
        'correo',
        'jefe',
    ];
}
