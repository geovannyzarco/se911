<?php

namespace App\Livewire;

use App\Livewire\Forms\EmpleadoForm;
use App\Models\Categoria;
use App\Models\Empleado;
use App\Models\EstadoEmpleado;
use App\Models\Unidad;
use App\Models\Grupo;
use Livewire\Component;
use Livewire\WithPagination;

class Empleados extends Component
{
    use WithPagination;

    public EmpleadoForm $form;
    public bool $showModal = false;
    public bool $editing = false;

    public function openModal($modo = 'crear', Empleado $empleado = null):void
    {
        $this->editing = $modo === 'editar';

        if ($this->editing && $empleado){
            $this->form->setEmpleado($empleado);
        }else{
            $this->form->resetForm();
        }

        $this->showModal = true;

    }

    Public function closeModal():void
    {
        $this->showModal = false;
        $this->form->resetForm();
        $this->editing = false;
    }

    public function save():void
    {
        $this->editing ? $this->form->update():$this->form->create();
        $this->closeModal();
    }

    Public function delete(Empleado $empleado):void
    {
        $empleado->delete();
    }

    public function render()
    {
        return view('livewire.empleados',[
            'registros'=>Empleado::with(['categoria','estadoEmpleado','grupo','unidad'])->paginate(10),
            'categorias'=>Categoria::orderBy('id')->get(),
            'estados'=>EstadoEmpleado::orderBy('id')->get(),
            'grupos'=>Grupo::orderBy('id')->get(),
            'unidades'=>Unidad::orderBy('id')->get(),
        ]);
    }
}
