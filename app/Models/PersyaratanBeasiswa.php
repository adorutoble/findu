<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersyaratanBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'persyaratan_beasiswas';

    protected $fillable = [
        'id_beasiswa',
        'persyaratan',
    ];

    // Definisikan hubungan dengan Beasiswa
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'id_beasiswa');
    }
}





