<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function tambah($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->jumlah += 1;
        $keranjang->subtotal = $keranjang->harga * $keranjang->jumlah;
        $keranjang->save();

        return redirect('user/keranjang')->with('success', 'Jumlah item berhasil diperbarui.');
    }


    public function kurang($id)
    {
        $keranjang = Keranjang::find($id);
        if ($keranjang->jumlah > 1) {
            $keranjang->jumlah -= 1;
            $keranjang->subtotal = $keranjang->harga * $keranjang->jumlah;
            $keranjang->save();
        }

        return redirect('user/keranjang')->with('success', 'Jumlah item berhasil diperbarui.');
    }
}
