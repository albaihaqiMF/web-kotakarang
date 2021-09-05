<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('guest.welcome');
    }
    public function service()
    {
        return view('guest.service');
    }
    public function about()
    {
        return view('guest.about');
    }
    public function contact()
    {
        return view('guest.contact');
    }
    public function map()
    {
        return view('guest.map');
    }
    public function pengumuman()
    {
        $data = Pengumuman::orderBy('created_at', 'desc')->paginate(8);

        return view('guest.pengumuman.index', compact('data'));
    }

    public function pengumumanShow(Pengumuman $pengumuman)
    {
        $data = $pengumuman;
        return view('guest.pengumuman.show',compact('data'));
    }

    public function event()
    {
         $data = Event::orderBy('jadwal','desc')->paginate(5);

         return view('guest.event.index',compact('data'));
    }
    public function eventShow(Event $event)
    {
        return view('guest.event.show',['data'=>$event]);
    }
}
