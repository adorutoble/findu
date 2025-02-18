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
                <select class="mt-2 w-full p-2 text-black rounded-xl" id="ptn1" onchange="loadJurusan(1)">
                    <option value="">Pilih Perguruan Tinggi</option>
                    @foreach ($universitas as $univ)
                        <option value="{{ $univ->id_univ }}">{{ $univ->nama_univ }}</option>
                    @endforeach
                </select>
                <select class="mt-2 w-full p-2 text-black rounded-xl" id="prodi1">
                    <option>Pilih Program Studi</option>
                </select>
            </div>
            
            <div class="bg-[#233A75] text-white p-4 rounded-lg">
                <h2 class="font-semibold">Pilihan Kedua</h2>
                <select class="mt-2 w-full p-2 text-black rounded-xl" id="ptn2" onchange="loadJurusan(2)">
                    <option value="">Pilih Perguruan Tinggi</option>
                    @foreach ($universitas as $univ)
                        <option value="{{ $univ->id_univ }}">{{ $univ->nama_univ }}</option>
                    @endforeach
                </select>
                <select class="mt-2 w-full p-2 text-black rounded-md" id="prodi2">
                    <option>Pilih Program Studi</option>
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
        document.getElementById("ptn1").addEventListener("change", function () {
            loadJurusan(1);
        });
        document.getElementById("ptn2").addEventListener("change", function () {
            loadJurusan(2);
        });

        function loadJurusan(id) {
            let ptn = document.getElementById("ptn" + id).value;
            let prodi = document.getElementById("prodi" + id);

            if (ptn === "") {
                prodi.innerHTML = "<option value=''>Pilih Program Studi</option>";
                return;
            }

            fetch("{{ route('getJurusan') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ id_univ: ptn })
            })
            .then(response => response.json())
            .then(data => {
                prodi.innerHTML = "<option value=''>Pilih Program Studi</option>";
                data.forEach(jurusan => {
                    prodi.innerHTML += `<option value="${jurusan.id_jurusan}">${jurusan.nama_jurusan}</option>`;
                });
            })
            .catch(error => console.error("Error:", error));

        }

        function showComparison() {
            let ptn1 = document.getElementById("ptn1").value;
            let prodi1 = document.getElementById("prodi1").value;
            let ptn2 = document.getElementById("ptn2").value;
            let prodi2 = document.getElementById("prodi2").value;

            fetch("/bandingkan", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ ptn1, prodi1, ptn2, prodi2 })
            })
            .then(response => response.json())
            .then(data => {
                if (window.myBarChart) window.myBarChart.destroy();
                if (window.myPieChart) window.myPieChart.destroy();

                document.getElementById("comparisonContainer").classList.remove("hidden");

                // Ambil nama universitas berdasarkan ptn1 dan ptn2
                let namaPtn1 = data.nama_universitas_1; // Menggunakan nama universitas pertama
                let namaPtn2 = data.nama_universitas_2; // Menggunakan nama universitas kedua

                // Bar Chart for Daya Tampung
                const ctxBar = document.getElementById("comparisonChart").getContext("2d");
                window.myBarChart = new Chart(ctxBar, {
                    type: "bar",
                    data: {
                        labels: data.labels, // Tahun
                        datasets: [
                            {
                                label: namaPtn1, // Gunakan nama universitas pertama
                                backgroundColor: "#233A75", // Warna untuk universitas pertama
                                data: data.universitas1
                            },
                            {
                                label: namaPtn2, // Gunakan nama universitas kedua
                                backgroundColor: "#4c5c9c", // Warna untuk universitas kedua
                                data: data.universitas2
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Pie Chart for Peminat
                const ctxPie = document.getElementById("peminatChart").getContext("2d");
                window.myPieChart = new Chart(ctxPie, {
                    type: "pie",
                    data: {
                        labels: [namaPtn1, namaPtn2], // Nama Universitas
                        datasets: [{
                            data: [
                                data.peminat1.reduce((a, b) => a + b, 0), // Total peminat Universitas 1
                                data.peminat2.reduce((a, b) => a + b, 0)  // Total peminat Universitas 2
                            ],
                            backgroundColor: ["#233A75", "#4c5c9c"], // Warna Pie Chart
                            hoverBackgroundColor: ["#1e2d6f", "#2a3e6f"] // Warna hover
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                    }
                });

                // Displaying total peminat info
                document.getElementById("infoPeminat").innerHTML = `
                    ${namaPtn1} memiliki total <b>${data.peminat1.reduce((a, b) => a + b, 0)}</b> peminat dalam ${data.labels.length} tahun.<br>
                    ${namaPtn2} memiliki total <b>${data.peminat2.reduce((a, b) => a + b, 0)}</b> peminat dalam ${data.labels.length} tahun.<br>
                `;
            });
        }

    </script>
</x-layout>
