<?php

namespace App\View\Components;

use App\Models\Pengumuman;
use Illuminate\View\Component;

class AnnounCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = Pengumuman::orderBy('created_at','desc')->limit(3)->get();
        return view('components.announ-card',compact('data'));
    }
}
