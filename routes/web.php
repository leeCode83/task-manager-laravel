<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa/{id}', function () {
    return view('mahasiswa.show');
});

Route::get('/mahasiswa{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/tasks', [TaskController::class, 'index']);



