<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $title = 'Tambah User';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        $user->save();

        return redirect('/user')->with('success', 'User berhasil ditambahkan.');
    }

    public function index()
    {
        $userModel = new User();
        $users = $userModel->getUser();

        $title = 'Daftar Pengguna';

        return view('list_user', compact('users', 'title'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $title = 'Edit User';

        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user')->with('success', 'User berhasil dihapus.');
    }
}