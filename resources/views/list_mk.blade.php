@extends('layouts.app', ['title' => 'Daftar Mata Kuliah'])

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Mata Kuliah</h2>
            <p class="text-muted mb-0">
                Data mata kuliah yang tersimpan.
            </p>
        </div>

        <a href="/matakuliah/create" class="btn btn-primary">
            + Tambah Mata Kuliah
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="py-3">Nama Mata Kuliah</th>
                            <th class="py-3">SKS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($mataKuliah as $index => $mk)
                            <tr>
                                <td class="px-4">
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    {{ $mk->nama_mk }}
                                </td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-4 text-muted">
                                    Belum ada data mata kuliah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
@endsection