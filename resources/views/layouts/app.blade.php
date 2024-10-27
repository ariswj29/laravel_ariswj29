<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style> 
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #343a40;
            padding: 15px;
        }

        .sidebar a, .sidebar button {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            width: 100%;
            border: none;
            text-align: left;
            background-color: transparent;
        }

        .sidebar a:hover, .sidebar button:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar .navbar-brand {
            color: white;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <h2 class="text-white">Menu</h2>
            <a href="/home" class="d-block p-2">Beranda</a>
            <a href="/rumah-sakit" class="d-block p-2">Rumah Sakit</a>
            <a href="/pasien" class="d-block p-2">Pasien</a>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="d-block p-2">Logout</button>
            </form>
        </div>

        <div class="main-content flex-grow-1">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Sistem Manajemen Rumah Sakit</a>
            </nav>
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @yield('scripts')
</body>
</html>
