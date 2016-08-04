<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'E-Lycée Administration')
    </title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="page">
        <header>
            <nav>
                @include('partials.adminNav')
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
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="{{url('js/app.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
    </div>
</body>
</html>