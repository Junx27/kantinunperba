<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $keranjangs = Pembelian::all();
        $pembayarans = Pembayaran::whereIn('metode_pembayaran', ["transfer", "tunai"])->whereIn("status", ["belum"])->get();
        return view('/admin/pesananmasuk', compact('pembayarans', 'keranjangs'))->with('berhasil', 'Pesanan berhasil dibuat');
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
        $keranjangs = Pembelian::all();
        $pembayaran = Pembayaran::find($id);
        $pembayarans = Pembayaran::whereIn('metode_pembayaran', ["tunai", "transfer"])->get();
        return view('/admin/detailpesanan', compact('pembayarans', 'keranjangs', 'pembayaran'))->with('berhasil', 'Pesanan berhasil dibuat');
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
        return redirect('/admin/daftarmenu')->with('berhasil', 'Pesanan dikirim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
