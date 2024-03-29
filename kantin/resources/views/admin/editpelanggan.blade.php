@php
$judul = "edit konsumen";
@endphp
@extends("layouts.sidebaradmin")

@section("container")
<div class="fixed top-2 text-xs w-[300px] h-[760px] bg-white p-5 rounded-lg mr-3 overflow-auto">
    <h1 class="sticky -top-5 bg-white border-b font-bold text-center -mt-3 py-3 px-4">Daftar Pemesanan</h1>
    <div class="mt-5">
        @foreach ($users as $users)
        <a href="/admin/datapelanggan/{{ $users->id }}/edit" class="{{ request()->is('admin/datapelanggan/'.$users->id. '/edit') ? 'transition-all duration-500 my-2 p-2 bg-lime-400 rounded-lg cursor-pointer flex items-center' : 'transition-all duration-500 my-2 p-2 hover:bg-lime-400 hover:rounded-lg cursor-pointer flex items-center' }}">
            <img src="{{ asset('storage/' . $users->gambar)}}" alt="" class="w-10 h-10 rounded-full mr-2 object-cover ">
            <h1 class="py-2 px-4">{{ $users->nama }}</h1>
        </a>
        @endforeach
    </div>
</div>
<div class="text-xs ml-[310px] bg-white rounded-lg p-5">
    <div class="flex justify-end">
        <a href="/admin/datapelanggan"><img src="{{ asset('images/icons/cross-circle.png') }}" alt="Ikon" class="bg-white w-6 p-1 rounded-full"></a>
    </div>
    <form action="/admin/datapelanggan/{{$user->id}}" class="py-10 mx-32 border rounded" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Nama</label>
            <input type="text" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nama" name="nama" required value="{{ $user->nama}}">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="gender">Jenis Kelamin</label>
            <select name="gender" class="p-3 border rounded-lg mt-2">
                <option value="{{ $user->gender}}">{{ $user->gender}}</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Email</label>
            <input type="email" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="email" name="email" required value="{{$user->email}}">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">Password</label>
            <input type="password" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="" name="password" required value="{{$user->password}}">
        </div>
        <div class="relative mx-10 pt-5 flex flex-col">
            <label for="">No. Telepone</label>
            <input type="number" class="p-3 border rounded-lg mt-2 outline-cyan-700" placeholder="nomor" name="nomor" required value="{{$user->nomor}}">
        </div>
        <div class="mx-10 pt-5 flex flex-col">
            <input type="hidden" name="gambar_lama" value="{{ $user->gambar}}">
            <label for="gambar">Gambar</label>
            <input type="file" class="p-3 border rounded-lg mt-2 outline-cyan-700" name="gambar">
        </div>
        <div class="flex justify-center">
            <button class="w-full p-3 bg-lime-400 mx-10 mt-10 rounded-lg hover:bg-red-500">Simpan perubahan</button>
        </div>
    </form>
</div>
@endsection