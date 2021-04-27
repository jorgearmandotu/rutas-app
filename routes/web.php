<?php

use App\Http\Controllers\Auth\RegisteredUserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*Route::get('/register', function () {
    return view('register');
});*/

//Route::post('/register_user', array('as' => '/register_user', 'RegisteredUserController@store'));
Route::post('/register_user', ['as' => '/register_user', 'uses' => 'register_User@store']);
Route::get('/register_user', function(){
    return view('auth.register_users');
})->middleware('admin');

//Route::post('/register_user');

require __DIR__.'/auth.php';
