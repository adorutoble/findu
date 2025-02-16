<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswa';
    protected $primaryKey = 'id_beasiswa';
    protected $fillable = ['judul', 'deskripsi', 'persyaratan', 'deadline', 'id_univ'];

    public function universitas()
    {
        return $this->belongsTo(University::class, 'id_univ');
    }
}
