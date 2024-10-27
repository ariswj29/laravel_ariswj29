@extends('layouts.app')

@section('title', 'Daftar Pasien')

@section('content')
    <div class="container mt-5">
        <h1>Tambah Pasien</h1>
        <form action="{{ route('pasien.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Pasien:</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="rumah_sakit_id">Rumah Sakit:</label>
                <select name="rumah_sakit_id" id="rumah_sakit_id" class="form-control" required>
                    <option value="" selected disabled>Pilih Rumah Sakit</option>
                    @foreach ($rumahSakits as $rumahSakit)
                        <option value="{{ $rumahSakit->id }}">{{ $rumahSakit->nama }}</option>
                    @endforeach
                </select>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" name="telepon" id="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection