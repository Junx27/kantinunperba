<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::where('user_id', $userId)->get();
        $pembayarans = Pembayaran::where('user_id', $userId)->get();
        return view('/user/pesanansaya', compact('pembayarans', 'keranjangs'))->with('berhasil', 'Pesanan berhasil dibuat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user/pembayaran");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemesan = "ID" . auth()->id();
        $idpesanan = Carbon::now()->format('Ymd');
        $totalKeseluruhan = 0; // Definisikan variabel $totalKeseluruhan
        $validateddata = $request->validate([
            'nama' => 'required',
        ]);
        $validateddata["user_id"] = auth()->id();
        $validateddata["id_pesanan"] = $pemesan . $idpesanan;

        $totalKeseluruhan = 0;

        $pembayaran = Pembayaran::create($validateddata);

        $keranjang = Keranjang::where('pembayaran_id', null)->get();
        foreach ($keranjang as $item) {
            $subtotal = $item->harga * $item->jumlah;
            $totalKeseluruhan += $subtotal;
            if (!$item->pembayaran_id) {
                $item->update(['pembayaran_id' => $pembayaran->id]);
            }
        }

        $pembayaran->update(['total_bayar' => $totalKeseluruhan]);

        return redirect('/user/pembayaran')->with('berhasil', 'Pesanan berhasil dibuat');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $pesanans = Pembayaran::where('user_id', $userId)->get();
        $pembayaran = Pembayaran::where('user_id', $userId)->find($id);
        $keranjangs = Keranjang::where('pembayaran_id', $id)->where('user_id', $userId)->get();
        return view('user/editpembayaran', compact('pembayaran', 'keranjangs', 'pesanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateddata = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'total_bayar' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'image|file|max:1024',
            'status_pesanan' => 'required',
        ]);
        $validateddata["user_id"] = auth()->id();
        if ($request->file('gambar')) {
            $validateddata['gambar'] = $request->file('gambar')->store('gambar-menu');
        }

        Pembayaran::create($validateddata);
        return redirect('/user/daftarmenu')->with('berhasil', 'penambahan menu telah berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
