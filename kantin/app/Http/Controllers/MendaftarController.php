<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MendaftarController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function create(Request $request)
    {
        $validateddata = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nomor' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        if ($request->file('gambar')) {
            $validateddata['gambar'] = $request->file('gambar')->store('gambar-profil');
        }

        User::create($validateddata);
        return redirect('/login');
    }
}
