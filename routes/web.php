<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminContentController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AdminBerandaSliderController;


use Illuminate\Support\Facades\DB;

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
    return redirect('/id');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    // Route::get('berita_filter/{bahasa}', [App\Http\Controllers\AdminBeritaFilterController::class, 'bahasaFilter'])->name('admin.berita.bahasa_filter');


    Route::resource('', AdminDashboardController::class, ['as' => 'admin']);
    Route::resource('akun', AdminAkunController::class, ['as' => 'admin']);
    Route::resource('menu', AdminMenuController::class, ['as' => 'admin']);

    // ADMIN BERANDA ROUTE
    Route::get('beranda/{bahasa}', [App\Http\Controllers\AdminBerandaController::class, 'index'])->name('admin.beranda.index');
    Route::get('beranda/', function () {
        return redirect('admin/beranda/id');
    });
    Route::resource('beranda/slider', AdminBerandaSliderController::class, ['as' => 'admin']);
    // ADMIN BERANDA ROUTE END


    // ADMIN BERITA ROUTE

    Route::get('berita/', function () {
        return redirect('admin/berita/indonesia');
    });
    Route::get('berita/{bahasa}', [App\Http\Controllers\AdminBeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('berita/create', [App\Http\Controllers\AdminBeritaController::class, 'create'])->name('admin.berita.create');
    Route::get('berita/{bahasa}/{id}', [App\Http\Controllers\AdminBeritaController::class, 'show'])->name('admin.berita.show');
    Route::get('berita/{bahasa}/edit/{id}', [App\Http\Controllers\AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::post('berita', [App\Http\Controllers\AdminBeritaController::class, 'store'])->name('admin.berita.store');
    Route::put('berita/{id}', [App\Http\Controllers\AdminBeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('berita/{id}', [App\Http\Controllers\AdminBeritaController::class, 'destroy'])->name('admin.berita.destroy');

    // ADMIN BERITA ROUTE END

    // ADMIN CONTENT ROUTE
    Route::get('content/create', [App\Http\Controllers\AdminContentController::class, 'create'])->name('admin.content.create');
    Route::get('content/{menu}/{judul}', [App\Http\Controllers\AdminContentController::class, 'show'])->name('admin.content.show');
    Route::get('content/{menu}', [App\Http\Controllers\AdminContentController::class, 'index'])->name('admin.content.index');
    Route::get('content/edit/{menu}/{judul}', [App\Http\Controllers\AdminContentController::class, 'edit'])->name('admin.content.edit');
    Route::post('content', [App\Http\Controllers\AdminContentController::class, 'store'])->name('admin.content.store');
    Route::put('content/{id}', [App\Http\Controllers\AdminContentController::class, 'update'])->name('admin.content.update');
    Route::delete('content/{id}', [App\Http\Controllers\AdminContentController::class, 'destroy'])->name('admin.content.destroy');
    // ADMIN CONTENT ROUTE END


});

Route::get('/{bahasa}/berita', [App\Http\Controllers\UserBeritaController::class, 'index'])->name('user.berita.index');
Route::get('/{bahasa}/berita/{konten}', [App\Http\Controllers\UserBeritaController::class, 'show'])->name('user.berita.show');

Route::get('/{bahasa}', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/{bahasa}/{menu}/{judul}', [App\Http\Controllers\UserController::class, 'content'])->name('user.content');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
