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
    return view('pages.home');
})->name('home');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
