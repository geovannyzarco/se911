<?php

namespace App\Livewire\Solicitudes;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $empleadoSeleccionado = null;
    protected $listeners = ['cerrarDetalle'=>'cerrarDetalle'];

    public function verEstado($id)
    {
        $this->empleadoSeleccionado = $id;
    }

    public function cerrarDetalle()
    {
        $this->empleadoSeleccionado = null;
    }

    public function render()
    {
        $empleados = Empleado::paginate(10);
        return view('livewire.solicitudes.index', compact('empleados'));
    }
}
