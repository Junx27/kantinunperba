<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfilAdminController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $menus = DaftarMenu::all();
        $users = User::all();
        $user = User::where('id', $userId)->first();
        return view('admin/profiladmin', compact('menus', 'users', 'user'));
    }
}
