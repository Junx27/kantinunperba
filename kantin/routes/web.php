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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/konsumen', function () {
    return view('konsumen');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/keranjang', function () {
    return view('/user/keranjang');
});
Route::get('admin/keranjang', function () {
    return view('/admin/keranjang');
});
Route::get('admin/daftarmenu', function () {
    return view('/admin/daftarmenu');
});
Route::get('admin/login', function () {
    return view('/admin/login');
});