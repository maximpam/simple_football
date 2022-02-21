<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Главная страница</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @livewireStyles

  <script src="https://kit.fontawesome.com/0639a1d61b.js" crossorigin="anonymous"></script>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header-wrapper">
        <div class="header-top">
          <a href="" class="header__logo">
            <img src="{{ asset('img/logo/logo.png') }}" alt="Logo">
          </a>
          <div class="header-top__recent">
            <a href="#" class="header-top__recent-btn">
              <img src="{{ asset('img/icon/header/recent.png') }}" alt="">
            </a>
            <a href="" class="header-top__recent-news">
              <h4>Ronaldo and Real Madrid power up in time for PSG</h4>
            </a>
          </div>
          <!-- /.header-top__left -->
          <div class="header-top__nav">
        @guest
            <a href="{{ route('login') }}" class="link header-top__link">
              Login
            </a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="link header-top__link">
              Register
            </a>
            @endif
         @else
         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img src="https://vorushilo.ru/sport/img/news/test.jpg" width="10px" height="20px">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endguest
            <div class="header-top__dropdown">
              <button class="header-top__dropbtn">RU
              </button>
              <div class="header-top__list">
                <a class="header-top__current" href="#">RU</a>
                <a href="#">UA</a>
              </div>
            </div>
          </div>
          <!-- /.header-top__nav -->
          <div class="menu header-menu">
            <button class="menu-button menu-start menu-line header-menu__button header-menu__line">
              <span>меню</span>
            </button>
          </div>
          <!-- /.header-top__menu -->
          <div class="background-top"></div>
        </div>
        <!-- /.header-top -->

        <div class="header-bottom">
          <nav class="header-nav">
            <ul class="header-nav__list">
              <li class="header-nav__item">
                <a href="#" class="link active-link header-nav__link header-nav__link--this">Home</a>
              </li>
              <li class="header-nav__item">
                <a href="#" class="link header-nav__link">Club</a>
              </li>
              <li class="header-nav__item">
                <a href="#" class="link header-nav__link">Match</a>
              </li>
            </ul>
            <!-- /.header-nav__list -->
          </nav>
          <!-- /.header__nav -->

          <div class="header__social">
            <a href="" class="header__solial-link"><img src="" alt="">
              <i class="fab fa-telegram-plane"></i>
            </a>
            <a href="" class="header__solial-link"><img src="" alt="">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
          <!-- /.header__social -->
          <div class="background-bottom"></div>
        </div>
        <!-- /.header-bottom -->

      </div>
      <!-- /.header-wrapper -->
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->
  <div class="header-x"></div>
  <div class="background-mobile"></div>

  <main class="main">
    <section class="top-slider">
      <div class="container">
        <div class="top-slider__wrapper">
          <div class="top-slider__pagination">
            <div class="top-slider__pagination-wrap">
              <button class="top-slider__btn top-slider__prev"><i class="fas fa-angle-left"></i></button>
              <button class="top-slider__btn top-slider__next"><i class="fas fa-angle-right"></i></button>
            </div>
          </div>
          <div class="swiper mySwiper2 top-slider__top">
            <div class="swiper-wrapper top-slider__swiper-wrapper">
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>- 10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>- 10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>- 10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>- 10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>- 10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
            </div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper top-slider__bottom">
            <div class="swiper-wrapper top-slider__swiper-wrapper">
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                  this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
              <div class="swiper-slide top-slider__slide">
                <a href="#" class="top-slider__category">World Cup</a>
                <a href="#" class="top-slider__date">
                  <span>25 December 2018</span>
                  <span>10 Minutes Read Time</span>
                </a>
                <a href="#" class="top-slider__link">
                  <h3 class="title top-slider__title">Football transfer gossip for
                    this new year</h3>
                </a>
                <a href="#" class="top-slider__autor">
                  <span>Maria Marlin</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.top-slider__wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.top-slider -->

    <section class="home">
      <div class="container">

            <!-- Start CONTENT -->
            @yield('content')
             <!-- End CONTENT -->


      </div>
    </section>
    <!-- /.home -->
  </main>
  <!-- /.main -->
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-top__wrapper">
          <h5 class="title footer-top__title">Подпишитесь для получения обновлений</h5>
          <form action="send.php" method="POST" class="footer-top__form">
            <input id="form-mail" type="mail" class="footer-top__subscribe" placeholder="Введите свой почтовый адрес ..." name="mail"
              required minlength="4">
            <button class="button footer-top__btn">Подписаться</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.footer-top -->
    <div class="footer-main">
      <div class="container">
        <div class="footer-main__wrapper">
          <div class="footer-main__about">
            <a href="#" class="footer-main__title">
              <h3>Футбольные<span>Новости</span></h3>
            </a>
            <p class="footer-main__text" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua.</p>
          </div>
          <!-- /.footer-main__about -->
          <div class="footer-main__nav">
            <div class="footer-main__head">
              <div class="line-shape"></div>
              <h3>Навигация</h3>
            </div>
            <nav>
              <ul>
                <li>
                  <a href="index.html">Главная</a>
                </li>
                <li>
                  <a href="news.html">Новости</a>
                </li>
                <li>
                  <a href="blog.html">Блог</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- /.footer-main__nav -->
          <div class="footer-main__social">
            <div class="footer-main__head">
              <div class="line-shape"></div>
              <h3>Контакты</h3>
            </div>
            <ul>
              <li >
                <a id="telegram" href="#">
                  <i class="fab fa-telegram-plane" aria-hidden="true"></i>
                </a>
              </li>
              <li >
                <a id="instagram" href="#">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li >
                <a id="gmail" href="#">
                  <i class="fas fa-envelope"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.footer-main__social -->
        </div>
        <!-- /.footer-main__wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.footer-main -->
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom__wrapper">
          <span>Copyright @ 2018, SoccersPres. All Right Reserved</span>
          <span>Design by CodePassenger</span>
        </div>
      </div>
    </div>
    <!-- /.footer-bottom -->
  </footer>
  <!-- /.footer -->

  <a href="#" class="up"><i class="fas fa-arrow-up"></i></a>

  <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  @livewireScripts

</body>
</html>
