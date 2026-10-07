@extends('layouts.app', ['title' => 'Daftar Mata Kuliah'])

@section('content')
<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

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
                            <th class="py-3">Aksi</th>
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

                                <td>
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                       class="btn btn-sm btn-outline-primary me-2">
                                        Edit
                                    </a>

                                    <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
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