@extends('layout')
@section('content')
<h2>Edit Data Penduduk</h2>
<form method="POST" action="{{ route('penduduk.update', $penduduk) }}" style="max-width:500px;">
    @csrf
    @method('PUT')
    <label>NIK</label><input type="text" name="nik" value="{{ $penduduk->nik }}" required><br>
    <label>Nama</label><input type="text" name="nama" value="{{ $penduduk->nama }}" required><br>
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
        <option value="L" {{ $penduduk->jenis_kelamin=='L'?'selected':'' }}>Laki-laki</option>
        <option value="P" {{ $penduduk->jenis_kelamin=='P'?'selected':'' }}>Perempuan</option>
    </select><br>
    <label>Tempat Lahir</label><input type="text" name="tempat_lahir" value="{{ $penduduk->tempat_lahir }}" required><br>
    <label>Tanggal Lahir</label><input type="date" name="tanggal_lahir" value="{{ $penduduk->tanggal_lahir }}" required><br>
    <label>Agama</label><input type="text" name="agama" value="{{ $penduduk->agama }}" required><br>
    <label>Pendidikan</label><input type="text" name="pendidikan" value="{{ $penduduk->pendidikan }}" required><br>
    <label>Pekerjaan</label><input type="text" name="pekerjaan" value="{{ $penduduk->pekerjaan }}" required><br>
    <label>Alamat</label><input type="text" name="alamat" value="{{ $penduduk->alamat }}" required><br>
    <button type="submit" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;">Update</button>
    <a href="{{ route('penduduk.index') }}" style="margin-left:10px;">Batal</a>
</form>
@endsection
