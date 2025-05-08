<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FloatingSelect extends Component
{
    public string $id;
    public string $label;
    public array $options;
    public string $model;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $label, array $options, string $model)
    {
        $this->id = $id;
        $this->label = $label;
        $this->options = $options;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.floating-select');
    }
}
