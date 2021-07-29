<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;


// Route::get('/', function () {s
//     return view('home');
// });

// Route::get('/lien1', function () {
//     return view('page1');
// });

// Route::get('lien2', function () {
//     return view('page2');
// });

Route::get('/', [NavController::class, 'home']);

Route::get('/lien1', [NavController::class, 'show1']);

Route::get('/lien2', [NavController::class, 'show2']);
