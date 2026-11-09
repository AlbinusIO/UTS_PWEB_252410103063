@extends('layouts.app')

@section('title', 'Proyek')

@section('content')
<header class="page-head">
    <p class="label">Proyek</p>
    <h1>Pengelolaan <span class="pop">proyek</span></h1>
    <span class="rule"></span>
    <p class="muted">{{ count($proyek) }} proyek yang dikirim dari Controller dan ditampilkan dengan perulangan.</p>
</header>

<section class="projects">
    @forelse ($proyek as $p)
        <article class="project">
            <span class="num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
            <div class="project-main">
                <h3>{{ $p['nama'] }}</h3>
                <p class="muted">{{ $p['deskripsi'] }}</p>
                <div class="tags">
                    @foreach ($p['teknologi'] as $t)
                        <span class="tag">{{ $t }}</span>
                    @endforeach
                </div>
            </div>
            <div class="project-meta">
                <span class="year">{{ $p['tahun'] }}</span>
                <span class="status {{ $p['status'] === 'Berjalan' ? 'live' : '' }}">{{ $p['status'] }}</span>
            </div>
        </article>
    @empty
        <p class="muted">Belum ada proyek.</p>
    @endforelse
</section>
@endsection