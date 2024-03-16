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
        {{-- Table Title --}}
    @section('title-table', 'Bank Soal')

    {{-- Table's Action Button --}}
    @section('button')
        <a href="{{ route('admin.input-soal') }}"
            class="bg-white text-milkChoco active:text-tan text-xs font-medium px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
            <i class="fa-solid fa-plus me-2"></i>Input Bank Soal</a>
    @endsection

    {{-- Table Head --}}
    @section('table-head')
        <tr>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                #
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Nama Tes
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Soal
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Tingkat
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Aksi
            </th>
        </tr>
    @endsection

    {{-- Table Content --}}
    @section('table-content')
    @foreach ($data as $data)
    <tr>
        <th
            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            {{$data->id}}
        </th>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            {{$data->nama_soal}}
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <div class="flex flex-col justify-center">
                <div class="py-1.5 bg-milkChoco text-white flex justify-center items-center rounded">
                    <a class="fa-regular fa-note-sticky pe-2" href="{{ route('admin.soal-pilihan-ganda') }}" >{{$data->soal_pilihan_ganda}} PG</a>
                </div>
                <div class="py-1.5 bg-milkChoco text-white flex justify-center items-center rounded mt-1">
                    <a class="fa-regular fa-note-sticky pe-2" href="{{ route('admin.soal-essay') }}">{{$data->soal_essay}} ESSY</a>
                </div>
            </div>
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <div class="py-1.5 bg-gray-400 text-white flex justify-center items-center rounded">
                {{$data->jenis_soal}}</div>
        </td>
        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <div class="flex flex-col justify-center">
                <button type="button" class="py-2 bg-sky-600 text-white flex justify-center items-center rounded">
                    <i class="fa-solid fa-pen"></i></button>
                <button type="button" class="py-2 bg-red-500 text-white flex justify-center items-center rounded mt-1">
                    <i class="fa-solid fa-trash"></i></button>
            </div>
        </td>
    </tr>
    @endforeach
    @endsection
</x-table>
@endsection
