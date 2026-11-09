@props(['username', 'active' => ''])

<header class="navbar">
    <div class="wrap navbar-inner">
        <a class="brand" href="{{ route('dashboard', ['username' => $username]) }}">{{ $username }}<span>.</span></a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-burger" aria-label="Buka menu">Menu</label>

        <nav class="nav-links">
            <a class="{{ $active === 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard', ['username' => $username]) }}">Beranda</a>
            <a class="{{ $active === 'pengelolaan' ? 'active' : '' }}" href="{{ route('pengelolaan', ['username' => $username]) }}">Proyek</a>
            <a class="{{ $active === 'profile' ? 'active' : '' }}" href="{{ route('profile', ['username' => $username]) }}">Profil</a>
            <a class="nav-out" href="{{ route('logout') }}">Keluar</a>
        </nav>
    </div>
</header>