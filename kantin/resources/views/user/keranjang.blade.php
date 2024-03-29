@extends("layouts.sidebar")

@section("container")
<div class="text-xs bg-white rounded-lg p-5">
    <h1 class="text-center py-2">Keranjang</h1>
    <p class="mt-10">Daftar Pesanan</p>
    <div class="mt-5">
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="border p-2 text-center">Items</th>
                    <th class="border p-2 text-center">Nama</th>
                    <th class="border p-2 text-center">Harga</th>
                    <th class="border p-2 text-center">Jumlah</th>
                    <th class="border p-2 text-center">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                $totalKeseluruhan = 0;
                @endphp
                @foreach ($menus as $menu)
                <tr>
                    <td class="border p-2 text-center">
                        <img src="{{ asset('storage/' . $menu->menu->gambar)}}" alt="Product" class="w-20 h-20 object-cover rounded-lg">
                    </td>
                    <td class="border p-2 text-center">{{ $menu->nama }}</td>
                    <td class="border p-2 text-center" id="harga{{ $menu->id }}">Rp {{ number_format($menu->harga, 2, ',', '.') }}</td>
                    <td class="border p-2 text-center">
                        <form action="/kurang/{{ $menu->id }}" method="POST">
                            @csrf
                            <button type="submit">Kurang</button>
                        </form>
                        <span class="mx-2" id="product{{ $menu->id }}">{{ $menu->jumlah }}</span>
                        <form action="/tambah/{{ $menu->id }}" method="POST">
                            @csrf
                            <button type="submit">Tambah</button>
                        </form>
                    </td>
                    @php
                    $subtotal = $menu->harga * $menu->jumlah;
                    $totalKeseluruhan += $subtotal;
                    @endphp
                    <td class="border p-2 text-center" id="subtotal{{ $menu->id }}">Rp {{ number_format($subtotal, 2, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="border p-2 text-right">Total Keseluruhan:</td>
                    <td class="border p-2 text-center" id="totalKeseluruhan">Rp {{ number_format($totalKeseluruhan, 2, ',', '.') }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@php
$judul = "Keranjang";
@endphp
