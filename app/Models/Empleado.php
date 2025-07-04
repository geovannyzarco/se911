<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_categoria',
        'id_estado_empleado',
        'id_unidad',
        'id_grupo',
        'codigo',
        'nombre',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function estadoEmpleado()
    {
        return $this->belongsTo(EstadoEmpleado::class, 'id_estado_empleado');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'id_unidad');
    }

    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'id_empleado');
    }
}
