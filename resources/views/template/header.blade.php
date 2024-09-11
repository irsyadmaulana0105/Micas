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
  <nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('home') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium" style="font-family: 'Inria Serif', serif;">MICAS</a>
          </div>
          <!-- Menu Links -->
          <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
            <a href="{{ route('home') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
              Home
            </a>
            <a href="{{ route('about') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
              About
            </a>   
          </div>
        </div>

        <!-- kanan -->
        <div class="flex space-x-4">
          <a href="{{ route('cart') }}" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
            <!-- Ikon Keranjang (Cart) -->
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2.5l.5 2h13l.5-2H21m-4 8a2 2 0 11-4 0 2 2 0 014 0zm-9 0a2 2 0 11-4 0 2 2 0 014 0zm1.61 5.51l.875 1.75a1 1 0 00.89.54h8.154a1 1 0 00.89-.54l.875-1.75A2 2 0 0014 14H6a2 2 0 00-1.61 1.51zM6 5h14a2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2z"/>
            </svg>
          </a>
          <a href="{{ route('login') }}" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
            <!-- Ikon Pengguna (User) -->
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-8 0v2m-1 0h10M5 10a5 5 0 1110 0 5 5 0 01-10 0z"/>
            </svg>
          </a>
        </div>



        <!-- Mobile Menu Button -->
        <div class="-mr-2 flex items-center sm:hidden">
          <button type="button" id="mobile-menu-button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" id="menu-open-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>