<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLogo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $size, $label;
    public function __construct($size = null, $label = null)
    {
        $this->size = $size === null ? 30 : $size;
        $this->label = $label === "false" ? false : true;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.application-logo');
    }
}
