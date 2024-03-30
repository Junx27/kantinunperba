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
    public function getMenu(Request $request)
    {
        $cari = $request->get('cari');
        $userId = Auth::id();
        $keranjangs = Keranjang::where('user_id', $userId)->where('pembayaran_id', null)->get();
        $makanans = DaftarMenu::where('kategori', 'makanan')->where('nama_menu', 'like', '%' . $cari . '%')->get();
        $minumans = DaftarMenu::where('kategori', 'minuman')->where('nama_menu', 'like', '%' . $cari . '%')->get();
        if ($makanans->isEmpty() && $minumans->isEmpty()) {
            return redirect('/user/blankpagemenu')->with('gagal', 'menu tidak ditemukan');
        } else {

            return view('user/daftarmenu', compact('makanans', 'minumans', 'keranjangs'));
        }
    }
    public function store(Request $request, string $id)
    {
        $menu = DaftarMenu::find($id);
        $userId = Auth::id();
        $existingItem = Keranjang::where('menu_id', $menu->id)
            ->where('user_id', $userId)
            ->first();

        if ($existingItem) {
            $existingItem->jumlah += 1;
            $existingItem->subtotal = $existingItem->jumlah * $menu->harga;
            $existingItem->save();
        } else {
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
        $menus = DaftarMenu::all();
        $pesanans = Keranjang::all();
        $users = User::all();
        return view('admin/dashboard', compact('menus', 'pesanans', 'users'));
    }
    public function index()
    {
        $userId = Auth::id();
        $menus = Keranjang::where('user_id', $userId)->where('pembayaran_id', null)->get();
        return view('user/keranjang', compact('menus'));
    }
}
