<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createKeluarga()
    {
        return view('admin.create-keluarga');
    }
}
