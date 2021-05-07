<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body style = "background-color : rgb(178, 193, 243);">
<div style = "background-color : rgb(228, 229, 235);">
<h1 id="h11" style = "font-size:5vw; margin-left : 50px">Event</h1>
</div>
    <div class="container mt-4">
        @yield('header')
        <div class="row">
            @yield('main')
            @yield('sidebar')
        </div>
    </div>
</body>
</html>