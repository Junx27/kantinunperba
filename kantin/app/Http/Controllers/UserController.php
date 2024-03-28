<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsumens = Konsumen::all();
        $users = User::all();
        return view('admin/datapelanggan', compact('konsumens', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            $validateddata['gambar'] = $request->file('gambar')->store('gambar-profil');
        }

        User::create($validateddata);
        return redirect('/login')->with('berhasil', 'Pendaftaran konsumen berhasil, silahkan login disini!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        // Pastikan pengguna ditemukan
        if ($user) {
            // Hapus gambar terkait jika ada
            if ($user->gambar) {
                Storage::delete($user->gambar);
            }

            // Hapus pengguna dari database
            $user->delete();

            // Redirect ke halaman index dengan pesan sukses
            return redirect("admin/datapelanggan")->with('success', 'Data pengguna dan gambar berhasil dihapus');
        } else {
            // Jika pengguna tidak ditemukan, kembalikan dengan pesan kesalahan
            return redirect("admin/datapelanggan")->with('error', 'Pengguna tidak ditemukan');
        }
    }
}
