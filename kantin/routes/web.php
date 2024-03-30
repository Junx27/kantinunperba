<?php

use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MendaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembayaranController;
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
    Route::get('/', function () {
        return view('landingpage');
    })->name('login');
    Route::get('/register', [UserController::class, 'create']);
    Route::post('/register', [UserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'login']);
});

Route::middleware(['auth', 'userAkses:admin'])->get('/home', function () {
    return redirect('admin/dashboard');
});
Route::middleware(['auth', 'userAkses:user'])->get('/home', function () {
    return redirect('user/daftarmenu');
});

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [MenuController::class, "dashboard"])->middleware('userAkses:admin');
    Route::get('admin/daftarmenu', [MenuController::class, "getMenuAdmin"])->middleware('userAkses:admin');
    Route::get('admin/historypenjualan', [PesananController::class, 'riwayat'])->middleware('userAkses:admin');
    Route::resource('admin/datapelanggan', UserController::class)->middleware('userAkses:admin');
    Route::get('admin/pesananmasuk', [PesananController::class, 'index'])->middleware('userAkses:admin');
    Route::get('admin/pesananmasuk/{id}', [PesananController::class, 'show'])->middleware('userAkses:admin');
    Route::get('admin/historypenjualan/{id}', [PesananController::class, 'detailriwayat'])->middleware('userAkses:admin');
    Route::resource('admin/daftarmenu', DaftarMenuController::class)->middleware('userAkses:admin');
    Route::get('admin/profiladmin', [ProfilAdminController::class, "index"])->middleware('userAkses:admin');
    Route::get('admin/blankpagekonsumen', function () {
        return view('admin/blankpagekonsumen');
    })->middleware('userAkses:admin');
    Route::get('admin/blankpagemenu', function () {
        return view('admin/blankpagemenu');
    })->middleware('userAkses:admin');
    Route::get('admin/detailpesanan', function () {
        return view('admin/detailpesanan');
    })->middleware('userAkses:admin');
    Route::get('/user/blankpagemenu', function () {
        return view('user/blankpagemenu');
    })->middleware('userAkses:user');
    Route::get('user/keranjang/{id}', [MenuController::class, 'store'])->middleware('userAkses:user');
    Route::get('user/keranjang', [MenuController::class, 'index'])->middleware('userAkses:user');
    Route::resource('user/pembayaran', PembayaranController::class)->middleware('userAkses:user');
    Route::get('user/historypembelian', function () {
        return view('user/historypembelian');
    })->middleware('userAkses:user');
    Route::resource('user/profileuser', ProfilUserController::class)->middleware('userAkses:user');
    Route::get('user/daftarmenu', [MenuController::class, "getMenu"])->middleware('userAkses:user');
    Route::get('/logout', [SessionController::class, 'logout']);
    Route::post('/tambah/{id}', [KeranjangController::class, "tambah"])->middleware('userAkses:user');
    Route::post('/kurang/{id}', [KeranjangController::class, "kurang"])->middleware('userAkses:user');
    Route::delete('user/keranjang/{id}', [KeranjangController::class, "hapus"])->middleware('userAkses:user');
});
