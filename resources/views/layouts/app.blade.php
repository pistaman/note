<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    @if(app('env') == 'local')
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/list.js') }}" defer></script>
    @else
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ secure_asset('js/list.js') }}" defer></script>
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- Styles -->
    @if(app('env') == 'local')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
        <link href="{{ asset('css/post.css') }}" rel="stylesheet">
    @else
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/register.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/post.css') }}" rel="stylesheet">
    @endif
</head>
<body>
  <header class="global__header">
    <nav class="global__nav">
      <ul class="global__nav--main">
        @guest
        <li><a href="/" class="global__logo">LOGO</a></li>
        @else
        <li><a href="/" class="global__logo">LOGO</a></li>
        @endguest
      </ul>
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li><a class="navbar-link" href="{{ route('login') }}">{{ __('ログイン') }}</a></li>
              <li><a class="navbar-link" href="{{ route('register') }}">{{ __('新規登録') }}</a></li>
          @else
              <li class = "nav-item fas"><a href="/draft"><i class="far fa-edit fa-fw"></i><p>投稿する</p></a></li>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('ログアウト') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </nav>
  </header>
  <div class="main__index">
    @yield('content')
  </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>
