<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Kelurahan</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        body { margin: 0; font-family: 'Segoe UI', Arial, sans-serif; background: #f4f6fb; }
        .sidebar { width: 230px; background: linear-gradient(180deg, #1a237e 80%, #3949ab 100%); color: #fff; height: 100vh; position: fixed; top: 0; left: 0; display: flex; flex-direction: column; box-shadow: 2px 0 12px #0002; }
        .sidebar h2 { margin: 0; padding: 28px 0 18px 0; text-align: center; font-size: 1.4em; letter-spacing: 2px; background: #151b5a; border-bottom: 1px solid #283593; }
        .sidebar ul { list-style: none; padding: 0; margin: 0; flex: 1; }
        .sidebar ul li { padding: 15px 36px; cursor: pointer; transition: background 0.2s, color 0.2s; border-left: 4px solid transparent; }
        .sidebar ul li:hover, .sidebar ul li.active { background: #283593; color: #ffeb3b; border-left: 4px solid #ffeb3b; }
        .sidebar ul li a { color: inherit; text-decoration: none; display: block; }
        .sidebar .bottom { padding: 18px 36px; border-top: 1px solid #3949ab; }
        .sidebar .bottom a, .sidebar .bottom button { color: #fff; text-decoration: none; font-weight: 500; }
        .sidebar .bottom button { background: none; border: none; padding: 0; margin-top: 10px; color: #ffb300; cursor: pointer; font: inherit; text-align: left; }
        .main { margin-left: 230px; padding: 38px 48px; min-height: 100vh; background: #f4f6fb; }
        .header { background: #fff; padding: 20px 40px; border-bottom: 1px solid #e0e0e0; margin-left: 230px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 8px #0001; position: sticky; top: 0; z-index: 10; }
        .header .user-info { display: flex; align-items: center; gap: 12px; }
        .header .user-info .avatar { background: #e3e6fc; border-radius: 50%; width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; font-size: 1.3em; color: #3949ab; }
        .header .user-info span { color: #3949ab; font-weight: 500; }
        .stat-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 28px; margin-top: 32px; }
        .stat-card { background: #fff; border-radius: 12px; box-shadow: 0 2px 12px #0001; padding: 28px 22px; display: flex; flex-direction: column; align-items: flex-start; transition: box-shadow 0.2s; border: 1.5px solid #e3e6fc; }
        .stat-card:hover { box-shadow: 0 4px 18px #0002; border-color: #3949ab33; }
        .stat-title { font-size: 1.08em; color: #3949ab; margin-bottom: 10px; font-weight: 500; }
        .stat-value { font-size: 2.3em; font-weight: bold; color: #1a237e; }
        .stat-desc { font-size: 1em; color: #757575; margin-top: 6px; }
        form input, form select, form button { font-size: 1em; border-radius: 6px; border: 1px solid #c5cae9; padding: 7px 12px; margin-bottom: 10px; }
        form input:focus, form select:focus { outline: 2px solid #3949ab; border-color: #3949ab; }
        form label { font-weight: 500; color: #3949ab; }
        .btn, button[type=submit] { background: #3949ab; color: #fff; border: none; padding: 9px 20px; border-radius: 6px; font-weight: 500; cursor: pointer; transition: background 0.2s; }
        .btn:hover, button[type=submit]:hover { background: #1a237e; }
        table { border-collapse: collapse; width: 100%; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px #0001; }
        thead { background: #e3e6fc; }
        th, td { padding: 10px 12px; text-align: left; }
        th { color: #3949ab; font-weight: 600; }
        tr:nth-child(even) { background: #f4f6fb; }
        tr:hover { background: #e3e6fc; }
        .success { color: green; margin: 16px 0; }
        .error { color: red; margin: 16px 0; }
        @media (max-width: 900px) {
            .main, .header { margin-left: 0; padding: 18px 8px; }
            .sidebar { position: static; width: 100%; height: auto; flex-direction: row; }
            .sidebar ul { flex-direction: row; display: flex; }
            .sidebar ul li { padding: 10px 12px; }
        }
    </style>
</head>
<body>
    @if(Auth::check())
    <div class="sidebar">
        <h2>SI Kelurahan</h2>
        <ul>
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/" style="color:inherit;text-decoration:none;display:block;">Dashboard</a></li>
            <li class="{{ request()->is('kartu-keluarga') ? 'active' : '' }}"><a href="/kartu-keluarga" style="color:inherit;text-decoration:none;display:block;">Master Kartu Keluarga</a></li>
            <li class="{{ request()->is('penduduk') ? 'active' : '' }}"><a href="/penduduk" style="color:inherit;text-decoration:none;display:block;">Master Data Penduduk</a></li>
            <li class="{{ request()->is('pegawai') ? 'active' : '' }}"><a href="/pegawai" style="color:inherit;text-decoration:none;display:block;">Master Data Pegawai</a></li>
            <li class="{{ request()->is('pelayanan-surat') ? 'active' : '' }}"><a href="/pelayanan-surat" style="color:inherit;text-decoration:none;display:block;">Pelayanan Surat</a></li>
            <li class="{{ request()->is('arsip-masuk') ? 'active' : '' }}"><a href="/arsip-masuk" style="color:inherit;text-decoration:none;display:block;">Arsip Surat Masuk</a></li>
            <li class="{{ request()->is('arsip-keluar') ? 'active' : '' }}"><a href="/arsip-keluar" style="color:inherit;text-decoration:none;display:block;">Arsip Surat Keluar</a></li>
            <li class="{{ request()->is('menu-management') ? 'active' : '' }}"><a href="/menu-management" style="color:inherit;text-decoration:none;display:block;">Menu Management</a></li>
            <li class="{{ request()->is('role-access') ? 'active' : '' }}"><a href="/role-access" style="color:inherit;text-decoration:none;display:block;">Role Access</a></li>
            <li class="{{ request()->is('pengguna') ? 'active' : '' }}"><a href="/pengguna" style="color:inherit;text-decoration:none;display:block;">Manajemen Pengguna</a></li>
        </ul>
        <div class="bottom">
            <div><a href="/profil" style="color:inherit;text-decoration:none;">Profil</a></div>
            <form method="POST" action="/logout" style="margin:0;padding:0;">
                @csrf
                <button type="submit" style="background:none;border:none;padding:0;margin-top:8px;color:#ffb300;cursor:pointer;font:inherit;text-align:left;">Logout</button>
            </form>
        </div>
    </div>
    <div class="header" style="display:flex;justify-content:space-between;align-items:center;">
        <div>Selamat Datang di Sistem Informasi Kelurahan</div>
        @if(Auth::check())
            <div class="user-info">
                <div class="avatar">
                    <span class="material-icons" style="font-size:22px;">person</span>
                </div>
                <span>{{ Auth::user()->name }}</span>
            </div>
        @endif
    </div>
    <div class="main">
        @yield('content')
    </div>
    @else
    <div class="main" style="margin-left:0;">
        @yield('content')
    </div>
    @endif
</body>
</html>
<?php
use Illuminate\Support\Facades\Auth;
?>
