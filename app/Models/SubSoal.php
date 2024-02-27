<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubSoal extends Model
{
    use HasFactory;
    protected $fillable =[
        'jenis_soal'
    ];
    public function SoalSma(): HasMany
    {
        return $this->hasMany(SoalSma::class);
    }
    public function SoalMahasiswa(): HasMany
    {
        return $this->hasMany(SoalMahasiswa::class);
    }
    public function Score(): HasMany
    {
        return $this->hasMany(Score::class);
    }
}
