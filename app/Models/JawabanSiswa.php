<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JawabanSiswa extends Model
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
    public function SoalSiswa(): BelongsTo
    {
        return $this->belongsTo(SoalSiswa::class,'soal_siswa_id');
    }
}
