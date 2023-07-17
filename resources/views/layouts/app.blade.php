<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,700&family=Ubuntu:wght@700&display=swap"
    rel="stylesheet">

  <title>Ecoleta</title>

  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/create-point.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
    @yield('content')
</body>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/create-point.js') }}"></script>
</html>
