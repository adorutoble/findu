<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;
    
    protected $table = 'beasiswas';
    protected $primaryKey = 'id_beasiswa';
    protected $fillable = ['judul', 'deskripsi', 'persyaratan', 'deadline', 'id_univ'];

    // Relasi ke Universitas
    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ');
    }

    //  public function persyaratan()
    // {
    //     return $this->hasMany(PersyaratanBeasiswa::class, 'id_beasiswa');
    // }
    public function persyaratan()
    {
        return $this->hasMany(PersyaratanBeasiswa::class, 'id_beasiswa');
    }
}
