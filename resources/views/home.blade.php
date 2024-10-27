<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link ke CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link ke CSS Custom -->
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

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .sidebar button {
            color: white;
            text-decoration: none;
            background-color: transparent;
            width: 100%;
            border: none;
            text-align: left;
        }

        .sidebar button:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar .navbar-brand {
            color: white;
        }

        .welcome-message {
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
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

        <!-- Main Content -->
        <div class="main-content flex-grow-1">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Sistem Manajemen Rumah Sakit</a>
            </nav>
            <div class="container">
                <h1 class="welcome-message">Selamat datang, {{ Auth::user()->username }}!</h1>
                <p>Ini adalah halaman utama setelah login. Silakan pilih menu di sidebar.</p>
            </div>
        </div>
    </div>

    <!-- Link ke JS Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
