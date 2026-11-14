<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function dosen()
    {
        return view('dosen');
    }

    public function mahasiswa()
    {
        return view('mahasiswa');
    }

    public function materi()
    {
        return view('materi.index');
    }

    public function kelolaMateri()
    {
        return view('materi.kelola');
    }

    public function kelolaNilai()
    {
        // data dummy dulu
        $nilai = [
            ['nama' => 'Budi Santoso', 'mata_kuliah' => 'Pemrograman Web', 'nilai' => 85],
            ['nama' => 'Siti Rahayu', 'mata_kuliah' => 'Pemrograman Web', 'nilai' => 90],
            ['nama' => 'Andi Pratama', 'mata_kuliah' => 'Basis Data', 'nilai' => 78],
        ];

        return view('nilai.kelola', compact('nilai'));
    }

    public function nilaiPribadi()
    {
        $nama = Auth::user()->name;

        $nilaiSaya = [
            ['nama' => $nama, 'mata_kuliah' => 'Pemrograman Web', 'nilai' => 85],
            ['nama' => $nama, 'mata_kuliah' => 'Basis Data', 'nilai' => 78],
            ['nama' => $nama, 'mata_kuliah' => 'Sistem Operasi', 'nilai' => 92],
        ];

        return view('nilai.pribadi', compact('nilaiSaya'));
    }
}
