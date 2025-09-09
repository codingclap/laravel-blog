<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        return view('blog');
    }
    public function single()
    {
        return view('single');
    }
}
