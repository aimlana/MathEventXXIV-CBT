<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SoalSiswa extends Model
{
    use HasFactory;
    protected $fillable=[
        'soal',
        'sub_soal_id',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e',
        'jawaban_benar',
        'poin'
    ];
    public function SubSoal(): BelongsTo
    {
        return $this->belongsTo(SubSoal::class,'sub_soal_id');
    }
}