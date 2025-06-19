<?php

namespace App\Livewire\Forms;

use App\Models\Unidad;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UnidadForm extends Form
{
 public ?Unidad $model =null;
 public string $unidad = '';

 public function setUnidad(Unidad $unidad):void
 {
    $this->model = $unidad;
    $this->unidad = $unidad->unidad ??'';
 }

 public function rules(): array
 {
    return [
        'unidad'=>['required', 'string', 'max:100'],
    ];
 }

 public function create():void
 {
        $this->validate();
        Unidad::create([
            'unidad'=>$this->unidad,
        ]);
 }

 public function update():void
 {
    $this->validate();
    $this->model->update([
        'unidad'=>$this->unidad,
    ]);
 }

 public function resetForm():void
 {
    $this->reset();
    $this->resetValidation();
 }

}
