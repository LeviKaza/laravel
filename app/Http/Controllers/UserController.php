<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {
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