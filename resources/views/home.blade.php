@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')


@section('content')
<section class="main-screen">
   <div class="main-screen__body">
      <div class="main-screen__description description-main-screen">
         <div class="description-main-screen__container">
            <div class="description-main-screen__body">
               <div class="description-main-screen__text text-main-screen">
                  <div class="text-main-screen__row">
                     <h1 class="text-main-screen__title">ПРОФЕССИОНАЛЬНОЕ И БЕЗБОЛЕЗНЕННОЕ <span>ЛЕЧЕНИЕ ЗУБОВ</span>
                     </h1>
                     <div class="text-main-screen__text">Проведу полную диагностику ротовой полости и выстроим
                        индивидуальный план лечения. Звоните и получите абсолютно бесплатную консультацию</div>
                  </div>
                  <div class="text-main-screen__buttons">
                     <a class="text-main-screen__call" href="tel:%2B0956664748">ПОЗВОНИТЬ</a>
                     <a class="text-main-screen__service" href="#">УСЛУГИ</a>
                  </div>
               </div>
               <div class="description-main-screen__img">
                  <img src="{{asset('/img/home/ava.png')}}" alt="DR. TANYA RUBAN">
               </div>
            </div>
         </div>
         <img class="description-main-screen__bacgroud" src="{{asset('/img/home/background.jpg')}}"
            alt="Стоматологічний кабінет">
      </div>
      <div class="main-screen__cards cards-main-screen">
         <div class="main-screen__container ">
            <div class="cards-main-screen__card">
               <div class="cards-main-screen__number">15</div>
               <div class="cards-main-screen__text">Лет оказываю услуги по лечению зубов для взрослых и детей</div>
            </div>
            <div class="cards-main-screen__card">
               <div class="cards-main-screen__number">90%</div>
               <div class="cards-main-screen__text">Клиентов обращаются ко мне повторно</div>
            </div>
            <div class="cards-main-screen__card">
               <div class="cards-main-screen__number">12</div>
               <div class="cards-main-screen__text">месяцев гарантия на предоставляемые услуги</div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection