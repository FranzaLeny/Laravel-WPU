<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Franza Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="vendor/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> --}}
    <link rel="stylesheet" href="my-assets/css/style.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    @yield('css')
</head>

<body>
    @include('dashboard.layouts.header')


    <div class="container-fluid">
        <div class="row">

            @include('dashboard.layouts.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('container')

            </main>
        </div>
    </div>


    <script src="/vendor/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="/js/dashboard.js"></script>
</body>

</html>
