@extends('layout')
@section('content')
<div style="max-width:400px;margin:60px auto;background:#fff;padding:32px 28px;border-radius:10px;box-shadow:0 2px 12px #0002;">
    <h2 style="text-align:center;color:#1a237e;margin-bottom:24px;">Registrasi</h2>
    @if(session('success'))
        <div style="color:green;margin-bottom:16px;">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div style="margin-bottom:16px;">
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus style="width:100%;padding:8px 10px;">
            @error('name')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
        </div>
        <div style="margin-bottom:16px;">
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required style="width:100%;padding:8px 10px;">
            @error('email')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
        </div>
        <div style="margin-bottom:16px;">
            <label>Password</label><br>
            <input type="password" name="password" required style="width:100%;padding:8px 10px;">
            @error('password')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
        </div>
        <div style="margin-bottom:16px;">
            <label>Konfirmasi Password</label><br>
            <input type="password" name="password_confirmation" required style="width:100%;padding:8px 10px;">
        </div>
        <button type="submit" style="width:100%;background:#3949ab;color:#fff;padding:10px 0;border-radius:5px;font-size:1.1em;">Daftar</button>
        <div style="margin-top:16px;text-align:center;">
            <a href="{{ route('login') }}">Sudah punya akun? Login</a>
        </div>
    </form>
</div>
@endsection
