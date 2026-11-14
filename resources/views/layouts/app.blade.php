<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademik App</title>
    <style>
body { font-family: Arial, sans-serif; margin: 0; background: #0d0709; color: #ece6e7; }
a { color: #e59aa8; }
a:hover { color: #f3c1ca; }
header { background: #800020; color: #fff; padding: 12px 20px; overflow: hidden; }
header h1 { margin: 0; font-size: 20px; float: left; }
header .user-info { float: right; font-size: 14px; padding-top: 4px; }
nav { background: #4a0014; padding: 8px 20px; }
nav a { color: #f5e9ec; margin-right: 14px; text-decoration: none; font-size: 14px; }
nav a:hover { text-decoration: underline; color: #fff; }
.container { max-width: 900px; margin: 20px auto; background: #1a1013; padding: 20px 24px; border-radius: 6px; border: 1px solid #3a1620; }
table { border-collapse: collapse; width: 100%; margin-top: 10px; }
th, td { border: 1px solid #3a1620; padding: 8px; text-align: left; }
th { background: #2b0f17; }
button, .btn { background: #800020; color: #fff; border: none; padding: 8px 14px; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 14px; }
button:hover, .btn:hover { background: #a3002b; }
input { padding: 8px; width: 100%; box-sizing: border-box; margin: 4px 0 12px; background: #241519; color: #ece6e7; border: 1px solid #4a2430; border-radius: 4px; }
input:focus { outline: none; border-color: #a3002b; }
.error { color: #ff8fa3; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <h1>Akademik App</h1>
        <span class="user-info">
            @auth
                Halo, {{ Auth::user()->name }} (role: {{ Auth::user()->role }})
            @else
                Belum login
            @endauth
        </span>
    </header>

    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('materi.index') }}">Lihat Materi</a>

            @if(Auth::user()->role == 'admin')
                <a href="{{ route('admin.index') }}">Halaman Admin</a>
                <a href="{{ route('admin.users') }}">Manajemen Pengguna</a>
            @endif

            @if(Auth::user()->role == 'dosen')
                <a href="{{ route('dosen.index') }}">Dashboard Dosen</a>
            @endif

            @if(Auth::user()->role == 'mahasiswa')
                <a href="{{ route('mahasiswa.index') }}">Dashboard Mahasiswa</a>
            @endif

            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'dosen')
                <a href="{{ route('materi.kelola') }}">Kelola Materi</a>
                <a href="{{ route('nilai.kelola') }}">Kelola Nilai</a>
            @endif

            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'mahasiswa')
                <a href="{{ route('nilai.pribadi') }}">Nilai Pribadi</a>
            @endif

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
