<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anoController;
use Illuminate\Support\Facades\DB;
// use DB;


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
Route::get('/deleteuser', [anoController::class, 'deleteuserdetails']);


Route::get('/edituser', function () {
    return view('edituser');
});

Route::post('/edituser', [anoController::class, 'updateuserdetails']);


Route::get('/viewusers', function () {
    $users=DB::table('usermaster')->paginate(2);
    // return view('viewusers');
    // return View::make('viewusers')->with('users',$users);
    return view('viewusers', ['users' => $users]);

});

// Route::get('/viewusers', function () {
//     $users=DB::table('usermaster')->get();
//     // return view('viewusers');
//     return View::make('viewusers')->with('users',$users);

// });


Route::get('/contact', function () {
    return view('contactus');
});
Route::post('/contact', [anoController::class, 'contactus']);


Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [anoController::class, 'login']);

// Route::get('/userHome', function () {
//     return view('userHome');
// });


Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [anoController::class, 'register']);

Route::get('/addition', [anoController::class, 'calc']);








Route::post('/getstate', [anoController::class, 'getstate']);

Route::get('/getstate1', function () {
    return view('ajaxGetState');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('aboutus');
});


