@extends('layouts.app')

@section('content')
    <h2>Selamat Datang di Akademik App</h2>
    <p>Aplikasi akademik sederhana untuk Admin, Dosen, dan Mahasiswa. Silakan login untuk melanjutkan.</p>
    <a class="btn" href="{{ route('login') }}">Login</a>
@endsection
