<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $user = User::where('id', $userId)->first();
        return view("/user/profileuser", compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $user = User::where('id', $userId)->find($id);
        return view('/user/editprofile', compact('user',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateddata = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nomor' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        if ($request->file('gambar')) {
            if ($request->gambar_lama) {
                Storage::delete($request->gambar_lama);
            }
            $validateddata['gambar'] = $request->file('gambar')->store('gambar-profil');
        }

        User::where('id', $id)->update($validateddata);
        return redirect('/user/profileuser')->with('berhasil', 'Perubahan konsumen berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
