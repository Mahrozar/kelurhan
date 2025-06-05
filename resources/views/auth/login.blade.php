@extends('layout')
@section('content')
<div style="max-width:400px;margin:60px auto;background:#fff;padding:32px 28px;border-radius:10px;box-shadow:0 2px 12px #0002;">
    <h2 style="text-align:center;color:#1a237e;margin-bottom:24px;">Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div style="margin-bottom:16px;">
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus style="width:100%;padding:8px 10px;">
            @error('email')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
        </div>
        <div style="margin-bottom:16px;">
            <label>Password</label><br>
            <input type="password" name="password" required style="width:100%;padding:8px 10px;">
            @error('password')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
        </div>
        <button type="submit" style="width:100%;background:#3949ab;color:#fff;padding:10px 0;border-radius:5px;font-size:1.1em;">Login</button>
    </form>
</div>
@endsection
