<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoriaForm extends Component
{

    public $categoria;
    public function __construct($categoria = null)
    {
        $this->categoria = $categoria;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categoria-form');
    }
}
