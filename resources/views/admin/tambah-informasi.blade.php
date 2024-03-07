@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Informasi')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <form action="" method="POST" class="mt-8 ms-3 flex flex-col me-32">
        {{-- Information Title --}}
        <div class="flex items-start justify-between">
            <label for="nama-tes" class="text-milkChoco italic font-medium">Judul Berita</label>
            <input type="text" placeholder="" class="w-3/4 border-milkChoco focus:border-deer rounded-md placeholder:text-milkChoco text-center">
        </div>

        {{-- Information Release --}}
        <div class="flex items-start justify-between mt-8">
            <label for="nama-tes" class="text-milkChoco italic font-medium">Tanggal Berita</label>
            <input type="text" placeholder="Pilih Tanggal" onfocus="(this.type='date')" onblur="(this.type='text')"
                class="w-3/4 border-milkChoco focus:border-deer rounded-md placeholder:text-milkChoco text-center">
        </div>

        {{-- Description --}}
        <div class="flex items-start justify-between mt-8">
            <label for="nama-tes" class="text-milkChoco italic font-medium">Deskripsi</label>
            <textarea name="" id="" cols="30" rows="6"
                class="w-3/4 border-milkChoco focus:border-deer rounded-md"></textarea>
        </div>

        {{-- File Input (.pdf) --}}
        <div class="flex items-start justify-between mt-8">
            <label for="nama-tes" class="text-milkChoco italic font-medium">Pengumuman</label>
            <div class="w-3/4 h-44 border border-milkChoco border-dashed rounded-md flex flex-col justify-center items-center">
                <i class="fa-solid fa-file-pdf text-milkChoco text-xl"></i>
                <p class="italic text-sm text-gray-300 font-light mt-4">Upload pengumuman kelulusan dalam bentuk pdf yah</p>
                <input type="text" class="w-3/4 border-milkChoco focus:border-deer rounded-md hidden">
            </div>
        </div>

        {{-- Submit Button --}}
        <x-button class="mt-8 w-1/5 self-end text-sm">
            {{ __('Submit') }}
        </x-button>
    </form>
@endsection
