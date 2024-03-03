<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SoalMahasiswa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SoalMahasiswaController extends Controller
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
            $request->validate([
                'soal'=> 'required|image|mimes:jpeg,png,jpg|max:512',
                'jawaban_a'=>'nullable',
                'jawaban_b'=>'nullable',
                'jawaban_c'=>'nullable',
                'jawaban_d'=>'nullable',
                'jawaban_e'=>'nullable',
                'jawaban_benar'=>'nullable',
                'poin'=>'required|max:100'
            ]);

            $fotoPath = $request->file('soal')->store('uploads', 'public');

            SoalMahasiswa::create([
                'soal'=>$fotoPath,
                'jawaban_a'=>$request->input('jawaban_a'),
                'jawaban_b'=>$request->input('jawaban_b'),
                'jawaban_c'=>$request->input('jawaban_c'),
                'jawaban_d'=>$request->input('jawaban_d'),
                'jawaban_e'=>$request->input('jawaban_e'),
                'jawaban_benar'=>$request->input('jawaban_benar'),
                'poin'=>$request->input('poin')
            ]);

            return redirect()->back()->with('success','Data berhasil disimpan');
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
        $data = SoalMahasiswa::find($id);
        if (!$data){
            return redirect()->back()->with('error','Data tidak ditemukan');
        }
        return view('admin.UpdateCategory',compact('data'));
        //admin.updatecategory belum ada, flexible diganti
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'soal'=> 'required|image|mimes:jpeg,png,jpg|max:512',
                'jawaban_a'=>'nullable',
                'jawaban_b'=>'nullable',
                'jawaban_c'=>'nullable',
                'jawaban_d'=>'nullable',
                'jawaban_e'=>'nullable',
                'jawaban_benar'=>'nullable',
                'poin'=>'required|max:100'
            ]);

            $data = SoalMahasiswa::find($id);

            if(!$data){
                return redirect()->back()->with('error','Data tidak ditemukan');
            }
            if($request->hasFile('soal')){
                $fotoPath = $request->file('soal')->store('uploads','public');
                $data->soal=$fotoPath;
            }
            $data->jawaban_a = $request->input('jawaban_a');
            $data->jawaban_b = $request->input('jawaban_b');
            $data->jawaban_c = $request->input('jawaban_c');
            $data->jawaban_d = $request->input('jawaban_d');
            $data->jawaban_e = $request->input('jawaban_e');
            $data->jawaban_benar = $request->input('jawaban_benar');
            $data->poin = $request->input('poin');

            $data->save();

            return redirect()->back()->with('success','Data berhasil diperbarui');
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
            $soal = SoalMahasiswa::find($id);

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
