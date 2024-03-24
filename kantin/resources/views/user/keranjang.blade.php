@extends("layouts.sidebar")

@section("container")
<div class="z-30 text-xs sticky top-0 w-full bg-white p-4 rounded-lg overflow-auto">
    <h1 class="mx-auto w-64 p-2 text-center">Keranjang</h1>
</div>
<div>
<div class="text-xs mt-2 w-full bg-white p-5 rounded-lg">
            <div class="col-span-2">
                <ul>
                    <li class="flex justify-between items-center border-b py-2">
                        <div>
                            <span class="font-bold">Menu</span>
                            <img src="" alt="">
                        </div>
                        <div class="flex items-center">
                            <button class="bg-gray-200 hover:bg-gray-300 text-xs px-2 py-1 rounded" onclick="removeItem('productA')">-</button>
                            <span class="mx-2" id="productA">1</span>
                            <button class="bg-gray-200 hover:bg-gray-300 text-xs px-2 py-1 rounded" onclick="addItem('productA')">+</button>
                        </div>
                    </li>
                    <!-- Tambahkan item lainnya di sini -->
                </ul>
            </div>
            <div class="col-span-1">
                <p>Total: <span id="total">Rp 0</span></p>
                <button class="mt-4 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded" onclick="clearCart()">Hapus Pesanan</button>
            </div>
        </div>
    </div>

    <script>
        function addItem(itemId) {
            var itemElement = document.getElementById(itemId);
            var currentCount = parseInt(itemElement.innerText);
            itemElement.innerText = currentCount + 1;
            updateTotal();
        }

        function removeItem(itemId) {
            var itemElement = document.getElementById(itemId);
            var currentCount = parseInt(itemElement.innerText);
            if (currentCount > 0) {
                itemElement.innerText = currentCount - 1;
                updateTotal();
            }
        }

        function updateTotal() {
            var productA = parseInt(document.getElementById('productA').innerText);
            // Tambahkan item lainnya di sini
            
            var total = productA * 100; // Ganti 100 dengan harga per unit produk
            // Hitung total harga dengan menambahkan harga produk lainnya
            document.getElementById('total').innerText = 'Rp ' + total;
        }

        function clearCart() {
            // Reset jumlah item di keranjang
            document.getElementById('productA').innerText = '0';
            // Reset jumlah item lainnya di sini
            
            updateTotal();
        }

        // Panggil updateTotal saat halaman dimuat
        updateTotal();
    </script>
</div>
@endsection

@php
$judul = "Keranjang";
@endphp