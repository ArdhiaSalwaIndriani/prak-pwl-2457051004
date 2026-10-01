<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = MataKuliah::all();

        return view('list_mk', compact('mataKuliah'));
    }

    public function create()
    {
        return view('create_mk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/matakuliah');
    }
}