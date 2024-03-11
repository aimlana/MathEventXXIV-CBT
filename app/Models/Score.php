<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sub_soal_id',
        'jawaban_benar',
        'jawaban_salah',
        'jawaban_kosong',
        'nilai',
    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function SubSoal(): BelongsTo
    {
        return $this->belongsTo(SubSoal::class,'sub_soal_id');
    }

    public function CalculateScoreMahasiswa($id){
        //mahasiswa
        $jumlahBenarMahasiswa = JawabanMahasiswa::where('user_id',$id)->where('sub_soal_id',$this->sub_soal_id)->where('jawaban',$this->jawaban_benar)->count() *4;
        $jumlahsalahMahasiswa = JawabanMahasiswa::where('user_id',$id)->where('sub_soal_id',$this->sub_soal_id)->where('jawaban','!=',$this->jawaban_benar)->count() *-2;
        $jumlahKosongMahasiswa = SoalMahasiswa::where('sub_soal_id',$this->sub_soal_id)->count() - (JawabanMahasiswa::where('user_id',$id)->where('sub_soal_id',$this->sub_soal_id)->count());
        $this->nilai = $jumlahBenarMahasiswa + $jumlahsalahMahasiswa + $jumlahKosongMahasiswa;

        $skorMahasiswa = new Score;
        $skorMahasiswa->user_id = $id;
        $skorMahasiswa->sub_soal_id = $this->sub_soal_id;
        $skorMahasiswa->jawaban_benar = $jumlahBenarMahasiswa;
        $skorMahasiswa->jawaban_salah = $jumlahsalahMahasiswa;
        $skorMahasiswa->jawaban_kosong = $jumlahKosongMahasiswa;
        $skorMahasiswa->nilai = $this->nilai;
        $skorMahasiswa->save();
        return $skorMahasiswa;
    }
    public function CalculateScoreSiswa($id){
        //siswa
        $jumlahBenarSiswa = JawabanSiswa::where('user_id',$id)->where('sub_soal_id',$this->sub_soal_id)->where('jawaban',$this->jawaban_benar)->count() *4;
        $jumlahsalahSiswa = JawabanSiswa::where('user_id',$id)->where('sub_soal_id',$this->sub_soal_id)->where('jawaban','!=',$this->jawaban_benar)->count() *-2;
        $jumlahKosongSiswa = SoalSiswa::where('sub_soal_id',$this->sub_soal_id)->count() - (JawabanSiswa::where('user_id',$id)->where('sub_soal_id',$this->sub_soal_id)->count());
        $this->nilai = $jumlahBenarSiswa + $jumlahsalahSiswa + $jumlahKosongSiswa;

        $skorSiswa = new Score;
        $skorSiswa->user_id = $id;
        $skorSiswa->sub_soal_id = $this->sub_soal_id;
        $skorSiswa->jawaban_benar = $jumlahBenarSiswa;
        $skorSiswa->jawaban_salah = $jumlahsalahSiswa;
        $skorSiswa->jawaban_kosong = $jumlahKosongSiswa;
        $skorSiswa->nilai = $this->nilai;
        $skorSiswa->save();
        return $skorSiswa;
    }
}
