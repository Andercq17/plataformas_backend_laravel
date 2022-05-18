<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ClienteController;

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
//https://devdojo.com/guide/laravel/models

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/flex', function () {
    return view('flex');
})->middleware(['auth'])->name('flex');



Route::resource("/cliente",ClienteController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
