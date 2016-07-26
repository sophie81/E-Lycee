<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'E-lycée')
    </title>


</head>
<body class="mw960p mauto">
<header>
    <h1>E-lycée</h1>
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
        <p> Sophie RIVIERE - 2016</p>
</footer>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>