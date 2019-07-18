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
      <link href="/css/timetable/timetablejs.css" rel="stylesheet">
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
      <div class="page-content">
        <div class="container padding15 padding-top-15">
          <div class="inner">
            <div class="page-title">
              <div class="panel panel-default width320 pull-left">
                <div class="panel">
                  <div class="category-create">
                    <input class="pull-left form-control category-name" name="category-name" id="category-title" placeholder="Название категории">
                    <button class="pull-right btn-sm">Добавить категорию</button>
                  </div>
                  <div class="clearfix"></div>
                  <div class="cards">
                    @foreach($categories as $category)
                      <div class="panel panel-default card">
                        <p>{{$category->name}}</p>
                        <div class="card-create">
                          <input class="pull-left form-control category-name" name="category-name" id="category-title" placeholder="Название карточки">
                          <button class="pull-right btn-sm">Добавить карточку</button>
                        </div>
                        <div class="clearfix"></div>
                        <br/>
                        @foreach($cards as $card)
                          @if($card->category_id == $category->id)
                            <div class="panel panel-default card">
                              @if($card->icon && $card->icon_url)
                                <img src="{{$card->icon_url}}" alt="{{$card->icon}}">
                              @endif
                              <p>{{$card->title}}</p>
                            </div>
                          @endif
                        @endforeach
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="panel panel-default calendar-timetable pull-right">
                <div class="timetable">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Scripts -->
      <script src="/js/jquery-1.12.4.js"></script>
      <script src="/js/anime.min.js"></script>
      <script src="/js/animate.js"></script>
      <script src="/js/syncscroll.js"></script>
      <script src="/js/timetable/timetable.js"></script>
      <script src="/js/timetable/timetable-plugin.js"></script>
      <script>
        var timetable = new Timetable();
        timetable.setScope(5, 23); // optional, only whole hours between 0 and 23
        timetable.addLocations(['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье']);
        var renderer = new Timetable.Renderer(timetable);
        renderer.draw('.timetable'); // any css selector
      </script>
    </body>
</html>
