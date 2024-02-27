<?php

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

Route::get('admin/login', function () {
    return view('admin/login');
});
Route::get('admin/register', function () {
    return view('admin/register');
});
Route::get('admin/dasboard', function () {
    return view('admin/dasboard');
});
Route::get('admin/daftarmenu', function () {
    return view('admin/daftarmenu');
});
Route::get('admin/historypenjualan', function () {
    return view('admin/historypenjualan');
});
Route::get('admin/datapelanggan', function () {
    return view('admin/datapelanggan');
});
Route::get('admin/pesananmasuk', function () {
    return view('admin/pesananmasuk');
});
Route::get('admin/tambahmenu', function () {
    return view('admin/tambahmenu');
});
Route::get('/', function () {
    return view('user/login');
});
Route::get('user/register', function () {
    return view('user/register');
});
Route::get('user/keranjang', function () {
    return view('user/keranjang');
});
Route::get('user/daftarmenu', function () {
    return view('user/daftarmenu');
});
Route::get('user/historypembelian', function () {
    return view('user/historypembelian');
});
Route::get('user/editprofil', function () {
    return view('user/editprofil');
});
Route::get('user/dasboard', function () {
    return view('user/dasboard');
});