<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UniversitasJurusan extends Model
{
    use HasFactory;
    
    // protected $table = 'universitas';
    // protected $primaryKey = 'id_univ';
    protected $fillable = ['nama_univ', 'alamat', 'no_telp', 'website', 'deskripsi_univ', 'akreditasi', 'stat_univ', 'jumlah_prodi','link_logo','link_gambar'];

}
