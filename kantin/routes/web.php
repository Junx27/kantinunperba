<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;


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

Route::get('admin/login', function () {
    return view('admin/login');
});
Route::get('admin/landingpage', function () {
    return view('admin/landingpage');
});
Route::get('admin/register', function () {
    return view('admin/register');
});
Route::get('admin/dasboard', [MenuController::class, "getLengthMenu"]);
Route::get('admin/daftarmenu', [MenuController::class, "getMenuAdmin"]);
Route::get('admin/historypenjualan', function () {
    return view('admin/historypenjualan');
});
Route::get('admin/datapelanggan', [MenuController::class, "konsumen"]);
Route::get('admin/pesananmasuk', [PesananController::class, 'index']);
Route::get('admin/pesananmasuk/{id}', [PesananController::class, 'show']);
Route::get('admin/tambahmenu', function () {
    return view('admin/tambahmenu');
});
Route::get('admin/editmenu', function () {
    return view('admin/editmenu');
});
Route::get('admin/profiladmin', [MenuController::class, "iconMenu"]);
Route::get('admin/kritik&saran', function () {
    return view('admin/kritik&saran');
});
Route::get('admin/detailpesanan', function () {
    return view('admin/detailpesanan');
});
Route::get('user/login', function () {
    return view('user/login');
});
Route::get('user/register', function () {
    return view('user/register');
});
Route::get('user/keranjang', function () {
    return view('user/keranjang');
});
Route::get('user/daftarmenu', [MenuController::class, "getMenu"]);
Route::get('user/historypembelian', function () {
    return view('user/historypembelian');
});
Route::get('user/editprofil', function () {
    return view('user/editprofil');
});
Route::get('user/dasboard', function () {
    return view('user/dasboard');
});
Route::get('user/strukpemesanan', function () {
    return view('user/strukpemesanan');
});
Route::get('user/metodepembayaran', function () {
    return view('user/metodepembayaran');
});
Route::get('user/pembayaranBank', function () {
    return view('user/pembayaranBank');
});
Route::get('user/pembayaranDana', function () {
    return view('user/pembayaranDana');
});
Route::get('/', function () {
    return view('user/landingpage');
});
Route::get('user/profiluser', function () {
    return view('user/profiluser');
});
Route::get('user/kritik&saran', function () {
    return view('user/kritik&saran');
});
Route::get('user/pesanansaya', function () {
    return view('user/pesanansaya');
});
Route::get('user/pembayarantunai', function () {
    return view('user/pembayarantunai');
});
Route::get('user/deskripsi', function () {
    return view('user/deskripsi');
});
