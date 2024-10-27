@extends('layouts.app')

@section('title', 'Daftar Rumah Sakit')

@section('content')
    <div class="container mt-5">
        <h1>Tambah Rumah Sakit</h1>
        <form action="{{ route('rumah-sakit.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Rumah Sakit:</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" name="telepon" id="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('rumah-sakit.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection