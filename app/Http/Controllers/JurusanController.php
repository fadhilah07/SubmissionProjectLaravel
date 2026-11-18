<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request; // <-- TAMBAHKAN BARIS INI DI ATAS

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('Jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:20|unique:jurusans,kode',
            'nama' => 'required|string|max:100',
        ]);

        Jurusan::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('jurusan.index')
        ->with('success', 'Data jurusan berhasil ditambahkan.');
    }
}