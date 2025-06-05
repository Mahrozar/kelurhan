@extends('layout')
@section('content')
<h2>Master Data Karyawan</h2>
<a href="#" class="btn" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;text-decoration:none;">+ Tambah Karyawan</a>
<table border="1" cellpadding="8" cellspacing="0" style="width:100%;margin-top:18px;background:#fff;">
    <thead style="background:#e3e6fc;">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1987654321</td>
            <td>Rina Sari</td>
            <td>Sekretaris</td>
            <td>Jl. Anggrek No. 5</td>
            <td>08123456789</td>
            <td>rina@kelurahan.local</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#" style="color:red;">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>1987654322</td>
            <td>Budi Santoso</td>
            <td>Staf Umum</td>
            <td>Jl. Mawar No. 7</td>
            <td>08129876543</td>
            <td>budi@kelurahan.local</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#" style="color:red;">Hapus</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
