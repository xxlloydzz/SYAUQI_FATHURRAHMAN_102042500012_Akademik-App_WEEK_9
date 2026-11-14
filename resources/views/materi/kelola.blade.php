@extends('layouts.app')

@section('content')
    <h2>Kelola Materi</h2>
    <p><a class="btn" href="#">+ Tambah Materi</a></p>

    <table>
        <tr>
            <th>No</th>
            <th>Judul Materi</th>
            <th>Mata Kuliah</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Implementasi Middleware pada Laravel</td>
            <td>Pemrograman Web</td>
            <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Autentikasi dan Otorisasi</td>
            <td>Pemrograman Web</td>
            <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Normalisasi Basis Data</td>
            <td>Basis Data</td>
            <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
        </tr>
    </table>
@endsection
