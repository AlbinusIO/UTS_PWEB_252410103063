@extends('layouts.app')

@section('title', 'Masuk')
@section('main_class', 'full')

@section('content')
<section class="login">
<div class="login-side">
    <div class="login-text">
        <p class="eyebrow">Website Profil</p>
        <h1>Profil dan portofolio <span class="pop">pribadi</span>.</h1>
        <span class="rule"></span>
        <p class="side-text">Masuk untuk melihat ringkasan, proyek, dan profil lengkap.</p>
    </div>
</div>

    <div class="login-form">
        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <h2>Masuk</h2>
            <p class="muted">Gunakan username apa saja untuk simulasi login.</p>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="contoh: albinu" autofocus>
            @error('username')
                <small class="error">{{ $message }}</small>
            @enderror

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="minimal 4 karakter">
            @error('password')
                <small class="error">{{ $message }}</small>
            @enderror

            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
</section>
@endsection