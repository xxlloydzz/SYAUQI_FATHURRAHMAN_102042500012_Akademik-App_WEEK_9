@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>

    <p>Anda sedang login sebagai:</p>
    <ul>
        <li>Nama: {{ Auth::user()->name }}</li>
        <li>Email: {{ Auth::user()->email }}</li>
        <li>Role: {{ Auth::user()->role }}</li>
    </ul>

    <p>Fitur yang bisa Anda akses sesuai role Anda:</p>
    <ul>
        <li><a href="{{ route('materi.index') }}">Lihat Materi</a> (semua role)</li>

        @if(Auth::user()->role == 'admin')
            <li><a href="{{ route('admin.index') }}">Halaman Admin</a></li>
            <li><a href="{{ route('admin.users') }}">Manajemen Pengguna</a></li>
        @endif

        @if(Auth::user()->role == 'dosen')
            <li><a href="{{ route('dosen.index') }}">Dashboard Dosen</a></li>
        @endif

        @if(Auth::user()->role == 'mahasiswa')
            <li><a href="{{ route('mahasiswa.index') }}">Dashboard Mahasiswa</a></li>
        @endif

        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'dosen')
            <li><a href="{{ route('materi.kelola') }}">Kelola Materi</a></li>
            <li><a href="{{ route('nilai.kelola') }}">Kelola Nilai</a></li>
        @endif

        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'mahasiswa')
            <li><a href="{{ route('nilai.pribadi') }}">Lihat Nilai Pribadi</a></li>
        @endif
    </ul>
@endsection
