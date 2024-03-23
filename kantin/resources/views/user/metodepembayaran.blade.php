@extends("layouts.sidebar")

@section("container")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .payment-method:hover {
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg p-8">
        <h2 class="flex justify-center text-xl font-bold mb-4">Pilih Metode Pembayaran</h2>
        
        <div class="flex flex-col space-y-4">
            <div class="payment-method flex items-center p-4 rounded-lg border hover:shadow-md transition duration-300 ease-in-out">
                <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer" class="mr-2">
                <label for="bank_transfer" class="font-semibold text-lg"><a href="http://127.0.0.1:8000/user/pembayaranBank"><span class="material-symbols-outlined">Transfer Bank</a></button>
            </div>
            
            <div class="payment-method flex items-center p-4 rounded-lg border hover:shadow-md transition duration-300 ease-in-out">
                <input type="radio" id="credit_card" name="payment_method" value="credit_card" class="mr-2">
                <label for="credit_card" class="font-semibold text-lg"><a href="http://127.0.0.1:8000/user/pembayaranDana"><span class="material-symbols-outlined">Transfer Dana</a></button>
            </div>
            
            <div class="payment-method flex items-center p-4 rounded-lg border hover:shadow-md transition duration-300 ease-in-out">
                <input type="radio" id="e_wallet" name="payment_method" value="e_wallet" class="mr-2">
                <label for="e_wallet" class="font-semibold text-lg"><a href="http://127.0.0.1:8000/user/pembayarantunai"><span class="material-symbols-outlined">Pembayaran Tunai</a></button>
            </div>
        </div>

        <button id="confirm_button" class="mt-8 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
            Konfirmasi
        </button>
    </div>

    <script>
        const confirmButton = document.getElementById('confirm_button');
        confirmButton.addEventListener('click', () => {
            const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
            if (selectedMethod) {
                alert(`Anda memilih metode pembayaran: ${selectedMethod.value}`);
            } else {
                alert('Silakan pilih metode pembayaran terlebih dahulu.');
            }
        });
    </script>
@endsection

@php
$judul = "Metode Pembayaran";
@endphp

