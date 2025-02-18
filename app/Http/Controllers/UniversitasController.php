<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Universitas;
use Illuminate\Http\Request;

// class UniversitasController extends Controller
// {
//     public function index()
//     {
//         $universitas = Universitas::all(); // Ambil semua data universitas
//         return view('perguruantinggi', compact('universitas'));
//     }
// }

class UniversitasController extends Controller
{
    public function index(Request $request)
    {
        // Ambil daftar jurusan unik
        $jurusanList = Jurusan::distinct()->pluck('nama_jurusan');
    
        // Ambil daftar lokasi unik
        $lokasiList = Universitas::distinct()->pluck('alamat');
    
        // Ambil daftar akreditasi unik
        $akreditasiList = Universitas::distinct()->pluck('akreditasi');
    
        // Query Universitas
        $query = Universitas::query();
    
        // Filter berdasarkan pencarian nama kampus
        if ($request->filled('search')) {
            $query->where('nama_univ', 'like', '%' . $request->search . '%');
        }
        
        // Filter berdasarkan jurusan
        if ($request->filled('jurusan')) {
            $query->whereHas('fakultas.jurusan', function ($q) use ($request) {
                $q->where('nama_jurusan', $request->jurusan);
            });
        }
    
        // Filter berdasarkan lokasi
        if ($request->filled('lokasi')) {
            $query->where('alamat', $request->lokasi);
        }
    
        // Filter berdasarkan akreditasi
        if ($request->filled('akreditasi')) {
            $query->where('akreditasi', $request->akreditasi);
        }
    
        // Filter berdasarkan tipe kampus (Negeri/Swasta)
        if ($request->filled('tipe')) {
            $query->where('stat_univ', $request->tipe); // 'stat_univ' berisi 'Negeri' atau 'Swasta'
        }
    
        // Ambil data universitas
        $universitas = $query->get();
    
        return view('perguruantinggi', compact('universitas', 'jurusanList', 'lokasiList', 'akreditasiList'));
    }    

    // public function show($id)
    // {
    //     $universitas = Universitas::with('fakultas.jurusan')->findOrFail($id);
    //     return view('detailpt', compact('universitas'));
    // }


    public function show($id)
    {
        $universitas = Universitas::findOrFail($id);
        return view('detailpt', compact('universitas'));
    }

    // public function getJurusan(Request $request)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'id_univ' => 'required|exists:universitas,id_univ',
    //     ]);

    //     // Ambil data jurusan berdasarkan universitas yang dipilih
    //     $jurusan = Jurusan::where('id_univ', $request->id_univ)->get();

    //     return response()->json($jurusan);
    // }

    // public function getJurusan(Request $request)
    // {
    //     $jurusan = Universitas::find($request->id_univ)->jurusans;
    //     return response()->json($jurusan);
    // }

    public function getJurusan(Request $request)
    {
        // Validasi id_univ yang dikirim
        $request->validate([
            'id_univ' => 'required|exists:universitas,id_univ',
        ]);

        // Ambil jurusan terkait dengan universitas berdasarkan id_univ
        $universitas = Universitas::find($request->id_univ);
        $jurusan = $universitas->jurusans;

        // Kembalikan data jurusan dalam format JSON
        return response()->json($jurusan);
    }



}