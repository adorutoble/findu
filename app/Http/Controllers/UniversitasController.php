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
}