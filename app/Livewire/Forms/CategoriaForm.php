<?php

<<<<<<< HEAD
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
=======
namespace App\Forms;

use Livewire\Wireable;

class CategoriaForm implements Wireable
{
    public ?int $id = null;
    public string $categoria_nombre = '';
    public int $h_personales = 0;

    public function toLivewire()
    {
        return [
            'id' => $this->id,
            'categoria_nombre' => $this->categoria_nombre,
            'h_personales' => $this->h_personales,
        ];
    }

    public static function fromLivewire($value)
    {
        $instance = new self();
        $instance->id = $value['id'] ?? null;
        $instance->categoria_nombre = $value['categoria_nombre'] ?? '';
        $instance->h_personales = $value['h_personales'] ?? 0;

        return $instance;
>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
    }
}
