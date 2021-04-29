<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\register_User;
use App\Http\Controllers\RouterController;
use Illuminate\Support\Facades\Route;

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
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*Route::get('/register', function () {
    return view('register');
});*/

//Route::post('/register_user', array('as' => '/register_user', 'RegisteredUserController@store'));
//Route::post('/register_user', ['as' => '/register_user', 'uses' => 'register_User@read']);
Route::post('/register_user', [register_User::class, 'store'])->middleware('admin');
Route::get('/register_user', function(){
    return view('auth.register_users');
})->middleware('admin')->name('register_user');

Route::get('/router', [RouterController::class, 'create'])->middleware('auth');
Route::post('/router',[RouterController::class, 'enrutar'])->middleware('auth');
require __DIR__.'/auth.php';
