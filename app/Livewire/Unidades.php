<?php

namespace App\Livewire;

use App\Livewire\Forms\UnidadForm;
use App\Models\Unidad;
use Livewire\Component;
use Livewire\WithPagination;

class Unidades extends Component
{
    use WithPagination;

    public UnidadForm $form;
    public bool $showModal = false;
    public bool $editing = false;

    public function openModal($modo = 'crear',Unidad $unidad = null):void
    {
        $this->editing = $modo ==='editar';

        if($this->editing && $unidad){
            $this->form->setUnidad($unidad);
        }else{
            $this->form->resetForm();
        }

        $this->showModal = true;
    }

    public function closeModal():void
    {
        $this->showModal = false;
        $this->form->resetForm();
        $this->editing = false;
    }

    public function save():void
    {
        $this->editing ? $this->form->update() : $this->form->create();
        $this->closeModal();
    }

    public function delete(Unidad $unidad): void
    {
        $unidad->delete();
    }

    public function render()
    {
        return view('livewire.unidades',[
            'registros'=>Unidad::orderBy('unidad')->paginate(10),
        ]);
    }
}
