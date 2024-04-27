<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemName extends Component
{
    public $level;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($level, $name)
    {
        $this->level = $level;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.item-name-level');
    }
}
