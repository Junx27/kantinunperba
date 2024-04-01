<?php

use App\Http\Controllers\BlankPageController;
use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MendaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\ProfilUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomePageController::class, 'LandingPage'])->name('login');
    Route::get('/register', [UserController::class, 'create']);
    Route::post('/register', [UserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'login']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomePageController::class, 'HomeAdmin'])->middleware('userAkses:admin');
    Route::get('admin/dashboard', [MenuController::class, "dashboard"])->middleware('userAkses:admin');
    Route::get('admin/daftarmenu', [MenuController::class, "getMenuAdmin"])->middleware('userAkses:admin');
    Route::get('admin/historypenjualan', [HistoryController::class, 'admin'])->middleware('userAkses:admin');
    Route::delete('admin/historypenjualan/{id}', [HistoryController::class, 'destroy'])->middleware('userAkses:admin');
    Route::get('admin/historypenjualan/{id}', [HistoryController::class, 'detailriwayat'])->middleware('userAkses:admin');
    Route::resource('admin/datapelanggan', UserController::class)->middleware('userAkses:admin');
    Route::resource('admin/pesananmasuk', PembelianController::class)->middleware('userAkses:admin');
    Route::resource('admin/daftarmenu', DaftarMenuController::class)->middleware('userAkses:admin');
    Route::get('admin/profiladmin', [ProfilAdminController::class, "index"])->middleware('userAkses:admin');
    Route::get('admin/blankpagekonsumen', [BlankPageController::class, 'blankUser'])->middleware('userAkses:admin');
    Route::get('admin/blankpagemenu', [BlankPageController::class, 'blankMenuAdmin'])->middleware('userAkses:admin');
    Route::get('/home', [HomePageController::class, 'HomeUser'])->middleware('userAkses:user');
    Route::get('user/keranjang/{id}', [MenuController::class, 'store'])->middleware('userAkses:user');
    Route::get('user/keranjang', [MenuController::class, 'index'])->middleware('userAkses:user');
    Route::resource('user/pembayaran', PembayaranController::class)->middleware('userAkses:user');
    Route::resource('user/historypembelian', HistoryController::class)->middleware('userAkses:user');
    Route::resource('user/profileuser', ProfilUserController::class)->middleware('userAkses:user');
    Route::get('user/daftarmenu', [MenuController::class, "getMenu"])->middleware('userAkses:user');
    Route::post('/tambah/{id}', [KeranjangController::class, "tambah"])->middleware('userAkses:user');
    Route::post('/kurang/{id}', [KeranjangController::class, "kurang"])->middleware('userAkses:user');
    Route::delete('user/keranjang/{id}', [KeranjangController::class, "hapus"])->middleware('userAkses:user');
    Route::get('/user/blankpagemenu', [BlankPageController::class, 'blankMenuUser'])->middleware('userAkses:user');
    Route::get('/logout', [SessionController::class, 'logout']);
});
