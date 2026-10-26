<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Maria Angela M. Catangay POS' }}</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f4f7fb; color: #1f2937; }
        nav { background: #12355b; padding: 16px 8%; display: flex; gap: 22px; align-items: center; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #facc15; }
        .brand { margin-right: auto; font-size: 20px; }
        main { width: 84%; max-width: 1100px; margin: 40px auto; }
        .hero, .card { background: white; border-radius: 12px; padding: 32px; box-shadow: 0 4px 14px rgba(0,0,0,.08); }
        h1 { color: #12355b; margin-top: 0; }
        h2 { color: #12355b; }
        .button { display: inline-block; background: #12355b; color: white; padding: 11px 18px; border-radius: 6px; text-decoration: none; margin-top: 12px; }
        .button:hover { background: #1e5a91; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 10px; overflow: hidden; }
        th, td { padding: 14px; border-bottom: 1px solid #dbe3ec; text-align: left; }
        th { background: #12355b; color: white; }
        tr:nth-child(even) { background: #f8fafc; }
        footer { text-align: center; color: #64748b; padding: 20px; }
    </style>
</head>
<body>
    <nav>
        <a class="brand" href="{{ route('home') }}">Maria Angela M. Catangay POS</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('users.index') }}">Users</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>Laravel POS Foundations &copy; {{ date('Y') }}</footer>
</body>
</html>
