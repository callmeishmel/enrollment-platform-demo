<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FloatingInput extends Component
{

    public string $id;
    public string $label;
    public string $type;
    public string $model;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $label, string $type, string $model)
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.floating-input');
    }
}
