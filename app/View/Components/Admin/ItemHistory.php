<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemHistory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $by,
        public $time,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    // public function render()
    public function render(): View|Closure|string

    {
        return view('components.admin.item-history');
    }
}
