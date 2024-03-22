<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;


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
        return view('admin/dasboard', compact('pesanans', 'menus'));
    }
    public function iconMenu()
    {
        $menus = Menu::all();
        $pesanans = Pesanan::all();
        return view('admin/profiladmin', compact('pesanans', 'menus'));
    }
}
