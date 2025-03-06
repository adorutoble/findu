<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswa = Beasiswa::all();
        return view('beasiswa', compact('beasiswa'));
    }

    // public function show($id)
    // {
    //     $beasiswa = Beasiswa::findOrFail($id);
    //     return view('detailbeasiswa', compact('beasiswa'));
    // }

    public function show($id)
    {
        // Mengambil Beasiswa beserta Persyaratannya
        $beasiswa = Beasiswa::with('persyaratan')->findOrFail($id);
        
        // Mengirim data ke view
        return view('detailbeasiswa', compact('beasiswa'));
    }

    // public function show($id)
    // {
    //     // Mengambil data beasiswa beserta relasi persyaratan
    //     $beasiswa = Beasiswa::with('persyaratan')->findOrFail($id);

    //     // Mengirimkan data beasiswa ke view detail
    //     return view('detailbeasiswa', compact('beasiswa'));
    // }

    // public function show($id)
    // {
    //     $beasiswa = Beasiswa::findOrFail($id);
    //     $persyaratan = $beasiswa->persyaratan; // Ambil persyaratan terkait

    //     return view('detailbeasiswa', compact('beasiswa', 'persyaratan'));
    // }
    
}
