@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Informasi')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <form action="" method="POST" class="mt-8 ms-3">
        <div class="flex items-start justify-between me-40">
            <label for="nama-tes" class="text-tan italic font-medium">Judul Berita</label>
            <input type="text"
                class="w-3/4 drop-shadow-md border-milkChoco focus:border-deer rounded-md">
        </div>
        <div class="flex items-start justify-between me-40 mt-8">
            <label for="nama-tes" class="text-tan italic font-medium">Tanggal Berita</label>
            <input type="text" placeholder="Pilih Tanggal" 
                onfocus="(this.type='date')"
                onblur="(this.type='text')"
                class="w-3/4 drop-shadow-md border-milkChoco focus:border-deer rounded-md placeholder:text-milkChoco text-center focus:">
        </div>
        <div class="flex items-start justify-between me-40 mt-8">
            <label for="nama-tes" class="text-tan italic font-medium">Deskripsi</label>
            <textarea name="" id="" cols="30" rows="6" class="w-3/4 drop-shadow-md border-milkChoco focus:border-deer rounded-md"></textarea>
        </div>
    </form>
@endsection
