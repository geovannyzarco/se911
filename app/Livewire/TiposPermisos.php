<?php

namespace App\Livewire;

use App\Livewire\Forms\TipoPermisoForm;
use App\Models\TipoPermiso;
use Livewire\Component;
use Livewire\WithPagination;

class TiposPermisos extends Component
{
    use WithPagination;
    Public TipoPermisoForm $form;
    public bool $showModal = false;
    public bool $editing = false;

    public function openModal($modo = 'crear', TipoPermiso $tipoPermiso=null)
    {
        if ($modo ==='editar' && $tipoPermiso){
            $this->form->setTipoPermiso($tipoPermiso);
            $this->editing = true;
        }else{
            $this->form->reset();
            $this->editing = false;
        }

        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->reset('showModal','editing');
        $this->form->reset();
    }


    public function save()
    {
        $this->editing ? $this->form->update():$this->form->create();
        $this->closeModal();

    }

    public function delete(TipoPermiso $tipoPermiso)
    {
        $tipoPermiso->delete();
    }

    public function render()
    {
        return view('livewire.tipos-permisos',[
            'registros'=>TipoPermiso::orderBy('id','asc')->paginate(10),
        ]);
    }
}
