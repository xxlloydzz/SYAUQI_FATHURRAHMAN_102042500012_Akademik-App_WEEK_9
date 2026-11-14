@extends('layouts.app')

@section('content')
    <h2>Daftar Materi</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Judul Materi</th>
            <th>Mata Kuliah</th>
            <th>Dosen Pengampu</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Implementasi Middleware pada Laravel</td>
            <td>Pemrograman Web</td>
            <td>Dosen Pengampu</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Autentikasi dan Otorisasi</td>
            <td>Pemrograman Web</td>
            <td>Dosen Pengampu</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Normalisasi Basis Data</td>
            <td>Basis Data</td>
            <td>Dosen Pengampu</td>
        </tr>
    </table>
@endsection
