@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Dashboard')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Dashboard Main Content --}}
@section('content')
    <div class="flex justify-center items-center mt-52">
        {{-- Info Jumlah Peserta SMA --}}
        <div class="flex flex-col items-start justify-start bg-wheat ps-10 pe-32 py-8 rounded-md me-8">
            <h4 class="text-6xl text-milkChoco font-bold">200</h4>
            <p class="text-milkChoco text-lg font-medium pt-2">Peserta SMA</p>
        </div>
        <div class="flex flex-col items-start justify-start bg-wheat ps-10 pe-20 py-8 rounded-lg">
            <h4 class="text-6xl text-milkChoco font-bold">100<span class="text-base italic font-light">(tim)</span></h4>
            <p class="text-milkChoco text-lg font-medium pt-2">Peserta Mahasiswa</p>
        </div>
    </div>
@endsection
