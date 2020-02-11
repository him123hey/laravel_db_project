<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="sidenav">
                    <a href="\"><img src="image/logo-en.png" width="170"></a>
                    <hr>
                    <a href="students">Student Data</a>
                    <a href="post">Posts Data</a>
                    <a href="comments">Comment</a>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-10 text-center">
              <h2>WEP2020-A</h2>
              <p>Passerellesnumeriques Cambodia (PNC)</p>
              <p class="text-white">Passerelles numériques Cambodia was the 
                first project to be launched in 2005, in Phnom Penh.
                 PNC offers two IT training programs in System and Network 
                 Administration (SNA) and Web Programming (WEP), 
                 based on a holistic educative approach including technical and soft skills, 
                 and a personal development program.</p>
            </div>
          </div>
        </div>
    </body>
</html>
