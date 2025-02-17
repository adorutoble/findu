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

    public function show($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('detailbeasiswa', compact('beasiswa'));
    }
}
