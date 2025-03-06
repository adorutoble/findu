<x-layout>

    <section>
        <div class="relative bg-[#233A75] h-56 text-white py-10 px-6 flex items-center justify-between">
        </div>
        <div class="relative mx-auto -mt-28 max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                {{-- Breadcrumbs --}}
                <nav class="my-4 text-sm">
                    <a href="/berita" class="text-white hover:text-gray-500">Berita</a>
                    <span class="mx-2 text-white">/</span>
                    <span class="text-white font-semibold">Detail Berita</span>
                </nav>

                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 relative">
                    <h1 class="text-xl font-bold">
                        {{ $berita->judul_berita }} 
                    </h1>
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">{{ $berita->penulis }}</p>
                        <p class="text-sm text-gray-600">{{ $berita->tanggal_rilis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 p-6 relative">
            <div class="max-w-5xl mx-auto">
            <p class="font-light text-justify mb-6">
                {{ $berita->narasi1 }}
            </p>
            <img src="{{ $berita->link_gambar }}" alt="img" class="rounded-md mx-auto">
            <p class="font-light text-justify mt-6">
                {{ $berita->narasi2 }}
            </p>
            </div>
    </section>

</x-layout>
