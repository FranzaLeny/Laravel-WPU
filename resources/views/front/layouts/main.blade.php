<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/vendor/bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="vendor/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
    <link rel="stylesheet" href="my-assets/css/style.css">
    <title>{{ $title }} | FXIL</title>
</head>

<body class="bg-info bg-gradient" style="--bs-bg-opacity: .02;">
    @include('front.layouts.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/vendor/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
