<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Umbrella Corporation</title>
    <link rel="shortcut icon" href="/UC/public/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/UC/public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/UC/public/css/style.css">

</head>

<body>
    <!-- Menu sadaļas sākums -->
    @include('inc.navbar')
    <!-- Menu sadaļas beigas -->


    <div class="container">
        <!-- Ja tiek izsaukta sākuma lapa, tad tiek ievietots jumbotron -->
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <!-- Jumbotron izsaukuma sadaļas beigas -->

        <!-- Content sadaļas sākums -->
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
        <!-- Content sadaļas beigas -->
    </div>
    <!-- Karuseļa sadaļas sākums -->
    @if(Request::is('/'))
         @include('inc.carousel')
    @endif
    <!-- Karuseļa sadaļas beigas -->

    <!-- Footer sadaļas beigas -->
        @include('inc.footer')
    <!-- Footer sadaļas beigas -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>