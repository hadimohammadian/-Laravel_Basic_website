<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @yield('content')

    @section('sidebar')
    <div class="sidebar">
        <h3>Side Bar</h3>    
        <h5 style="color: red"> this is a sidebar in the layout</h5>
        @show
    </div>
  


</body>
</html>