@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Soal Pilihan Essay')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <div class="flex flex-col justify-start">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-xl text-milkChoco mt-6">Pilihan Ganda</h2>
            <button type="submit" class="bg-wheat text-sm text-milkChoco font-medium py-3 px-8 rounded-md">Upload</button>
        </div>

        {{-- File Input (.pdf) --}}
        <div class="w-3/4 h-72 border border-milkChoco border-dashed rounded-md self-center flex flex-col justify-center items-center mt-12">
            <i class="fa-solid fa-file-pdf text-milkChoco text-xl"></i>
            <p class="text-sm text-tan font-light mt-4">Silakan masukkan soal dalam bentuk gambar yah</p>
            <p class="italic text-sm text-gray-400 mt-2">jpg (maks 500KB)</p>
            <input type="file" class="hidden">
        </div>

        <button class="bg-milkChoco text-sm text-white font-medium py-3 rounded-md w-1/5 self-center mt-40">Submit</button>
    </div>
@endsection
