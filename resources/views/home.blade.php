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
                     <h1 class="text-main-screen__title _animate">ПРОФЕССИОНАЛЬНОЕ И БЕЗБОЛЕЗНЕННОЕ <span>ЛЕЧЕНИЕ
                           ЗУБОВ</span>
                     </h1>
                     <div class="text-main-screen__text _animate">Проведу полную диагностику ротовой полости и выстроим
                        индивидуальный план лечения. Звоните и получите абсолютно бесплатную консультацию</div>
                  </div>
                  <div class="text-main-screen__buttons _animate">
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
            <div class="cards-main-screen__card _animate">
               <div class="cards-main-screen__number">15</div>
               <div class="cards-main-screen__text">Лет оказываю услуги по лечению зубов для взрослых и детей</div>
            </div>
            <div class="cards-main-screen__card _animate">
               <div class="cards-main-screen__number">90%</div>
               <div class="cards-main-screen__text">Клиентов обращаются ко мне повторно</div>
            </div>
            <div class="cards-main-screen__card _animate">
               <div class="cards-main-screen__number">12</div>
               <div class="cards-main-screen__text">месяцев гарантия на предоставляемые услуги</div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="why-me">
   <div class="why-me__container">
      <h2 class="why-me__title">ПОЧЕМУ СТОИТ ВЫБРАТЬ <span>ИМЕННО МЕНЯ?</span></h2>
      <div class="why-me__text">Профессиональный стаж более 15 лет! Моими услугами воспользовались более
         2000 человек! Более 70% пациентов обращаются по рекомендации</div>
      <div class="why-me__advantages me-advantages">
         <div class="me-advantages__row">
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">01</div>
                  <div class="card-advantage__text">СОВРЕМЕННОЕ ОБОРУДОВАНИЕ</div>
               </div>
               <div class="card-advantage__content">Использую исключительно обновленное и самое передовое оборудование –
                  все для здоровья моих пациентов</div>
            </div>
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">02</div>
                  <div class="card-advantage__text">ИНТЕРЕСЫ КЛИЕНТА ПРЕВЫШЕ ВСЕГО</div>
               </div>
               <div class="card-advantage__content">Моя задача: подобрать удобное для Вас время и построить
                  индивидуальный план лечения</div>
            </div>
         </div>
         <div class="me-advantages__row">
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">03</div>
                  <div class="card-advantage__text">ПРОФЕССИОНАЛЬНЫЙ СТОМАТОЛОГ</div>
               </div>
               <div class="card-advantage__content">Имею большой опыт работы и каждый год повышаю квалификацию</div>
            </div>
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">04</div>
                  <div class="card-advantage__text">ЛЕЧЕНИЕ ЗУБОВ БЕЗ БОЛИ И СТРАХА</div>
               </div>
               <div class="card-advantage__content">Использую качественные анестетики, чтобы совсем не чувствовали боли
               </div>
            </div>
         </div>
         <div class="me-advantages__row">
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">05</div>
                  <div class="card-advantage__text">КОМФОРТНАЯ И УЮТНАЯ ОБСТАНОВКА</div>
               </div>
               <div class="card-advantage__content">Создали очень уютную
                  и дружелюбную обстановку, чтобы Вы чувствовали себя как дома</div>
            </div>
            <div class="me-advantages__card card-advantage">
               <div class="card-advantage__title">
                  <div class="card-advantage__number">06</div>
                  <div class="card-advantage__text">ПЕРВАЯ КОНСУЛЬТАЦИЯ БЕСПЛАТНА</div>
               </div>
               <div class="card-advantage__content">Вы получите полную диагностику,
                  а также мы разработаем полный индивидуальный план лечения</div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services">
   <div class="services__container">
      <h2 class="services__title">КАКИЕ <span>УСЛУГИ</span> ПРЕДОСТАВЛЯЮ?</h2>
      <div class="services__body _animate-tooth">
         <div class="services__content content-services">
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"> <a href="#">ТЕРАПЕВТИЧЕСКАЯ ПОМОЩЬ</a></h3>
               <div class="content-services__text">Лечение кариеса, пульпита, периодонтита, эстетическая реставрация
                  зубов. Не дожидайтесь острых проявлений заболевания. Вылечу все качественно</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="#">ХИРУРГИЧЕСКАЯ ПОМОЩЬ</a></h3>
               <div class="content-services__text">Безболезненное и атравматичное удаление зубов. Дам необходимые
                  рекомендации по восстановлению с учетом всех Ваших особенностей</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="#">ПРОФЕССИОНАЛЬНАЯ ЧИСТКА ЗУБОВ</a></h3>
               <div class="content-services__text">С помощью ультразвука и технологий Эйр Флоу безупречно проведу чистку
                  зубов от твердого и мягкого налета, не повреждая при этом эмаль</div>
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
               <h3 class="content-services__title"><a href="#">ПРОТЕЗИРОВАНИЕ</a></h3>
               <div class="content-services__text">Сотрудничаю с одной из лучших зуботехнических лабораторий, поэтому
                  гарантирую, что протез будет надежным, естетичным и удобным</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="#">ДЕТСКИЙ ПРИЁМ</a></h3>
               <div class="content-services__text">Без стрессов, без боли. Прием строится на понимании желаний,
                  потребностей, переживаний маленького пациента</div>
            </div>
            <div class="content-services__item _tooth _tooth-mobile">
               <h3 class="content-services__title"><a href="#">ПЛАЗМОТЕРАПИЯ</a></h3>
               <div class="content-services__text">Лечение заболеваний пародонта. Позволяет восстановить обменный
                  процесс, улучшить микроциркуляцию и метаболизм в клетках тканей</div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="consultation">
   <div class="consultation__container">
      <div class="consultation__body">
         <div class="consultation__item">
            <h2 class="consultation__title">ЗАПИШИСЬ ДЛЯ ПОЛУЧЕНИЯ <span>КОНСУЛЬТАЦИИ</span></h2>
            <div class="consultation__text">Предлагаю лучший сервис! Лечение зубов без боли и страха. Первая
               консультация абсолютно бесплатно</div>
            <button data-popup-id="lead" class="consultation__btn link-on-popup">ЗАПИСАТЬСЯ НА ПРИЁМ</button>
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