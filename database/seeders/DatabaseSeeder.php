<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Jurusan;
use App\Models\Fakultas;
use App\Models\DayaTampung;
use App\Models\Universitas;
use App\Models\UniversitasJurusan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Insert 5 Universitas
         $universitas = [
            [
                'nama_univ' => 'Universitas Indonesia',
                'alamat' => 'Depok, Jawa Barat',
                'no_telp' => '021-12345678',
                'website' => 'https://www.ui.ac.id',
                'deskripsi_univ' => 'Universitas Indonesia adalah universitas negeri di Indonesia yang berlokasi di Depok.',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 10,
                'link_logo' => 'https://www.ui.ac.id/logo.png',
                'link_gambar' => 'https://www.ui.ac.id/landingpage.jpg',
            ],
            [
                'nama_univ' => 'Institut Teknologi Bandung',
                'alamat' => 'Bandung, Jawa Barat',
                'no_telp' => '022-12345678',
                'website' => 'https://www.itb.ac.id',
                'deskripsi_univ' => 'Institut Teknologi Bandung adalah universitas yang fokus pada ilmu teknologi dan sains.',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 8,
                'link_logo' => 'https://www.itb.ac.id/logo.png',
                'link_gambar' => 'https://www.itb.ac.id/landingpage.jpg',
            ],
            [
                'nama_univ' => 'Universitas Gadjah Mada',
                'alamat' => 'Yogyakarta',
                'no_telp' => '0274-12345678',
                'website' => 'https://www.ugm.ac.id',
                'deskripsi_univ' => 'Universitas Gadjah Mada adalah universitas yang berbasis di Yogyakarta, terkenal dalam berbagai disiplin ilmu.',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 12,
                'link_logo' => 'https://www.ugm.ac.id/logo.png',
                'link_gambar' => 'https://www.ugm.ac.id/landingpage.jpg',
            ],
            [
                'nama_univ' => 'Universitas Brawijaya',
                'alamat' => 'Malang, Jawa Timur',
                'no_telp' => '0341-12345678',
                'website' => 'https://www.ub.ac.id',
                'deskripsi_univ' => 'Universitas Brawijaya adalah universitas negeri di Malang yang memiliki banyak prodi unggulan.',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 9,
                'link_logo' => 'https://www.ub.ac.id/logo.png',
                'link_gambar' => 'https://www.ub.ac.id/landingpage.jpg',
            ],
            [
                'nama_univ' => 'Universitas Airlangga',
                'alamat' => 'Surabaya, Jawa Timur',
                'no_telp' => '031-12345678',
                'website' => 'https://www.unair.ac.id',
                'deskripsi_univ' => 'Universitas Airlangga adalah universitas yang terletak di Surabaya dengan fokus pada ilmu kesehatan.',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 7,
                'link_logo' => 'https://www.unair.ac.id/logo.png',
                'link_gambar' => 'https://www.unair.ac.id/landingpage.jpg',
            ],
        ];

        foreach ($universitas as $data) {
            Universitas::create($data);
        }

        // Insert 5 Fakultas untuk setiap Universitas
        $fakultasData = [
           ['id_fakultas' => 1, 'nama_fakultas' => 'Fakultas Teknik', 'deskripsi' => 'Fakultas yang menyelenggarakan program studi di bidang teknik', 'id_univ' => 1],
           ['id_fakultas' => 2, 'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis', 'deskripsi' => 'Fakultas yang menyelenggarakan program studi di bidang ekonomi dan bisnis', 'id_univ' => 1],
           ['id_fakultas' => 3, 'nama_fakultas' => 'Fakultas Kedokteran', 'deskripsi' => 'Fakultas yang menyelenggarakan program studi di bidang kedokteran', 'id_univ' => 2],
           ['id_fakultas' => 4, 'nama_fakultas' => 'Fakultas Hukum', 'deskripsi' => 'Fakultas yang menyelenggarakan program studi di bidang hukum', 'id_univ' => 2],
           ['id_fakultas' => 5, 'nama_fakultas' => 'Fakultas Ilmu Komputer', 'deskripsi' => 'Fakultas yang menyelenggarakan program studi di bidang ilmu komputer', 'id_univ' => 3],
       ];

       foreach ($fakultasData as $data) {
           Fakultas::create($data);
       }
        // Insert 5 Jurusan
        $jurusans = [
            ['id_jurusan' => 1,'nama_jurusan' => 'Teknik Informatika', 'id_fakultas' => 1, 'id_univ' => 1], // Menambahkan id_univ
            ['id_jurusan' => 2,'nama_jurusan' => 'Teknik Elektro', 'id_fakultas' => 1, 'id_univ' => 1],
            ['id_jurusan' => 3,'nama_jurusan' => 'Manajemen', 'id_fakultas' => 2, 'id_univ' => 2],
            ['id_jurusan' => 4,'nama_jurusan' => 'Kedokteran', 'id_fakultas' => 3, 'id_univ' => 3],
            ['id_jurusan' => 5,'nama_jurusan' => 'Hukum', 'id_fakultas' => 4, 'id_univ' => 4],
        ];
        

        foreach ($jurusans as $data) {
            Jurusan::create($data);
        }

        $universitas_jurusan = [
            ['id' => 1,'id_univ' => 1, 'id_jurusan' => 1, ], // Menambahkan id_univ
            ['id' => 2,'id_univ' => 1, 'id_jurusan' => 2, ],
            ['id' => 3,'id_univ' => 1, 'id_jurusan' => 3, ],
            ['id' => 4,'id_univ' => 2, 'id_jurusan' => 1, ],
            ['id' => 5,'id_univ' => 2, 'id_jurusan' => 2, ],
        ];
        

        foreach ($universitas_jurusan as $data) {
            UniversitasJurusan::create($data);
        }


        // Insert ke Pivot Universitas - Jurusan
        // $universitas = Universitas::all();
        // $jurusan = Jurusan::all();

        // foreach ($universitas as $univ) {
        //     foreach ($jurusan as $jrs) {
        //         $univ->jurusans()->attach($jrs->id_jurusan);
        //     }
        // }

        // Insert 5 Data Daya Tampung untuk Jurusan Teknik Informatika
        $tahun = [2021, 2022, 2023, 2024, 2025];

        // Untuk universitas pertama (id_univ = 1)
        foreach ($tahun as $t) {
            // Cek apakah data sudah ada, jika belum maka buat data baru
            DayaTampung::updateOrCreate(
                ['id_univ' => 1, 'id_jurusan' => 1, 'tahun' => $t],
                ['daya_tampung' => 100 + ($t - 2021) * 10, 'jumlah_peminat' => 500 + ($t - 2021) * 50]
            );
        }
        
        // Untuk universitas kedua (id_univ = 2)
        foreach ($tahun as $t) {
            // Cek apakah data sudah ada, jika belum maka buat data baru
            DayaTampung::updateOrCreate(
                ['id_univ' => 2, 'id_jurusan' => 1, 'tahun' => $t],
                ['daya_tampung' => 120 + ($t - 2021) * 12, 'jumlah_peminat' => 450 + ($t - 2021) * 40]
            );
        }
            
    }
}
