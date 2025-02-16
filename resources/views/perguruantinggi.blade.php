<x-layout>
    <section class="bg-gray-50 font-[poppins]">
            <!-- Header Section -->
            <div class="relative bg-[#233A75] text-white mt-10 py-10 px-6 flex items-center justify-between">
                <div class="mx-40">
                    <h1 class="text-2xl">Halo rekan,</h1>
                    <p class="text-xl font-extrabold">Cari kampus terbaikmu di sini!</p>
                </div>
                <div>
                    <img src="./img/icon-chara1.png" alt="Ilustrasi" class="h-40 mx-56">
                </div>
            </div>
            <!-- Search Section (Placed between Header and Content) -->
            <div class="relative -mt-16 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-5xl mx-auto space-y-6">
                    <div class="bg-white shadow-sm rounded-2xl p-6 space-y-2">
                        <div class="flex items-center border border-gray-200 bg-gray-50 rounded-xl p-1 focus-within:ring-2 focus-within:ring-blue-500">
                            <input 
                                type="text" 
                                placeholder="Cari nama kampus" 
                                class="flex-1 bg-transparent text-lg border-0 focus:outline-none focus:ring-0"
                            >
                            <button class="ml-2 p-2 text-gray-500 hover:text-blue-600 rounded-full hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2">
                            <select class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option class="text-gray-400">Tipe kampus</option>
                            </select>
                            <select class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option class="text-gray-400">Akreditasi</option>
                            </select>
                            <select class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option class="text-gray-400">Jurusan</option>
                            </select>
                            <select class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option class="text-gray-400">Lokasi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-36 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Daftar Kampus Populer</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16">

                <!-- Card -->
                <div class="bg-white shadow-sm rounded-2xl overflow-hidden w-80">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2019/02/12/43b5e043-b813-47c9-b0c1-3c8fa14bf6ae_169.jpeg?w=600&q=90" 
                         alt="Universitas Indonesia" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex items-center justify-between pb-2">
                            <div class="flex items-center space-x-2">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/0/0f/Makara_of_Universitas_Indonesia.svg/1200px-Makara_of_Universitas_Indonesia.svg.png" 
                                     class="w-7 h-7" alt="UI Logo">
                                <h3 class="text-sm font-semibold">Universitas Indonesia (UI)</h3>
                            </div>
                            <img src="./img/icon-approval.png" class="w-5 h-5" alt="Approval Icon">
                        </div>
                        <hr class="border-t border-gray-100 my-3">
                        <p class="text-sm text-gray-600">
                            <strong>Akreditasi:</strong> Unggul<br>
                            <strong>Status:</strong> Negeri<br>
                            <strong>Program Studi:</strong> 95<br>
                            <strong>Lokasi:</strong> Kota Depok, Jawa Barat
                        </p>
                    </div>
                </div> 
    </section>
    
</x-layout>