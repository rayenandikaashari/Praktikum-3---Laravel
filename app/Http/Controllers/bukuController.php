<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return view('buku', compact('data'));
    }

    public function create()
    {
        return view('tambahbuku');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }
}
