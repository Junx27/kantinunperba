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
Route::get('admin/dasboard', function () {
    return view('/admin/dasboard');
});
Route::get('user/dasboard', function () {
    return view('/user/dasboard');
});
Route::get('admin/login', function () {
    return view('/admin/login');
});
Route::get('user/login', function () {
    return view('/user/login');
});
Route::get('user/register', function () {
    return view('/user/register');
});
Route::get('admin/register', function () {
    return view('/admin/register');
});
Route::get('admin/menu', function () {
    return view('/admin/menu');
});
Route::get('user/menu', function () {
    return view('/user/menu');
});