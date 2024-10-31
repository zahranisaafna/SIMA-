{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SIMA - Universitas Diponegoro</title>
</head>
<body class="min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/images/bglogin.png')">
    <div class="flex min-h-screen items-center justify-center">
        <!-- Login Box -->
        <div class="w-[420px] rounded-lg bg-white/90 p-8">
            <!-- Logo -->
            <div class="text-center mb-6">
                <img src="/images/logo-undip.png" alt="Logo UNDIP" class="mx-auto h-28 w-auto mb-4">
                <h1 class="text-xl font-medium text-gray-800">Sistem Informasi Manajemen Akademik (SIMA)</h1>
                <p class="text-sm italic text-gray-600">Universitas Diponegoro</p>
            </div>

            <!-- Login Form -->
            <div class="space-y-4">
                <!-- Username/NIM Input -->
                <div class="bg-gray-100 rounded">
                    <input 
                        type="text"
                        placeholder="NIM/NIP/username/e-mail official"
                        class="w-full bg-transparent py-2.5 px-4 text-gray-700 placeholder-gray-500 focus:outline-none"
                    >
                </div>

                <!-- Password Input -->
                <div class="bg-gray-100 rounded">
                    <input 
                        type="password"
                        placeholder="Password"
                        class="w-full bg-transparent py-2.5 px-4 text-gray-700 placeholder-gray-500 focus:outline-none"
                    >
                </div>

                <!-- Login Button -->
                <div class="pt-2">
                    <button class="w-full rounded bg-blue-500 py-2 text-white hover:bg-blue-600">
                        Login
                    </button>
                </div>

                <!-- Links -->
                <div class="text-center space-y-2 pt-2">
                    <a href="#" class="block text-sm text-red-600 hover:text-red-700">
                        Lupa password
                    </a>
                    <p class="text-sm text-gray-600">
                        Belum punya akun? 
                        <a href="#" class="text-red-600 hover:text-red-700">
                            Daftar sekarang!
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SIMA - Universitas Diponegoro</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/bglogin.png') }}'); background-size: cover; background-repeat: no-repeat;">
    <div class="flex min-h-screen items-center justify-center">
        <!-- Kotak Login -->
        <div class="w-[420px] bg-brown rounded-lg p-8 shadow-lg">
            <!-- Logo dan Judul -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Sistem Informasi Manajemen Akademik (SIMA)</h1>
                <p class="text-md text-gray-700 italic">Universitas Diponegoro</p>
            </div>

            <!-- Form Login dengan Bingkai -->
            <form class="space-y-4">
                <!-- Input Username dengan Bingkai -->
                <div class="bg-gray-100 border border-gray-300 rounded-lg px-4 py-2.5 shadow-sm flex items-center">
                    <span class="mr-3">
                        <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A11.985 11.985 0 0012 20c2.48 0 4.76-.755 6.758-2.045M15 12A5 5 0 115 12a5 5 0 0110 0zm3 5a7.003 7.003 0 01-14 0"></path>
                        </svg>
                    </span>
                    <input 
                        type="text"
                        placeholder="NIM/NIP/username/e-mail official"
                        class="w-full bg-transparent text-gray-700 placeholder-gray-500 focus:outline-none"
                    >
                </div>

                <!-- Input Password dengan Bingkai -->
                <div class="bg-gray-100 border border-gray-500 rounded-lg px-4 py-2.5 shadow-sm flex items-center">
                    <span class="mr-3">
                        <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11V7a4 4 0 00-8 0v4M5 21h14a2 2 0 002-2V11a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </span>
                    <input 
                        type="password"
                        placeholder="Password"
                        class="w-full bg-transparent text-gray-700 placeholder-gray-500 focus:outline-none"
                    >
                </div>

                <!-- Tombol Login -->
                <div>
                    <button class="w-full text-white font-semibold rounded-lg py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                    style="background-color: #007bff;">
                        Login
                    </button>
                </div>

                <!-- Link Lupa Password -->
                <div class="text-center pt-2">
                    <a href="#" class="text-sm text-red-600 hover:text-red-700 underline">
                        Lupa password
                    </a>
                    <p class="text-sm text-gray-600 mt-2">
                        Belum punya akun? 
                        <a href="#" class="text-red-600 hover:text-red-700 underline">
                            Daftar sekarang!
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
