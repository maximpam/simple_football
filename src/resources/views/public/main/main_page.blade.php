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
      <h2 class="news-head__title">????????</h2>
      <ul class="news-head__nav blog__nav">
        <li class="news-head__category news-head__category--active">??????</li>
        <li class="news-head__category">??????????????????</li>
        <li class="news-head__category">??????????????</li>
        <li class="news-head__category">??????????</li>
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
      <span>?????? ????????????</span>
    </a>

  </div>
  <!-- /.blog -->
  <div class="right">
    <div class="table matches">
      <div class="table-head matches-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title matches-head__title">?????????????????? ??????????</h3>
      </div>
      <table class="table-points matches-points">
        <thead class="table-points__head matches-points__head">
          <tr>
            <td>??????????</td>
            <td><span>??????????????</span></td>
            <td>????????</td>
            <td>??????????????</td>
          </tr>
        </thead>
        <tbody class="table-points__body matches-points__body">
          <tr>
            <td class="matches-points__tour" colspan="4">15-?? ??????. 22 ???????????? 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
            <td>
              <a href="#" class="table-match">2:0</a>
            </td>
            <td>
              <a href="#" class="table-club">?????????????????? 1925</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-?? ??????. 27 ???????????? 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
            <td>
              <a href="#" class="table-match">1:1</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-?? ??????. 26 ???????????? 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">?????? ??????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-?? ??????. 27 ???????????? 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
            <td>
              <a href="#" class="table-match">0:2</a>
            </td>
            <td>
              <a href="#" class="table-club">???????????? ????????</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">????????????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????-1</a>
            </td>
            <td>
              <a href="#" class="table-match">5:1</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-?? ??????. 28 ???????????? 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">??????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">????????????</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">??????</a>
            </td>
            <td>
              <a href="#" class="table-match">2:0</a>
            </td>
            <td>
              <a href="#" class="table-club">?????????????????? 1925</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
            <td>
              <a href="#" class="table-match">1:0</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">16-?? ??????. 29 ???????????? 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">0:1</a>
            </td>
            <td>
              <a href="#" class="table-club">????????</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="table-bottom matches-bottom">
        <button class="table-bottom__btn table-bottom__league matches-bottom__btn matches-bottom__league">
          <i class="far fa-futbol"></i>
          <span>??????</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full matches-bottom____btn matches-bottom____full">
          <i class="fas fa-chevron-right"></i>
          <span>?????? ??????????</span>
        </a>

      </div>
      <!-- /.matches-bottom -->

    </div>
    <!-- /.matches -->

    <div class="table matches">
      <div class="table-head matches-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title matches-head__title">?????????????????? ??????????</h3>
      </div>
      <table class="table-points matches-points">
        <thead class="table-points__head matches-points__head">
          <tr>
            <td>??????????</td>
            <td><span>??????????????</span></td>
            <td>????????</td>
            <td>??????????????</td>
          </tr>
        </thead>
        <tbody class="table-points__body matches-points__body">
          <tr>
            <td class="matches-points__tour" colspan="4">17-?? ??????. 03 ?????????????? 2021</td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">?????? ??????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">17-?? ??????. 04 ?????????????? 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">???????????? ????????</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">??????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????????</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">?????????????????? 1925</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">17-?? ??????. 05 ?????????????? 2021</td>
          </tr>
          <tr>
            <td>14:00</td>
            <td>
              <a href="#" class="table-club">????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????????</a>
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <a href="#" class="table-club">??????????????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">??????????????????</a>
            </td>
          </tr>
          <tr>
            <td class="matches-points__tour" colspan="4">17-?? ??????. 06 ?????????????? 2021</td>
          </tr>
          <tr>
            <td>19:30</td>
            <td>
              <a href="#" class="table-club">??????????-1</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">????????????????????</a>
            </td>
          <tr>
            <td class="matches-points__tour" colspan="4">18-?? ??????. 11 ?????????????? 2021</td>
          </tr>
          <tr>
            <td>--:--</td>
            <td>
              <a href="#" class="table-club">??????????????????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">????????????</a>
            </td>
          </tr>
          <tr>
            <td>--:--</td>
            <td>
              <a href="#" class="table-club">???????????? ????????</a>
            </td>
            <td>
              <a href="#" class="table-match">-:-</a>
            </td>
            <td>
              <a href="#" class="table-club">????????</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="table-bottom matches-bottom">
        <button class="table-bottom__btn table-bottom__league matches-bottom__btn matches-bottom__league">
          <i class="far fa-futbol"></i>
          <span>??????</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full matches-bottom____btn matches-bottom____full">
          <i class="fas fa-chevron-right"></i>
          <span>?????? ??????????</span>
        </a>

      </div>
      <!-- /.matches-bottom -->

    </div>
    <!-- /.matches -->


    <div class="table table--margin">
      <div class="table-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title">?????????????????? ??????????????</h3>
      </div>
      <div class="table-wrap">
        <table class="table-points">
          <thead class="table-points__head">
            <tr>
              <td>???</td>
              <td>??????????????</td>
              <td>??</td>
              <td>??</td>
            </tr>
          </thead>
          <tbody class="table-points__body">
            <tr>
              <td>1.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/23.png" alt="">
                <span>???????????? ????????</span>
              </td>
              <td>16</td>
              <td>41</td>
            </tr>
            <tr>
              <td>2.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/24.png" alt="">
                <span>????????????</span>
              </td>
              <td>16</td>
              <td>41</td>
            </tr>
            <tr>
              <td>3.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/1303.png" alt="">
                <span>??????????-1</span>
              </td>
              <td>16</td>
              <td>34</td>
            </tr>
            <tr>
              <td>4.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/219.png" alt="">
                <span>????????</span>
              </td>
              <td>16</td>
              <td>32</td>
            </tr>
            <tr>
              <td>5.</td>
              <td class="table-points__name">
                <img src="https://s.ill.in.ua/i/football/team/logo_sm/0x20/78.png" alt="">
                <span>??????????????</span>
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
          <span>??????</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full">
          <i class="fas fa-chevron-right"></i>
          <span>???????????? ??????????????</span>
        </a>

      </div>
      <!-- /.table-bottom -->
    </div>
    <!-- /.table -->

    <div class="table matches">
      <div class="table-head matches-head">
        <div class="line-shape"></div>
        <h3 class="title table-head__title matches-head__title">???????????? ??????????</h3>
      </div>

      <div class="table-player">
        <img src="https://s.ill.in.ua/i/people/0x166/33/33828.png" alt="" class="table-player__img">
        <a href="#" class="table-player__name">?????????? ????????????</a>
        <a href="#" class="table-player__club">??????????-1</a>
        <table>
          <tr>
            <td data-tooltip="???????????????????? ??????">??</td>
            <td>15</td>
            <td data-tooltip="?????????????? ????????">??</td>
            <td>12</td>
            <td data-tooltip="?????????????? ????????????????">??</td>
            <td>3</td>
          </tr>
        </table>
      </div>
      <!-- /.table-player -->

      <div class="table-bottom matches-bottom">
        <button class="table-bottom__btn table-bottom__league matches-bottom__btn matches-bottom__league">
          <i class="far fa-futbol"></i>
          <span>??????</span>
        </button>
        <a href="#" class="table-bottom__btn table-bottom__full matches-bottom____btn matches-bottom____full">
          <i class="fas fa-chevron-right"></i>
          <span>?????? ????????????</span>
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
