@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Soal Tes')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    {{-- Tabel --}}
    <x-table>
    @section('button')
        <a href="{{ route('admin.input-soal') }}"
            class="bg-white text-milkChoco active:text-tan text-xs font-medium px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
            <i class="fa-solid fa-plus me-2"></i>Input Soal</a>
    @endsection
</x-table>
@endsection
