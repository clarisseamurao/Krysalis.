<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krysalis</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="navbar">
    <div class="logo">KRYSALIS</div>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <h2>KRYSALIS</h2>
    <p>Websites built for businesses that want to grow.</p>
    <div class="footer-line"></div>
    <p>© 2026 Krysalis. All rights reserved.</p>
</footer>

</body>
</html>