<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    // public $abc;
    /**
     * Create a new component instance.
     */
    // public function __construct($abc)
    // {
    //     $this->abc = $abc;
    // }

    public function __construct(public $abc, public $xyz)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
