<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubSoal;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.input-soal');
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
            $request->validate([
                'nama_soal'=>'required',
                'jenis_soal'=>'required',
                'soal_pilihan_ganda'=>'required',
                'soal_essay'=>'required'
            ]);

            SubSoal::create([
                'nama_soal'=> $request->input('nama_soal'),
                'jenis_soal'=> $request->input('jenis_soal'),
                'soal_pilihan_ganda'=> $request->input('soal_pilihan_ganda'),
                'soal_essay'=>$request->input('soal_essay')
            ]);

            return redirect()->back()->with('succes', 'data berhasil disimpan');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data. Terjadi kesalahan pada database.');
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
        $data = SubSoal::find($id);
        if (!$data){
            return redirect()->back()->with('error','Data tidak ditemukan');
        }
        return view('admin.UpdateSubSoal',compact('data'));
        //admin.SubSoal belum ada, flexible diganti
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'nama_soal'=>'required',
                'jenis_soal'=>'required',
                'soal_pilihan_ganda'=>'required',
                'soal_essay'=>'required'
            ]);

            $data = SubSoal::find($id);
            $data->nama_soal= $request->input('nama_soal');
            $data->jenis_soal= $request-> input('jenis_soal');
            $data->soal_pilihan_ganda= $request->input('soal_pilihan_ganda');
            $data->soal_essay= $request->input('soal_essay');

            $data->save();

            return redirect()->back()->with('succes', 'data berhasil diupdate');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui data. Terjadi kesalahan pada database.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $soal = SubSoal::find($id);

            if (!$soal) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }

            $soal->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data. Terjadi kesalahan pada database.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
