<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('dashboard/vendor/feather-icons-web/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    @yield('head')
</head>

<body>
    <section class="main container-fluid">
        <div class="row">
            <!-- sidebar start -->

            @include('dashboard/sidebar')

            <!-- sidebar end -->
            <div class="col-12 col-lg-9 col-xl-10 vh-100 content">
                @include('dashboard/header')
                <!-- content area stat -->
                @yield('content')

                <!-- content area end -->
            </div>

        </div>
    </section>
    <script src="{{ asset('dashboard/vendor/jquery-3.5.1.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="{{ asset('dashboard/vendor/way_point/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/counter_up/counter_up.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/chart_js/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>
    @yield('foot')
</body>

</html>
