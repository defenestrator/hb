<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heisenbeans</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #fff;
                background:#636b6f;
                font-family: 'Great Vibes', Helvetica, serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body {
                background-image: url('/i/heroic-colas.jpg');
                background-position: top left cover;
                text-shadow: #000 2px -2px 5px, #94ffa5 3px -3px 3px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight:100;
            }

            .links {
                font-family: 'Open Sans', sans-serif;
                color: black;
            }
            .links > a {
                color: #94ffa5;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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

            <div class="content">
                <div class="title m-b-md" style="background-image: ">
                    Heisenbeans
                </div>

                <div class="links">
                    <a href="#">Soon</a>
                </div>
            </div>
        </div>
    </body>
</html>
