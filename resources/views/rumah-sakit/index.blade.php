@extends('layouts.app')

@section('title', 'Daftar Rumah Sakit')

@section('content')
    <div class="container mt-5">
        <h1>Daftar Rumah Sakit</h1>
        <a href="{{ route('rumah-sakit.create') }}" class="btn btn-primary mb-3">Tambah Rumah Sakit</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rumahSakits as $rumahSakit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rumahSakit->nama }}</td>
                        <td>{{ $rumahSakit->alamat }}</td>
                        <td>{{ $rumahSakit->email }}</td>
                        <td>{{ $rumahSakit->telepon }}</td>
                        <td>
                            <a href="{{ route('rumah-sakit.edit', $rumahSakit) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('rumah-sakit.destroy', $rumahSakit) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection