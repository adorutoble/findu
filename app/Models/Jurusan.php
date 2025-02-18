<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;
    
    protected $table = 'jurusans';
    protected $primaryKey = 'id_jurusan';
    protected $fillable = ['nama_jurusan', 'id_fakultas', 'id_univ'];

    // Relasi ke Fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas');
    }

    // Relasi ke Universitas
    // public function universitas()
    // {
    //     return $this->belongsTo(Universitas::class, 'id_univ');
    // }

    public function universitas()
    {
        return $this->belongsToMany(Universitas::class, 'universitas_jurusans', 'id_jurusan', 'id_univ');
    }

}
