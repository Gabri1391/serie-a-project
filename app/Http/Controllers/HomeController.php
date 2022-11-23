<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//    Index Page
    public function index()
    {
        return view('layouts.home');
    }
}
