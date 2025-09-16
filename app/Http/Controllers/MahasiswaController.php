<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class mahasiswaController extends Controller
{
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa', compact('data'));
    }

    public function create()
    {
        return view('tambahmahasiswa');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
        ]);

        mahasiswa::create($validasi);
        return redirect('/mahasiswa');
    }
}
