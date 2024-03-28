<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = DaftarMenu::all();
        return view('admin/daftarmenu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/tambahmenu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateddata = $request->validate([
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        if ($request->file('gambar')) {
            $validateddata['gambar'] = $request->file('gambar')->store('gambar-menu');
        }

        DaftarMenu::create($validateddata);
        return redirect('/admin/daftarmenu')->with('berhasil', 'penambahan menu telah berhasil');
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
    public function destroy(string $id)
    {
        // Temukan pengguna berdasarkan ID
        $menu = DaftarMenu::find($id);

        // Pastikan pengguna ditemukan
        if ($menu) {
            // Hapus gambar terkait jika ada
            if ($menu->gambar) {
                Storage::delete($menu->gambar);
            }

            // Hapus pengguna dari database
            $menu->delete();

            // Redirect ke halaman index dengan pesan sukses
            return redirect("/admin/daftarmenu")->with('success', 'Data pengguna dan gambar berhasil dihapus');
        } else {
            // Jika pengguna tidak ditemukan, kembalikan dengan pesan kesalahan
            return redirect("/admin/daftarmenu")->with('error', 'Pengguna tidak ditemukan');
        }
    }
}
