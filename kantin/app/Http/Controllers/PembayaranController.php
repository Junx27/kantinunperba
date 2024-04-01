<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pembayaran;
use App\Models\Pembelian;
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
        $keranjangs = Pembelian::where('user_id', $userId)->get();
        $pembayarans = Pembayaran::where('user_id', $userId)->where('metode_pembayaran', 'Pilih Metode Pembayaran')->get();
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
        $totalKeseluruhan = 0;
        $validateddata = $request->validate([
            'nama' => 'required',
        ]);
        $validateddata["user_id"] = auth()->id();
        $validateddata["id_pesanan"] = $pemesan . $idpesanan;

        $pembayaran = Pembayaran::create($validateddata);

        $keranjang = Keranjang::where('pembayaran_id', null)->get();
        foreach ($keranjang as $item) {
            $subtotal = $item->harga * $item->jumlah;
            $totalKeseluruhan += $subtotal;
            if (!$item->pembayaran_id) {
                $item->update(['pembayaran_id' => $pembayaran->id]);
            }
        }
        $userId = Auth::id();
        $keranjangs = Keranjang::where('pembayaran_id', $pembayaran->id)->where('user_id', $userId)->get();
        foreach ($keranjangs as $keranjang) {
            Pembelian::create([
                'nama' => $keranjang->nama,
                'harga' => $keranjang->harga,
                'jumlah' => $keranjang->jumlah,
                'subtotal' => $keranjang->subtotal,
                'menu_id' => $keranjang->menu_id,
                'user_id' => $keranjang->user_id,
                'pembayaran_id' => $keranjang->pembayaran_id,
            ]);
        }
        Keranjang::where('pembayaran_id', $pembayaran->id)->where('user_id', $userId)->delete();

        $pembayaran->update(['total_bayar' => $totalKeseluruhan]);

        return redirect('/user/pembayaran')->with('berhasil', 'Pesanan berhasil dibuat');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userId = Auth::id();
        $pembayaran = Pembayaran::where('user_id', $userId)->find($id);
        $keranjangs = Pembelian::where('user_id', $userId)->get();
        $pembayarans = Pembayaran::where('user_id', $userId)->where('metode_pembayaran', 'Pilih Metode Pembayaran')->get();
        return view('/user/detailpesanansaya', compact('pembayarans', 'keranjangs', 'pembayaran'))->with('berhasil', 'Pesanan berhasil dibuat');
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
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'image|file|max:1024',
            'status_pesanan' => 'required',
            'catatan' => 'required',
        ]);
        if ($request->file('gambar')) {
            $validateddata['gambar'] = $request->file('gambar')->store('bukti-pembayaran');
        }

        Pembayaran::where('id', $id)->update($validateddata);
        return redirect('/user/daftarmenu')->with('berhasil', 'Pembayaran telah berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userId = Auth::id();

        $pembayaran = Pembayaran::where('id', $id)
            ->where('user_id', $userId)
            ->first();

        if (!$pembayaran) {
            return redirect('/user/daftarmenu')->with('error', 'Pembayaran tidak ditemukan');
        }
        Pembelian::where('pembayaran_id', $pembayaran->id)
            ->where('user_id', $userId)
            ->delete();

        $pembayaran->delete();
        return redirect('/user/daftarmenu')->with('berhasil', 'Keranjang menu telah dihapus');
    }
}
