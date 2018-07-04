<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    @yield('content')
</div>
  {{--  @guest

    @else

    @endguest
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <div class="pull-left">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="pull-right">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="true">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse show" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')--}}

    </div>

    <!-- Scripts -->
    <script src="/js/core.js"></script>

</body>
</html>
