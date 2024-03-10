<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JawabanMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'soal_siswa_id',
        'jawaban',
    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function SoalMahasiswa(): BelongsTo
    {
        return $this->belongsTo(SoalMahasiswa::class,'soal_mahasiswa_id');
    }
}
