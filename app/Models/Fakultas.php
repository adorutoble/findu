<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fakultas extends Model
{
    use HasFactory;
    
    protected $table = 'fakultas';
    protected $primaryKey = 'id_fakultas';
    protected $fillable = ['nama_fakultas', 'id_univ'];

    // Relasi ke Universitas
    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ');
    }

    // Relasi ke Jurusan
    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'id_fakultas');
    }
}
