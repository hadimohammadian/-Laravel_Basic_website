<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    @include('inc.nav')
    
    @if (Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="container">
        <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>

  
<footer id="footer" class="text-center">
    <p>
        <i class="fa fa-copyright" aria-hidden="true"> &copy 2020 Hadi</i>
    </p>
</footer>
</body>
</html>