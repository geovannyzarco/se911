<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compensado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_estado',
        'id_empleado',
        'fecha_solicitud',
        'justificacion',
        'desde',
        'hasta',
        'adjunto',
        'comentarios',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
