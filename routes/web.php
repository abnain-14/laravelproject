<?php

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
    return view('nav');
});
Route::get('/about', function () {
    return view('livewire.about');
});
Route::get('/contact', function () {
    return view('livewire.contact');
});
Route::get('/login', function () {
    return view('livewire.login');
});
Route::get('/register', function () {
    return view('livewire.register');
});



