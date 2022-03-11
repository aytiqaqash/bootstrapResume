<?php

use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PortfolioPageController;
use App\Http\Controllers\ResumePageController;
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

Route::get('/',[HomePageController::class,'goster'])->name('home');
Route::get('/home', [HomePageController::class,'goster'])->name('home');
Route::get('/blog', [BlogPageController::class,'goster'])->name('blog');
Route::get('/resume', [ResumePageController::class,'goster'])->name('resume');
Route::get('/portfolio', [PortfolioPageController::class,'goster'])->name('portfolio');
Route::get('/contact', [ContactPageController::class,'goster'])->name('contact');

Route::get('/educations',[EducationController::class,'getAllEducations']);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
