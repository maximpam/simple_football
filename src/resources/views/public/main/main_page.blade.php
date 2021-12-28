@php
    /** @var \App\Models\NewsPosts $newsPosts */
@endphp

@extends('public.main.app')

@section('content')
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

    <div data-aos="fade-up" class="news-card">
      <div class="news-card__top">
        <div class="background-news"></div>
        <img src="https://www.soccer.ru/sites/default/files/styles/new_desine_465_310_webp/public/blogs/records/999_2.jpg?itok=FlM0gr5N" alt="">
        <div class="news-card__top-wrap">
          <div class="news-card__category"><span>Блог</span></div>
          <a href="#" class="news-card__date">
            <span>29 ноября 2021</span>
            <span>- 10 минут назад</span>
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
          <h3 class="title news-card__title">Трансферная лихорадка</h3>
        </a>
        <p class="news-card__text">Блог об одном из самых захватывающих явлений футбольного мира - о трансферах! Состоявшихся и потенциальных, больших и
        маленьких, удачных и провальных.</p>
      </div>
      <!-- /.news-card__news -->
      <div class="news-card__bottom">
        <a href="#" class="news-card__autor">
          <img src="img/news/test.jpg" alt="">
          <span>Иван Иванов</span>
        </a>
        <a href="#" class="news-card__share"><i class="fas fa-share-alt"></i></a>
      </div>
    </div>
    <!-- /.news-card -->

    <div data-aos="fade-up" class="news-card">
      <div class="news-card__top">
        <div class="background-news"></div>
        <img src="https://www.soccer.ru/sites/default/files/styles/new_desine_465_310_webp/public/blogs/records/nd3_50i7275_thumb7.jpg?itok=_wM-ODYe" alt="">
        <div class="news-card__top-wrap">
          <div class="news-card__category"><span>Блог</span></div>
          <a href="#" class="news-card__date">
            <span>29 ноября 2021</span>
            <span>- 10 минут назад</span>
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
          <h3 class="title news-card__title">Командный дух</h3>
        </a>
        <p class="news-card__text">Стремясь к победам, тренеры объединяют индивидуальные таланты в командную силу, а менеджеры выстраивают вертикаль
        власти. О достижениях и неудачах команд и клубов - в самом коллективном блоге «Командный дух»!</p>
      </div>
      <!-- /.news-card__news -->
      <div class="news-card__bottom">
        <a href="#" class="news-card__autor">
          <img src="img/news/test.jpg" alt="">
          <span>Иван Иванов</span>
        </a>
        <a href="#" class="news-card__share"><i class="fas fa-share-alt"></i></a>
      </div>
    </div>
    <!-- /.news-card -->

    <a href="blog.html" class="button news__button">
      <span>Все статьи</span>
    </a>

  </div>
  <!-- /.blog -->



  @endsection
