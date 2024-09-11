<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white-100 flex flex-col min-h-screen">
    @include('template.header')

    <main class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form class="bg-white rounded px-6 pt-6 pb-6 mb-4">
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                           id="Nama" 
                           type="Nama" 
                           placeholder="Nama">
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                           id="Telepon" 
                           type="Telepon" 
                           placeholder="Telepon">
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                           id="email" 
                           type="email" 
                           placeholder="Email">
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline" 
                           id="password" 
                           type="password" 
                           placeholder="Password">
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                            type="button">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </main>

    @include('template.footer')
</body>
</html>
