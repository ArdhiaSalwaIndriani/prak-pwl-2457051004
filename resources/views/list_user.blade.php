@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Pengguna</h2>
            <p class="text-muted mb-0">
                Data pengguna yang terdaftar pada sistem.
            </p>
        </div>

        <a href="{{ route('user.create') }}" class="btn btn-primary">
            + Tambah User
        </a>
    </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Total Pengguna</small>
                    <h3 class="fw-bold text-primary mb-0">
                        {{ $users->count() }}
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Data Kelas</small>
                    <h3 class="fw-bold text-primary mb-0">2</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <small class="text-muted">Status Sistem</small>
                    <h3 class="fw-bold text-success mb-0">Aktif</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="fw-bold mb-1">Data Pengguna</h5>
            <small class="text-muted">
                Informasi pengguna yang tersimpan dalam database.
            </small>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="px-4">ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-4">
                                <span class="badge bg-light text-dark border">
                                    #{{ $user->id }}
                                </span>
                            </td>

                            <td class="fw-semibold">
                                {{ $user->nama }}
                            </td>

                            <td class="text-muted">
                                {{ $user->nim }}
                            </td>

                            <td>
                                <span class="badge bg-primary">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-5">
                                <h5 class="fw-bold">Belum Ada Data</h5>

                                <p class="text-muted">
                                    Belum ada pengguna yang terdaftar.
                                </p>

                                <a href="{{ route('user.create') }}"
                                   class="btn btn-primary">
                                    + Tambah User
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection