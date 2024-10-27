@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="welcome-message">Selamat datang, {{ Auth::user()->username }}!</h1>
    <p>Ini adalah halaman utama setelah login. Silakan pilih menu di sidebar.</p>
@endsection
