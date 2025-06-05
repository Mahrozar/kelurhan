@extends('layout')
@section('content')
<h2>Master Data Karyawan</h2>
<form method="GET" action="" style="margin-bottom:18px;display:flex;gap:10px;align-items:end;flex-wrap:wrap;">
    <div>
        <label>Cari</label><br>
        <input type="text" name="q" value="{{ request('q') }}" placeholder="NIP/Nama/Jabatan/Alamat" style="padding:4px 8px;">
    </div>
    <div>
        <label>Jabatan</label><br>
        <select name="jabatan" style="padding:4px 8px;">
            <option value="">- Semua -</option>
            @foreach($jabatans as $jabatan)
                <option value="{{ $jabatan }}" {{ request('jabatan')==$jabatan?'selected':'' }}>{{ $jabatan }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" style="background:#3949ab;color:#fff;padding:6px 16px;border-radius:5px;">Filter</button>
        <a href="{{ route('pegawai.index') }}" style="margin-left:8px;">Reset</a>
    </div>
</form>
<a href="{{ route('pegawai.create') }}" class="btn" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;text-decoration:none;">+ Tambah Karyawan</a>
@if(session('success'))
    <div style="margin:16px 0;color:green;">{{ session('success') }}</div>
@endif
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
        @foreach($pegawais as $pegawai)
        <tr>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->no_telepon }}</td>
            <td>{{ $pegawai->email }}</td>
            <td>
                <a href="{{ route('pegawai.edit', $pegawai) }}">Edit</a> |
                <form action="{{ route('pegawai.destroy', $pegawai) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')" style="color:red;background:none;border:none;cursor:pointer;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
