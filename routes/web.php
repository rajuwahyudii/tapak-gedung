<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminAkunController;
use App\Http\Controllers\AdminContentController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminWisataController;
use App\Http\Controllers\AdminBerandaController;
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

// Route::get('/', function () {
//     return redirect('/id');
// });
// Route::get('/', function () {
//     return redirect('/id');
// });

Auth::routes();

Route::prefix('admin')->group(function () {

    // ADMIN CONTENT ROUTE
    Route::get('content/status/{id}', [App\Http\Controllers\AdminContentController::class, 'status'])->name('admin.content.status');
    Route::get('content/create', [App\Http\Controllers\AdminContentController::class, 'create'])->name('admin.content.create');
    Route::get('content/{menu}/{judul}', [App\Http\Controllers\AdminContentController::class, 'show'])->name('admin.content.show');
    Route::get('content/{menu}', [App\Http\Controllers\AdminContentController::class, 'index'])->name('admin.content.index');
    Route::get('content/edit/{menu}/{judul}', [App\Http\Controllers\AdminContentController::class, 'edit'])->name('admin.content.edit');
    Route::post('content', [App\Http\Controllers\AdminContentController::class, 'store'])->name('admin.content.store');
    Route::put('content/{id}', [App\Http\Controllers\AdminContentController::class, 'update'])->name('admin.content.update');
    Route::delete('content/{id}', [App\Http\Controllers\AdminContentController::class, 'destroy'])->name('admin.content.destroy');
    // ADMIN CONTENT ROUTE END

    Route::get('galeri/{wisata_id}', [App\Http\Controllers\AdminGaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('galeri/create/{wisata_id}', [App\Http\Controllers\AdminGaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('galeri', [App\Http\Controllers\AdminGaleriController::class, 'store'])->name('admin.galeri.store');
    Route::delete('galeri/{wisata_id}/{id}', [App\Http\Controllers\AdminGaleriController::class, 'destroy'])->name('admin.galeri.destroy');
    // ADMIN GALERI ROUTE


    // ADMIN GALERI ROUTE END

    Route::resource('', AdminDashboardController::class, ['as' => 'admin']);
    Route::resource('akun', AdminAkunController::class, ['as' => 'admin']);
    Route::resource('menu', AdminMenuController::class, ['as' => 'admin']);
    Route::resource('wisata', AdminWisataController::class, ['as' => 'admin']);

    // ADMIN BERANDA ROUTE
    Route::get('beranda/', [App\Http\Controllers\AdminBerandaController::class, 'index'])->name('admin.beranda.index');
    Route::put('beranda/youtube/{id}', [App\Http\Controllers\AdminBerandaController::class, 'youtube'])->name('admin.beranda.youtube');
    // Route::get('beranda/', function () {
    //     return redirect('admin/beranda');
    // });
    // ADMIN BERANDA ROUTE END


});
Route::get('wisata/{slug}', [App\Http\Controllers\UserBlogController::class, 'wisata'])->name('user.blog.wisata');
Route::get('blog/{kategori}', [App\Http\Controllers\UserBlogController::class, 'index'])->name('user.blog.index');
Route::get('blog/{kategori}/{slug}', [App\Http\Controllers\UserBlogController::class, 'show'])->name('user.blog.show');

Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
// Route::get('/{bahasa}/{menu}/{slug}', [App\Http\Controllers\UserController::class, 'content'])->name('user.content');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
