<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JawabanMahasiswa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class JawabanMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            $request->validate([
                'user_id'=>'required',
                'soal_siswa_id'=>'required',
                'jawaban'=>'nullable',
            ]);

            JawabanMahasiswa::create([
                'user_id'=> $user->id,
                'soal_siswa_id'=> $request->input('soal_siswa_id'),
                'jawaban'=> $request->input('jawaban'),
            ]);
            return redirect()->back()->with('success','Ujian telah selesai, Terima kasih telah mengerjakan soal ujian.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan ujian. Terjadi kesalahan pada database.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
