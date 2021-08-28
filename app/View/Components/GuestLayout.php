<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public $title;
    public function __construct($title = null)
    {
        $app_name = "Kelurahan Kota Karang";
        $this->title = $title === null ? $app_name : ucwords(strtolower($title)) . " | " . $app_name;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
