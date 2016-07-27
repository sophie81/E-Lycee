<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'E-lycée')
    </title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
</head>
<body class="mw960p mauto">
<header>
    <nav>
        @include('partials.nav')
    </nav>
</header>
<div class="main grid-2">
    <div class="content">
        @yield('content')
    </div>

    <div class="sidebar">
        <div class="fixed">
            @section('sidebar')

            @show
        </div>
    </div>
</div>
<footer>
    @section('footer')
        <nav>
            @include('partials.footerNav')
        </nav>
</footer>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>