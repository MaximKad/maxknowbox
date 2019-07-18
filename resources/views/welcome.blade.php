<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Интерактивный календарь iCalendar</title>
        <!-- Fonts -->
        <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      	<link href="/fonts/san-francisco/stylesheet.css" rel="stylesheet">
        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/islider_style.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="/js/jquery-1.12.4.js"></script>
        <script src="/js/anime.min.js"></script>
        <script src="/js/animate.js"></script>
    </head>
    <body>
      <header class="page-header">
        <div class="container">
          <div class="logo pull-left">
            <a href="/">
              <img src="/images/apple-logo.svg">
              <span class="logo-text">iCalendar</span>
            </a>
          </div>
          <nav class="menu-navigation pull-right">
            <ul class="navigation-inner">
              <li><a href="https://laravel.com/docs">Документация</a></li>
              <li><a href="https://laracasts.com">Laracasts</a></li>
              <li><a href="https://laravel-news.com">Новости</a></li>
              <li><a href="https://forge.laravel.com">Forge</a></li>
              <li><a href="https://github.com/laravel/laravel">GitHub</a></li>
              @if (Route::has('login'))
                  @if (Auth::check())
                      <li><a href="{{ url('/home') }}">Главная</a></li>
                  @else
                      <li><a href="{{ url('/login') }}">Войти</a></li>
                      <li><a href="{{ url('/register') }}">Зарегистрироваться</a></li>
                  @endif
              @endif
            </ul>
          </nav>
        </div>
        <div class="clearfix"></div>
      </header>
    </body>
</html>
