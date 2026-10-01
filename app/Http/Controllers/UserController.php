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

        return redirect('/user');
    }

    public function index()
    {
        $userModel = new User();
        $users = $userModel->getUser();

        $title = 'Daftar Pengguna';

        return view('list_user', compact('users', 'title'));
    }
}