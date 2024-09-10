<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Simple Laravel Project')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <h1>@yield('header', 'Welcome to My Laravel App')</h1>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-center p-4">
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>
