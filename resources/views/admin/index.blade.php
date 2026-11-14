@extends('layouts.app')

@section('content')
    <h2>Halaman Admin</h2>
    <ul>
        <li>
            <a href="{{ route('admin.users') }}">Manajemen Pengguna</a>
            - daftar user dan role-nya
        </li>
        <li>
            <a href="{{ route('materi.kelola') }}">Kelola Materi</a>
            - atur materi
        </li>
        <li>
            <a href="{{ route('nilai.kelola') }}">Kelola Nilai</a>
            - atur nilai mahasiswa
        </li>
    </ul>
@endsection
