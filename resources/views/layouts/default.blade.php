<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>@yield('pageTitle') | DC COMICS</title>
</head>
<body>
    
    {{-- header with nav partial and jumbotron partial --}}
    <div class="ms_mini-header"></div>
    
    @include('partials.navbar')

    <div class="ms_jumbotron">
        {{-- direct scss styling --}}
    </div>

    {{-- main in two sections --}}
    @yield('firstContent')
    @yield('secondContent')

    {{-- footer in two partials --}}
    @include('partials.footerBox1')
    @include('partials.footerBox2')

</body>
</html>