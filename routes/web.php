<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;
use App\Models\Destinasi;
use App\Models\Paket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $paket = Paket::all();
    return view('welcome', compact('paket'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// pemesanan
Route::get('pemesanan', [PemesananController::class, 'index'])->name('view.pemesanan');
Route::get('pemesanan-add/{id}', [PemesananController::class, 'add'])->name('add.pemesanan');
Route::post('pemesanan-store', [PemesananController::class, 'store'])->name('store.pemesanan');
Route::get('pemesanan-edit/{id}', [PemesananController::class, 'edit'])->name('edit.pemesanan');
Route::post('pemesanan-update/{id}', [PemesananController::class, 'update'])->name('update.pemesanan');
Route::get('pemesanan-delete/{id}', [PemesananController::class, 'delete'])->name('delete.pemesanan');

// paket
Route::get('paket', [PaketController::class, 'index'])->name('view.paket');
Route::get('paket-add', [PaketController::class, 'add'])->name('add.paket');
Route::post('paket-store', [PaketController::class, 'store'])->name('store.paket');
Route::get('paket-edit/{id}', [PaketController::class, 'edit'])->name('edit.paket');
Route::post('paket-update/{id}', [PaketController::class, 'update'])->name('update.paket');
Route::get('paket-delete/{id}', [PaketController::class, 'delete'])->name('delete.paket');



