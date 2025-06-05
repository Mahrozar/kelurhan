@extends('layout')
@section('content')
<h2>Pelayanan Surat</h2>
<a href="#" class="btn" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;text-decoration:none;">+ Ajukan Surat</a>
<table border="1" cellpadding="8" cellspacing="0" style="width:100%;margin-top:18px;background:#fff;">
    <thead style="background:#e3e6fc;">
        <tr>
            <th>No</th>
            <th>Jenis Surat</th>
            <th>Nama Pemohon</th>
            <th>Tanggal Pengajuan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Surat Keterangan Domisili</td>
            <td>Andi</td>
            <td>2025-05-25</td>
            <td><span style="color: #43a047; font-weight: 500;">Selesai</span></td>
            <td>
                <a href="#">Detail</a> |
                <a href="#" style="color:red;">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Surat Pengantar RT/RW</td>
            <td>Siti</td>
            <td>2025-05-24</td>
            <td><span style="color: #fb8c00; font-weight: 500;">Diproses</span></td>
            <td>
                <a href="#">Detail</a> |
                <a href="#" style="color:red;">Hapus</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
