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
    return view('user.home');
});

Route::get('/about', function () {
    return view('user.about_us');
});

Route::get('/',[\App\Http\Controllers\mainController::class,'home'])->name('home');
Route::get('about',[\App\Http\Controllers\mainController::class,'about'])->name('about');
Route::get('project',[\App\Http\Controllers\mainController::class,'project'])->name('project');
Route::get('team',[\App\Http\Controllers\mainController::class,'team'])->name('team');
Route::get('service',[\App\Http\Controllers\mainController::class,'service'])->name('service');
Route::get('contact',[\App\Http\Controllers\mainController::class,'contact'])->name('contact');

