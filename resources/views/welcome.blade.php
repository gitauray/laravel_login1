<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/stickrun.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
            }

            .links > a {
                color: #636b6f;
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
    <body style="background-color: #ECF0F1 !important;background: tomato !important;">
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
                <div class="title m-b-md">
                    Lets Run!!!
                </div>

                <!--div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div-->
                <section class="world">
                  <div class="back one"></div>
                  <div class="back two"></div>
                  <div class="back three"></div>
                  <div class="back four"></div>
                  <div class="floor">
                    <div class="rock one"></div>
                    <div class="rock two"></div>
                    <div class="rock three"></div>
                    <div class="grass one"></div>
                    <div class="grass two"></div>
                    <div class="grass three"></div>
                    <div class="grass four"></div>
                    <div class="grass five"></div>
                    <div class="grass six"></div>
                    <div class="grass seven"></div>
                    <div class="grass height"></div>
                    <div class="grass nine"></div>
                    <div class="grass ten"></div>
                  </div>
                  <div class="cloud one"></div>
                  <div class="cloud two"></div>
                  <div class="cloud three"></div>
                  <div class="stick">
                    <div class="head"></div>
                    <div class="arm left">
                      <div class="bottom"></div>
                    </div>
                    <div class="arm right">
                      <div class="bottom"></div>
                    </div>
                    <div class="leg left">
                      <div class="bottom"></div>
                    </div>
                    <div class="leg right">
                      <div class="bottom"></div>
                    </div>
                  </div>
                </section>
            </div>
        </div>
    </body>
</html>
