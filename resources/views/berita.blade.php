<x-layout>
    <section>
        <div class="relative bg-[#233A75] text-white py-20 px-6 flex items-center justify-between">
            <div class="mx-40 mt-8">
                <h1 class="text-2xl">Halo rekan,</h1>
                <p class="text-xl font-extrabold">Temukan Berita Menarik Disini!</p>
            </div>
            <div class="relative -mb-36">
                <img src="./img/icon-berita.png" alt="Ilustrasi" class=" h-52 mx-56">
            </div>
        </div>
        </section>

        <section class="py-8 mt-14 bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Daftar Berita</h2>
                @foreach ($beritas as $brt)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-sm rounded-2xl flex overflow-hidden p-4">
                        <!-- Gambar -->
                        <img src="{{ $brt->link_gambar }}" alt="Pendaftaran Perguruan Tinggi"
                            class="w-24 h-24 object-cover rounded-lg">
        
                        <!-- Konten -->
                        <div class="ml-4 flex-1">
                            <div class="flex justify-between items-start">
                                <h3 class="text-sm font-semibold text-gray-900">
                                    {{ $brt->judul_berita }}
                                </h3>
                                <!-- Ikon Mata & View Count -->
                                <div class="flex items-center text-gray-500 text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5c-4.286 0-8.12 2.64-9.877 6.5 1.757 3.86 5.591 6.5 9.877 6.5 4.286 0 8.12-2.64 9.877-6.5-1.757-3.86-5.591-6.5-9.877-6.5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 100-6 3 3 0 000 6z"/>
                                    </svg>
                                    {{-- <span>100</span> --}}
                                </div>
                            </div>
        
                            <p class="text-xs text-gray-600 mt-1">
                                {{ $brt->deskripsi_berita }}
                            </p>
        
                            <!-- Tanggal & Link -->
                            <div class="flex justify-between items-center mt-3">
                                <span class="text-xs text-gray-400">{{ $brt->tanggal_rilis }}</span>
                                <a href="{{ route('detailberita', ['id' => $brt->id_berita]) }}" class="text-blue-600 text-xs font-semibold flex items-center hover:underline">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
        
                </div>
                @endforeach
            </div>
        </section>
        
        
</x-layout>