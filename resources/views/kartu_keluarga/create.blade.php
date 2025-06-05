@extends('layout')
@section('content')
<h2>Tambah Kartu Keluarga</h2>
<form method="POST" action="{{ route('kartu-keluarga.store') }}" style="max-width:600px;">
    @csrf
    <label>No. KK</label><input type="text" name="no_kk" required><br>
    <label>Kepala Keluarga</label><input type="text" name="kepala_keluarga" required><br>
    <label>Alamat</label><input type="text" name="alamat" required><br>
    <label>RT/RW</label><input type="text" name="rt_rw" required><br>
    <label>Kelurahan</label><input type="text" name="kelurahan" required><br>
    <label>Kecamatan</label><input type="text" name="kecamatan" required><br>
    <label>Kabupaten/Kota</label><input type="text" name="kabupaten_kota" required><br>
    <label>Provinsi</label><input type="text" name="provinsi" required><br>
    <button type="submit" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;">Simpan</button>
    <a href="{{ route('kartu-keluarga.index') }}" style="margin-left:10px;">Batal</a>
</form>
@endsection
