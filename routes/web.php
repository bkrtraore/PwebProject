<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/welcome', [PostController::class, 'index'] )->name('welcome');

Route::get('/contact', [PostController::class, 'contact'] )->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test', function () {
    return view('test');
});


Route::get('/videos', function () {
    return view('videos');
});

Route::get('/video1', function() {
    return view('videos.videotest');
});

Route::get('/addApparel', [DashboardController::class, 'addApparelView'] )->name('addApparel')->middleware(['auth'])->name('dashboard');

Route::post('createApparel',[DashboardController::class, 'createApparel'])->name('createApparel'); 

Route::get('/addAppart', [DashboardController::class, 'addAppartView'] )->name('addAppart')->middleware(['auth'])->name('dashboard');

Route::post('createAppart',[DashboardController::class, 'createAppart'])->name('createAppart'); 

require __DIR__.'/auth.php';
