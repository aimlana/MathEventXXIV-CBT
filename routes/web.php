<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
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
    if (Auth::check()) {
        return redirect()->route('redirect');
    } else {
        return view('auth.login');
    }
});

Route::get('/redirect',[HomeController::class, 'index'])->name('redirect');

//Admin Middleware
Route::middleware(['auth:sanctum', 'verified',AdminMiddleware::class])->group(function(){
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

    Route::get('admin/soal-tes/input-soal', function () {
        return view('admin.input-soal');
    })->name('admin.input-soal');

    Route::get('admin/soal-tes/input-soal/pilihan-ganda', function () {
        return view('admin.soal-pilihan-ganda');
    })->name('admin.soal-pilihan-ganda');

    Route::get('admin/soal-tes/input-soal/essay', function () {
        return view('admin.soal-essay');
    })->name('admin.soal-essay');

    Route::get('admin/informasi', function () {
        return view('admin.informasi');
    })->name('admin.informasi');

    Route::get('admin/informasi/tambah-informasi', function () {
        return view('admin.tambah-informasi');
    })->name('admin.tambah-informasi');
});

//User Middleware
Route::middleware(['auth:sanctum', 'verified',UserMiddleware::class])->group(function(){
    Route::get('user/profile', function () {
        return view('user.profile');
    })->name('user.profile');

    Route::get('user/ujian', function () {
        return view('user.ujian');
    })->name('user.ujian');

    Route::get('user/informasi', function () {
        return view('user.informasi');
    })->name('user.informasi');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');
});
