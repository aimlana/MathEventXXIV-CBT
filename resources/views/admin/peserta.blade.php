@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Peserta')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <x-table>
    {{-- Table Title --}}
    @section('title-table', 'Daftar Peserta')
    
    {{-- Table's Action Button --}}
    @section('button')
        <a href="#"
            class="bg-white text-milkChoco active:text-tan text-xs font-medium px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
            SMA</a>
        <a href="#"
            class="bg-white text-milkChoco active:text-tan text-xs font-medium px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
            Mahasiswa</a>
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
                Nama
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Nomor Induk
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Asal Sekolah
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Waktu Selesai
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Aksi
            </th>
        </tr>
    @endsection

    {{-- Table Content --}}
    @section('table-content')
        <tr>
            <th
                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                1
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                Kahfi
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                891100062
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                MAN 1 Makassar
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                12:05:20
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                <button type="button" class="py-2 text-red-600 text-lg flex justify-center items-center rounded mt-1">
                    <i class="fa-solid fa-square-xmark"></i></button>
            </td>
        </tr>
    @endsection
</x-table>
@endsection
