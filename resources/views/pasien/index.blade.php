@extends('layouts.app')

@section('title', 'Daftar Pasien')

@section('content')
    <div class="container mt-5">
        <h1>Daftar Pasien</h1>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasiens as $pasien)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->rumah_sakit }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->telepon }}</td>
                        <td>
                            <a href="{{ route('pasien.edit', $pasien) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pasien.destroy', $pasien) }}" method="POST" class="d-inline">
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

