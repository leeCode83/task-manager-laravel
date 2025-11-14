<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\View\View;


class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    public function show(string $id): View
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }
}