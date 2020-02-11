<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceTaxi - The Taxi to Space </title>
    <link rel="stylesheet" href="{{ url('css/mystyle.css') }}">
    @yield('style')
</head>
<body>
    @include('layouts.menu')

    <div class="container">
        @yield('content')
    </div>

    @yield('script')
</body>
</html>