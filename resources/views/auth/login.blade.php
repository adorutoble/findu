<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - FindU</title>
</head>
<body class="flex font-[poppins] items-center justify-center min-h-screen bg-[#F7F8FF] relative">

    <!-- Logo di sudut kiri atas -->
    <a href="/" class="absolute top-6 left-12">
        <img src="./img/logo.png" class="h-8 sm:h-8" alt="FindU Logo" />
    </a>

    <div class="flex w-full max-w-5xl overflow-hidden">
        <!-- Left Side -->
        <div class="w-1/2 p-10 flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold text-[#233A75]">Selamat datang!</h1>
            <img src="./img/hero-login.png" alt="Illustration" class="mt-6 w-96 h-[350px]">
        </div>
        
        <!-- Right Side -->
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-semibold text-[#444655] mb-6">Masuk</h2>
            
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf           
                <div>
                    <label for="email" class="block mb-2 text-[#444655]">Nama Pengguna</label>
                    <input id="email" type="text" name="email" placeholder="Masukan E-mail Kamu" required class="w-full px-4 py-3 border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#233A75] bg-[#F1F1F1]">
                </div>
                
                <div>
                    <label for="password" class="block mb-2 text-[#444655]">Kata Sandi</label>
                    <input id="password" type="password" name="password" placeholder="Masukan Password Kamu" required class="w-full px-4 py-3 border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#233A75] bg-[#F1F1F1]">
                </div>
                
                <div class="flex justify-between font-semibold text-sm">
                    <a href="{{ route('password.request') }}" class="text-[#233A75] hover:underline">Lupa Kata Sandi?</a>
                </div>
                
                <button type="submit" class="w-full bg-[#233A75] text-white py-3 rounded-full hover:bg-[#1A2E5F]">MASUK</button>
                
                <p class="text-center text-sm text-gray-600">Belum punya akun? <a href="/register" class="text-[#233A75] font-semibold hover:underline">Daftar di sini</a></p>
            </form>
        </div>
    </div>
</body>
</html>
