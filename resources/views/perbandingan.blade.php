<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<x-layout>
    <!-- Hero Section -->
    <section>
        <div class="relative bg-[#233A75] text-white py-20 px-6 flex items-center justify-between">
            <div class="mx-40 mt-8">
                <h1 class="text-2xl">Halo rekan,</h1>
                <p class="text-xl font-extrabold">Bandingkan PT Untuk Mendukung Keputusanmu</p>
            </div>
            <div class="relative -mb-36">
                <img src="./img/icon-search.png" alt="Ilustrasi" class="h-52 mr-56">
            </div>
        </div>
    </section>

    <!-- Form Pilihan PTN -->
    <section class="max-w-4xl mx-auto my-14 p-6">
        <h1 class="text-2xl font-bold text-center">Bandingkan 2 Perguruan Tinggi yang Kamu Minati</h1>
        
        <div class="mt-6 grid grid-cols-2 gap-4">
            <div class="bg-[#233A75] text-white p-4 rounded-lg">
                <h2 class="font-semibold">Pilihan Pertama</h2>
                <select class="mt-2 w-full p-2 text-black rounded-xl" id="ptn1">
                    <option>Pilih Perguruan Tinggi</option>
                    <option>Universitas Indonesia</option>
                    <option>Institut Teknologi Bandung</option>
                </select>
                <select class="mt-2 w-full p-2 text-black rounded-xl" id="prodi1">
                    <option>Pilih Program Studi</option>
                    <option>Akuntansi</option>
                    <option>Teknik Informatika</option>
                    <option>Aktuaria</option>
                </select>
            </div>
            
            <div class="bg-[#233A75] text-white p-4 rounded-lg">
                <h2 class="font-semibold">Pilihan Kedua</h2>
                <select class="mt-2 w-full p-2 text-black rounded-md" id="ptn2">
                    <option>Pilih Perguruan Tinggi</option>
                    <option>Universitas Indonesia</option>
                    <option>Institut Teknologi Bandung</option>
                </select>
                <select class="mt-2 w-full p-2 text-black rounded-md" id="prodi2">
                    <option>Pilih Program Studi</option>
                    <option>Akuntansi</option>
                    <option>Teknik Informatika</option>
                    <option>Aktuaria</option>
                </select>
            </div>
        </div>
        
        <!-- Tombol Bandingkan -->
        <div class="flex justify-center mt-6">
            <button onclick="showComparison()" class="w-56 bg-[#233A75] text-white p-2 rounded-xl hover:bg-[#1a2c5a] transition">
                Bandingkan
            </button>
        </div>        
    
        <!-- Container untuk Chart -->
        <div id="comparisonContainer" class="hidden mt-10">
            <!-- Chart Daya Tampung -->
            <div class="bg-white p-6 rounded-lg shadow-sm mb-10">
                <h2 class="text-lg font-semibold text-center mb-4">Daya Tampung Jurusan</h2>
                <div class="flex justify-center">
                    <canvas id="comparisonChart" class="max-w-xl max-h-lg"></canvas>
                </div>
            </div>

            <!-- Chart Peminat Jurusan -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold text-center mb-4">Peminat Jurusan</h2>
                
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <!-- Chart -->
                    <div class="w-1/3 flex justify-center">
                        <canvas id="peminatChart" class="w-72 h-72"></canvas>
                    </div>
                    
                    <!-- Informasi Peminat -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-md font-semibold">Informasi Peminat:</h3>
                        <p class="mt-1 text-sm text-gray-700" id="infoPeminat">Belum ada data.</p>
                    </div>
                </div>
            </div>
                        
        </div>
    </section>

    <script>
        function showComparison() {
    const ctxBar = document.getElementById("comparisonChart").getContext("2d");
    const ctxPie = document.getElementById("peminatChart").getContext("2d");

    // Hapus chart lama sebelum membuat yang baru
    if (window.myBarChart) window.myBarChart.destroy();
    if (window.myPieChart) window.myPieChart.destroy();

    // Tampilkan container hasil perbandingan
    document.getElementById("comparisonContainer").classList.remove("hidden");

    // Bar Chart untuk daya tampung
    window.myBarChart = new Chart(ctxBar, {
        type: "bar",
        data: {
            labels: ["2021", "2022", "2023", "2024"],
            datasets: [
                {
                    label: "Universitas Indonesia",
                    backgroundColor: "#233A75",
                    borderColor: "#233A75",
                    borderWidth: 1,
                    data: [20, 18, 16, 17]
                },
                {
                    label: "Institut Teknologi Bandung",
                    backgroundColor: "#4c5c9c",
                    borderColor: "#4c5c9c",
                    borderWidth: 1,
                    data: [25, 23, 21, 20]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: { beginAtZero: true }
            },
            plugins: {
                legend: {
                    labels: {
                        color: "#233A75"
                    }
                }
            }
        }
    });

    // Pie Chart untuk peminat jurusan
   // Data peminat
   const peminatData = [300, 230];
    const totalPeminat = peminatData.reduce((a, b) => a + b, 0);
    const persentaseUI = ((peminatData[0] / totalPeminat) * 100).toFixed(1);
    const persentaseITB = ((peminatData[1] / totalPeminat) * 100).toFixed(1);

    // Update informasi peminat
    document.getElementById("infoPeminat").innerHTML = `
        Universitas Indonesia memiliki <b>${peminatData[0]}</b> peminat (${persentaseUI}%).<br>
        Institut Teknologi Bandung memiliki <b>${peminatData[1]}</b> peminat (${persentaseITB}%).<br>
        <b>${peminatData[0] > peminatData[1] ? "Universitas Indonesia" : "Institut Teknologi Bandung"}</b> lebih diminati.
    `;

    // Pie Chart untuk peminat jurusan
    window.myPieChart = new Chart(ctxPie, {
        type: "pie",
        data: {
            labels: ["Universitas Indonesia", "Institut Teknologi Bandung"],
            datasets: [{
                data: peminatData,
                backgroundColor: ["#233A75", "#4c5c9c"],
                hoverBackgroundColor: ["#1B2D5E", "#46558f"]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "bottom",
                    labels: { color: "#233A75" }
                }
            }
        }
    });
}

    </script>
</x-layout>