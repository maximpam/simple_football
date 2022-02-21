@php
    /** @var \App\Models\NewsPosts $newsPosts */
@endphp

@extends('public.main.app')

@section('content')

<div class="news">
    <div class="news-head">
      <div class="line-shape"></div>
      <h2 class="news-head__title">Новости</h2>
      <ul class="news-head__nav">
        <li class="li news-head__category news-head__category--active">Все</li>
        <li class="li news-head__category">Чемпионат</li>
        <li class="li news-head__category">Команды</li>
        <li class="li news-head__category">Слухи</li>
      </ul>
    </div>

    <!-- /.news-head -->
        @foreach ($paginator as $newsPost)
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
            @if($paginator->total() > $paginator->count())
            <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{$paginator->links()}}
                    </div>
                </div>
            </div>
        </div>
        @endif
    <button class="button news__button">
      <span>Ещё новости</span>
    </button>

  </div>
  <!-- /.news -->
<<<<<<< HEAD
  <main class="mt-12 min-h-full">
</main>
=======
>>>>>>> 09c3754db7a0e29d9016db17a1f00babf1a66a35

@endsection
