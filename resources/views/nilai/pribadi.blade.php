@extends('layouts.app')

@section('content')
    <h2>Nilai Pribadi</h2>
    <p>Nilai milik <strong>{{ Auth::user()->name }}</strong>:</p>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
        </tr>
        @foreach ($nilaiSaya as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n['nama'] }}</td>
                <td>{{ $n['mata_kuliah'] }}</td>
                <td>{{ $n['nilai'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
