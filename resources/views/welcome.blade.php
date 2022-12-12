<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Predial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                <div class="title m-b-md">
                     Predial Sombrerete
                </div>

                <div class="links">
                    @can('Iniciar')
                    <a href="/contribuyentes/create" class="btn btn-primary">Pagar Predial</a>
                    <a href="/paybills/create" class="btn btn-primary">Subir Comprobante</a>
                    <a href="/discounts/create" class="btn btn-primary">Solicitar Descuento</a>
                    <a href="/indexdescarga" class="btn btn-primary">Descargar Comprobante Digital</a>
                    <a href="https://forms.gle/Am3wENareG3K26jv9" class="btn btn-primary">Encuesta</a>
                    @endcan
                    
                   @can('UserIndex')
                     <a href="/user" class="btn btn-primary">Lista de usuarios</a>
                   @endcan
    
                   <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(295550)</script>

                </div>
            </div>
        </div>
    </body>
</html>
