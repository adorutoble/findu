<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    public function index()
    {
        return view('perbandingan'); // Pastikan ada file view di resources/views/perbandingan/index.blade.php
    }
}
