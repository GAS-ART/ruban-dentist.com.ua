@extends('layout')
@section('title', __('titles.cleaning.title'))
@section('description', __('titles.cleaning.description'))
@section('ogTitle', __('titles.cleaning.ogTitle'))
@section('ogDescription', __('titles.cleaning.ogDescription'))
@section('ogUrl', __('titles.cleaning.ogUrl'))
@section('white', 'white')
@section('cleaning', '_current-page-cleaning')


@section('content')
<section class="service-main-screen white">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('cleaning.main_screen.title')</h1>

         <h3 class="_animate">@lang('cleaning.main_screen.text')</h3>
         <a href="tel:%2B0956664748" class="_animate">@lang('cleaning.main_screen.call')</a>
         <picture class="__animated">
            <source type="image/webp" srcset="{{asset('/img/cleaning/main_mob.webp')}}">
            <source srcset="{{asset('/img/cleaning/main_mob.jpg')}}">
            <img src="{{asset('/img/cleaning/main_mob.png')}}" alt="@lang('cleaning.main_screen.alt')">
         </picture>
         <!--<div class="service-main-screen__img _animate">
            <img src="{{asset('/img/cleaning/main_mob.png')}}" alt="@lang('cleaning.main_screen.alt')">
         </div>-->

      </div>
   </div>
</section>

<section class="why _margin-big">
   <div class="why__container">
      <div class="why__title">
         <h2 class="_title">@lang('cleaning.why.title')</h2>
      </div>
      <div class="why__body icon-six">
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/why/1.webp')}}">
               <source srcset="{{asset('img/cleaning/why/1.jpg')}}">
               <img src="{{asset('img/cleaning/why/1.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.why.img_title_1')</div>
               <div class="icon-six__text">@lang('cleaning.why.img_text_1')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/why/2.webp')}}">
               <source srcset="{{asset('img/cleaning/why/2.jpg')}}">
               <img src="{{asset('img/cleaning/why/2.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.why.img_title_2')</div>
               <div class="icon-six__text">@lang('cleaning.why.img_text_2')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/why/3.webp')}}">
               <source srcset="{{asset('img/cleaning/why/3.jpg')}}">
               <img src="{{asset('img/cleaning/why/3.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.why.img_title_3')</div>
               <div class="icon-six__text">@lang('cleaning.why.img_text_3')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/why/4.webp')}}">
               <source srcset="{{asset('img/cleaning/why/4.jpg')}}">
               <img src="{{asset('img/cleaning/why/4.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.why.img_title_4')</div>
               <div class="icon-six__text">@lang('cleaning.why.img_text_4')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/why/5.webp')}}">
               <source srcset="{{asset('img/cleaning/why/5.jpg')}}">
               <img src="{{asset('img/cleaning/why/5.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.why.img_title_5')</div>
               <div class="icon-six__text">@lang('cleaning.why.img_text_5')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/why/6.webp')}}">
               <source srcset="{{asset('img/cleaning/why/6.jpg')}}">
               <img src="{{asset('img/cleaning/why/6.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.why.img_title_6')</div>
               <div class="icon-six__text">@lang('cleaning.why.img_text_6')</div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="signs _margin-big">
   <div class="signs__container">
      <div class="signs__symptoms-title">
         <h2 class="_title">@lang('cleaning.signs.title')</h2>
      </div>
      <div class="signs__symptoms-body icon-six">
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/signs/1.webp')}}">
               <source srcset="{{asset('img/cleaning/signs/1.jpg')}}">
               <img src="{{asset('img/cleaning/signs/1.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.signs.img_title_1')</div>
               <div class="icon-six__text">@lang('cleaning.signs.img_text_1')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/signs/2.webp')}}">
               <source srcset="{{asset('img/cleaning/signs/2.jpg')}}">
               <img src="{{asset('img/cleaning/signs/2.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.signs.img_title_2')</div>
               <div class="icon-six__text">@lang('cleaning.signs.img_text_2')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/signs/3.webp')}}">
               <source srcset="{{asset('img/cleaning/signs/3.jpg')}}">
               <img src="{{asset('img/cleaning/signs/3.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.signs.img_title_3')</div>
               <div class="icon-six__text">@lang('cleaning.signs.img_text_3')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/signs/4.webp')}}">
               <source srcset="{{asset('img/cleaning/signs/4.jpg')}}">
               <img src="{{asset('img/cleaning/signs/4.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.signs.img_title_4')</div>
               <div class="icon-six__text">@lang('cleaning.signs.img_text_4')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/signs/5.webp')}}">
               <source srcset="{{asset('img/cleaning/signs/5.jpg')}}">
               <img src="{{asset('img/cleaning/signs/5.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.signs.img_title_5')</div>
               <div class="icon-six__text">@lang('cleaning.signs.img_text_5')</div>
            </div>
         </div>
         <div class="icon-six__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/signs/6.webp')}}">
               <source srcset="{{asset('img/cleaning/signs/6.jpg')}}">
               <img src="{{asset('img/cleaning/signs/6.jpg')}}" alt="">
            </picture>
            <div class="icon-six__content">
               <div class="icon-six__title _title-icon">@lang('cleaning.signs.img_title_6')</div>
               <div class="icon-six__text">@lang('cleaning.signs.img_text_6')</div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="consultation _margin-big">
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

<section class="kinds">
   <div class="kinds__container">
      <div class="kinds__title">
         <h2 class="_title">@lang('cleaning.kinds.title')</h2>
      </div>
      <div class="kinds__content">
         <div class="kinds__content content-cleaning-kinds">
            <div class="content-cleaning-kinds__title _title-img">@lang('cleaning.kinds.img_title_1')</div>
            <div class="content-cleaning-kinds__text">@lang('cleaning.kinds.img_text_1')</div>
         </div>
         <div class="kinds__img">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/kinds/1.webp')}}">
               <source srcset="{{asset('img/cleaning/kinds/1.jpg')}}">
               <img src="{{asset('img/cleaning/kinds/1.jpg')}}" alt="">
            </picture>
         </div>
      </div>
      <div class="kinds__content">
         <div class="kinds__content content-cleaning-kinds">
            <div class="content-cleaning-kinds__title _title-img">@lang('cleaning.kinds.img_title_2')</div>
            <div class="content-cleaning-kinds__text">@lang('cleaning.kinds.img_text_2')</div>
         </div>
         <div class="kinds__img">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/kinds/2.webp')}}">
               <source srcset="{{asset('img/cleaning/kinds/2.jpg')}}">
               <img src="{{asset('img/cleaning/kinds/2.jpg')}}" alt="">
            </picture>
         </div>
      </div>

   </div>
</section>

<section class="hygiene _margin-big">
   <div class="hygiene__container">
      <div class="hygiene__title">
         <h2 class="_title">@lang('cleaning.hygiene.title')</h2>
      </div>
      <div class="hygiene__body img-block-three">
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/hygiene/1.webp')}}">
               <source srcset="{{asset('img/cleaning/hygiene/1.jpg')}}">
               <img src="{{asset('img/cleaning/hygiene/1.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('cleaning.hygiene.img_title_1')
            </div>
            <div class="img-block-three__text">
               @lang('cleaning.hygiene.img_text_1')
            </div>
         </div>
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/hygiene/2.webp')}}">
               <source srcset="{{asset('img/cleaning/hygiene/2.jpg')}}">
               <img src="{{asset('img/cleaning/hygiene/2.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('cleaning.hygiene.img_title_2')
            </div>
            <div class="img-block-three__text">
               @lang('cleaning.hygiene.img_text_2')
            </div>
         </div>
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/hygiene/3.webp')}}">
               <source srcset="{{asset('img/cleaning/hygiene/2.jpg')}}">
               <img src="{{asset('img/cleaning/hygiene/3.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('cleaning.hygiene.img_title_3')
            </div>
            <div class="img-block-three__text">
               @lang('cleaning.hygiene.img_text_3')
            </div>
         </div>
      </div>
   </div>
</section>

<section class="pregnancy _margin-big">
   <div class="pregnancy__container">
      <div class="pregnancy__title">
         <h2 class="_title">@lang('cleaning.pregnancy.title')</h2>
      </div>
      <div class="pregnancy__body img-block-three">
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/pregnancy/1.webp')}}">
               <source srcset="{{asset('img/cleaning/pregnancy/1.jpg')}}">
               <img src="{{asset('img/cleaning/pregnancy/1.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('cleaning.pregnancy.img_title_1')
            </div>
            <div class="img-block-three__text">
               @lang('cleaning.pregnancy.img_text_1')
            </div>
         </div>
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/pregnancy/2.webp')}}">
               <source srcset="{{asset('img/cleaning/pregnancy/2.jpg')}}">
               <img src="{{asset('img/cleaning/pregnancy/2.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('cleaning.pregnancy.img_title_2')
            </div>
            <div class="img-block-three__text">
               @lang('cleaning.pregnancy.img_text_2')
            </div>
         </div>
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/pregnancy/3.webp')}}">
               <source srcset="{{asset('img/cleaning/pregnancy/2.jpg')}}">
               <img src="{{asset('img/cleaning/pregnancy/3.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('cleaning.pregnancy.img_title_3')
            </div>
            <div class="img-block-three__text">
               @lang('cleaning.pregnancy.img_text_3')
            </div>
         </div>
      </div>
   </div>
</section>

<section class="recommendation _margin-big">
   <div class="recommendation__container">
      <div class="recommendation__title">
         <h2 class="_title">@lang('cleaning.recommendation.title')</h2>
      </div>
      <div class="recommendation__content">
         <div class="recommendation__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/recommendation/1.webp')}}">
               <source srcset="{{asset('img/cleaning/recommendation/1.jpg')}}">
               <img src="{{asset('img/cleaning/recommendation/1.jpg')}}" alt="">
            </picture>
            <div class="recommendation__title _title-img">
               @lang('cleaning.recommendation.img_title_1')
            </div>
            <div class="recommendation__text">
               @lang('cleaning.recommendation.img_text_1')
            </div>
         </div>
         <div class="recommendation__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/recommendation/2.webp')}}">
               <source srcset="{{asset('img/cleaning/recommendation/2.jpg')}}">
               <img src="{{asset('img/cleaning/recommendation/2.jpg')}}" alt="">
            </picture>
            <div class="recommendation__title _title-img">
               @lang('cleaning.recommendation.img_title_2')
            </div>
            <div class="recommendation__text">
               @lang('cleaning.recommendation.img_text_2')
            </div>
         </div>
         <div class="recommendation__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/recommendation/3.webp')}}">
               <source srcset="{{asset('img/cleaning/recommendation/3.jpg')}}">
               <img src="{{asset('img/cleaning/recommendation/3.jpg')}}" alt="">
            </picture>
            <div class="recommendation__title _title-img">
               @lang('cleaning.recommendation.img_title_3')
            </div>
            <div class="recommendation__text">
               @lang('cleaning.recommendation.img_text_3')
            </div>
         </div>
         <div class="recommendation__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/recommendation/4.webp')}}">
               <source srcset="{{asset('img/cleaning/recommendation/4.jpg')}}">
               <img src="{{asset('img/cleaning/recommendation/4.jpg')}}" alt="">
            </picture>
            <div class="recommendation__title _title-img">
               @lang('cleaning.recommendation.img_title_4')
            </div>
            <div class="recommendation__text">
               @lang('cleaning.recommendation.img_text_4')
            </div>
         </div>
         <div class="recommendation__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/recommendation/5.webp')}}">
               <source srcset="{{asset('img/cleaning/recommendation/5.jpg')}}">
               <img src="{{asset('img/cleaning/recommendation/5.jpg')}}" alt="">
            </picture>
            <div class="recommendation__title _title-img">
               @lang('cleaning.recommendation.img_title_5')
            </div>
            <div class="recommendation__text">
               @lang('cleaning.recommendation.img_text_5')
            </div>
         </div>
         <div class="recommendation__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/cleaning/recommendation/6.webp')}}">
               <source srcset="{{asset('img/cleaning/recommendation/6.jpg')}}">
               <img src="{{asset('img/cleaning/recommendation/6.jpg')}}" alt="">
            </picture>
            <div class="recommendation__title _title-img">
               @lang('cleaning.recommendation.img_title_6')
            </div>
            <div class="recommendation__text">
               @lang('cleaning.recommendation.img_text_6')
            </div>
         </div>
      </div>
   </div>
</section>
@endsection