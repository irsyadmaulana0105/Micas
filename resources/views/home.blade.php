<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MICAS</title>
  <!-- Gunakan salah satu metode untuk mengimpor Tailwind CSS -->
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
@include('template.header')
  <!-- Content di luar nav -->
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Produk Terlaris</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <!-- Produk 1 -->
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('img/palm_angel.jpg') }}" alt="Produk pertama" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="{{ route('overview') }}">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  T-Shirt Palm Angel
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Warna: Hitam</p>
            </div>
            <p class="text-sm font-medium text-gray-900">Rp35.000</p>
          </div>
        </div>

        <!-- Produk 2 -->
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('img/preface.jpg') }}" alt="Produk kedua" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Hoodie Preface
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Warna: Biru</p>
            </div>
            <p class="text-sm font-medium text-gray-900">Rp50.000</p>
          </div>
        </div>

        <!-- Produk 3 -->
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('img/rucas.jpg') }}" alt="Produk ketiga" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Jeans Rucas
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Warna: Abu-abu</p>
            </div>
            <p class="text-sm font-medium text-gray-900">Rp75.000</p>
          </div>
        </div>

        <!-- Produk 4 -->
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('img/denim.jpg') }}" alt="Produk keempat" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Denim Jacket
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Warna: Denim</p>
            </div>
            <p class="text-sm font-medium text-gray-900">Rp120.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('template.footer')
</body>
</html>
