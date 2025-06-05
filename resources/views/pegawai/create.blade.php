@extends('layout')
@section('content')
<h2>Tambah Karyawan</h2>
<form method="POST" action="{{ route('pegawai.store') }}" style="max-width:600px;">
    @csrf
    <label>NIP</label><input type="text" name="nip" required><br>
    <label>Nama</label><input type="text" name="nama" required><br>
    <label>Jabatan</label><input type="text" name="jabatan" required><br>
    <label>Alamat</label><input type="text" name="alamat" required><br>
    <label>No. Telepon</label><input type="text" name="no_telepon" required><br>
    <label>Email</label><input type="email" name="email" required><br>
    <button type="submit" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;">Simpan</button>
    <a href="{{ route('pegawai.index') }}" style="margin-left:10px;">Batal</a>
</form>
@endsection
