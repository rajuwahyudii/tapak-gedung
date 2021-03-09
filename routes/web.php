<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminAdmisiController;
use App\Http\Controllers\AdminAkademikController;
use App\Http\Controllers\AdminAlumniController;
use App\Http\Controllers\AdminKemahasiswaanController;
use App\Http\Controllers\AdminPembelajaranController;
use App\Http\Controllers\AdminPenelitianController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminBerandaController;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {

    Route::resource('', AdminDashboardController::class, ['as' => 'admin']);
    Route::resource('beranda', AdminBerandaController::class, ['as' => 'admin']);
    Route::resource('akun', AdminAkunController::class, ['as' => 'admin']);
    Route::resource('profile', AdminProfileController::class, ['as' => 'admin']);
    Route::resource('admisi', AdminAdmisiController::class, ['as' => 'admin']);
    Route::resource('akademik', AdminAkademikController::class, ['as' => 'admin']);
    Route::resource('alumni', AdminAlumniController::class, ['as' => 'admin']);
    Route::resource('article', AdminArticleController::class, ['as' => 'admin']);
    Route::resource('kemahasiswaan', AdminKemahasiswaanController::class, ['as' => 'admin']);
    Route::resource('pembelajaran', AdminPembelajaranController::class, ['as' => 'admin']);
    Route::resource('penelitian', AdminPenelitianController::class, ['as' => 'admin']);
    Route::resource('berita', AdminBeritaController::class, ['as' => 'admin']);
});
