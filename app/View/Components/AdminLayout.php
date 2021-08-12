<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title,$header;
    public function __construct($title = null)
    {
        $app_title = "Kelurahan Kota Karang";
        $this->title = $title !== null ? $title . " | " . $app_title : $app_title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.admin');
    }
}
