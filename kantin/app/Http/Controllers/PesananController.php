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
        return view('admin/pesananmasuk', compact('pesanans'));
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
}
