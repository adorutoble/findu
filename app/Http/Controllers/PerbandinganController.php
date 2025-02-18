<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\DayaTampung;
use App\Models\Universitas;
use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    // public function index()
    // {
    //     return view('perbandingan'); 
    // }

    public function index()
    {
        $universitas = Universitas::all();
        return view('perbandingan', compact('universitas'));
    }

    // public function getJurusan(Request $request)
    // {
    //     // Cek apakah request memiliki id_univ
    //     if (!$request->has('id_univ')) {
    //         return response()->json(['error' => 'id_univ tidak dikirim'], 400);
    //     }
    
    //     $jurusan = Jurusan::where('id_univ', $request->id_univ)->get();
    
    //     // Debugging, tampilkan output di layar
    //     if ($jurusan->isEmpty()) {
    //         return response()->json(['error' => 'Tidak ada jurusan untuk universitas ini'], 404);
    //     }
    
    //     return response()->json($jurusan);
    // }

    // public function getJurusan(Request $request)
    // {
    //     $jurusan = Jurusan::where('id_univ', $request->id_univ)->get();
    //     return response()->json($jurusan);
    // }


    // public function bandingkan(Request $request)
    // {
    //     $data1 = DayaTampung::whereHas('jurusan', function ($query) use ($request) {
    //         $query->where('universitas_id', $request->ptn1)
    //               ->where('nama_jurusan', $request->prodi1);
    //     })->orderBy('tahun', 'asc')->get();

    //     $data2 = DayaTampung::whereHas('jurusan', function ($query) use ($request) {
    //         $query->where('universitas_id', $request->ptn2)
    //               ->where('nama_jurusan', $request->prodi2);
    //     })->orderBy('tahun', 'asc')->get();

    //     return response()->json([
    //         'labels' => $data1->pluck('tahun'),
    //         'universitas1' => $data1->pluck('daya_tampung'),
    //         'peminat1' => $data1->pluck('jumlah_peminat'),
    //         'universitas2' => $data2->pluck('daya_tampung'),
    //         'peminat2' => $data2->pluck('jumlah_peminat'),
    //     ]);
    // }

    public function bandingkan(Request $request)
    {
        $ptn1 = $request->input('ptn1');
        $prodi1 = $request->input('prodi1');
        $ptn2 = $request->input('ptn2');
        $prodi2 = $request->input('prodi2');

        // Ambil data daya tampung dan peminat untuk universitas pertama
        $data1 = DayaTampung::where('id_univ', $ptn1)
            ->where('id_jurusan', $prodi1)
            ->select('tahun', 'daya_tampung', 'jumlah_peminat')
            ->orderBy('tahun')
            ->get();

        // Ambil data daya tampung dan peminat untuk universitas kedua
        $data2 = DayaTampung::where('id_univ', $ptn2)
            ->where('id_jurusan', $prodi2)
            ->select('tahun', 'daya_tampung', 'jumlah_peminat')
            ->orderBy('tahun')
            ->get();

        // Ambil nama universitas berdasarkan id_univ
        $universitas1 = Universitas::find($ptn1);
        $universitas2 = Universitas::find($ptn2);

        // Format data untuk chart
        $labels = $data1->pluck('tahun');  // Mengambil tahun
        $dayaTampung1 = $data1->pluck('daya_tampung');
        $dayaTampung2 = $data2->pluck('daya_tampung');
        $peminat1 = $data1->pluck('jumlah_peminat');
        $peminat2 = $data2->pluck('jumlah_peminat');

        // Mengirimkan data ke frontend dalam format JSON
        return response()->json([
            'labels' => $labels,
            'universitas1' => $dayaTampung1,
            'universitas2' => $dayaTampung2,
            'peminat1' => $peminat1,
            'peminat2' => $peminat2,
            'nama_universitas_1' => $universitas1->nama_univ,  // Menambahkan nama universitas pertama
            'nama_universitas_2' => $universitas2->nama_univ   // Menambahkan nama universitas kedua
        ]);
    }

    

    // public function bandingkan(Request $request)
    // {
    //     $ptn1 = $request->input('ptn1');
    //     $prodi1 = $request->input('prodi1');
    //     $ptn2 = $request->input('ptn2');
    //     $prodi2 = $request->input('prodi2');

    //     // Ambil data daya tampung dan peminat untuk universitas pertama
    //     $data1 = DayaTampung::where('id_univ', $ptn1)
    //         ->where('id_jurusan', $prodi1)
    //         ->select('tahun', 'daya_tampung', 'jumlah_peminat')
    //         ->orderBy('tahun')
    //         ->get();

    //     // Ambil data daya tampung dan peminat untuk universitas kedua
    //     $data2 = DayaTampung::where('id_univ', $ptn2)
    //         ->where('id_jurusan', $prodi2)
    //         ->select('tahun', 'daya_tampung', 'jumlah_peminat')
    //         ->orderBy('tahun')
    //         ->get();

    //     // Format data untuk chart
    //     $labels = $data1->pluck('tahun');  // Mengambil tahun
    //     $dayaTampung1 = $data1->pluck('daya_tampung');
    //     $dayaTampung2 = $data2->pluck('daya_tampung');
    //     $peminat1 = $data1->pluck('jumlah_peminat');
    //     $peminat2 = $data2->pluck('jumlah_peminat');

    //     // Mengirimkan data ke frontend dalam format JSON
    //     return response()->json([
    //         'labels' => $labels,
    //         'universitas1' => $dayaTampung1,
    //         'universitas2' => $dayaTampung2,
    //         'peminat1' => $peminat1,
    //         'peminat2' => $peminat2,
            
    //     ]);
    // }



}
