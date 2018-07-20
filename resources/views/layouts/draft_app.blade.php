<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','hoge') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="{{ secure_asset('js/list.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/post.css') }}" rel="stylesheet">
</head>
<body>
  <header class="global__header">
    <nav class="global__nav">
      <ul class="global__nav--main">
        <li><a href="/" class="global__logo"><i class="fas fa-arrow-circle-left"></i><span>戻る</span></a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li><a class="navbar-link" href="{{ route('login') }}">{{ __('ログイン') }}</a></li>
              <li><a class="navbar-link" href="{{ route('register') }}">{{ __('新規登録') }}</a></li>
          @else
              <li class = "nav-item fas"><a href="#"><i class="fas fa-share-alt fa-fw"></i><p>共有する</p></a></li>
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
  <div class="main">
    @if(Session::has('message'))
      <p id="session__message">{{ Session::get('message') }}</p>
    @endif
    @if ($errors->any())
      <div class="post__errors">
          <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    @yield('content')
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src=" {{ mix('js/app.js') }} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.19/marked.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.0/underscore-min.js"></script>
</body>
</html>
