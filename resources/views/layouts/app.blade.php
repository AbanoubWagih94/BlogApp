<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Blog</title>
        <link rel="icon" type="image/ico" href="{{ url('blog.png') }}" sizes="96*96">
        <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
              integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    </head>
    <body>
        <div id="wrapper">
            @include('layouts.nav')
            <div class="container">
                @yield('content')
            </div>
        </div>

        <script src="{{ url('bootstrap/js/jquery-3.3.1.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>