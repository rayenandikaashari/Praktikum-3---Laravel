<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/funfact', function () {
    return view('funfact');
});

route::get('/buku', [App\Http\Controllers\bukuController::class, 'index']);
route::get('/tambahbuku', [App\Http\Controllers\bukuController::class, 'create']);
route::post('/simpanbuku', [App\Http\Controllers\bukuController::class, 'store']);

route::get('/mahasiswa', [App\Http\Controllers\mahasiswaController::class, 'index']);
route::get('/tambahmahasiswa', [App\Http\Controllers\mahasiswaController::class, 'create']);
route::post('/simpanmahasiswa', [App\Http\Controllers\mahasiswaController::class, 'store']);