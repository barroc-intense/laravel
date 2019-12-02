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
                    <a href="javascript:void(0)">Link 1</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    <a href="javascript:void(0)">Link 2</a>
                    <a href="javascript:void(0)">Link 3</a>
                </div>
            </div>
        </div>

            <img src="img/Logo.png" alt="">

        <div class="mainlinks">
            <a href="">Storing</a>
        </div>
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
