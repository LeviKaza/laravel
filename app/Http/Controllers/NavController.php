<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home() {
        return view('home');
    }

    public function show1() {
        return view('page1');
    }

    public function show2() {
        return view('page2');
    }
}
