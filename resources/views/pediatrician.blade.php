@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('pediatrician', '_current-page-pediatrician')


@section('content')
<section class="service-main-screen pediatrician">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('pediatrician.main_screen.title')</h1>
         <picture class="_animate">
            <source type="image/webp" srcset="{{asset('/img/pediatrician/main_mob.webp')}}">
            <source srcset="{{asset('/img/pediatrician/main_mob.jpg')}}">
            <img src="{{asset('/img/pediatrician/main_mob.jpg')}}" alt="@lang('pediatrician.main_screen.alt')">
         </picture>
         <h3 class="_animate">@lang('pediatrician.main_screen.text')</h3>
         <a href="tel:%2B0956664748" class="_animate">@lang('pediatrician.main_screen.call')</a>
      </div>
   </div>
</section>
<section class="pediatrician-how _margin-big">
   <div class="pediatrician-how__container">

      <div class="pediatrician-how__title _title-block">
         <h2 class="_title">@lang('pediatrician.reasons.title')</h2>
         <p>@lang('pediatrician.reasons.title_text')</p>
      </div>

      <div class="pediatrician-how__body img-block-three">
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/pediatrician/reasons/1.webp')}}">
               <source srcset="{{asset('img/pediatrician/reasons/1.jpg')}}">
               <img src="{{asset('img/pediatrician/reasons/1.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('pediatrician.reasons.img_title_1')
            </div>
            <div class="img-block-three__text">
               @lang('pediatrician.reasons.img_text_1')
            </div>
         </div>
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/pediatrician/reasons/2.webp')}}">
               <source srcset="{{asset('img/pediatrician/reasons/2.jpg')}}">
               <img src="{{asset('img/pediatrician/reasons/2.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('pediatrician.reasons.img_title_2')
            </div>
            <div class="img-block-three__text">
               @lang('pediatrician.reasons.img_text_2')
            </div>
         </div>
         <div class="img-block-three__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/pediatrician/reasons/3.webp')}}">
               <source srcset="{{asset('img/pediatrician/reasons/2.jpg')}}">
               <img src="{{asset('img/pediatrician/reasons/3.jpg')}}" alt="">
            </picture>
            <div class="img-block-three__title _title-img">
               @lang('pediatrician.reasons.img_title_3')
            </div>
            <div class="img-block-three__text">
               @lang('pediatrician.reasons.img_text_3')
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
@endsection