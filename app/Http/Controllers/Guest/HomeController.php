<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
         return view('welcome');
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
}
