@extends("layouts.sidebaradmin")

@section("container")
<div class="">
    <div class="bg-white p-10 rounded-lg">
        <div class="mb-10 flex justify-between">
            <button class="font-semibold text-lime-400 bg-cyan-700 py-2 px-3 rounded-full">Homepage</button>
            <div>

                <button class="font-semibold text-cyan-700 border-2 border border-cyan-700 py-1 px-3 rounded-full">Menu</button>
                <button class="font-semibold text-cyan-700 border-2 border border-cyan-700 py-1 px-3 rounded-full">Profile</button>
                <button class="font-semibold text-cyan-700 border-2 border border-cyan-700 py-1 px-3 rounded-full">Keranjang</button>
            </div>
            <div>
                <span class="material-symbols-outlined text-cyan-700">
                    menu
                </span>
            </div>
        </div>
        <div class="relative mt-10">
            <div class="flex flex-row items-end">
                <div>
                    <h1 class="tracking-wide text-7xl font-black text-cyan-700">Finding <br>Balance</h1>
                    <h1 class="tracking-wide text-7xl font-black text-emerald-500">In Mental</h1>
                    <h1 class="tracking-wide text-7xl font-black text-lime-400">Wellness.</h1>
                    <div class="mt-10 flex flex-row">
                        <h1 class="text-emerald-500 font-semibold">Here is my exploration SERENEMIND</h1>
                        <p class="text-xs mx-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quod voluptates fugit tenetur. Voluptatum deserunt voluptate provident.</p>
                    </div>
                    <div class="mt-10">
                        <button class="w-64 font-semibold bg-emerald-500 text-cyan-700 p-3 px-10 rounded-lg">Join Us</button>
                        <button class="font-semibold text-lime-400 bg-cyan-700 p-3 px-10 rounded-lg">Join Us</button>
                    </div>
                </div>
                <img src="https://www.foodnavigator-usa.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/foodnavigator-usa.com/news/markets/deloitte-report-consumers-fresh-food-spending-on-the-rise/10363851-1-eng-GB/Deloitte-report-Consumers-fresh-food-spending-on-the-rise.jpg" alt="" class="w-[500px] h-[600px] object-cover rounded-lg">
            </div>
            <div class="absolute bottom-3 right-3 w-[475px] h-[150px] rounded-lg bg-lime-400 opacity-50">
            </div>
            <h1 class="text-white absolute bottom-20 right-64 font-bold text-7xl">169 K <span class="text-3xl">+</span></h1>
            <p class="w-32 text-xs absolute bottom-20 right-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, aliquid.</p>
        </div>

    </div>
</div>
@endsection

@php
$judul = "Profil Admin";
@endphp