@extends('layout')
@section('content')
<h2>Edit Karyawan</h2>
<form method="POST" action="{{ route('pegawai.update', $pegawai) }}" style="max-width:600px;">
    @csrf
    @method('PUT')
    <label>NIP</label><input type="text" name="nip" value="{{ $pegawai->nip }}" required><br>
    <label>Nama</label><input type="text" name="nama" value="{{ $pegawai->nama }}" required><br>
    <label>Jabatan</label><input type="text" name="jabatan" value="{{ $pegawai->jabatan }}" required><br>
    <label>Alamat</label><input type="text" name="alamat" value="{{ $pegawai->alamat }}" required><br>
    <label>No. Telepon</label><input type="text" name="no_telepon" value="{{ $pegawai->no_telepon }}" required><br>
    <label>Email</label><input type="email" name="email" value="{{ $pegawai->email }}" required><br>
    <button type="submit" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;">Update</button>
    <a href="{{ route('pegawai.index') }}" style="margin-left:10px;">Batal</a>
</form>
@endsection
