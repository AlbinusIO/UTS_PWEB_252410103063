<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Profil') | Website Profil</title>
    @include('partials.styles')
</head>
<body>
    @if (!empty($username))
        <x-navbar :username="$username" :active="$active ?? ''" />
    @endif

    @yield('hero')

    <main class="@yield('main_class', 'wrap page')">
        @yield('content')
    </main>

    @if (!empty($username))
    <x-footer />
    @endif
</body>
</html>