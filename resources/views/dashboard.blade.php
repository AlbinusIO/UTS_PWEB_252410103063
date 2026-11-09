@extends('layouts.app')

@section('title', 'Beranda')

@section('hero')
<section class="hero">
    <div class="wrap">
        <p class="eyebrow">Beranda</p>
        <h1>Halo, <span class="pop">{{ $username }}</span>.</h1>
        <span class="rule"></span>
        <p class="hero-text">{{ $tagline }}</p>
    </div>
</section>
@endsection

@section('content')
<section class="grid grid-3">
    @foreach ($stats as $stat)
        @include('partials.stat-card', ['stat' => $stat])
    @endforeach
</section>

<section class="grid grid-split">
    <div>
        <p class="label">01 · Tentang</p>
        <h2>Sekilas tentang saya</h2>
        <p class="body-text">{{ $tentang }}</p>
    </div>

    <div>
        <p class="label">02 · Catatan Terbaru</p>
        <h2>Yang sedang dikerjakan</h2>
        <ul class="timeline">
            @foreach ($catatan as $c)
                <li class="{{ $loop->first ? 'latest' : '' }}">
                    <span class="time">{{ $c['waktu'] }}</span>
                    <span>{{ $c['teks'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection