<?php

<<<<<<< HEAD
namespace App\Livewire;

use App\Livewire\Forms\CategoriaForm;
=======
namespace App\Http\Livewire;

use App\Forms\CategoriaForm;
>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
use App\Models\Categoria;
use Livewire\Component;

class CategoriaCrud extends Component
{
    public CategoriaForm $form;
<<<<<<< HEAD
    Public $categorias;
    public bool $isEditMode = false;

    public function mount()
    {
=======
    public $categorias;
    public $isEditMode = false;
    public $showForm = false;

    public function mount()
    {
        $this->form = new CategoriaForm();
>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
        $this->loadCategorias();
    }

    public function loadCategorias()
    {
<<<<<<< HEAD
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
=======
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

>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
        $this->resetForm();
        $this->loadCategorias();
    }

    public function edit($id)
    {
<<<<<<< HEAD
        $categorias = Categoria::findOrFail($id);
        $this->form->setCategoria($categorias);
        $this->isEditMode = true;
=======
        $categoria = Categoria::findOrFail($id);

        $this->form->id = $categoria->id;
        $this->form->categoria_nombre = $categoria->categoria;
        $this->form->h_personales = $categoria->h_personales;

        $this->isEditMode = true;
        $this->showForm = true;
>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
    }

    public function delete($id)
    {
<<<<<<< HEAD
        Categoria::destroy($id);
        session()->flash('message', 'Categoria eliminada exitosamente');
        $this->loadCategorias();
    }

    public function resetForm()
    {
        $this->reset('form', 'isEditMode');
    }

=======
        Categoria::findOrFail($id)->delete();
        session()->flash('message', 'Categoría eliminada.');
        $this->loadCategorias();
    }

>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
    public function render()
    {
        return view('livewire.categoria-crud');
    }
}
