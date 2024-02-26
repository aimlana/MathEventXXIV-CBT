@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Dashboard')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar>

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

@endsection