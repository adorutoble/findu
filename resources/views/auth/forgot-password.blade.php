<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - FindU</title>
</head>
    <div class="flex items-center justify-center min-h-screen bg-[#F7F8FF] font-[poppins] relative">
        <!-- Logo di sudut kiri atas -->
        <a href="/" class="absolute top-6 left-12">
            <img src="./img/logo.png" class="h-8 sm:h-8" alt="FindU Logo" />
        </a>
        
        <div class="flex w-full max-w-5xl overflow-hidden">
            <!-- Left Side -->
            <div class="w-1/2 flex flex-col items-center justify-center">
                <img src="./img/icon-password.png" alt="Illustration" class="mt-6 w-full h-[400px]">
            </div>
            
            <!-- Right Side -->
            <div class="w-1/2 p-10 flex flex-col justify-center">
                <h1 class="text-2xl font-bold text-[#233A75]">Lupa Kata Sandi</h1>
                <p class="text-sm text-gray-600 my-6">
                    Masukkan email yang kamu gunakan untuk membuat akun agar kami dapat mengirimkan instruksi tentang cara mengatur ulang kata sandi kamu.
                </p>
                
                <!-- Session Status -->
                <x-auth-session-status class="mt-4" :status="session('status')" />
                
                <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                    @csrf
                    
                    <div>
                        <label for="email" class="block mb-2 text-[#444655]">Alamat Email</label>
                        <input id="email" type="email" name="email" placeholder="Masukan Alamat Email" required class="w-full px-4 py-3 border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#233A75] bg-[#F1F1F1]">
                    </div>
                    
                    <div class="flex justify-between">
                        <button type="submit" class="bg-[#233A75] text-white w-52 py-3 px-6 rounded-full hover:bg-[#1A2E5F]">KIRIM</button>
                        <a href="{{ route('login') }}" class="border-2 border-[#233A75] w-52 hover:bg-gray-100 text-center text-[#444655] py-3 px-6 rounded-full">KEMBALI</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>