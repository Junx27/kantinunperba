<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $pembelians = Pembelian::where("user_id", $userId)->get();
        $pembayarans = Pembayaran::where("user_id", $userId)->whereIn('metode_pembayaran', ["tunai", "transfer"])->whereIn("status", ["dikirim", "belum", "diterima"])->get();
        return view("user/historypembelian", compact("pembelians", 'pembayarans'));
    }
    public function admin()
    {
        $userId = Auth::user()->id;
        $status = "selesai";
        $pembelians = Pembelian::all();
        $pembayarans = Pembayaran::whereIn('metode_pembayaran', ["tunai", "transfer"])->whereIn("status", ["dihapus", "diterima"])->get();
        return view("admin/historypenjualan", compact("pembelians", 'pembayarans'));
    }
    public function detailriwayat()
    {
        $userId = Auth::user()->id;
        $status = "selesai";
        $pembelians = Pembelian::all();
        $pembayarans = Pembayaran::whereIn('metode_pembayaran', ["tunai", "transfer"])->where("status", $status)->get();
        return view("admin/detailhistorypenjualan", compact("pembelians", 'pembayarans'));
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
        $userId = Auth::user()->id;
        $pembelians = Pembelian::where("user_id", $userId)->get();
        $pembayarans = Pembayaran::where("user_id", $userId)->whereIn('metode_pembayaran', ["tunai", "transfer"])->whereIn("status", ["dikirim", "belum", "diterima"])->get();
        $pesanan = Pembayaran::where("id", $id)->where("user_id", $userId)->find($id);
        return view("user/detailhistorypembelian", compact("pembelians", 'pembayarans', "pesanan"));
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
        $validateddata = $request->validate([
            'status' => 'required',
        ]);
        Pembayaran::where('id', $id)->update($validateddata);
        return redirect('/user/daftarmenu')->with('berhasil', 'Riwayat pesanan telah dihapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        if ($pembayaran->gambar) {
            Storage::delete($pembayaran->gambar);
        }
        Pembelian::where('pembayaran_id', $pembayaran->id)->delete();
        $pembayaran->delete();
        return redirect('/admin/daftarmenu')->with('berhasil', 'Keranjang menu telah dihapus');
    }
}
