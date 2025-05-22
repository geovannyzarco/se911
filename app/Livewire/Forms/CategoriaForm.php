<?php

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
    }
}
