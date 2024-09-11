<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white-100 flex flex-col min-h-screen">
    @include('template.header')
    <main class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form class="bg-white rounded px-6 pt-6 pb-6 mb-4">
            <H1 class="flex items-center justify-center mb-4" style="font-family: 'Inria Serif', serif;">MICAS</H1>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                           id="email" 
                           type="email" 
                           placeholder="Email">
                </div>
                <div class="mb-2">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline" 
                           id="password" 
                           type="password" 
                           placeholder="Password">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <a class="inline-block align-baseline font-bold text-sm text-gray-700 hover:text-black" 
                       href="#">
                        Lupa Password?
                    </a>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                            type="button">
                        Login
                    </button>
                </div>
                <div class="text-center">
                    <a class="inline-block align-baseline font-bold text-sm text-gray-700 hover:text-black underline" 
                       href="{{ route('create') }}">
                       buat akun
                    </a>
                </div>
            </form>
        </div>
    </main>

    @include('template.footer')
</body>
</html>
