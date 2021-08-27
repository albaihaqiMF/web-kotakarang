<?php

namespace App\View\Components;

use App\Models\Event;
use Illuminate\View\Component;

class EventCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = Event::orderBy('jadwal','desc')->paginate(4);
        return view('components.event-card',compact('data'));
    }
}
