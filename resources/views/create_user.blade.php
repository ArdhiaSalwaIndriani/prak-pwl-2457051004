@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <div class="mb-4">
                    <h2 class="fw-bold mb-1">Tambah Pengguna</h2>
                    <p class="text-muted mb-0">
                        Masukkan data pengguna baru ke dalam sistem.
                    </p>
                </div>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">
                            Nama
                        </label>

                        <input type="text"
                               class="form-control"
                               id="nama"
                               name="nama"
                               placeholder="Masukkan nama lengkap"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold">
                            NPM
                        </label>

                        <input type="text"
                               class="form-control"
                               id="npm"
                               name="npm"
                               placeholder="Masukkan NPM"
                               required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold">
                            Kelas
                        </label>

                        <select name="kelas_id"
                                id="kelas_id"
                                class="form-select"
                                required>

                            <option value="">Pilih kelas</option>

                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">
                                    {{ $kelasItem->nama_kelas }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="d-flex justify-content-end gap-2">

                        <a href="{{ route('user.index') }}"
                           class="btn btn-light border">
                            Batal
                        </a>

                        <button type="submit"
                                class="btn btn-primary px-4">
                            Simpan
                        </button>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection