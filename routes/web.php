<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ArtikelController;
use App\Http\Controller\WisataController;
use App\Http\Controller\DashboardController;

use App\Http\Controllers;



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
Route::get('/', 'DashboardController@dashboard');
Route::get('/booking', 'DashboardController@booking');
// Artikel
Route::get('/History', 'DashboardController@viewSendang');
Route::get('/SendangArticle', 'DashboardController@viewSendang');
Route::get('/PapanArticle', 'DashboardController@viewPapan');
Route::get('/NgliyepArticle', 'DashboardController@viewNgliyep');
Route::get('/GoaArticle', 'DashboardController@viewGoa');

// Admin Route
Route::get('/DashboardWisata', 'WisataController@displayWisata');
Route::get('/DashboardArtikel', 'ArtikelController@displayArtikel');
Route::get('/Admin', 'App\Http\Controllers\AdminController@menuAdmin');
Route::get('/addAdmin', 'App\Http\Controllers\AdminController@addAdmin');
Route::get('/editAdmin', 'App\Http\Controllers\AdminController@editAdmin');

// artikel
Route::get('/addArtikel', 'ArtikelController@addArticle');
Route::post('/artikel/add', 'ArtikelController@createArtikel');
Route::get('artikel/update/{id}', [
            'as'=> 'update',
            'uses'=>'ArtikelController@updateArtikel'
            ]);
Route::get('/artikel/edit', 'ArtikelController@editArtikel');
Route::get('artikel/delete/{id}', [
            'as'=> 'delete',
            'uses'=>'ArtikelController@deleteArtikel'
            ]);

// Wisata
Route::get('/addWisata', 'WisataController@addWisata');
Route::post('/wisata/add', 'WisataController@createWisata');
Route::get('/wisata/edit', 'WisataController@updatetWisata');
Route::get('wisata/update/{id}', [
            'as'=> 'upWisata',
            'uses'=>'WisataController@updateWisata'
            ]);
Route::get('wisata/delete/{id}', [
            'as'=> 'delWisata',
            'uses'=>'WisataController@deleteWisata'
            ]);
Route::get('wisata/display/{id}', [
            'as'=> 'disWisata',
            'uses'=>'WisataController@pickWisata'
            ]);
Route::post('/booking/add', [App\Http\Controllers\AdminController::class, 'uploadForm'])->name('daftarPesanan');


// Auth::routes();


// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect']);

Route::get('/DashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('DashboardAdmin');

Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
