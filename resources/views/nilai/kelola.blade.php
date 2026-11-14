@extends('layouts.app')

@section('content')
    <h2>Kelola Nilai</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n['nama'] }}</td>
                <td>{{ $n['mata_kuliah'] }}</td>
                <td>{{ $n['nilai'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
