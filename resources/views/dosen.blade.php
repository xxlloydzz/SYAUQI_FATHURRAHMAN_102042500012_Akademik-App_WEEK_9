@extends('layouts.app')

@section('content')
    <h2>Dashboard Dosen</h2>
    <ul>
        <li><a href="{{ route('materi.kelola') }}">Kelola Materi</a> &mdash; menambah dan mengubah materi pembelajaran</li>
        <li><a href="{{ route('nilai.kelola') }}">Kelola Nilai</a> &mdash; mengisi dan mengubah nilai mahasiswa</li>
        <li><a href="{{ route('materi.index') }}">Lihat Materi</a> &mdash; melihat daftar materi yang tersedia</li>
    </ul>
@endsection
