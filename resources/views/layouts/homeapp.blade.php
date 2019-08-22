<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'HOME ABROAD') }}</title> --}}
    <title>HOME ABROAD</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    {{-- フェードイン --}}
    <script>
        $(function(){
            $('.nav-host').click(function() {
                $('.overray, .touroku').fadeIn();
            })
            //モーダルの外側か閉じるをクリックでモーダルを閉じる
            $('.overray, .close').click(function() {
                $('.overray, .touroku').fadeOut();
            })
        })
    </script>
    <script>
        $(function(){
            $('.nav-login').click(function() {
                $('.overray, .roguin').fadeIn();
            })
            //モーダルの外側か閉じるをクリックでモーダルを閉じる
            $('.overray, .close').click(function() {
                $('.overray, .roguin').fadeOut();
            })
           
        })
    </script>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ route('top') }}">
                <img src="{{asset('img/252efd0d-9165-4794-aedb-262ab092e3ce.png')}}" width="140px" height="140px" alt="">
                </a>
           
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            </a>
                            <a href="https://hikopro.com/homeabroad/" class="nav-link">HOME ABROADとは</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link nav-host" >ホストになる</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link nav-host" >新規登録</a>
                        </li>
                         @endif
                            <li class="nav-item">
                                <a class="nav-link nav-login">ログイン</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret nav-look-avatar">
                                    
                                <span><img src="{{asset(Auth::user()->avatar)}}" alt="" width="40px" height="40px"></span>
                                    
                                </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <a class="dropdown-item" href="/profile">
                                        {{ __('プロフィール') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @if($errors->count()>0)
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
    @yield('content')
    <footer>
        <div class="footer">
            <ul>
                <li><a href="https://hikopro.com/homeabroad/" target="_blank">HOMEABROADについて</a></li>
                <li><a href="https://hikopro.com/myportfolio/" target="_blank">開発者情報</a></li>
                <li><a href="https://hikopro.com/privacy-policy/" target="_blank">プライバシーポリシー</a></li>
                <li><a href="https://hikopro.com/contact/" target="_blank">お問い合わせ</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
