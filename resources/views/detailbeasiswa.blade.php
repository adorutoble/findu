<x-layout>
    
     <section>
        <div class="relative bg-[#233A75] h-56 text-white py-10 px-6 flex items-center justify-between">
        </div>
     </section>

     <section>
        <div class="relative mx-auto mt-10 max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">

                <nav class="my-4 text-sm">
                    <a href="/beasiswa" class="text-[#1d3369] hover:text-[#233A75]">Beasiswa</a>
                    <span class="mx-2 text-[#1d3369]">/</span>
                    <span class="text-[#233A75] font-semibold">Informasi Pendaftaran</span>
                </nav>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                    <!-- Judul Deskripsi -->
                    <h1 class="text-xl font-bold text-center mb-4">Deskripsi Beasiswa</h1>
        
                    <!-- Konten Deskripsi -->
                    <p class="text-gray-700">
                        {{ $beasiswa->deskripsi }}
                    </p>
                </div>
            </div>
        </div>    
    </section>

    <section>
        <div class="relative mx-auto mt-10 my-10 max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="bg-[#233A75] p-6 rounded-xl shadow-sm border border-[#1d3369]">
                    <!-- Judul Deskripsi -->
                    <h1 class="text-xl font-bold text-center text-white mb-4">Persyaratan Umum</h1>
                    
                    <!-- List Manfaat Beasiswa -->
                    <ul class="mt-4 list-disc list-inside space-y-2 text-white">
                        @foreach ($beasiswa->persyaratan as $p)
                            <li>{{ $p->persyaratan }}</li>
                        @endforeach
                    </ul>
                    {{-- <p class="text-white">
                        {{ $beasiswa->persyaratan }}
                    </p> --}}
                </div>
            </div>
        </div>    
    </section>

    <section>
        <div class="relative mx-auto mt-10 mb-20 max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                   <!-- Judul -->
            <h2 class="text-2xl font-bold text-center mb-12">Informasi Pendaftaran & Timeline</h2>
            <!-- Timeline Grid -->
            <div class="grid grid-cols-4 gap-6 items-start">
                <!-- Pendaftaran -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-[#1d3369] p-3 rounded-full">
                            {{-- <img src="./img/icon-calendar.svg" alt="Calendar" class="w-6 h-6"> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 5V3m-9 2V3M3.25 8h17.5M3 10.044c0-2.115 0-3.173.436-3.981a3.9 3.9 0 0 1 1.748-1.651C6.04 4 7.16 4 9.4 4h5.2c2.24 0 3.36 0 4.216.412c.753.362 1.364.94 1.748 1.65c.436.81.436 1.868.436 3.983v4.912c0 2.115 0 3.173-.436 3.981a3.9 3.9 0 0 1-1.748 1.651C17.96 21 16.84 21 14.6 21H9.4c-2.24 0-3.36 0-4.216-.412a3.9 3.9 0 0 1-1.748-1.65C3 18.128 3 17.07 3 14.955z"/></svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold">Pendaftaran</h3>
                    <p class="text-sm text-gray-600">Belum tersedia</p>
                    <div class="bg-white shadow-md rounded-lg p-4 mt-4">
                        <p class="text-sm text-gray-700">
                            Informasi belum tersedia, mohon menunggu update selenjutnya 
                        </p>
                    </div>
                </div>
    
                <!-- Online Tes -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-[#1d3369] p-3 rounded-full">
                            {{-- <img src="./img/icon-calendar.svg" alt="Calendar" class="w-6 h-6"> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="#fff"><path d="M20 15a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2h-8a1 1 0 0 1-1-1m1 3a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2zm-1 10a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2h-8a1 1 0 0 1-1-1m1 3a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2z"/><path fill-rule="evenodd" d="M10 27a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1zm2 1v3h3v-3z" clip-rule="evenodd"/><path d="M17.707 15.707a1 1 0 0 0-1.414-1.414L13 17.586l-1.293-1.293a1 1 0 0 0-1.414 1.414L13 20.414z"/><path fill-rule="evenodd" d="M10 6a4 4 0 0 0-4 4v28a4 4 0 0 0 4 4h20a4 4 0 0 0 4-4V10a4 4 0 0 0-4-4zm-2 4a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2v28a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2zm28 6a3 3 0 1 1 6 0v20.303l-3 4.5l-3-4.5zm3-1a1 1 0 0 0-1 1v2h2v-2a1 1 0 0 0-1-1m0 22.197l-1-1.5V20h2v15.697z" clip-rule="evenodd"/></g></svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold">Online Tes</h3>
                    <p class="text-sm text-gray-600">Belum tersedia</p>
                    <div class="bg-[#1d3369] text-white shadow-md rounded-lg p-4 mt-4 text-left">
                        <p class="text-sm">
                            Informasi belum tersedia, mohon menunggu update selenjutnya 
                        </p>
                        {{-- <p class="mt-3 font-semibold">Materi Tes:</p>
                        <ul class="list-disc list-inside text-sm">
                            <li>Penalaran Umum</li>
                            <li>Pengetahuan Kuantitatif</li>
                            <li>Pengetahuan dan Pemahaman Umum</li>
                            <li>Memahami Bacaan dan Menulis</li>
                            <li>Literasi Dalam Bahasa Indonesia</li>
                            <li>Literasi Dalam Bahasa Inggris</li>
                            <li>Penalaran Matematika</li>
                        </ul> --}}
                    </div>
                </div>
    
                <!-- Wawancara -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-[#1d3369] p-3 rounded-full">
                            {{-- <img src="./img/icon-calendar.svg" alt="Calendar" class="w-6 h-6"> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17a2 2 0 1 0 4 0a2 2 0 1 0-4 0m5 5a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2m-3.546-2.03A9.9 9.9 0 0 1 7.7 19L3 20l1.3-3.9C1.976 12.663 2.874 8.228 6.4 5.726c3.526-2.501 8.59-2.296 11.845.48c1.667 1.423 2.596 3.294 2.747 5.216"/></svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold">Wawancara</h3>
                    <p class="text-sm text-gray-600">Belum tersedia</p>
                    <div class="bg-white shadow-md rounded-lg p-4 mt-4">
                        <p class="text-sm text-gray-700">
                            Informasi belum tersedia, mohon menunggu update selenjutnya 
                        </p>
                    </div>
                </div>
    
                <!-- Pengumuman -->
                <div class="text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-[#1d3369] p-3 rounded-full">
                            {{-- <img src="./img/icon-calendar.svg" alt="Calendar" class="w-6 h-6"> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m9 12l2 2l4-4"/><path d="M4 20V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14m2 0H2"/></g></svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold">Pengumuman</h3>
                    <p class="text-sm text-gray-600">Belum tersedia</p>
                    <div class="bg-[#1d3369] text-white shadow-md rounded-lg p-4 mt-4">
                        <p class="text-sm">
                            Informasi belum tersedia, mohon menunggu update selenjutnya 
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>    
    </section>
    
    
</x-layout>