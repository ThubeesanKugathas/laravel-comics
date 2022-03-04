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
    
    {{-- header with his part partial, nav partial and jumbotron --}}
    @include('partials.miniheader')    
    @include('partials.navbar')
    {{-- direct scss styling --}}
    <div class="ms_jumbotron"></div>

    {{-- main content --}}
    @yield('mainContent')

    {{-- footer in two partials --}}
    @include('partials.footerBox1')
    @include('partials.footerBox2')

</body>
</html>