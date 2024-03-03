<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'sub_soal_id',
        'nilai'
    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class,'id');
    }
    public function SubSoal(): BelongsTo
    {
        return $this->belongsTo(SubSoal::class,'sub_soal_id');
    }
}
