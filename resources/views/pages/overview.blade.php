<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Overview</title>
    @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">MICAS</a>
                    </div>
                    <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="{{ route('about') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">About</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-16">
    <div class="max-w-lg mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Basic Tee</h1>
        <img src="{{ asset('img/palm_angel.jpg') }}" alt="Produk pertama" class="w-full h-auto rounded-md mb-4">
        <p class="text-lg text-gray-700 mb-4">Warna: Putih</p>
        <p class="text-lg text-gray-900 font-bold mb-4">Rp35.000</p>
        <p class="text-gray-600 mb-4">
            Basic Tee adalah pilihan tepat bagi mereka yang mencari kaos sederhana namun berkualitas. Terbuat dari bahan katun yang lembut, kaos ini nyaman dipakai untuk kegiatan sehari-hari.
        </p>

        <!-- Tambahkan tombol untuk memilih ukuran -->
        <div class="mb-4">
            <span class="text-gray-700">Pilih Ukuran:</span>
            <div class="mt-2 flex space-x-2">
                <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-md">S</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-md">M</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-md">L</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-md">XL</button>
            </div>
        </div>

        <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-900">Kembali ke Home</a>
    </div>
</div>


</body>
</html>
