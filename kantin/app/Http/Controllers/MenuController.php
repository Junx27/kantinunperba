<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

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
}
