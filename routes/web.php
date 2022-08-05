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
Route::get('/DashboardWisata', 'App\Http\Controllers\AdminController@menuWisata');
Route::get('/DashboardArtikel', 'App\Http\Controllers\AdminController@menuArtikel');
Route::get('/Admin', 'App\Http\Controllers\AdminController@menuAdmin');
Route::get('/addAdmin', 'App\Http\Controllers\AdminController@addAdmin');
Route::get('/editAdmin', 'App\Http\Controllers\AdminController@editAdmin');


// Edit artikel
Route::get('/addWisata', 'App\Http\Controllers\ArtikelController@addWisata');
Route::get('/addArtikel', 'App\Http\Controllers\ArtikelController@addArticle');
Route::get('/editArtikel', 'App\Http\Controllers\ArtikelController@editArticle');
Route::get('/editWisata', 'App\Http\Controllers\ArtikelController@editWisata');




// masih gak bisa dipakai 
// Route::get('/', [DashboardController::class, 'dashboard']);



// Temporary Routes


Route::get('/testing', function () {
    return view('testing');
});

// End of temporary routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
