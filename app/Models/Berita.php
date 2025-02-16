<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $fillable = ['judul_berita', 'deskripsi_berita', 'tanggal_rilis', 'id_univ'];

    public function universitas()
    {
        return $this->belongsTo(University::class, 'id_univ');
    }
}
