<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Konsumen;
use App\Models\DaftarMenu;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function getMenu()
    {
        $makanans = DaftarMenu::where('kategori', 'makanan')->get();
        $minumans = DaftarMenu::where('kategori', 'minuman')->get();
        return view('user/daftarmenu', compact('makanans', 'minumans'));
    }
    public function store(Request $request, string $id)
    {
        $menu = DaftarMenu::find($id);
        $userId = Auth::id();

        // Cek apakah produk sudah ada dalam keranjang untuk user yang sedang login
        $existingItem = Keranjang::where('menu_id', $menu->id)
            ->where('user_id', $userId)
            ->first();

        if ($existingItem) {
            // Jika produk sudah ada dalam keranjang, update jumlah dan subtotal
            $existingItem->jumlah += 1;
            $existingItem->subtotal = $existingItem->jumlah * $menu->harga;
            $existingItem->save();
        } else {
            // Jika produk belum ada dalam keranjang, buat entri baru
            $data = [
                'nama' => $menu->nama_menu,
                'harga' => $menu->harga,
                'jumlah' => 1,
                'subtotal' => $menu->harga * 1,
                'catatan' => $menu->deskripsi,
                'menu_id' => $menu->id,
                'user_id' => $userId,
            ];
            Keranjang::create($data);
        }

        return redirect('user/daftarmenu')->with('berhasil', 'Berhasil menambahkan data');
    }


    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function index()
    {
        $userId = Auth::id();
        $menus = Keranjang::where('user_id', $userId)->get();
        return view('user/keranjang', compact('menus'));
    }
}
