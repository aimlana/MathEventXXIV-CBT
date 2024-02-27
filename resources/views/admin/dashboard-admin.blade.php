@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Dashboard')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar>
        {{-- Profile --}}
    @section('profile')
        <h1 class="text-xl">Welcome</h1>
        <h2 class="font-bold text-2xl">ADMIN</h2>
    @endsection

    {{-- Menu --}}
    @section('menu')
        <x-sidebar-menu>
        @section('menu-content1')
            <i class="fa-solid fa-gauge text-xl pe-6"></i>
            <a href="#" class="text-lg">Dashboard</a>
        @endsection
        @section('menu-content2')
            <i class="fa-solid fa-user text-xl pe-6"></i>
            <a href="#" class="text-lg">Peserta</a>
        @endsection
        @section('menu-content3')
            <i class="fa-solid fa-list-check text-xl pe-6"></i>
            <a href="#" class="text-lg">Dashboard</a>
        @endsection
    </x-sidebar-menu>
@endsection

</x-sidebar>
@endsection

{{-- Dashboard Main Content --}}
@section('content')
    <div class="flex justify-center items-center mt-20 translate-y-3/4">
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
