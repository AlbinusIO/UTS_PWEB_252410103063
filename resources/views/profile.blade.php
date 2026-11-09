@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<section class="profile">
    <aside class="profile-side">
        <div class="avatar">{{ strtoupper(substr($username, 0, 1)) }}</div>
        <h1>{{ $username }}</h1>
        <p class="muted">Mahasiswa · Developer</p>
        <span class="rule"></span>
        <dl class="detail">
            @foreach ($detail as $label => $nilai)
                <dt>{{ $label }}</dt>
                <dd>{{ $nilai }}</dd>
            @endforeach
        </dl>
    </aside>

    <div class="profile-main">
        <div class="block">
            <p class="label">01 · Keahlian</p>
            @foreach ($keahlian as $grup => $daftar)
                <div class="skill-row">
                    <h3>{{ $grup }}</h3>
                    <div class="tags">
                        @foreach ($daftar as $item)
                            <span class="tag">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="block">
            <p class="label">02 · Pendidikan</p>
            <h3>Universitas Jember</h3>
            <p class="muted">Mata kuliah yang sedang dan sudah ditempuh:</p>
            <ul class="plain-list">
                @foreach ($kuliah as $mk)
                    <li>{{ $mk }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="profile-char">
        <img src="{{ asset('images/yukina.png') }}" alt="Karakter">
    </div>
</section>
@endsection