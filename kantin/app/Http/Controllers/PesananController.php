<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

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
        return view('admin/pesananmasuk', ['pesanans' => $pesanans]);
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
        if (!$pesanan) {
            return response()->json(['message' => 'Pesanan not found'], 404);
        }
        return response()->json($pesanan);
    }
}
