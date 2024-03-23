@extends("layouts.sidebar")

@section("container")
<div class="">
    <div class="relative bg-white rounded-lg pb-[87px]">
        <div class="flex">
            <img src="https://wallpapersmug.com/download/1920x1080/930962/vegetables-fresh.jpg" alt="" class="z-0 w-full h-[300px] object-cover rounded-t-lg">
        </div>
        <div>
            <span class="w-20 h-20 bg-transparent absolute rounded-br-full top-[220px] left-[64.9px] shadow-myShadow1"></span>
            <span class="w-20 h-20 bg-transparent absolute rounded-bl-full top-[220px] right-[684.9px] shadow-myShadow2"></span>
            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1ODIwOTV8MHwxfHJhbmRvbXx8fHx8fHx8fDE3MTEwOTYwNDJ8&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="z-10 relative -mt-32 ml-32 border-[15px] border-white w-64 h-64 object-cover rounded-full">
        </div>
            </div>
            <hr class="my-2 mr-10">
            <div class="mt-10 flex justify-end mr-10 text-xs">
                <a class="font-semibold bg-emerald-500 text-white p-3 px-5 rounded-lg">Edit Profil</a>
            </div>
        </div>
        <h1 class="text-3xl font-bold mt-10 ml-10">Nama User.</h1>
        <p class="mt-5 mx-10 indent-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vitae nostrum, quidem, architecto quos inventore, sit necessitatibus officiis laborum suscipit cum voluptatem commodi quo obcaecati! Non delectus veritatis nihil sequi!</p>
        </div>

    </div>
</div>
@endsection

@php
$judul = "Profil User";
@endphp