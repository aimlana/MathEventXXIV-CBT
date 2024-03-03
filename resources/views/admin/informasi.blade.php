@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Informasi')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <x-table>
        {{-- Table Title --}}
    @section('title-table', 'Informasi')

    {{-- Table's Action Button --}}
    @section('button')
        <a href="{{ route('admin.tambah-informasi') }}"
            class="bg-white text-milkChoco active:text-tan text-xs font-medium px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
            <i class="fa-solid fa-plus me-2"></i>Tambah Informasi</a>
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
                Judul
            </th>
            <th
                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-tan py-3 text-xs border-t-0 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Tanggal dan Waktu Publikasi
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
                Pengumuman Babak Penyisihan
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                Senin, 25 Maret 2024 (13.00 WITA)
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                <div class="flex items-center">
                    <button type="button" class="py-2 px-2 me-2 text-white bg-amber-500 text-sm flex justify-center items-center rounded mt-1">
                        <i class="fa-solid fa-pen"></i><span class="ms-2 text-xs">Edit</span></button>
                    <button type="button" class="py-2 px-2 text-white bg-red-600 text-sm flex justify-center items-center rounded mt-1">
                        <i class="fa-solid fa-trash"></i><span class="ms-2 text-xs">Hapus</span></button>
                </div>
            </td>
        </tr>
    @endsection
</x-table>
@endsection
