@extends('layout')
@section('content')
<h2>Edit Kartu Keluarga</h2>
<form method="POST" action="{{ route('kartu-keluarga.update', $kartu_keluarga) }}" style="max-width:600px;">
    @csrf
    @method('PUT')
    <label>No. KK</label><input type="text" name="no_kk" value="{{ $kartu_keluarga->no_kk }}" required><br>
    <label>Kepala Keluarga</label><input type="text" name="kepala_keluarga" value="{{ $kartu_keluarga->kepala_keluarga }}" required><br>
    <label>Alamat</label><input type="text" name="alamat" value="{{ $kartu_keluarga->alamat }}" required><br>
    <label>RT/RW</label><input type="text" name="rt_rw" value="{{ $kartu_keluarga->rt_rw }}" required><br>
    <label>Kelurahan</label><input type="text" name="kelurahan" value="{{ $kartu_keluarga->kelurahan }}" required><br>
    <label>Kecamatan</label><input type="text" name="kecamatan" value="{{ $kartu_keluarga->kecamatan }}" required><br>
    <label>Kabupaten/Kota</label><input type="text" name="kabupaten_kota" value="{{ $kartu_keluarga->kabupaten_kota }}" required><br>
    <label>Provinsi</label><input type="text" name="provinsi" value="{{ $kartu_keluarga->provinsi }}" required><br>
    <button type="submit" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;">Update</button>
    <a href="{{ route('kartu-keluarga.index') }}" style="margin-left:10px;">Batal</a>
</form>
@endsection
