<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubSoal extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama_soal',
        'jenis_soal',
        'soal_pilihan_ganda',
        'soal_essay',

    ];
    public function SoalSma(): HasMany
    {
        return $this->hasMany(SoalSiswa::class);
    }

    public function SoalMahasiswa(): HasMany
    {
        return $this->hasMany(SoalMahasiswa::class);
    }

    public function JawabanSiswa(): HasMany
    {
        return $this->hasMany(JawabanSiswa::class);
    }

    public function JawabanMahasiswa(): HasMany
    {
        return $this->hasMany(JawabanMahasiswa::class);
    }
    
    public function Score(): HasMany
    {
        return $this->hasMany(Score::class);
    }
}
