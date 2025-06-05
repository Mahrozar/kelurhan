@extends('layout')
@section('content')
<h2>Master Kartu Keluarga</h2>
<form method="GET" action="" style="margin-bottom:18px;display:flex;gap:10px;align-items:end;flex-wrap:wrap;">
    <div>
        <label>Cari</label><br>
        <input type="text" name="q" value="{{ request('q') }}" placeholder="No KK/Kepala Keluarga/Alamat" style="padding:4px 8px;">
    </div>
    <div>
        <label>Kelurahan</label><br>
        <select name="kelurahan" style="padding:4px 8px;">
            <option value="">- Semua -</option>
            @foreach($kelurahans as $kel)
                <option value="{{ $kel }}" {{ request('kelurahan')==$kel?'selected':'' }}>{{ $kel }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Kecamatan</label><br>
        <select name="kecamatan" style="padding:4px 8px;">
            <option value="">- Semua -</option>
            @foreach($kecamatans as $kec)
                <option value="{{ $kec }}" {{ request('kecamatan')==$kec?'selected':'' }}>{{ $kec }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" style="background:#3949ab;color:#fff;padding:6px 16px;border-radius:5px;">Filter</button>
        <a href="{{ route('kartu-keluarga.index') }}" style="margin-left:8px;">Reset</a>
    </div>
    <div>
        <a href="{{ route('kartu-keluarga.export', request()->all()) }}" style="background:#43a047;color:#fff;padding:7px 16px;border-radius:5px;text-decoration:none;">Export CSV</a>
    </div>
</form>
<a href="{{ route('kartu-keluarga.create') }}" class="btn" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;text-decoration:none;">+ Tambah Kartu Keluarga</a>
@if(session('success'))
    <div style="margin:16px 0;color:green;">{{ session('success') }}</div>
@endif
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
        @foreach($kks as $kk)
        <tr>
            <td>{{ $kk->no_kk }}</td>
            <td>{{ $kk->kepala_keluarga }}</td>
            <td>{{ $kk->alamat }}</td>
            <td>{{ $kk->rt_rw }}</td>
            <td>{{ $kk->kelurahan }}</td>
            <td>{{ $kk->kecamatan }}</td>
            <td>{{ $kk->kabupaten_kota }}</td>
            <td>{{ $kk->provinsi }}</td>
            <td>
                <a href="{{ route('kartu-keluarga.edit', $kk) }}">Edit</a> |
                <form action="{{ route('kartu-keluarga.destroy', $kk) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')" style="color:red;background:none;border:none;cursor:pointer;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
