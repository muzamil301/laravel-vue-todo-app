<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" id="header">
            <header-component></header-component>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div id="app">
                    <app-component></app-component>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer id="myFooter">
            <footer-component></footer-component>
        </footer>
        <!-- footer -->
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
