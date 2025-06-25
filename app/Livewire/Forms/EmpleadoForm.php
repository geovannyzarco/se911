<?php

namespace App\Livewire\Forms;

use App\Models\Empleado;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EmpleadoForm extends Form
{
    public ?Empleado $model = null;
    public ?int $id_categoria = null;
    public ?int $id_estado_empleado = null;
    public ?int $id_unidad = null;
    public ?int $id_grupo = null;
    public string $codigo = '';
    public string $nombre = '';

    public function setEmpleado(Empleado $empleado): void
    {
        $this->model = $empleado;
        $this->id_categoria = $empleado->id_categoria;
        $this->id_estado_empleado = $empleado->id_estado_empleado;
        $this->id_unidad = $empleado->id_unidad;
        $this->id_grupo = $empleado->id_grupo;
        $this->codigo = $empleado->codigo;
        $this->nombre = $empleado->nombre;
    }

    public function rules(): array
    {
        return [
            'id_categoria'=>['required'],
            'id_estado_empleado' => ['required'],
            'id_unidad' => ['required'],
            'id_grupo' => ['required'],
            'codigo' => ['required'],
            'nombre' => ['required'],
        ];
    }

    public function create():void
    {
        $this->validate();
        Empleado::create($this->only([
            'id_categoria',
            'id_estado_empleado',
            'id_unidad',
            'id_grupo',
            'codigo',
            'nombre',
        ]));
    }

    public function update(): void
    {
        $this->validate();
        $this->model->update($this->only([
            'id_categoria',
            'id_estado_empleado',
            'id_unidad',
            'id_grupo',
            'codigo',
            'nombre',
        ]));
    }

    public function resetForm(): void
    {
        $this->reset();
        $this->resetValidation();
    }

}
