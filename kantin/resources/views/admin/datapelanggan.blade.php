@extends("layouts.sidebaradmin")

@section("container")
<div class="w-full h-screen bg-white p-10 rounded-lg">
    <div class="text-xs">
        <form action="/admin/datapelanggan" method="GET">
            <?php
            $cari = request('cari');
            if ($cari === '') {
                $cari = 'all';
            }
            ?>
            <input type="text" name="cari" class="w-64 text-xs border p-2 rounded-lg outline-cyan-700" placeholder="cari konsumen" value="{{ $cari }}">
            <select name="gender" class="text-xs border p-2 rounded-lg outline-cyan-700">
                <option value="all" {{ request('gender') === 'all' ? 'selected' : '' }}>Semua</option>
                <option value="Laki-laki" {{ request('gender') === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ request('gender') === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            <button type="submit" class="text-xs w-16 text-white bg-cyan-700 p-2 rounded">Cari</button>
            <a href="/admin/datapelanggan" class="text-xs w-16 text-white bg-orange-500 p-2 rounded">Refresh</a>
        </form>
    </div>
           
    <div class="mt-10 grid grid-cols-4 gap-5">
        @foreach ($users as $users)
        <div class="relative bg-cyan-700 transition-all duration-500 text-xs rounded-lg text-center shadow hover:shadow hover:shadow-cyan-700 cursor-pointer">
            <div class="relative w-32">
                <img src="{{ asset('storage/' . $users->gambar)}}" alt="" class="relative z-10 mt-10 w-24 h-24 border border-8 border-cyan-700 object-cover rounded-full mx-auto">
                <span class="absolute z-10 top-[56px] shadow-photoShadow1 left-[2.3px] w-5 h-5 rounded-tr-full bg-transparent"></span>
                <span class="absolute z-10 top-[56px] shadow-photoShadow2 right-[2.3px] w-5 h-5 rounded-tl-full bg-transparent"></span>
                <h1 class="font-bold text-sm absolute top-[60px] -right-8 capitalize">{{ $users->nama}}</h1>
            </div>
            <div class="z-0 bg-white p-5 -mt-10 rounded-b-lg w-full h-[170px]">
                <div class="pt-2 text-start">
                    <h1 class="flex items-center mt-3 text-[10px] mt-5"><img src="{{ asset('images/icons/envelope.png') }}" alt="Ikon" class="w-3 h-3 mx-2">{{ $users->email}}</h1>
                    <h1 class="flex items-center mt-1 text-[10px]"><img src="{{ asset('images/icons/phone-flip.png') }}" alt="Ikon" class="w-3 h-3 mx-2">{{ $users->nomor}}</h1>
                    <h1 class="flex items-center mt-1 text-[10px]"><img src="{{ asset('images/icons/user.png') }}" alt="Ikon" class="w-3 h-3 mx-2">{{ $users->gender}}</h1>
                    <div class="mt-5 text-xs flex flex-row">
                        <a href="/admin/datapelanggan/{{ $users->id }}/edit" class="transition-all duration-500 w-16 bg-emerald-500 hover:bg-black text-white p-1 rounded mr-2 text-center">Ubah</a>
                    <a  href="/admin/datapelanggan/{{ $users->id }}" class="transition-all duration-500 w-16 bg-cyan-700 hover:bg-black text-white p-1 rounded mr-2 text-center">Lihat</a>
                        <form action="/admin/datapelanggan/{{ $users->id }}" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data pelanggan ini?')">
                            @method('delete')
                            @csrf
                            <button type="submit" class="transition-all duration-500 w-16 bg-orange-500 hover:bg-black text-white p-1 rounded mr-2 text-center">Hapus</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@php
$judul = "Data Pelanggan";
@endphp