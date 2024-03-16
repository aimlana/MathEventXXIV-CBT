<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubSoal;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function peserta()
    {
        $data = User::all();
        return view('admin.peserta',compact('data'));
    }
    public function soaltes()
    {
        $data = SubSoal::all();
        return view('admin.soal-tes',compact('data'));
    }
}
