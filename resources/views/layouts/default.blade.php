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
    
    <nav class="d-flex justify-between  align-items-center mx-auto">
        @include('partials.navbar')
    </nav>

    <div class="ms_jumbotron">
        {{-- direct scss styling --}}
    </div>

    <main>
        @yield('firstContent')
        @yield('secondContent')
    </main>

    <footer>
        @include('partials.footerBox1')
        @include('partials.footerBox2')
    </footer>

</body>
</html>