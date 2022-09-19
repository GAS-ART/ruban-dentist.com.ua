@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')
@section('main', '_current-page-home')


@section('content')
<section class="main-screen">
   <div class="main-screen__body">
      <div class="main-screen__description description-main-screen">
         <div class="description-main-screen__container">
            <div class="description-main-screen__body">
               <div class="description-main-screen__text text-main-screen">
                  <div class="text-main-screen__row">
                     <h1 class="text-main-screen__title _animate">@lang('home.main_screen.title')</h1>
                     <div class="text-main-screen__text _animate">@lang('home.main_screen.text')</div>
                  </div>
                  <div class="text-main-screen__buttons _animate">
                     <a class="text-main-screen__call" href="tel:%2B0956664748">@lang('home.main_screen.call')</a>
                     <a class="text-main-screen__service" href="#service">@lang('home.main_screen.service')</a>
                  </div>
               </div>
               <div class="description-main-screen__img">
                  <img src="{{asset('/img/home/ava.png')}}" alt="DR. TANYA RUBAN">
               </div>
            </div>
         </div>
         <img class="description-main-screen__backgroud" src="{{asset('/img/home/background.jpg')}}"
            alt="@lang('home.main_screen.alt')">
      </div>
      <div class="main-screen__cards cards-main-screen">
         <div class="main-screen__container">
            <div class="cards-main-screen__card _animate">
               <div class="cards-main-screen__number">15</div>
               <div class="cards-main-screen__text">@lang('home.main_screen.card_1')</div>
            </div>
            <div class="cards-main-screen__card _animate">
               <div class="cards-main-screen__number">90%</div>
               <div class="cards-main-screen__text">@lang('home.main_screen.card_2')</div>
            </div>
            <div class="cards-main-screen__card _animate">
               <div class="cards-main-screen__number">12</div>
               <div class="cards-main-screen__text">@lang('home.main_screen.card_3')</div>
            </div>
         </div>
      </div>
   </div>
</section>
<span id="why-me"></span>
<section class="why-me">
   <div class="why-me__container">
      <h2 class="why-me__title">@lang('home.why_me.title')</h2>
      <div class="why-me__text">@lang('home.why_me.text')</div>
      <div class="why-me__advantages me-advantages">
         <div class="me-advantages__row">
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">01</div>
                  <div class="card-advantage__text">@lang('home.why_me.card.1_title')</div>
               </div>
               <div class="card-advantage__content">@lang('home.why_me.card.1_text')</div>
            </div>
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">02</div>
                  <div class="card-advantage__text">@lang('home.why_me.card.2_title')</div>
               </div>
               <div class="card-advantage__content">@lang('home.why_me.card.2_text')</div>
            </div>
         </div>
         <div class="me-advantages__row">
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">03</div>
                  <div class="card-advantage__text">@lang('home.why_me.card.3_title')</div>
               </div>
               <div class="card-advantage__content">@lang('home.why_me.card.3_text')</div>
            </div>
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">04</div>
                  <div class="card-advantage__text">@lang('home.why_me.card.4_title')</div>
               </div>
               <div class="card-advantage__content">@lang('home.why_me.card.4_text')</div>
            </div>
         </div>
         <div class="me-advantages__row">
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">05</div>
                  <div class="card-advantage__text">@lang('home.why_me.card.5_title')</div>
               </div>
               <div class="card-advantage__content">@lang('home.why_me.card.5_text')</div>
            </div>
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">06</div>
                  <div class="card-advantage__text">@lang('home.why_me.card.6_title')</div>
               </div>
               <div class="card-advantage__content">@lang('home.why_me.card.6_text')</div>
            </div>
         </div>
      </div>
   </div>
</section>
<span id="service"></span>
<section class="services">
   <div class="services__container">
      <h2 class="services__title">@lang('home.services.title')</h2>
      <div class="services__body _animate-tooth">
         <div class="services__content content-services">
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"> <a href="{{ route('therapeutic.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_1')</a></h3>
               <div class="content-services__text">@lang('home.services.service.text_1')</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="{{ route('surgery.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_2')</a></h3>
               <div class="content-services__text">@lang('home.services.service.text_2')</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="{{ route('cleaning.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_3')</a></h3>
               <div class="content-services__text">@lang('home.services.service.text_3')</div>
            </div>
         </div>
         <div class="services__img">
            <img src="{{asset('img/home/tooth.jpg')}}" alt="Здоровые зубы">
            <span class="_tooth _tooth-mobile">+</span>
            <span class="_tooth _tooth-mobile">+</span>
            <span class="_tooth _tooth-mobile">+</span>
            <span class="_tooth _tooth-mobile">+</span>
            <span class="_tooth _tooth-mobile">+</span>
            <span class="_tooth _tooth-mobile">+</span>
         </div>
         <div class="services__content content-services">
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="{{ route('prosthesis.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_4')</a></h3>
               <div class="content-services__text">@lang('home.services.service.text_4')</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="{{ route('pediatrician.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_5')</a></h3>
               <div class="content-services__text">@lang('home.services.service.text_5')</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="{{ route('plasmotherapy.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_6')</a></h3>
               <div class="content-services__text">@lang('home.services.service.text_6')</div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="consultation">
   <div class="consultation__container">
      <div class="consultation__body">
         <div class="consultation__item">
            <h2 class="consultation__title">@lang('home.consultation.title')</h2>
            <div class="consultation__text">@lang('home.consultation.text')</div>
            <button data-popup-id="lead" class="consultation__btn link-on-popup">@lang('home.consultation.btn')</button>
         </div>
      </div>
   </div>
</section>
<section class="images">
   <div class="images__container">
      <img src="{{asset('img/home/1.jpg')}}" alt="Протезирование зубов" class="images__img _animate">
      <img src="{{asset('img/home/2.jpg')}}" alt="Детский врач стоматолог" class="images__img _animate">
      <img src="{{asset('img/home/3.jpg')}}" alt="Профессиональная чистка зубов" class="images__img _animate">
   </div>
</section>
@endsection