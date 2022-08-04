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

// Temporary Routes
Route::get('/', function () {
    return view('user/dashboard');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/booking', function() {
    return view('user/form');
} );

Route::get('/SendangArticle', function() {
    return view('user/artikelsendang');
} );

Route::get('/PapanArticle', function() {
    return view('user/artikelpapan');
} );

Route::get('/NgliyepArticle', function() {
    return view('user/artikelngliyep');
} );

Route::get('/GoaArticle', function() {
    return view('user/artikelgoa');
} );

Route::get('/Article', function() {
    return view('user/artikel');
} );

// Admin routes
Route::get('/adminDashboard', function() {
    return view('admin/index');
} );

Route::get('/adwisata', function() {
    return view('admin/adwisata');
} );

Route::get('/adartikel', function() {
    return view('admin/adartikel');
} );

Route::get('/adadmin', function() {
    return view('admin/adadmin');
} );
// End of temporary routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
