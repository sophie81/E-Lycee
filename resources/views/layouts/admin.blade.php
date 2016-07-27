<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'BlogPHP')
    </title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body class="mw960p mauto">
<header>
    <h1>BlogPHP</h1>
    <nav>

    </nav>
</header>
<div class="main">
    <div class="content">
        @yield('content')
    </div>
</div>
<footer>
    @section('footer')
        <p> Sophie RIVIERE - 2016</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{url('js/app.min.js')}}"></script>
</body>
</html>