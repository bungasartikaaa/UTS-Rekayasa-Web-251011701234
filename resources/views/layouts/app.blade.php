<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GreenGoods - @yield('title', 'Katalog Produk Ramah Lingkungan')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f9f5;
            color: #26352b;
        }

        .navbar {
            background-color: #214e34;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .text-green {
            color: #214e34;
        }

        .btn-green {
            background-color: #214e34;
            color: white;
        }

        .btn-green:hover {
            background-color: #173b27;
            color: white;
        }

        footer {
            background-color: #214e34;
            color: white;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    @include('partials.header')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>