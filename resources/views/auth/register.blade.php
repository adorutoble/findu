<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register - FindU</title>
</head>
<body class="flex font-[poppins] p-10 items-center justify-center min-h-screen bg-[#F7F8FF]">

    <a href="/" class="absolute top-6 left-12">
        <img src="./img/logo.png" class="h-8 sm:h-8" alt="FindU Logo" />
    </a>

    <div class="flex w-full mr-12 max-w-7xl overflow-hidden">
        <!-- Left Side -->
        <div class="w-1/2 p-10 flex flex-col items-center justify-center">
            <h1 class="text-2xl font-bold text-[#233A75]">Selamat datang!</h1>
            <img src="./img/hero-register.png" alt="Illustration" class="w-[400px] h-auto">
        </div>
        
        <!-- Right Side -->
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-semibold text-[#233A75] mb-6">Buat Akun</h2>
            
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="first_name" class="block mb-2 text-[#233A75]">Nama Depan</label>
                        <input id="first_name" type="text" name="first_name" placeholder="Masukan Nama Depan" required class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                    </div>
                    <div class="w-1/2">
                        <label for="last_name" class="block mb-2 text-[#233A75]">Nama Belakang</label>
                        <input id="last_name" type="text" name="last_name" placeholder="Masukan Nama Belakang" required class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                    </div>
                </div>
                
                <div>
                    <label for="domisili" class="block mb-2 text-[#233A75]">Domisili</label>
                    <select id="domisili" name="domisili" placeholder="Pilih Domisili" class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                        <option value="" class="text-gray-500">Pilih Domisili</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Surabaya">Surabaya</option>
                    </select>
                </div>
                
                <div>
                    <label for="phone" class="block mb-2 text-[#233A75]">No. HP</label>
                    <input id="phone" type="text" name="phone" placeholder="+62" required class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                </div>
                
                <div>
                    <label for="email" class="block mb-2 text-[#233A75]">Alamat Email</label>
                    <input id="email" type="email" name="email" placeholder="Masukan Email Kamu" required class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                </div>
                
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label for="password" class="block mb-2 text-[#233A75]">Kata Sandi</label>
                        <input id="password" type="password" placeholder="Masukan Password Kamu" name="password" required class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                    </div>
                    <div class="w-1/2">
                        <label for="password_confirmation" class="block mb-2 text-[#233A75]">Konfirmasi Kata Sandi</label>
                        <input id="password_confirmation" placeholder="Konfirmasi Password Kamu" type="password" name="password_confirmation" required class="w-full px-4 py-3 border border-gray-100 rounded-xl bg-[#F1F1F1] focus:outline-none focus:ring-2 focus:ring-[#233A75]">
                    </div>
                </div>
                
                <div class="flex items-center mt-4">
                    <input type="checkbox" id="terms" name="terms" required class="mr-2">
                    <label for="terms" class="text-sm text-gray-600">Dengan mendaftar, Anda setuju dengan <span class="text-[#233A75] font-semibold">Syarat dan Ketentuan</span> FindU</label>
                </div>
                
                <button type="submit" class="w-full bg-[#233A75] text-white py-3 rounded-full hover:bg-[#1a2e5f] mt-4">DAFTAR</button>
                
                <p class="text-center text-sm text-gray-600 mt-4">Sudah mempunyai akun? <a href="{{ route('login') }}" class="text-[#233A75] font-semibold hover:underline">Masuk di sini</a></p>
            </form>
        </div>
    </div>
</body>
</html>
