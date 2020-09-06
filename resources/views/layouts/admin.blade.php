<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        {{-- edgeに対応 --}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- スマートフォンに画面対応 --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- クロス・サイト・リクエスト・フォージェリ対応 --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- 各ページごとにtitleタグを入れるために@yieldで開けておく --}}
        <title>@yield('title')</title>
        {{-- Laravel標準JavaScriptを読み込む --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/423dea4db0.js" crossorigin="anonymous"></script>
        {{-- Fonts --}}
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        {{-- Sytles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- header --}}
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav ml-auto">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="#">チーム検索・一覧</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">チーム作成</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#">チーム検索・一覧</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">チーム作成</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
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
            {{-- content --}}
            <main class="py-4">
                @yield('content')
            </main>
            {{-- footer --}}
            <footer class="page-footer font-small indigo">
                <div class="container">
                    <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!">オリジナルチームを作成する</a>
                            </h6>
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!">自分に合ったチームを検索する</a>
                            </h6>
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!">お問い合わせ</a>
                            </h6>
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!">ログイン</a>
                            </h6>
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!">退会する</a>
                            </h6>
                        </div>
                    </div>
                    <hr class="rgba-white-light" style="margin: 0 15%;">
                    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                        <div class="col-md-8 col-12 mt-5">
                            <p style="line-height: 1.7rem">オリジナルフットサルチーム作りませんか
                                家族や友人と参加しよう！ガチ・エンジョイなどカテゴリー分けているので安心して参加できます。
                                ぜひ、このサイトを通して楽しんでくださいね！
                            </p>
                        </div>
                    </div>
                    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
                    <div class="row pb-3">
                        <div class="col-md-12">
                            <div class="mb-5 flex-center">
                                <a href="#">
                                    <i class="fab fa-facebook-f fa-lg white-text mr-4"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter fa-lg white-text mr-4"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g fa-lg white-text mr-4"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in fa-lg white-text mr-4"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram fa-lg white-text mr-4"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-pinterest fa-lg white-text"> </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="#">Create Team For Futsal</a>
                </div>
            </footer>
        </div>
    </body>
</html>
