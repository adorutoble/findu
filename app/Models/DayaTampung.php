<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DayaTampung extends Model
{
    protected $fillable = ['id_univ', 'id_jurusan', 'tahun', 'daya_tampung', 'jumlah_peminat'];

    // Relasi dengan Universitas
    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ');
    }

    // Definisikan relasi dengan model Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
