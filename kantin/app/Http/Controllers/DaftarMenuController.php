<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DaftarMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $makanan = 'makanan';
        $minuman = 'minuman';
        $makanans = DaftarMenu::where('user_id', $userId)->where('kategori', $makanan)->get();
        $minumans = DaftarMenu::where('user_id', $userId)->where('kategori', $minuman)->get();
        return view('admin/daftarmenu', compact('makanans', 'minumans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $menus = DaftarMenu::where('user_id', $userId)->get();
        return view('admin/tambahmenu', compact('menus'));
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
            'deskripsi' => 'required',
        ]);
        $validateddata["user_id"] = auth()->id();
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
        $userId = Auth::id();
        $menu = DaftarMenu::where('user_id', $userId)->find($id);
        $menus = DaftarMenu::where('user_id', $userId)->get();
        return view('admin/detailmenu', compact('menu', 'menus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $menu = DaftarMenu::where('user_id', $userId)->find($id);
        $menus = DaftarMenu::where('user_id', $userId)->get();
        return view('admin/editmenu', compact('menu', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateddata = $request->validate([
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'gambar' => 'image|file|max:1024',
            'deskripsi' => 'required',
        ]);
        if ($request->file('gambar')) {
            if ($request->gambar_lama) {
                Storage::delete($request->gambar_lama);
            }
            $validateddata['gambar'] = $request->file('gambar')->store('gambar-menu');
        }

        DaftarMenu::where('id', $id)->update($validateddata);
        return redirect('/admin/daftarmenu')->with('berhasil', 'penambahan menu telah berhasil');
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
