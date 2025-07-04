<?php

namespace App\Livewire;

use App\Models\Empleado;
use Livewire\Component;

class Acciones extends Component
{
    public function render()
    {
        $empleados = Empleado::whereIdCategoria()->get();
        return view('livewire.acciones',compact('empleados'));
    }
}
