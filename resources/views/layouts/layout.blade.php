<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <title>FarmApp</title>
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li><img class="icone_navbar" src="{{asset('../img/intro5.png')}}" ></li>
                    <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div> <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        @yield('header')
        @yield('content')
    </div> <!-- /.container -->

    <script type="text/javascript">
        $(function(){
            $(".dropdown-toggle").click(function(){
                $(this).dropdown('toggle');
            });
        });
    </script>
    <script type="text/javascript" src=" {{asset('js/all.js')}}"></script>

    @yield('scripts')
</body>
</html>


