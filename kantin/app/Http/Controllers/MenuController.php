<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Konsumen;


class MenuController extends Controller
{
    public function getMenu()
    {
        $menus = Menu::all();
        return view('user/daftarmenu', ['menus' => $menus]);
    }
    public function getMenuAdmin()
    {
        $menus = Menu::all();
        return view('admin/daftarmenu', ['menus' => $menus]);
    }
    public function getLengthMenu()
    {
        $menus = Menu::all();
        $pesanans = Pesanan::all();
        $konsumens = Konsumen::all();
        $users = User::all();
        return view('admin/dasboard', compact('pesanans', 'menus', 'konsumens', 'users'));
    }
    public function iconMenu()
    {
        $menus = Menu::all();
        $pesanans = Pesanan::all();
        return view('admin/profiladmin', compact('pesanans', 'menus'));
    }
    public function konsumen()
    {
        $konsumens = Konsumen::all();
        $users = User::all();
        return view('admin/datapelanggan', compact('konsumens', 'users'));
    }
}
