<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<x-layout>
    {{-- First Hero --}}
    <section>
        <div class="grid max-w-screen-xl px-4 py-8 m-16 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="font-[poppins] w-7xl mb-4 text-5xl font-extrabold tracking-tight leading-none">Platform terdepan temukan universitas Impianmu!</h1>
                <p class="max-w-2xl text-lg mb-6 font-light text-gray-500 lg:mb-8">Jelajahi ribuan pilihan universitas, sesuaikan dengan minat dan kebutuhanmu, dan wujudkan masa depan yang gemilang bersama FindU.</p>
                <a href="/perguruan-tinggi" class="inline-flex items-center justify-center px-10 py-3 mr-3 text-base font-medium text-center text-white rounded-full bg-[#233A75] focus:ring-4 focus:ring-primary-300">
                    Ayo Mulai!
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="./img/student-hero.png" alt="hero1">
            </div>                
        </div>
    </section>

    {{-- Section 2 --}}
    <section class="h-full relative bg-cover bg-center bg-no-repeat" style="background-image: url('./img/bg-hero.png');">
        <div class="relative max-w-6xl mx-auto pb-8 p-10 px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-10">Kenapa Harus FindU?</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="./img/icon-hero1.png" alt="Ikon Akurasi" class="mx-auto mb-4 w-45 h-45">
                    <h3 class="font-semibold text-lg">Akurasi Terjamin</h3>
                    <p class="text-gray-600 text-sm">Data universitas kami selalu diperbarui, memastikan informasi yang kamu dapatkan relevan dan terpercaya.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="./img/icon-hero2.png" alt="Ikon Akurasi" class="mx-auto mb-4 w-45 h-45">
                    <h3 class="font-semibold text-lg">Akurasi Terjamin</h3>
                    <p class="text-gray-600 text-sm">Data universitas kami selalu diperbarui, memastikan informasi yang kamu dapatkan relevan dan terpercaya.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="./img/icon-hero3.png" alt="Ikon Kemudahan Akses" class="mx-auto mb-4 w-45 h-45">
                    <h3 class="font-semibold text-lg">Kemudahan Akses Informasi</h3>
                    <p class="text-gray-600 text-sm">Memberikan antarmuka yang sederhana dan mudah digunakan untuk mencari informasi universitas, beasiswa, dan berita terkini.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="./img/icon-hero4.png" alt="Ikon Platform Terpercaya" class="mx-auto mb-4 w-45 h-45">
                    <h3 class="font-semibold text-lg">Platform Terpercaya</h3>
                    <p class="text-gray-600 text-sm">FindU memberikan kepercayaan melalui data yang akurat, membantu pengguna merasa yakin saat memilih universitas atau beasiswa.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="./img/icon-hero5.png" alt="Ikon Masa Depan" class="mx-auto mb-4 w-45 h-45">
                    <h3 class="font-semibold text-lg">Pilihan Terbaik untuk Masa Depan</h3>
                    <p class="text-gray-600 text-sm">FindU menjadi pilihan utama bagi siapa saja yang ingin merencanakan masa depan pendidikan mereka dengan percaya diri.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="./img/icon-hero6.png" alt="Ikon Kepercayaan" class="mx-auto mb-4 w-45 h-45">
                    <h3 class="font-semibold text-lg">Kepercayaan yang Dibangun</h3>
                    <p class="text-gray-600 text-sm">Melalui data yang valid, FindU dirancang untuk menjadi platform terpercaya bagi calon mahasiswa dan pengguna lainnya.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="relative h-screen bg- bg-center bg-no-repeat flex items-center" >
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-6 items-center">
        <!-- Ilustrasi & Teks -->
        <div class="flex flex-col items-start">
            <img class="w-3/4 md:w-full max-w-md" src="https://stories.freepiklabs.com/api/vectors/questions/pana/render?color=4C5C9CFF&background=complete&hide=" alt="illustration">
            <h1 class="mt-6 text-2xl font-extrabold text-gray-900">Apa, sih, yang bisa FindU lakukan buat kamu?</h1>
        </div>
        
        <!-- List Fitur -->
        <div class="space-y-4">
            <div class="flex items-center bg-[#233A75] text-white p-6 rounded-xl shadow-lg w-full justify-between">
                <div class="flex items-center">
                    <img class="w-10 h-10" src="/img/icon-book.png" alt="icon">
                    <h5 class="ml-4 text-l font-medium">Cari kampus sesuai dengan minat dan bakatmu!</h5>
                </div>
                <button class="bg-white text-[#233A75] px-4 py-2 rounded-full text-sm">Selengkapnya</button>
            </div>
            
            <div class="flex items-center bg-[#233A75] text-white p-6 rounded-xl shadow-lg w-full justify-between">
                <div class="flex items-center">
                    <img class="w-10 h-10" src="/img/icon-building.png" alt="icon">
                    <h5 class="ml-4 text-l font-medium">Bandingkan kampus pilihanmu!</h5>
                </div>
                <button class="bg-white text-[#233A75] px-4 py-2 rounded-full text-sm">Selengkapnya</button>
            </div>
            
            <div class="flex items-center bg-[#233A75] text-white p-6 rounded-xl shadow-lg w-full justify-between">
                <div class="flex items-center">
                    <img class="w-10 h-10" src="/img/icon-calendar.png" alt="icon">
                    <h5 class="ml-4 text-l font-medium">Lihat jadwal pendaftaran dibuka</h5>
                </div>
                <button class="bg-white text-[#233A75] px-4 py-2 rounded-full text-sm">Selengkapnya</button>
            </div>
            
            <div class="flex items-center bg-[#233A75] text-white p-6 rounded-xl shadow-lg w-full justify-between">
                <div class="flex items-center">
                    <img class="w-10 h-10" src="/img/icon-paper.png" alt="icon">
                    <h5 class="ml-4 text-l font-medium">Ikuti berita terkini tentang Perguruan Tinggi</h5>
                </div>
                <button class="bg-white text-[#233A75] px-4 py-2 rounded-full text-sm">Selengkapnya</button>
            </div>
        </div>
    </div>
</section>

{{-- Section 4 --}}
<section class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center" style="background-image: url('./img/bg-hero3.png');">
    <div class="max-w-5xl mx-auto w-full">
        <!-- Swiper Container -->
        <div class="swiper news-slider w-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide flex justify-center">
                    <div class="bg-white rounded-lg shadow-lg p-6 flex max-w-2xl h-[300px]">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/jawapos/2023/02/SNBT.png" alt="Berita" class="w-1/3 rounded-md object-cover h-full">
                        <div class="p-4 flex flex-col justify-center">
                            <h3 class="text-lg font-bold text-gray-900">Jangan Sampai Terlewat Pendaftaran SNBT 2025!</h3>
                            <p class="text-sm text-gray-600 mt-2">Sudah siap melangkah ke masa depan? Jangan sampai kelewatan info penting tentang pendaftaran SNBT 2024! Yuk, cek informasi lengkapnya dan pastikan kamu nggak ketinggalan langkah pertama menuju kampus impianmu!</p>
                            <button class="mt-4 px-4 py-2 w-52 text-sm font-semibold text-gray-900 border border-gray-300 rounded-2xl">Cek Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide flex justify-center">
                    <div class="bg-white rounded-lg shadow-lg p-6 flex max-w-2xl h-[300px]">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnCvf0PRfcpUlSOdcmLaHoMbBLEJhah0w82A&s" alt="Berita" class="w-1/3 rounded-md object-cover h-full">
                        <div class="p-4 flex flex-col justify-center">
                            <h3 class="text-lg font-bold text-gray-900">Beasiswa Unggulan 2025!</h3>
                            <p class="text-sm text-gray-600 mt-2">Cek daftar beasiswa terbaru yang bisa kamu daftar tahun ini.</p>
                            <button class="mt-4 px-4 py-2 w-52 text-sm font-semibold text-gray-900 border border-gray-300 rounded-2xl">Cek Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigasi -->
            <div class=" swiper-button-prev text-white"></div>
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-pagination hidden"></div>
        </div>
    </div>
</section>

{{-- Section 5 --}}
<section class="bg-gray-100 py-16 relative">
    <div class="relative max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-10">Apa Kata Mereka?</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 justify-center">
            <!-- Testimoni 1 -->
            <div class="bg-white rounded-lg shadow-lg p-8 relative max-w-md ml-16">
                <div class="absolute -top-3 -left-3">
                    <img src="./img/icon-quote1.png" />
                </div>
                <p class="text-gray-900 text-base italic">
                    Aplikasi ini sangat membantu saya dalam menemukan kampus yang sesuai dengan jurusan impian saya
                </p>
                <div class="text-right text-sm font-semibold text-gray-600 mt-4">Fachri, Universitas Garut</div>
                <div class="absolute -bottom-3 -right-3">
                    <img src="./img/icon-quote2.png" />
                </div>
            </div>
        
            <!-- Testimoni 2 -->
            <div class="bg-white rounded-lg shadow-lg p-8 relative max-w-md ml-16">
                <div class="absolute -top-3 -left-3">
                    <img src="./img/icon-quote1.png" />
                </div>
                <p class="text-gray-900 text-base italic">
                    Saya bisa membandingkan berbagai kampus dengan mudah hanya dalam satu aplikasi, keren!
                </p>
                <div class="text-right text-sm font-semibold text-gray-600 mt-4">Ridwan, Universitas Brawijaya</div>
                <div class="absolute -bottom-3 -right-3">
                    <img src="./img/icon-quote2.png" />
                </div>
            </div>
        </div>
        
    </div>
</section>


</x-layout>

<script>
    var swiper = new Swiper(".news-slider", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
