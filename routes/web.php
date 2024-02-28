<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Admin Route
Route::get('admin/login', function () {
    return view('admin.login-admin');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard-admin');
})->name('admin.dashboard');

Route::get('admin/peserta', function () {
    return view('admin.peserta');
})->name('admin.peserta');

Route::get('admin/soal-tes', function () {
    return view('admin.soal-tes');
})->name('admin.soal-tes');

Route::get('admin/informasi', function () {
    return view('admin.informasi');
})->name('admin.informasi');


// User
Route::get('user/profile', function () {
    return view('user.profile');
})->name('user.profile');
Route::get('user/ujian', function () {
    return view('user.ujian');
})->name('user.ujian');
Route::get('user/informasi', function () {
    return view('user.informasi');
})->name('user.informasi');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
