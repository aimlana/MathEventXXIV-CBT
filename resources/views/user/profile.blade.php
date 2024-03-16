@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Profile')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-user></x-sidebar-user>
@endsection

{{-- Logo --}}
@section('all-logos')
    <x-all-logo />
@endsection

{{-- Main Content --}}
@section('content')
    <div class="flex justify-center items-center mt-24 text-milkChoco">
        <div class="rounded-full w-60 h-60 hover:drop-shadow-xl">
            <x-user-profile-picture />
        </div>
        <div class="flex flex-col items-start justify-center ms-20">
            <p class="mt-4">Nama</p>
            <p class="mt-4">NISN</p>
            <p class="mt-4">Jenis Kelamin</p>
            <p class="mt-4">Asal Sekolah</p>
            <p class="mt-4">No. Telpon (WA)</p>
            <p class="mt-4">Email</p>
            <p class="mt-4">Regional</p>
        </div>
        <div class="flex flex-col items-start justify-center ms-16">
            <p class="mt-4">:</p>
            <p class="mt-4">:</p>
            <p class="mt-4">:</p>
            <p class="mt-4">:</p>
            <p class="mt-4">:</p>
            <p class="mt-4">:</p>
            <p class="mt-4">:</p>
        </div>
        <div class="flex flex-col items-start justify-center ms-16">
            <p class="mt-4">Go Youn Jung</p>
            <p class="mt-4">7221009184</p>
            <p class="mt-4">Perempuan</p>
            <p class="mt-4">SMAN 1 Makassar</p>
            <p class="mt-4">082199022223</p>
            <p class="mt-4">jungyoungo@gmail.com</p>
            <p class="mt-4">1</p>
        </div>
    </div>
@endsection
