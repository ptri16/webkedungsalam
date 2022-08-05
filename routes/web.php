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
//Fix Routes 

// User Routes
Route::get('/', 'App\Http\Controllers\DashboardController@dashboard');
Route::get('/booking', 'App\Http\Controllers\DashboardController@booking');
// Artikel
Route::get('/History', 'App\Http\Controllers\DashboardController@viewSendang');
Route::get('/SendangArticle', 'App\Http\Controllers\DashboardController@viewSendang');
Route::get('/PapanArticle', 'App\Http\Controllers\DashboardController@viewPapan');
Route::get('/NgliyepArticle', 'App\Http\Controllers\DashboardController@viewNgliyep');
Route::get('/GoaArticle', 'App\Http\Controllers\DashboardController@viewGoa');

// Admin Route
Route::get('/DashboardAdmin', 'App\Http\Controllers\AdminController@index'); //nnti ganti jadi post
Route::get('/EditWisata', 'App\Http\Controllers\AdminController@menuWisata');
Route::get('/EditArtikel', 'App\Http\Controllers\AdminController@menuArtikel');
Route::get('/EditAdmin', 'App\Http\Controllers\AdminController@menuAdmin');
Route::get('/addAdmin', 'App\Http\Controllers\AdminController@addAdmin');

// Edit artikel
Route::get('/addWisata', 'App\Http\Controllers\ArticleController@addWisata');
Route::get('/addArtikel', 'App\Http\Controllers\ArticleController@addArticle');

// masih gak bisa dipakai 
// Route::get('/', [DashboardController::class, 'dashboard']);



// Temporary Routes


Route::get('/testing', function () {
    return view('testing');
});


// Admin routes



// End of temporary routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
