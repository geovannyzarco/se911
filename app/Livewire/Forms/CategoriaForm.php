<?php

namespace App\Livewire\Forms;

use App\Models\Categoria;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Ramsey\Uuid\Type\Integer;

class CategoriaForm extends Form
{
    public ?Categoria $categoria=null;
    #[Rule('required|string|max:200')]
    public string $categoria_nombre = '';
    public $h_personales = '';

    Public function setCategoria(Categoria $categoria):void
    {
        $this->categoria = $categoria;
        $this->categoria_nombre = $categoria->categoria;
        $this->h_personales=$categoria->h_personales;
    }

    public function create():void
    {
        Categoria::create([
            'categoria'=>$this->categoria_nombre,
            'h_personales'=>$this->h_personales,
        ]);
        $this->reset();
    }

    public function update():void
    {
        $this->categoria->update([
            'categoria'=>$this->categoria_nombre,
            'h_personales'=>$this->h_personales,
        ]);
        $this->reset();
    }
}
