@extends('layout')
@section('content')
@if(Auth::check() && Auth::user()->role === 'admin')
    <div style="margin-bottom:24px;">
        <div style="background:#e3f2fd;padding:16px 24px;border-radius:8px;color:#1a237e;font-size:1.1em;">
            <b>Login sebagai Admin:</b> {{ Auth::user()->name }} ({{ Auth::user()->email }})
        </div>
    </div>
@endif
<h2 style="margin-bottom: 18px; color:#1a237e;">Dashboard Statistik Kelurahan</h2>

{{-- Pendidikan --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Penduduk Menurut Tingkat Pendidikan Kelurahan</h3>
    <div class="stat-grid">
        @foreach([
            'SD' => 'Sekolah Dasar',
            'SMP' => 'Sekolah Menengah Pertama',
            'SMA' => 'Sekolah Menengah Atas',
            'D3' => 'Diploma 3',
            'S1' => 'Sarjana (S1)',
            'S2' => 'Magister (S2)',
            'S3' => 'Doktor (S3)',
            'Prof' => 'Profesor',
        ] as $kode => $label)
        <div class="stat-card">
            <div class="stat-title">{{ $label }}</div>
            <div class="stat-value">{{ \App\Models\Penduduk::where('pendidikan', $kode)->count() }}</div>
            <div class="stat-desc">Total</div>
        </div>
        @endforeach
    </div>
</div>

{{-- Agama --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Penduduk Menurut Agama/Kepercayaan</h3>
    <div class="stat-grid">
        @foreach(['Islam','Katolik','Kristen','Hindu','Budha','Konghucu'] as $agama)
        <div class="stat-card">
            <div class="stat-title">{{ $agama }}</div>
            <div class="stat-value">{{ \App\Models\Penduduk::where('agama', $agama)->count() }}</div>
            <div class="stat-desc">Total</div>
        </div>
        @endforeach
    </div>
</div>

{{-- Jenis Kelamin --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Penduduk Menurut Jenis Kelamin</h3>
    <div class="stat-grid">
        <div class="stat-card">
            <div class="stat-title">Laki-laki</div>
            <div class="stat-value">{{ \App\Models\Penduduk::where('jenis_kelamin','L')->count() }}</div>
            <div class="stat-desc">Total</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Perempuan</div>
            <div class="stat-value">{{ \App\Models\Penduduk::where('jenis_kelamin','P')->count() }}</div>
            <div class="stat-desc">Total</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Total Penduduk</div>
            <div class="stat-value">{{ \App\Models\Penduduk::count() }}</div>
            <div class="stat-desc">Total</div>
        </div>
    </div>
</div>

{{-- Arsip Surat --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Kearsipan Surat Kelurahan</h3>
    <div class="stat-grid">
        <div class="stat-card">
            <div class="stat-title">Jumlah Arsip Surat Masuk</div>
            <div class="stat-value">-</div>
            <div class="stat-desc">(Belum diimplementasi)</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Jumlah Arsip Surat Keluar</div>
            <div class="stat-value">-</div>
            <div class="stat-desc">(Belum diimplementasi)</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Jumlah Arsip Surat Keluar</div>
            <div class="stat-value">-</div>
            <div class="stat-desc">(Belum diimplementasi)</div>
        </div>
        <div class="stat-card">
            <div class="stat-title">Jumlah Pengguna Sistem</div>
            <div class="stat-value">{{ \App\Models\User::count() }}</div>
            <div class="stat-desc">User</div>
        </div>
    </div>
</div>
@endsection
