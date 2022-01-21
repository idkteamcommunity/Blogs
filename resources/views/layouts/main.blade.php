<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>{{ $title }}</title>
</head>

<body>
    @include('navbar.navbar')

    @yield('content')

    <div class="container-fluid border">
        <footer class="container">
            <small>&copy; Copyright {{ date('Y') }} | IDK Team</small>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="{{ $active === 'posts' ? 'JS/filter.js' : '' }}"></script>
    <script src="JS/request.js"></script>
    <script src="JS/script.js"></script>

</body>

</html>
