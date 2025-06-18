<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Grupo;

class GrupoForm extends Form
{
    public ?Grupo $model = null;
    public string $grupo = '';
    public ?int $limite_permisos = null;

    public function setGrupo(Grupo $grupo): void
    {
        $this->model = $grupo;
        $this->grupo = $grupo->grupo ?? '';
        $this->limite_permisos = $grupo->limite_permisos;
    }
    public function rules(): array
    {
        return [
            'grupo' => ['required', 'string', 'max:100'],
            'limite_permisos' => ['nullable', 'integer', 'min:1'],
        ];
    }
    public function create(): void
    {
        $this->validate();

        Grupo::create([
            'grupo' => $this->grupo,
            'limite_permisos' => $this->limite_permisos,
        ]);
    }
    public function update(): void
    {
        $this->validate();

        $this->model->update([
            'grupo' => $this->grupo,
            'limite_permisos' => $this->limite_permisos,
        ]);
    }
    public function resetForm(): void
    {
        $this->reset();
        $this->resetValidation();
    }
}
