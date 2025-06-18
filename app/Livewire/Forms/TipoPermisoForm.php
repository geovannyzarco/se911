<?php

namespace App\Livewire\Forms;

use App\Models\TipoPermiso;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TipoPermisoForm extends Form
{
    public ?TipoPermiso $tipoPermiso;
    #[Validate('nullable|string|max:100')]
    public ?string $tipo='';

    public function setTipoPermiso(TipoPermiso $tipoPermiso):void
    {
        $this->tipoPermiso = $tipoPermiso;
        $this->tipo = $tipoPermiso->tipo;
    }

    public function create(): void
    {
        $this->validate();
        TipoPermiso::create([
            'tipo'=>$this->tipo,
        ]);
        $this->reset();
    }

    public function update():void
    {
        $this->validate();
        $this->tipoPermiso->update([
            'tipo'=>$this->tipo,
        ]);
    }
}
