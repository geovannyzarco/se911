<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tipo_permiso',
        'id_estado',
        'fecha_solicitud',
        'desde',
        'hasta',
        'motivo',
        'adjunto',
        'comentario',
    ];

    public function tipoPermiso()
    {
        return $this->belongsTo(TipoPermiso::class, 'id_tipo_permiso');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}

