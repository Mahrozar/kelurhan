@extends('layout')
@section('content')
<h2>Tambah Data Penduduk</h2>
<form method="POST" action="{{ route('penduduk.store') }}" style="max-width:500px;">
    @csrf
    <label>NIK</label><input type="text" name="nik" class="form-control" required><br>
    <label>Nama</label><input type="text" name="nama" class="form-control" required><br>
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <label>Tempat Lahir</label><input type="text" name="tempat_lahir" required><br>
    <label>Tanggal Lahir</label><input type="date" name="tanggal_lahir" required><br>
    <label>Agama</label><input type="text" name="agama" required><br>
    <label>Pendidikan</label><input type="text" name="pendidikan" required><br>
    <label>Pekerjaan</label><input type="text" name="pekerjaan" required><br>
    <label>Alamat</label><input type="text" name="alamat" required><br>
    <button type="submit" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;">Simpan</button>
    <a href="{{ route('penduduk.index') }}" style="margin-left:10px;">Batal</a>
</form>
@endsection
