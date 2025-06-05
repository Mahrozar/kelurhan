@extends('layout')
@section('content')
<h2 style="margin-bottom: 18px; color:#1a237e;">Dashboard Statistik Kelurahan</h2>

{{-- Pendidikan --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Penduduk Menurut Tingkat Pendidikan Kelurahan</h3>
    <div class="stat-grid">
        <div class="stat-card"><div class="stat-title">Sekolah Dasar</div><div class="stat-value">12</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Sekolah Menengah Pertama</div><div class="stat-value">8</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Sekolah Menengah Atas</div><div class="stat-value">15</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Diploma 3</div><div class="stat-value">3</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Sarjana (S1)</div><div class="stat-value">10</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Magister (S2)</div><div class="stat-value">2</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Doktor (S3)</div><div class="stat-value">1</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Profesor</div><div class="stat-value">0</div><div class="stat-desc">Total</div></div>
    </div>
</div>

{{-- Agama --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Penduduk Menurut Agama/Kepercayaan</h3>
    <div class="stat-grid">
        <div class="stat-card"><div class="stat-title">Islam</div><div class="stat-value">30</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Katolik</div><div class="stat-value">4</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Kristen</div><div class="stat-value">6</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Hindu</div><div class="stat-value">1</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Budha</div><div class="stat-value">2</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Konghucu</div><div class="stat-value">0</div><div class="stat-desc">Total</div></div>
    </div>
</div>

{{-- Jenis Kelamin --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Penduduk Menurut Jenis Kelamin</h3>
    <div class="stat-grid">
        <div class="stat-card"><div class="stat-title">Laki-laki</div><div class="stat-value">25</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Perempuan</div><div class="stat-value">28</div><div class="stat-desc">Total</div></div>
        <div class="stat-card"><div class="stat-title">Total Penduduk</div><div class="stat-value">53</div><div class="stat-desc">Total</div></div>
    </div>
</div>

{{-- Arsip Surat --}}
<div style="margin-bottom:24px;">
    <h3 style="color:#3949ab;">Informasi Data Kearsipan Surat Kelurahan</h3>
    <div class="stat-grid">
        <div class="stat-card"><div class="stat-title">Jumlah Arsip Surat Masuk</div><div class="stat-value">12</div><div class="stat-desc">Surat</div></div>
        <div class="stat-card"><div class="stat-title">Jumlah Arsip Surat Keluar</div><div class="stat-value">8</div><div class="stat-desc">Surat</div></div>
        <div class="stat-card"><div class="stat-title">Jumlah Pengguna Sistem</div><div class="stat-value">5</div><div class="stat-desc">User</div></div>
    </div>
</div>
@endsection
