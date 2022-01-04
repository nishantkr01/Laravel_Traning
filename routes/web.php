<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/addition', [anoController::class, 'calc']);