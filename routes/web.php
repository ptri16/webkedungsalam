<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ArtikelController;

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
Route::get('/', 'App\Http\Controllers\DashboardController@dashboard');
Route::get('/booking', 'App\Http\Controllers\DashboardController@booking');
// Artikel
Route::get('/History', 'App\Http\Controllers\DashboardController@viewSendang');
Route::get('/SendangArticle', 'App\Http\Controllers\DashboardController@viewSendang');
Route::get('/PapanArticle', 'App\Http\Controllers\DashboardController@viewPapan');
Route::get('/NgliyepArticle', 'App\Http\Controllers\DashboardController@viewNgliyep');
Route::get('/GoaArticle', 'App\Http\Controllers\DashboardController@viewGoa');

// Admin Route
// Route::get('/DashboardAdmin', 'App\Http\Controllers\AdminController@index'); 
Route::get('/DashboardWisata', 'App\Http\Controllers\AdminController@menuWisata');
Route::get('/DashboardArtikel', 'ArtikelController@displayArtikel');
Route::get('/Admin', 'App\Http\Controllers\AdminController@menuAdmin');
Route::get('/addAdmin', 'App\Http\Controllers\AdminController@addAdmin');
Route::get('/editAdmin', 'App\Http\Controllers\AdminController@editAdmin');


// Edit artikel
Route::get('/addWisata', 'App\Http\Controllers\WisataController@addWisata');
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

Route::get('/editWisata', 'App\Http\Controllers\WisataController@editWisata');



// masih gak bisa dipakai 
// Route::get('/', [DashboardController::class, 'dashboard']);



// Temporary Routes


// Route::get('/testing', function () {
//     return view('testing');
// });

// End of temporary routes

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
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
