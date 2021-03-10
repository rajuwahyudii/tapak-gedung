<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AdminContentController;
use App\Http\Controllers\AdminMenuController;

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
    // Route::resource('content', AdminContentController::class, ['as' => 'admin']);
    Route::resource('menu', AdminMenuController::class, ['as' => 'admin']);

    Route::get('content/create', [App\Http\Controllers\AdminContentController::class, 'create'])->name('admin.content.create');
    Route::get('content/{menu}', [App\Http\Controllers\AdminContentController::class, 'index'])->name('admin.content.index');
    Route::get('content/{menu}/{judul}', [App\Http\Controllers\AdminContentController::class, 'show'])->name('admin.content.show');
    Route::get('content/edit/{menu}/{judul}', [App\Http\Controllers\AdminContentController::class, 'edit'])->name('admin.content.edit');
    Route::post('content', [App\Http\Controllers\AdminContentController::class, 'store'])->name('admin.content.store');
    Route::put('content/{id}', [App\Http\Controllers\AdminContentController::class, 'update'])->name('admin.content.update');
    Route::delete('content/{id}', [App\Http\Controllers\AdminContentController::class, 'destroy'])->name('admin.content.destroy');
});
