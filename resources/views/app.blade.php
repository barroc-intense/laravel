

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Barroc Intense</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function popUp() {
            document.getElementById("info").style.display = "none";
        }
    </script>
</head>
<body>
    <header>
        <div class="mainrecht">
            <div class="dropdown">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('inkoop.index') }}">Inkoop</a>
                    <a href="{{ route('customer.index') }}">Mijn gegevens</a>
                    @auth
                        <a href="{{ route('purachses.index') }}">Overzicht Prudocten</a>
                        @if (auth()->user()->role_id !== 1)
                            <a href="{{ route('leases.index') }}">Contract Aanmaken</a>
                        @endif
                    @endauth

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
{{--                        @if(Auth::check())--}}
{{--                            <p>test</p>--}}
{{--                        @endif--}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="redisplay: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </div>
            </div>
        </div>

            <img src="img/Logo.png" alt="">
        @auth
            <div class="mainlinks">
                <a href="{{ route('maintenance.index') }}">Storing</a>
            </div>
        @endauth
    </header>
    <main>
        @yield('content')

    </main>
    <footer>
        <div class="container">
            <div class="footerp">
                <p>5011AL</p>
                <p>Eccardstrat 51</p>
                <p>Tilburg</p>
            </div>
            <div class="footerimg">
                <img src="img/Logo.png" alt="">
            </div>
        </div>
        <div class="socialmedia">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </footer>
</body>
</html>
