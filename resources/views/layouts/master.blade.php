<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'E-lycée')
    </title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('fonts/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
    <div class="page">
        <header>
            <nav>
                @include('partials.nav')
            </nav>
        </header>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer>
            @section('footer')
                <nav>
                    @include('partials.footerNav')
                </nav>
                <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        </footer>
    </div>
</body>
</html>