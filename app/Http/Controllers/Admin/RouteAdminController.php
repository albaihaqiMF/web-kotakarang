<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteAdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }
    public function dataPenduduk()
    {
         return view('admin.data-penduduk');
    }
    public function map()
    {
         return view('admin.map');
    }
}
