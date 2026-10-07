@extends('layouts.app', ['title' => 'Tambah Mata Kuliah'])

@section('content')
<div class="container">

    <div class="mb-4">
        <h2 class="fw-bold">Tambah Mata Kuliah</h2>
        <p class="text-muted">Silakan isi data mata kuliah di bawah ini.</p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-4">

            <form action="/matakuliah" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-semibold">
                        Nama Mata Kuliah
                    </label>
                    <input
                        type="text"
                        name="nama_mk"
                        id="nama_mk"
                        class="form-control"
                        placeholder="Masukkan nama mata kuliah"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="sks" class="form-label fw-semibold">
                        SKS
                    </label>
                    <input
                        type="number"
                        name="sks"
                        id="sks"
                        class="form-control"
                        placeholder="Masukkan jumlah SKS"
                        min="1"
                        max="6"
                        required
                    >
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="/matakuliah" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection