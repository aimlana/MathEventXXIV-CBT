@extends('layouts.general')

{{-- Tab Menu Name --}}
@section('title', 'Soal Pilihan Ganda')

{{-- Sidebar --}}
@section('sidebar')
    <x-sidebar-admin></x-sidebar-admin>
@endsection

{{-- Main Content --}}
@section('content')
    <div class="flex flex-col justify-start">
        <h2 class="font-bold text-xl text-milkChoco mt-6">Pilihan Ganda</h2>
        <div class="flex justify-between items-center">
            <div class="flex items-center mt-3">
                <p class="text-milkChoco text-lg">Nomor</p>
                <p class="text-lg border border-milkChoco rounded-md shadow-sm shadow-tan ms-3 py-1 px-3 ">25</p>
            </div>
            <button type="submit" class="bg-wheat text-sm text-milkChoco font-medium py-3 px-8 rounded-md">Upload</button>
        </div>

        <div class="flex w-full mt-8">
            {{-- File Input (.pdf) --}}
            <div
                class="w-1/2 h-72 border border-milkChoco border-dashed rounded-md flex flex-col justify-center items-center">
                <i class="fa-solid fa-file-pdf text-milkChoco text-xl"></i>
                <p class="text-sm text-tan font-light mt-4">Silakan masukkan soal dalam bentuk gambar yah</p>
                <p class="italic text-sm text-gray-400 mt-2">jpg (maks 500KB)</p>
                <input type="file" class="w-3/4 border-milkChoco focus:border-deer rounded-md hidden">
            </div>

            {{-- Option Answer --}}
            <div class="flex flex-col justify-start items-start ms-12">
                <h3 class="italic text-milkChoco">Masukkan Opsi Jawaban Soal</h3>
                <form action="" class="mt-6">

                    {{-- Option with Radio --}}
                    {{-- <div class="flex items-center mb-4">
                    <input type="radio" id="optionA" name="answer" value="A" class="mr-2">
                    <label for="optionA" class="mr-4">A</label>
                    <input type="text" id="answerA" name="answerA" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban A" required>
                </div>
        
                <div class="flex items-center mb-4">
                    <input type="radio" id="optionB" name="answer" value="B" class="mr-2">
                    <label for="optionB" class="mr-4">B</label>
                    <input type="text" id="answerB" name="answerB" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban B" required>
                </div>
        
                <div class="flex items-center mb-4">
                    <input type="radio" id="optionC" name="answer" value="C" class="mr-2">
                    <label for="optionC" class="mr-4">C</label>
                    <input type="text" id="answerC" name="answerC" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban C" required>
                </div>
        
                <div class="flex items-center mb-4">
                    <input type="radio" id="optionD" name="answer" value="D" class="mr-2">
                    <label for="optionD" class="mr-4">D</label>
                    <input type="text" id="answerD" name="answerD" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban D" required>
                </div> --}}

                    {{-- <div class="flex items-center mb-4">
                    <label for="optionA" class="radio-label mr-4 relative cursor-pointer">
                        <input type="radio" id="optionA" name="answer" value="A" class="hidden">
                        <span class="radio-button"></span>
                        A
                    </label>
                    <input type="text" id="answerA" name="answerA" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban A" required>
                </div>
        
                <div class="flex items-center mb-4">
                    <label for="optionB" class="radio-label mr-4 relative cursor-pointer">
                        <input type="radio" id="optionB" name="answer" value="B" class="hidden">
                        <span class="radio-button"></span>
                        B
                    </label>
                    <input type="text" id="answerB" name="answerB" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban B" required>
                </div>
        
                <div class="flex items-center mb-4">
                    <label for="optionC" class="radio-label mr-4 relative cursor-pointer">
                        <input type="radio" id="optionC" name="answer" value="C" class="hidden">
                        <span class="radio-button"></span>
                        C
                    </label>
                    <input type="text" id="answerC" name="answerC" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban C" required>
                </div>
        
                <div class="flex items-center mb-4">
                    <label for="optionD" class="radio-label mr-4 relative cursor-pointer">
                        <input type="radio" id="optionD" name="answer" value="D" class="hidden">
                        <span class="radio-button"></span>
                        D
                    </label>
                    <input type="text" id="answerD" name="answerD" class="border rounded px-2 py-1" placeholder="Masukkan Jawaban D" required>
                </div> --}}

                    <div class="flex items-center mb-6">
                        <button
                            class="bg-wheat text-milkChoco rounded-full py-1.5 px-3 focus:bg-milkChoco focus:text-white">A</button>
                        <input type="text" placeholder="Jawaban A" class="ms-4 border rounded-lg placeholder:text-sm">
                    </div>
                    <div class="flex items-center mb-6">
                        <button
                            class="bg-wheat text-milkChoco rounded-full py-1.5 px-3 focus:bg-milkChoco focus:text-white">B</button>
                        <input type="text" placeholder="Jawaban B" class="ms-4 border rounded-lg placeholder:text-sm">
                    </div>
                    <div class="flex items-center mb-6">
                        <button
                            class="bg-wheat text-milkChoco rounded-full py-1.5 px-3 focus:bg-milkChoco focus:text-white">C</button>
                        <input type="text" placeholder="Jawaban C" class="ms-4 border rounded-lg placeholder:text-sm">
                    </div>
                    <div class="flex items-center mb-6">
                        <button
                            class="bg-wheat text-milkChoco rounded-full py-1.5 px-3 focus:bg-milkChoco focus:text-white">D</button>
                        <input type="text" placeholder="Jawaban D" class="ms-4 border rounded-lg placeholder:text-sm">
                    </div>
                </form>
            </div>
        </div>

        <a href="{{ route('admin.soal-essay') }}" class="bg-milkChoco text-sm text-white font-medium py-3 rounded-md w-1/5 self-center text-center mt-28">Essay</a>
    </div>
@endsection
