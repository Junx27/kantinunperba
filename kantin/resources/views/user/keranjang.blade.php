@extends("layouts.sidebar")
@php
    $data = count($menus);
@endphp

@section("container")
<div class="text-xs bg-white w-sreen h-screen rounded-lg p-5">
    @if ($data == 0)
        <div class="my-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Belum ada pesanan!</strong>
        </div>
    @endif
    <p class="font-bold text-center sticky top-0 bg-white p-4">Daftar Pesanan</p>
    <div class="mt-5">
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="border p-2 text-center">No.</th>
                    <th class="border p-2 text-center">Detail</th>
                    <th class="border p-2 text-center">Nama</th>
                    <th class="border p-2 text-center">Harga</th>
                    <th class="border p-2 text-center">Jumlah</th>
                    <th class="border p-2 text-center">Sub Total</th>
                    <th class="border p-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $totalKeseluruhan = 0;
                @endphp
                @foreach ($menus as $index => $menu)
                <tr>
                    <td class="border p-2 text-center">{{ $index + 1}}</td>
                    <td class="border p-2 text-center w-32">
                        <img src="{{ asset('storage/' . $menu->menu->gambar)}}" alt="Product" class="w-full h-20 object-cover rounded-lg">
                    </td>
                    <td class="border p-2 text-center capitalize font-bold">{{ $menu->nama }}</td>
                    <td class="border p-2 text-center" id="harga{{ $menu->id }}">Rp {{ number_format($menu->harga, 2, ',', '.') }}</td>
                    <td class="border p-2 text-center">
                        <div class="flex justify-center">
                            <form action="/kurang/{{ $menu->id }}" method="POST">
                                @csrf
                                <button type="submit">
                                    <img src="{{ asset('images/icons/minus-circle.png') }}" alt="Ikon" class="w-5">
                                </button>
                            </form>
                            <span class="mx-2" id="product{{ $menu->id }}">{{ $menu->jumlah }}</span>
                            <form action="/tambah/{{ $menu->id }}" method="POST">
                                @csrf
                                <button type="submit">
                                    <img src="{{ asset('images/icons/add.png') }}" alt="Ikon" class="w-5">
                                </button>
                            </form>
                        </div>
                    </td>
                    @php
                    $subtotal = $menu->harga * $menu->jumlah;
                    $totalKeseluruhan += $subtotal;
                    @endphp
                    <td class="border p-2 text-center" id="subtotal{{ $menu->id }}">Rp {{ number_format($subtotal, 2, ',', '.') }}</td>
                    <td class="border-r border-b p-2 flex justify-center py-10">
                        <form action="/user/keranjang/{{ $menu->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @method('delete')
                            @csrf
                            <button type="submit">
                                <img src="{{ asset('images/icons/trash.png') }}" alt="Ikon" class="w-5">
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="font-bold border p-2 text-start">Total Keseluruhan:</td>
                    <td colspan="1" class="font-bold border-b border-r p-2 text-center" id="totalKeseluruhan">Rp {{ number_format($totalKeseluruhan, 2, ',', '.') }}</td>
                    <td colspan="5" class="font-bold border p-4 text-center">
                        <a href="/user/pembayaran/create" class="text-xs bg-emerald-500 p-2 rounded mt-20 text-white">Pesan sekarang</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@php
$judul = "Keranjang";
@endphp
