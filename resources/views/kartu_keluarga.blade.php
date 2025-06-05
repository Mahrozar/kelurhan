@extends('layout')
@section('content')
<h2>Master Kartu Keluarga</h2>
<a href="#" class="btn" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;text-decoration:none;">+ Tambah Kartu Keluarga</a>
<table border="1" cellpadding="8" cellspacing="0" style="width:100%;margin-top:18px;background:#fff;">
    <thead style="background:#e3e6fc;">
        <tr>
            <th>No. KK</th>
            <th>Kepala Keluarga</th>
            <th>Alamat</th>
            <th>RT/RW</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kabupaten/Kota</th>
            <th>Provinsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1234567890123456</td>
            <td>Andi</td>
            <td>Jl. Melati No. 1</td>
            <td>001/002</td>
            <td>Rewangraga</td>
            <td>Rewang</td>
            <td>Kotabaru</td>
            <td>Jawa Barat</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#" style="color:red;">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>9876543210987654</td>
            <td>Siti</td>
            <td>Jl. Kenanga No. 2</td>
            <td>003/004</td>
            <td>Rewangraga</td>
            <td>Rewang</td>
            <td>Kotabaru</td>
            <td>Jawa Barat</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#" style="color:red;">Hapus</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
