@extends('layout')
@section('content')
<h2>Master Data Penduduk</h2>
<form method="GET" action="" style="margin-bottom:18px;display:flex;gap:10px;align-items:end;flex-wrap:wrap;">
    <div>
        <label>Cari</label><br>
        <input type="text" name="q" value="{{ request('q') }}" placeholder="NIK/Nama/Alamat" style="padding:4px 8px;">
    </div>
    <div>
        <label>Jenis Kelamin</label><br>
        <select name="jk" style="padding:4px 8px;">
            <option value="">- Semua -</option>
            <option value="L" {{ request('jk')=='L'?'selected':'' }}>Laki-laki</option>
            <option value="P" {{ request('jk')=='P'?'selected':'' }}>Perempuan</option>
        </select>
    </div>
    <div>
        <label>Agama</label><br>
        <select name="agama" style="padding:4px 8px;">
            <option value="">- Semua -</option>
            @foreach($agamas as $agama)
                <option value="{{ $agama }}" {{ request('agama')==$agama?'selected':'' }}>{{ $agama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" style="background:#3949ab;color:#fff;padding:6px 16px;border-radius:5px;">Filter</button>
        <a href="{{ route('penduduk.index') }}" style="margin-left:8px;">Reset</a>
    </div>
    <div>
        <a href="{{ route('penduduk.export', request()->all()) }}" style="background:#43a047;color:#fff;padding:7px 16px;border-radius:5px;text-decoration:none;">Export CSV</a>
    </div>
</form>
<a href="{{ route('penduduk.create') }}" class="btn" style="background:#3949ab;color:#fff;padding:8px 18px;border-radius:5px;text-decoration:none;">+ Tambah Penduduk</a>
@if(session('success'))
    <div style="margin:16px 0;color:green;">{{ session('success') }}</div>
@endif
<table border="1" cellpadding="8" cellspacing="0" style="width:100%;margin-top:18px;background:#fff;">
    <thead style="background:#e3e6fc;">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($penduduks as $p)
        <tr>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->pendidikan }}</td>
            <td>{{ $p->pekerjaan }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
                <a href="{{ route('penduduk.edit', $p) }}">Edit</a> |
                <form action="{{ route('penduduk.destroy', $p) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')" style="color:red;background:none;border:none;cursor:pointer;">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
