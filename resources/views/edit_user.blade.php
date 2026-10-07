@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="fw-bold mb-4">Edit User</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control"
                   value="{{ $user->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NPM</label>
            <input type="text" name="npm" class="form-control"
                   value="{{ $user->npm }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select name="kelas_id" class="form-select" required>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}"
                        {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('user.index') }}" class="btn btn-secondary">
            Batal
        </a>
    </form>
</div>

@endsection