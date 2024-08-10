<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Haven Project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('images/nav-logo.png') }}" alt="nav-logo">
             </div>
            <div class="nav-links">
                <a href="#">About Green Haven</a>
                <a href="#">Event Details</a>
                <a href="#">Our Sponsors</a>
                <a href="#">Leaderboard</a>
            </div>
            <button>Plant a Mangrove</button>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="footer-content">
            <h3 class="footer-copy">
                Nama yang Mengerjakan Test: Albet Surya Kembara
            </h3>
        </div>
    </footer>
</body>
</html>
