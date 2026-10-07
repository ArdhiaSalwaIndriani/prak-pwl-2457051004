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

    return redirect('/matakuliah')
        ->with('success', 'Mata kuliah berhasil ditambahkan');
}

    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk' => $mataKuliah
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/matakuliah')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->delete();

        return redirect('/matakuliah')
            ->with('success', 'Data berhasil dihapus');
    }
}