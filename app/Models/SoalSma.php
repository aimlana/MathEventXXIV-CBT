<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalSma extends Model
{
    use HasFactory;

    protected $fillable=[
        'soal',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_e',
        'jawaban_benar'
    ];
}
