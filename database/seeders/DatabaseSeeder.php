<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Berita;
use App\Models\Jurusan;
use App\Models\Beasiswa;
use App\Models\Fakultas;
use App\Models\DayaTampung;
use App\Models\Universitas;
use Illuminate\Database\Seeder;
use App\Models\UniversitasJurusan;

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
                'no_telp' => '021-7867222',
                'website' => 'https://www.ui.ac.id',
                'deskripsi_univ' => 'Universitas Indonesia adalah universitas negeri di Indonesia yang berlokasi di Depok.',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 50,
                'link_logo' => 'https://upload.wikimedia.org/wikipedia/id/thumb/0/0f/Makara_of_Universitas_Indonesia.svg/800px-Makara_of_Universitas_Indonesia.svg.png',
                'link_gambar' => 'https://asset.kompas.com/crops/GJkLkTVquNFZwF44BExgv72vGlQ=/96x5:664x384/1200x800/data/photo/2022/09/20/632987a1a6149.jpeg',
            ],
            [
                'nama_univ' => 'Institut Teknologi Bandung',
                'alamat' => 'Bandung, Jawa Barat',
                'no_telp' => '022-2500935',
                'website' => 'https://www.itb.ac.id',
                'deskripsi_univ' => '"ITB asalnya didirikan pada 1920 dengan nama ""Technische Hooge School"" (THS). Pada masa penjajahan Jepun, THS diubah namanya menjadi ""Bandung Kogyo Daigaku"" (BKD). Kemudian pada masa kemerdekaan Indonesia, tahun 1945, namanya diubah menjadi ""Sekolah Tinggi Teknik (STT) Bandung"". Pada tahun 1946, STT Bandung dipindahkan ke Yogyakarta dan menjadi benih bakal lahirnya Universiti Gajah Mada. Pada tanggal 21 Jun 1946, NICA mendirikan ""Universiteit Van Indonesie"" dengan ""Faculteit van Technische Wetenschap"" sebagai pengganti STT Bandung. Dan pada 6 Oktober 1947, ""Faculteit van Exacte Wetenschap"" berdiri. Ini kemudian diserap menjadi Fakulti Teknik dan Fakulti Ilmu Pasti dan Ilmu Alam Universiti Indonesia."',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 40,
                'link_logo' => 'https://upload.wikimedia.org/wikipedia/id/9/95/Logo_Institut_Teknologi_Bandung.png?20210305165005',
                'link_gambar' => 'https://itb.ac.id/files/cover/170125-Kolam-Intel.jpg',
            ],
            [
                'nama_univ' => 'Universitas Gadjah Mada',
                'alamat' => 'Yogyakarta',
                'no_telp' => '0274-588688',
                'website' => 'https://www.ugm.ac.id',
                'deskripsi_univ' => '"Universitas Gadjah Mada (UGM) adalah perguruan tinggi negeri di Daerah Istimewa Yogyakarta, Indonesia. Universitas Gadjah Mada merupakan perguruan tinggi pertama yang didirikan oleh Pemerintah Indonesia setelah Indonesia merdeka. UGM berdiri pada tanggal 19 Desember 1949 dengan ditetapkannya Peraturan Pemerintah (PP) Nomor 23 Tahun 1949 tentang Peraturan Tentang Penggabungan Perguruan Tinggi Menjadi Universiteit tanggal 16 Desember 1949.Pada saat didirikan, Universitas Gadjah Mada hanya memiliki enam fakultas.[5] Pada saat ini, UGM telah memiliki 18 fakultas dan dua sekolah, yaitu Sekolah Vokasi dan Sekolah Pascasarjana.[5] Fakultas-fakultas yang ada di UGM dibagi lagi menjadi departemen-departemen, yang membawahkan program-program studi. Program-program studi yang ada di UGM meliputi program sarjana, magister, doktor, dan spesialis. UGM berkedudukan di bagian selatan Kabupaten Sleman, terletak di sebuah kawasan yang dikenal dengan nama Bulaksumur, yang secara administratif membentang dari Sinduadi, Mlati hingga Caturtunggal, Depok."',
                'akreditasi' => 'Unggul',
                'stat_univ' => 'Negeri',
                'jumlah_prodi' => 60,
                'link_logo' => 'https://ugm.ac.id/wp-content/uploads/2022/11/LOGO-UGM-BAKU-tnp-back-grou-300x300.jpg',
                'link_gambar' => 'https://ugm.ac.id/wp-content/uploads/2023/04/About-Hero.jpg',
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
            ['id_jurusan' => 1,'nama_jurusan' => 'Teknik Informatika', 'id_fakultas' => 1], // Menambahkan id_univ
            ['id_jurusan' => 2,'nama_jurusan' => 'Teknik Elektro', 'id_fakultas' => 1],
            ['id_jurusan' => 3,'nama_jurusan' => 'Manajemen', 'id_fakultas' => 2 ],
            ['id_jurusan' => 4,'nama_jurusan' => 'Kedokteran', 'id_fakultas' => 3 ],
            ['id_jurusan' => 5,'nama_jurusan' => 'Hukum', 'id_fakultas' => 4],
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

        // Insert Beasiswa
        $univ_ids = Universitas::pluck('id_univ')->toArray();
        
        Beasiswa::create([
            'judul' => 'Beasiswa Pendidikan Magister 2025',
            'deskripsi' => 'Beasiswa untuk melanjutkan pendidikan Magister di Universitas XYZ dengan syarat memiliki IPK minimal 3.5 dan telah diterima di program Magister.',
            'persyaratan' => '1. IPK minimal 3.5\n2. Sudah diterima di program Magister di Universitas XYZ\n3. Menyertakan proposal penelitian.',
            'deadline' => '2025-06-30',
            'id_univ' => $univ_ids[array_rand($univ_ids)],
        ]);

        Beasiswa::create([
            'judul' => 'Beasiswa S1 Jurusan Teknik Informatika',
            'deskripsi' => 'Beasiswa penuh untuk jurusan Teknik Informatika di Universitas ABC.',
            'persyaratan' => '1. Lulus seleksi berkas.\n2. Memiliki nilai rapor di atas rata-rata.',
            'deadline' => '2025-05-01',
            'id_univ' => $univ_ids[array_rand($univ_ids)],
        ]);

        Beasiswa::create([
            'judul' => 'Beasiswa Luar Negeri untuk S2',
            'deskripsi' => 'Beasiswa untuk program S2 di luar negeri dengan biaya penuh.',
            'persyaratan' => '1. Menyertakan dokumen aplikasi lengkap.\n2. Memiliki skor TOEFL 500 atau IELTS 6.0.',
            'deadline' => '2025-04-15',
            'id_univ' => $univ_ids[array_rand($univ_ids)],
        ]);

        // Insert Berita
        Berita::create([
            'judul_berita' => 'Program Beasiswa Universitas ABC untuk Tahun 2025',
            'deskripsi_berita' => 'Universitas ABC membuka pendaftaran beasiswa untuk tahun ajaran 2025. Program beasiswa ini mencakup biaya penuh bagi mahasiswa yang memenuhi persyaratan.',
            'tanggal_rilis' => '2025-01-15',
            'id_univ' => $univ_ids[array_rand($univ_ids)],
        ]);

        Berita::create([
            'judul_berita' => 'Kerja Sama Universitas XYZ dengan Industri Teknologi Terkemuka',
            'deskripsi_berita' => 'Universitas XYZ telah menjalin kemitraan strategis dengan perusahaan teknologi global untuk menyediakan pelatihan dan peluang kerja bagi mahasiswa.',
            'tanggal_rilis' => '2025-02-10',
            'id_univ' => $univ_ids[array_rand($univ_ids)],
        ]);

        Berita::create([
            'judul_berita' => 'Pengumuman Penerimaan Mahasiswa Baru Universitas DEF',
            'deskripsi_berita' => 'Universitas DEF mengumumkan penerimaan mahasiswa baru untuk tahun ajaran 2025. Pendaftaran dapat dilakukan secara online melalui website resmi universitas.',
            'tanggal_rilis' => '2025-03-05',
            'id_univ' => $univ_ids[array_rand($univ_ids)],
        ]);
            
    }
}
