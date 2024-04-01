@php
$judul = "Pesanan Saya";
$data = count($pembayarans)
@endphp

@extends("layouts.sidebaradmin")

@section("container")
@if ($data == 0)
<div class="pt-96 text-xs text-center bg-white w-full h-screen">
    <p>Belum ada data</p>
</div>
@else
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Pemesanan</h1>
    <div class="mt-5">
        @foreach ($pembayarans as $pembayarans)
        <a href="/admin/pesananmasuk/{{ $pembayarans->id }}" class="{{ request()->is('admin/pesananmasuk/' .$pembayarans->id)  ? 'transition-all duration-500 my-2 p-4 bg-lime-400 rounded-lg cursor-pointer flex flex-col' : 'transition-all duration-500 my-2 p-4 hover:bg-lime-400 hover:rounded-lg cursor-pointer flex flex-col' }}">
            <p class="font-bold">ID Pesanan: {{$pembayarans->id_pesanan}}</p>
            <div class="flex justify-between items-center">
                <div>
                    <div class="mt-3 flex items-center">
                        <img src="{{ asset('images/icons/user.png') }}" class="w-3"/>
                        <p class="capitalize ml-3">{{ $pembayarans->nama}}</p>
                    </div>
                    <p class="font-bold mt-1">Rp {{ number_format($pembayarans->total_bayar, 2, ',', '.') }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class=" flex flex-col text-xs ml-[310px] h-full">
    <div class="relative w-full bg-white p-2 rounded-lg">
        <h1 class="mx-auto w-32 p-2 text-center">Detail Pesanan</h1>
        <div class="text-sm absolute top-3 right-5 text-center">
            <a href="/user/pembayaran"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
        </div>
    </div>
    <div class="z-10 sticky top-0 mt-2 text-xs w-full h-[110px] bg-white p-5 rounded-lg">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead>
                    <tr class="bg-lime-400">
                        <th class="py-2 px-4">Nama Penerima</th>
                        <th class="py-2 px-4">ID Pesanan</th>
                        <th class="py-2 px-4">Total Harga</th>
                        <th class="py-2 px-4">Tanggal Transaksi</th>
                        <th class="py-2 px-4">Metode Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="py-2 px-4 border capitalize">{{ $pembayaran->nama }}</td>
                        <td class="py-2 px-4 border">{{ $pembayaran->id_pesanan }}</td>
                        <td class="py-2 px-4 border font-bold">Rp {{ number_format($pembayaran->total_bayar, 2, ',', '.') }}</td>
                        <td class="py-2 px-4 border">{{ $pembayaran->created_at }}</td>
                        <td class="py-2 px-4 border-r border-b flex justify-between">{{ $pembayaran->metode_pembayaran }}  @if ($pembayaran->metode_pembayaran == 'transfer')
                            <p id="lihat_bukti_transfer" class="text-sky-400 cursor-pointer">lihat</p>  
                        @endif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="text-xs w-full rounded-lg">
            <div class="relative text-center mt-2 bg-white rounded-lg w-full h-screen p-5 overflow-auto">
                <h1 class="mb-2">Informasi Pengguna</h1>
                <hr class="mb-5">
                <img src="{{ asset('storage/' . $pembayaran->user->gambar)}}" alt="" class="mx-auto w-32 h-32 rounded-full object-cover">
                <h1 class="mt-5 text-sm font-bold ml-2 capitalize">{{ $pembayaran->user->nama}}</h1>
            <div class="bg-white p-2 sticky -top-5 flex justify-center mt-5">
                <div class="flex items-center border-r border-black pr-3">
                    <img src="{{ asset('images/icons/shopping-cart-check.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>15 Pesanan selesai</p>
                </div>
                <div class="flex items-center border-r border-black pr-3">
                    <img src="{{ asset('images/icons/envelope.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>{{ $pembayaran->user->email}}</p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('images/icons/phone-flip.png') }}" alt="Ikon" class="w-4 mx-2">
                    <p>{{ $pembayaran->user->nomor}}</p>
                </div>
            </div>
            <h1 class="text-start my-5 font-bold ml-2 capitalize">Detail pesanan:</h1>
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border p-2 text-center">No.</th>
                            <th class="border p-2 text-center">Detail</th>
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
                        @foreach ($keranjangs as $index => $menu)
                        @if ($menu->pembayaran_id == $pembayaran->id)   
                        <tr>
                            <td class="border p-2 text-center">{{ $index + 1}}</td>
                            <td class="border p-2 text-center w-32">
                                <img src="{{ asset('storage/' . $menu->menu->gambar)}}" alt="Product" class="w-full h-20 object-cover rounded-lg">
                            </td>
                            <td class="border p-2 text-center capitalize font-bold">{{ $menu->nama }}</td>
                            <td class="border p-2 text-center" id="harga{{ $menu->id }}">Rp {{ number_format($menu->harga, 2, ',', '.') }}</td>
                            <td class="border p-2 text-center"><span class="mx-2" id="product{{ $menu->id }}">{{ $menu->jumlah }}</span>
                            </td>
                            @php
                            $subtotal = $menu->harga * $menu->jumlah;
                            $totalKeseluruhan += $subtotal;
                            @endphp
                            <td class="border p-2 text-center" id="subtotal{{ $menu->id }}">Rp {{ number_format($subtotal, 2, ',', '.') }}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="font-bold border p-2 text-start">Total Keseluruhan:</td>
                            <td colspan="1" class="font-bold border-b border-r p-2 text-center" id="totalKeseluruhan">Rp {{ number_format($totalKeseluruhan, 2, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="flex justify-end mt-5">
                    <form action="/admin/pesananmasuk/{{ $pembayaran->id }}" method="post" onclick="return confirm('Konfirmasi pengiriman')">
                        @method('put')
                        @csrf
                        <input type="text" name="status" value="dikirim" type="hidden" class="hidden">
                        <button type="submit" class="flex items-center hover:text-white">
                            <p class="bg-lime-400 p-2 rounded ">Konfirmasi pesanan</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div id="bukti_transfer" class="z-30 hidden absolute top-20 right-3">
            <img src="{{ asset('storage/' . $pembayaran->gambar)}}" alt="Product 2" class="w-[200px] h-[400px] object-cover rounded-lg hover:scale-[101%] hover:rounded-none transition-all duration-500">
        </div>
        <script>
            const tampilkanGambar = document.getElementById("bukti_transfer");
            const tutupkanGambar = document.getElementById("lihat_bukti_transfer");
            tampilkanGambar.addEventListener('click', function() {
                tampilkanGambar.classList.add('hidden');
            })
            tutupkanGambar.addEventListener('click', function() {
                tampilkanGambar.classList.add('block');
                tampilkanGambar.classList.remove('hidden');
            })
            document.addEventListener('scroll', function() {
        if (!tampilkanGambar.classList.contains('hidden')) {
            tampilkanGambar.classList.add('hidden');
            }
            });
        </script>
</div>
@endif
@endsection