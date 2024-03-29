<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Menu;

class PesananController extends Controller
{
    /**
     * Mengambil semua data pesanan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanans = Pesanan::all();
        $menus = Menu::all();
        return view('admin/pesananmasuk', compact('pesanans', 'menus'));
    }

    /**
     * Mengambil data pesanan berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanans = Pesanan::all();
        $menus = Menu::all();
        if (!$pesanan) {
            return response()->json(['message' => 'Pesanan not found'], 404);
        }
        return view('admin/detailpesanan', compact('pesanan', 'pesanans', 'menus'));
    }
    public function riwayat()
    {
        $pesanans = Pesanan::all();
        $menus = Menu::all();
        return view('admin/historypenjualan', compact('pesanans', 'menus'));
    }
    public function detailriwayat($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanans = Pesanan::all();
        $menus = Menu::all();
        if (!$pesanan) {
            return response()->json(['message' => 'Pesanan not found'], 404);
        }
        return view('admin/historypenjualan', compact('pesanan', 'pesanans', 'menus'));
    }
}
