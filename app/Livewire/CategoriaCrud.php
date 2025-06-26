<?php

namespace App\Livewire;

use App\Livewire\Forms\CategoriaForm;
use App\Models\Categoria;
use Livewire\Component;

class CategoriaCrud extends Component
{
    public CategoriaForm $form;
    Public $categorias;
    public bool $isEditMode = false;

    public function mount()
    {
        $this->loadCategorias();
    }

    public function loadCategorias()
    {
        $this->categorias=Categoria::all();
    }

    Public function save()
    {
        $this->validate();
        if ($this->isEditMode){
            $this->form->update();
            session()->flash('message','Categoria actualizada.');
        }else{
            $this->form->create();
            session()->flash('message', 'Categoria creada');
        }
        $this->resetForm();
        $this->loadCategorias();
    }

    public function edit($id)
    {
        $categorias = Categoria::findOrFail($id);
        $this->form->setCategoria($categorias);
        $this->isEditMode = true;
    }

    public function delete($id)
    {
        Categoria::destroy($id);
        session()->flash('message', 'Categoria eliminada exitosamente');
        $this->loadCategorias();
    }

    public function resetForm()
    {
        $this->reset('form', 'isEditMode');
    }

    public function render()
    {
        return view('livewire.categoria-crud');
    }
}
