<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello()
    {
        return view('hello-world');
    }

    public function biodata()
    {
        return view('biodata');
    }

    public function index()
    {
        return view('pages.dashboard');
    }
}
