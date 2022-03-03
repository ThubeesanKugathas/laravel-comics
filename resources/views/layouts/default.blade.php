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
    <header>
        <nav class="d-flex justify-content-between align-items-center mx-auto">
            @include('partials.navbar')
        </nav>
    
        <div class="ms_jumbotron">
            {{-- direct scss styling --}}
        </div>
    </header>

    {{-- main in two sections --}}
    <main>
        @yield('firstContent')
        @yield('secondContent')
    </main>

    {{-- footer in two partials --}}
    <footer>
        @include('partials.footerBox1')
        @include('partials.footerBox2')
    </footer>

</body>
</html>