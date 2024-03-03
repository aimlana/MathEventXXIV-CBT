@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Soal Tes')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <div class="flex justify-center items-center">
        <form action="" method="POST" class="mt-16">
            <div class="flex flex-col">
                <label for="nama-tes" class="text-milkChoco font-medium">Nama Tes</label>
                <input type="text" class="w-full drop-shadow-md shadow-tan border-transparent focus:drop-shadow-md focus:border-deer focus:ring-deer rounded-md shadow-sm">
            </div>
            <div class="flex w-full mt-6">
                <div class="flex flex-col">
                    <label for="nama-tes" class="text-milkChoco font-medium">Pilihan Ganda</label>
                    <input type="number" class="w-1/2 drop-shadow-md shadow-tan border-transparent focus:drop-shadow-md focus:border-deer focus:ring-deer rounded-md shadow-sm">
                </div>
                <div class="flex flex-col">
                    <label for="nama-tes" class="text-milkChoco font-medium">Essay</label>
                    <input type="number" class="w-1/2 drop-shadow-md shadow-tan border-transparent focus:drop-shadow-md focus:border-deer focus:ring-deer rounded-md shadow-sm">
                </div>
            </div>
            <div class="flex flex-col mt-6">
                <label for="nama-tes" class="text-milkChoco font-medium">Nama Tes</label>
                <select name="" id="" class="w-full drop-shadow-md shadow-tan border-transparent focus:drop-shadow-md focus:border-deer focus:ring-deer rounded-md shadow-sm text-milkChoco">
                    <option selected value="" class="">Pilih Tingkatan</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
            <div class="mt-16">
                <button type="submit" class="w-full inline-flex justify-center items-center py-2 bg-milkChoco border border-transparent rounded-md font-semibold text-sm text-white tracking-widest hover:bg-dykeBrown focus:bg-dykeBrown active:bg-dykeBrown focus:outline-none focus:ring-2 focus:ring-dykeBrown focus:ring-offset-2 transition ease-in-out duration-150">Upload</button>
            </div>
        </form>
    </div>
@endsection