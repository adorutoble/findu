<x-layout>

    {{-- Bagian Atas --}}
    <section>
        <div class="relative bg-[#233A75] h-56 text-white py-10 px-6 flex items-center justify-between">
        </div>

        <div class="relative mx-auto -mt-28 max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                {{-- Breadcrumbs --}}
                <nav class="my-4 text-sm">
                    <a href="/perguruan-tinggi" class="text-white hover:text-gray-500">Perguruan Tinggi</a>
                    <span class="mx-2 text-white">/</span>
                    <span class="text-white font-semibold">{{ $universitas->nama_univ }}</span>
                </nav>

                <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between border border-gray-200 relative">
                    <!-- Logo dan Informasi -->
                    <div class="flex items-center space-x-6">
                        <img src="{{ $universitas->link_logo }}" alt="{{ $universitas->nama_univ }}" class="w-20 h-20">
                        <div>
                            <h1 class="text-xl font-bold flex items-center space-x-2">
                                {{ $universitas->nama_univ }}
                                <img src="./img/icon-approval.png" alt="Verified" class="ml-2 w-5 h-5">
                            </h1>
                            <p class="text-sm text-gray-600">{{ $universitas->alamat }}</p>
                            <div class="mt-5">
                                <button class="bg-[#233A75] hover:bg-blue-900 text-white px-4 py-2 rounded-lg">Lihat Lokasi</button>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 flex flex-col items-end text-blue-900 space-y-1">
                        <span class="text-sm font-semibold flex space-x-1">
                            <img src="icon-telepon.png" />
                            <span>{{ $universitas->no_telp }}</span>
                        <a href="https://www.ui.ac.id" class="text-sm font-semibold flex space-x-1 hover:underline">
                            <img src="icon-web.png" />
                            <span class="ml-6">{{ $universitas->website }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl mx-32 my-10 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tentang Kampus</h2>
            <p class="text-justify">
                {{ $universitas->deskripsi_univ}}
            </p>
            <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Sejarah Kampus</h2>
            <p class="text-justify">
                {{ $universitas->sejarah}}
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-32 sm:px-2 lg:px-8 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Detail Kampus -->
            <div class="bg-[#233A75] text-white p-6 rounded-xl shadow-md">
                <h2 class="text-lg font-bold mb-2">Detail Kampus</h2>
                <p>Status: {{ $universitas->stat_univ }}</p>
                <p>Akreditasi: {{ $universitas->akreditasi }}</p>
                <p>Program Studi: {{ $universitas->jumlah_prodi }}</p>
                <p>Fakultas: -</p>
                <p>Biaya Pendaftaran: Rp. 500.000</p>
                <p class="mt-2 font-semibold">Biaya UKT (Uang Kuliah Tunggal):</p>
                <ul class="list-disc ml-5">
                    <li>UKT Kelompok 1: Rp500.000</li>
                    <li>UKT Kelompok 2: Rp1.000.000</li>
                    <li>UKT Kelompok 3: Rp2.500.000</li>
                    <li>UKT Kelompok 4: Rp17.500.000</li>
                </ul>
            </div>
            
            <!-- Informasi Pendaftaran -->
            <div class="p-4 rounded-xl shadow-sm border border-gray-300">
                <h2 class="text-lg font-bold mb-4 mr-6">Informasi Pendaftaran</h2>
                <table class="w-full rounded-lg overflow-hidden">
                    <tbody class="divide-y">
                        <tr>
                            <td class="py-3 px-4">1.</td>
                            <td class="py-3 px-4">SNBP</td>
                            <td class="py-3 px-4">14 Feb 2024 - 28 Feb 2024</td>
                            <td class="py-3 px-4 text-center">
                                <button class="border border-[#233A75] text-[#233A75] rounded-full px-4 py-1 hover:bg-[#233A75] hover:text-white transition">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">2.</td>
                            <td class="py-3 px-4">UTBK-SNBT</td>
                            <td class="py-3 px-4">21 Mar 2024 - 5 Apr 2024</td>
                            <td class="py-3 px-4 text-center">
                                <button class="border border-[#233A75] text-[#233A75] rounded-full px-4 py-1 hover:bg-[#233A75] hover:text-white transition">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">3.</td>
                            <td class="py-3 px-4">SIMAK</td>
                            <td class="py-3 px-4">19 Jun 2024 - 8 Jul 2024</td>
                            <td class="py-3 px-4 text-center">
                                <button class="border border-[#233A75] text-[#233A75] rounded-full px-4 py-1 hover:bg-[#233A75] hover:text-white transition">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">4.</td>
                            <td class="py-3 px-4">Jalur Prestasi</td>
                            <td class="py-3 px-4">25 Apr 2024 - 14 Jun 2024</td>
                            <td class="py-3 px-4 text-center">
                                <button class="border border-[#233A75] text-[#233A75] rounded-full px-4 py-1 hover:bg-[#233A75] hover:text-white transition">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>                       
            
        </div>
    </section>
    
    <!-- Daftar Jurusan -->
    <section class="max-w-6xl mx-32 mb-20 px-4 sm:px-6 lg:px-8 mt-10">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Daftar Jurusan</h2>
    <div class="bg-white shadow-sm rounded-2xl p-6 space-y-2">
        <div class="flex items-center border border-gray-200 bg-gray-50 rounded-xl p-1 focus-within:ring-2 focus-within:ring-blue-500">
            <input 
                type="text" 
                placeholder="Cari Jurusan" 
                class="flex-1 bg-transparent text-md border-0 focus:outline-none focus:ring-0"
            >
            <button class="ml-2 p-2 text-gray-500 hover:text-[#233A75] rounded-full hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                </svg>
            </button>
        </div>
        <div class="overflow-auto max-h-96 border rounded-xl">
            <table class="w-full bg-white overflow-hidden">
                <thead class="top-0 bg-white z-10">
                    <tr>
                        <th class="py-3 px-4 text-left">No.</th>
                        <th class="py-3 px-4 text-left">Jurusan</th>
                        <th class="py-3 px-4 text-left">Fakultas</th>
                        <th class="py-3 px-4 text-left">Akreditasi</th>
                        <th class="py-3 px-4 text-left">Website</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($universitas->fakultas as $fakultas)
                            @foreach ($fakultas->jurusan as $index => $jurusan)
                                <tr class="border-t">
                                    <td class="py-3 px-4">{{ $loop->parent->index * count($fakultas->jurusan) + $index + 1 }}</td>
                                    <td class="py-3 px-4">{{ $jurusan->nama_jurusan }}</td>
                                    <td class="py-3 px-4">{{ $fakultas->nama_fakultas }}</td>
                                    <td class="py-3 px-4">{{ $jurusan->akreditasi }}</td>
                                </tr>
                            @endforeach
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </section>

     
</x-layout>