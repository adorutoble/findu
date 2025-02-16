<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class University extends Model
{
    use HasFactory;
    protected $table = 'universitas';
    protected $primaryKey = 'id_univ';
    protected $fillable = [
        'nama_univ', 'alamat', 'no_telp', 'website',
        'deskripsi_univ', 'akreditasi', 'stat_univ', 'jumlah_prodi'
    ];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'id_univ');
    }

    public function beasiswa()
    {
        return $this->hasMany(Beasiswa::class, 'id_univ');
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_univ');
    }
}
