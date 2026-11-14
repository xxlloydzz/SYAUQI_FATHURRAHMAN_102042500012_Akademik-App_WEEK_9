@extends('layouts.app')

@section('content')
    <h2>Dashboard Mahasiswa</h2>
    <ul>
        <li><a href="{{ route('materi.index') }}">Lihat Materi</a> &mdash; melihat dan membaca materi pembelajaran</li>
        <li><a href="{{ route('nilai.pribadi') }}">Nilai Pribadi</a> &mdash; melihat nilai milik akun sendiri</li>
    </ul>
@endsection
