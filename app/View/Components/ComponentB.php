<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComponentB extends Component
{
    public function __construct(
        public $foo = null,
        public $xar = null,
    ) {
    }

    public function render(): View
    {
        return view('components.component-b');
    }
}
