@php
    /** @var \App\Models\NewsPosts $newsPosts */
@endphp

@extends('public.main.app')

@section('content')
<section class="home">
<div class="home-wrapper">
<div class="news">
    <div class="news-head">
      <div class="line-shape"></div>
      <h2 class="news-head__title">featured news</h2>
      <ul class="news-head__nav">
        <li class="news-head__category news-head__category--active">All</li>
        <li class="news-head__category">league</li>
        <li class="news-head__category">team</li>
      </ul>
    </div>

    <!-- /.news-head -->
    <div class="swiper mySwiper3 news-swiper">
      <div class="news-swiper__pagination-wrap">
        <button class="news-swiper__btn news-swiper__prev"><i class="fas fa-angle-left"></i></button>
        <button class="news-swiper__btn news-swiper__next"><i class="fas fa-angle-right"></i></button>
      </div>
      <div class="swiper-wrapper news-swiper__wrapper">
        <div class="swiper-slide news-swiper__slide">

          <div class="background-news"></div>
          <img src="{{ asset('img/news/test.jpg') }}" alt="">
          <span class="news-swiper__category">Rumors</span>

          <div class="news-swiper__wrap">
            <a href="#" class="news-swiper__date">
              <span>25 April 2018</span>
              <span>- 10 Minutes Read Time</span>
            </a>
            <a href="#" class="news-swiper__link">
              <h3 class="title news-swiper__title">Football transfer gossip gossip
              transfer gossip Football transfer
              gossip Football</h3>
            </a>
          </div>

        </div>
        <div class="swiper-slide news-swiper__slide">

          <div class="background-news"></div>
          <img src="{{ asset('img/news/test.jpg') }}" alt="">
          <span class="news-swiper__category">Rumors</span>

          <div class="news-swiper__wrap">
            <a href="#" class="news-swiper__date">
              <span>25 April 2018</span>
              <span>- 10 Minutes Read Time</span>
            </a>
            <a href="#" class="news-swiper__link">
              <h3 class="title news-swiper__title">Football transfer gossip gossip
                transfer gossip Football transfer
                gossip Football</h3>
            </a>
          </div>

        </div>
        <div class="swiper-slide news-swiper__slide">

          <div class="background-news"></div>
          <img src="{{ asset('img/news/test.jpg') }}" alt="">
          <span class="news-swiper__category">Rumors</span>

          <div class="news-swiper__wrap">
            <a href="#" class="news-swiper__date">
              <span>25 April 2018</span>
              <span>- 10 Minutes Read Time</span>
            </a>
            <a href="#" class="news-swiper__link">
              <h3 class="title news-swiper__title">Football transfer gossip gossip
                transfer gossip Football transfer
                gossip Football</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.news-swiper -->
@foreach ($newsPosts as $newsPost)
    <div class="news-card">
      <div class="news-card__top">
        <div class="background-news"></div>
        <img src="{{$newsPost->cover_url}}" alt="">
        <div class="news-card__top-wrap">
          <div class="news-card__category"><span>Rumors</span></div>
          <a href="#" class="news-card__date">
            <span>25 April 2018</span>
            <span>- 10 Minutes Read Time</span>
          </a>
          <div class="news-card__reviews">
            <button class="news-card__reviews-btn"><i class="far fa-comments"></i></button>
            <span>10</span>
            <button class="news-card__reviews-btn"><i class="far fa-heart"></i></button>
            <span>15</span>
          </div>
        </div>
      </div>
      <!-- /.news-card__top -->
      <div class="news-card__news">
        <a href="#" class="news-card__link">
          <h3 class="title news-card__title">{{$newsPost->title}}</h3>
        </a>
        <p class="news-card__text">{{$newsPost->description}}</p>
      </div>
      <!-- /.news-card__news -->
      <div class="news-card__bottom">
        <a href="#" class="news-card__autor">
          <img src="{{ asset('img/news/test.jpg') }}" alt="">
          <span>Maria Marlin</span>
        </a>
        <a href="#" class="news-card__share"><i class="fas fa-share-alt"></i></a>
      </div>
    </div>
    <!-- /.news-card -->
@endforeach

    <a href="#" class="news__button">
      <span>all news</span>
    </a>

  </div>
  <!-- /.news -->



  <div class="blog">
    <div class="news-head">
      <div class="line-shape"></div>
      <h2 class="news-head__title">Блог</h2>
      <ul class="news-head__nav blog__nav">
        <li class="news-head__category news-head__category--active">Все</li>
        <li class="news-head__category">Чемпионат</li>
        <li class="news-head__category">Команды</li>
        <li class="news-head__category">Слухи</li>
      </ul>
    </div>




    @foreach ($blogPosts as $blogPost)
    <div class="news-card">
      <div class="news-card__top">
        <div class="background-news"></div>
        <img src="{{$blogPost->cover_url}}" alt="">
        <div class="news-card__top-wrap">
          <div class="news-card__category"><span>Rumors</span></div>
          <a href="#" class="news-card__date">
            <span>25 April 2018</span>
            <span>- 10 Minutes Read Time</span>
          </a>
          <div class="news-card__reviews">
            <button class="news-card__reviews-btn"><i class="far fa-comments"></i></button>
            <span>10</span>
            <button class="news-card__reviews-btn"><i class="far fa-heart"></i></button>
            <span>15</span>
          </div>
        </div>
      </div>
      <!-- /.news-card__top -->
      <div class="news-card__news">
        <a href="#" class="news-card__link">
          <h3 class="title news-card__title">{{$blogPost->title}}</h3>
        </a>
        <p class="news-card__text">{{$blogPost->description}}</p>
      </div>
      <!-- /.news-card__news -->
      <div class="news-card__bottom">
        <a href="#" class="news-card__autor">
          <img src="{{ asset('img/news/test.jpg') }}" alt="">
          <span>Maria Marlin</span>
        </a>
        <a href="#" class="news-card__share"><i class="fas fa-share-alt"></i></a>
      </div>
    </div>
    <!-- /.news-card -->
@endforeach

    <a href="blog.html" class="button news__button">
      <span>Все статьи</span>
    </a>

  </div>
  <!-- /.blog -->
  <div class="right">
    <div class="table matches">
      <div class="table-head matches-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title matches-head__title">Последние матчи</h3>
      </div>
      <table class="table-points matches-points">
        <thead class="table-points__head matches-points__head">
          <tr>
            <td>Время</td>
            <td><span>Команда</span></td>
            <td>Счёт</td>
            <td>Команда</td>
          </tr>
        </thead>
        <tbody class="table-points__body matches-points__body">
          <tr>
            <td class="matches-points__tour" colspan="4">15-й тур. 22 ноября 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Верес</a>
            </td>
            <td>
              <a href="#" class="table-match">2:0</a>
            </td>
            <td>
              <a href="#" class="table-club">Металлист 1925</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-й тур. 27 ноября 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">Минай</a>
            </td>
            <td>
              <a href="#" class="table-match">1:1</a>
            </td>
            <td>
              <a href="#" class="table-club">Колос</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-й тур. 26 ноября 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Мариуполь</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">ПФК Львов</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-й тур. 27 ноября 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">Минай</a>
            </td>
            <td>
              <a href="#" class="table-match">0:2</a>
            </td>
            <td>
              <a href="#" class="table-club">Динамо Киев</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">Черноморец</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">Десна</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Днепр-1</a>
            </td>
            <td>
              <a href="#" class="table-match">5:1</a>
            </td>
            <td>
              <a href="#" class="table-club">Ворскла</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-й тур. 28 ноября 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">Ингулец</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">Шахтер</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">Рух</a>
            </td>
            <td>
              <a href="#" class="table-match">2:0</a>
            </td>
            <td>
              <a href="#" class="table-club">Металлист 1925</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Колос</a>
            </td>
            <td>
              <a href="#" class="table-match">1:0</a>
            </td>
            <td>
              <a href="#" class="table-club">Верес</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-й тур. 29 ноября 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Александрия</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">Заря</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="table-bottom matches-bottom">
        <button class="table-bottom__btn table-bottom__league matches-bottom__btn matches-bottom__league">
          <i class="far fa-futbol"></i>
          <span>УПЛ</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full matches-bottom____btn matches-bottom____full">
          <i class="fas fa-chevron-right"></i>
          <span>Все матчи</span>
        </a>

      </div>
      <!-- /.matches-bottom -->

    </div>
    <!-- /.matches -->

    <div class="table matches">
      <div class="table-head matches-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title matches-head__title">следующие матчи</h3>
      </div>
      <table class="table-points matches-points">
        <thead class="table-points__head matches-points__head">
          <tr>
            <td>Время</td>
            <td><span>Команда</span></td>
            <td>Счёт</td>
            <td>Команда</td>
          </tr>
        </thead>
        <tbody class="table-points__body matches-points__body">
          <tr>
            <td class="matches-points__tour" colspan="4">17-й тур. 03 декабря 2021</td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">Шахтер</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">ПФК Львов</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">17-й тур. 04 декабря 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">Верес</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Динамо Киев</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">Рух</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Ворскла</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Металлист 1925</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Колос</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">17-й тур. 05 декабря 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">Заря</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Ингулец</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">Александрия</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Минай</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Десна</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Мариуполь</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">17-й тур. 06 декабря 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">Днепр-1</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Черноморец</a>
            </td>
          <tr>
            <td class="matches-points__tour" colspan="4">18-й тур. 11 декабря 2021</td>
          </tr>
          <tr>
            <td>--:--</td>
            <td>
              <a href="#" class="table-club">Александрия</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Шахтер</a>
            </td>
          </tr>
          <tr>
            <td>--:--</td>
            <td>
              <a href="#" class="table-club">Динамо Киев</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">Заря</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="table-bottom matches-bottom">
        <button class="table-bottom__btn table-bottom__league matches-bottom__btn matches-bottom__league">
          <i class="far fa-futbol"></i>
          <span>УПЛ</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full matches-bottom____btn matches-bottom____full">
          <i class="fas fa-chevron-right"></i>
          <span>Все матчи</span>
        </a>

      </div>
      <!-- /.matches-bottom -->

    </div>
    <!-- /.matches -->


    <div class="table table--margin">
      <div class="table-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title">Турнирная таблица</h3>
      </div>
      <div class="table-wrap">
        <table class="table-points">
          <thead class="table-points__head">
            <tr>
              <td>№</td>
              <td>Команда</td>
              <td>И</td>
              <td>О</td>
            </tr>
          </thead>
          <tbody class="table-points__body">
            <tr>
              <td>1.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/23.png" alt="">
                <span>Динамо Киев</span>
              </td>
              <td>16</td>
              <td>41</td>
            </tr>
            <tr>
              <td>2.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/24.png" alt="">
                <span>Шахтер</span>
              </td>
              <td>16</td>
              <td>41</td>
            </tr>
            <tr>
              <td>3.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/1303.png" alt="">
                <span>Днепр-1</span>
              </td>
              <td>16</td>
              <td>34</td>
            </tr>
            <tr>
              <td>4.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/219.png" alt="">
                <span>Заря</span>
              </td>
              <td>16</td>
              <td>32</td>
            </tr>
            <tr>
              <td>5.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/78.png" alt="">
                <span>Ворскла</span>
              </td>
              <td>16</td>
              <td>31</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.table-wrap -->
      <div class="table-bottom">
        <button class="table-bottom__btn table-bottom__league">
          <i class="far fa-futbol"></i>
          <span>УПЛ</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full">
          <i class="fas fa-chevron-right"></i>
          <span>Полная таблица</span>
        </a>

      </div>
      <!-- /.table-bottom -->
    </div>
    <!-- /.table -->

    <div class="table matches">
      <div class="table-head matches-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title matches-head__title">Лучший игрок</h3>
      </div>

      <div class="table-player">
        <img src="https://s.ill.in.ua/i/people/0x166/33/33828.png" alt="" class="table-player__img">
        <a href="#" class="table-player__name">Артем Довбик</a>
        <a href="#" class="table-player__club">Днепр-1</a>
        <table>
          <tr>
            <td data-tooltip="количество игр">И</td>
            <td>15</td>
            <td data-tooltip="забитые голы">Г</td>
            <td>12</td>
            <td data-tooltip="голевые передачи">П</td>
            <td>3</td>
          </tr>
        </table>
      </div>
      <!-- /.table-player -->

      <div class="table-bottom matches-bottom">
        <button class="table-bottom__btn table-bottom__league matches-bottom__btn matches-bottom__league">
          <i class="far fa-futbol"></i>
          <span>УПЛ</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full matches-bottom____btn matches-bottom____full">
          <i class="fas fa-chevron-right"></i>
          <span>Все игроки</span>
        </a>

      </div>
      <!-- /.matches-bottom -->

    </div>
    <!-- /.matches -->
  </div>
  <!-- /.right -->

</div>
<!-- /.home-wrapper -->

  @endsection
