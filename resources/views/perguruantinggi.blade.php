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

        <!-- Search & Filter Section -->
        <div class="relative -mt-16 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto space-y-6">
                <div class="bg-white shadow-sm rounded-2xl p-6 space-y-2">
                    
                    <form method="GET" action="{{ route('perguruan-tinggi') }}">
                        <div class="flex mb-3 #233A75items-center border border-gray-200 bg-gray-50 rounded-xl p-1 focus-within:ring-2 focus-within:ring-blue-500">
                            <input 
                                type="text" 
                                name="search" 
                                value="{{ request('search') }}" 
                                placeholder="Cari nama kampus" 
                                class="flex-1 bg-transparent text-lg border-0 focus:outline-none focus:ring-0"
                            >
                            <button type="submit" class="ml-2 p-2 text-gray-500 hover:text-blue-600 rounded-full hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2">
                            <select name="tipe" class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option value="">Tipe kampus</option>
                                <option value="Negeri" {{ request('stat_univ') == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                                <option value="Swasta" {{ request('stat_univ') == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                            </select>

                            <select name="akreditasi" class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option value="">Akreditasi</option>
                                <option value="Unggul" {{ request('akreditasi') == 'Unggul' ? 'selected' : '' }}>Unggul</option>
                                <option value="Baik" {{ request('akreditasi') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                <option value="Cukup" {{ request('akreditasi') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                            </select>

                            <select name="jurusan" class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option value="">Pilih Jurusan</option>
                                @foreach($jurusanList as $jurusan)
                                    <option value="{{ $jurusan }}">{{ $jurusan }}</option>
                                @endforeach
                            </select>

                            <select name="lokasi" class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option value="">Lokasi</option>
                                @foreach ($lokasiList as $lokasi)
                                    <option value="{{ $lokasi }}" {{ request('lokasi') == $lokasi ? 'selected' : '' }}>
                                        {{ $lokasi }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <select name="lokasi" class="w-full bg-gray-50 rounded-lg px-4 py-3 text-gray-700 border border-gray-200 focus:ring-2 focus:ring-blue-500">
                                <option class="text-gray-400">Pilih Lokasi</option>
                                @foreach($lokasiList as $lokasi)
                                    <option value="{{ $lokasi }}">{{ $lokasi }}</option>
                                @endforeach
                            </select> --}}
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Universitas List -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-36 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Daftar Kampus Populer</h2>
            @if($universitas->isEmpty())
                <div class="text-center text-gray-600 text-lg font-medium mt-6">
                    Data tidak ditemukan
                </div>
            @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16">
                @foreach($universitas as $univ)
                {{-- <div class="bg-white shadow-sm rounded-2xl overflow-hidden w-80"> --}}
                <a href="{{ route('detailpt', ['id' => $univ->id_univ]) }}" class="block bg-white shadow-sm rounded-2xl overflow-hidden w-80 hover:shadow-md transition">
                    <img src="{{ $univ->link_gambar ?? 'https://via.placeholder.com/600x300' }}" alt="{{ $univ->nama_univ }}" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex items-center justify-between pb-2">
                            <div class="flex items-center space-x-2">
                                <img src="{{ $univ->link_logo ?? 'https://via.placeholder.com/50x50' }}" class="w-7 h-7" alt="Logo">
                                <h3 class="text-sm font-semibold">{{ $univ->nama_univ }}</h3>
                            </div>
                            <img src="{{ asset('img/icon-approval.png') }}" class="w-5 h-5" alt="Approval Icon">
                        </div>
                        <hr class="border-t border-gray-100 my-3">
                        <p class="text-sm text-gray-600">
                            <strong>Akreditasi:</strong> {{ $univ->akreditasi }}<br>
                            <strong>Status:</strong> {{ $univ->stat_univ }}<br>
                            <strong>Program Studi:</strong> {{ $univ->jumlah_prodi }}<br>
                            <strong>Lokasi:</strong> {{ $univ->alamat }}
                        </p>
                    </div>
                {{-- </div> --}}
                </a>
                @endforeach
            </div>
            @endif
        </div>
    </section>
</x-layout>
