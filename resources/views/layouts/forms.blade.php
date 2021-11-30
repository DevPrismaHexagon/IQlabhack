<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <div class="row p-4">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/logo.webp') }}" alt="" class="mx-auto">
            </div>
            <div class="col-md-8 d-flex justify-content-end align-items-center">
                <a href="" class="mx-2">Contact Us</a>
                <button class="mx-2 btn btn-primary">
                    Sign in
                </button>
                <a href="#" class="mx-2">EN</a>
            </div>
        </div>
    </header>
    
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="pt-5 pb-3">

        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <img src="{{ asset('images/footer.webp') }}" alt="" class="mx-auto">
                </div>

                <div class="col-md-3">
                    <ul>
                        <li><a href="#" class="link-light">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                    
                </div>

                <div class="col-md-3">
                    <ul>
                        <li><a href="#">Customer services</a></li>
                        <li><a href="#">FAQ’S</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <ul>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Political privacy</a></li>
                    </ul>
                </div>
            
            </div>

            <div class="row redes d-flex justify-content-between align-items-center">
                <p>©2021 IQ Lab Hacks. All rights reserved.</p>
                <ul>
                    <li><a href=""><img src="{{ asset('images/linkeind.svg') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('images/instagram.svg') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('images/facebook.svg') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('images/twitter.svg') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('images/pinterest.svg') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('images/tictok.svg') }}" alt=""></a></li>
                </ul>
            </div>

        </div>

    </footer>

</body>
</html>
