<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    
    protected $table = 'beritas';
    protected $primaryKey = 'id_berita';
    protected $fillable = ['judul_berita', 'deskripsi_berita', 'tanggal_rilis', 'id_univ'];

    // Relasi ke Universitas
    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ');
    }
}
