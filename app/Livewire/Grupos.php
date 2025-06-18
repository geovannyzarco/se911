<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Grupo;
use App\Livewire\Forms\GrupoForm;

class Grupos extends Component
{
    use WithPagination;

    public GrupoForm $form;
    public bool $showModal = false;
    public bool $editing = false;

    public function openModal($modo = 'crear', Grupo $grupo = null): void
    {
        $this->editing = $modo === 'editar';

        if ($this->editing && $grupo) {
            $this->form->setGrupo($grupo);
        } else {
            $this->form->resetForm();
        }

        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->form->resetForm();
        $this->editing = false;
    }

    public function save(): void
    {
        $this->editing ? $this->form->update() : $this->form->create();
        $this->closeModal();
    }

    public function delete(Grupo $grupo): void
    {
        $grupo->delete();
    }

    public function render()
    {
        return view('livewire.grupos', [
            'registros' => Grupo::orderBy('id')->paginate(10),
        ]);
    }
}

