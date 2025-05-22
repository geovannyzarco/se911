<?php

namespace App\Http\Livewire;

use App\Forms\CategoriaForm;
use App\Models\Categoria;
use Livewire\Component;

class CategoriaCrud extends Component
{
    public CategoriaForm $form;
    public $categorias;
    public $isEditMode = false;
    public $showForm = false;

    public function mount()
    {
        $this->form = new CategoriaForm();
        $this->loadCategorias();
    }

    public function loadCategorias()
    {
        $this->categorias = Categoria::orderBy('categoria')->get();
    }

    public function rules()
    {
        return [
            'form.categoria_nombre' => 'required|string|max:200',
            'form.h_personales' => 'required|integer|min:0',
        ];
    }

    public function showForm()
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function resetForm()
    {
        $this->form = new CategoriaForm();
        $this->isEditMode = false;
        $this->showForm = false;
    }

    public function save()
    {
        $this->validate();

        Categoria::updateOrCreate(
            ['id' => $this->form->id],
            [
                'categoria' => $this->form->categoria_nombre,
                'h_personales' => $this->form->h_personales,
            ]
        );

        session()->flash('message', $this->form->id ? 'Categoría actualizada.' : 'Categoría creada.');

        $this->resetForm();
        $this->loadCategorias();
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        $this->form->id = $categoria->id;
        $this->form->categoria_nombre = $categoria->categoria;
        $this->form->h_personales = $categoria->h_personales;

        $this->isEditMode = true;
        $this->showForm = true;
    }

    public function delete($id)
    {
        Categoria::findOrFail($id)->delete();
        session()->flash('message', 'Categoría eliminada.');
        $this->loadCategorias();
    }

    public function render()
    {
        return view('livewire.categoria-crud');
    }
}
