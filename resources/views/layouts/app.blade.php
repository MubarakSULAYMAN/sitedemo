<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>


        <title> Sitedemo </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    
    <body>

        <div class="container-fluid">
            @include('inc.topnav')

            <div class="container">

                @include('inc.messages')
                @yield('content')
            </div>

            @include('inc.footer')
        </div>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo asset('assets/js/jquery.js'); ?>"></script>

        <!-- <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <link rel="scripts" type="text/script" media="screen" href="/mix-manifest.json">
        <script src="{{ mix('js/app.js') }}"></script> -->

        <!-- <link rel="script" type="text/js" media="screen" href="/js/app.js">
        <script src="resources/assets/js/bootstrap.js"></script>
        <script src="resources/assets/js/app.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script> -->

    </body>
</html>