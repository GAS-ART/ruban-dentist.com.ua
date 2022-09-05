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
      <div class="main-screen__description description-main-screen service">
         <div class="description-main-screen__container">
            <div class="description-main-screen__body">
               <div class="description-main-screen__text text-main-screen">
                  <div class="text-main-screen__row">
                     <h1 class="text-main-screen__title service _animate">@lang('therapeutic.main_screen.title')</h1>
                     <div class="text-main-screen__text _animate">@lang('therapeutic.main_screen.text')</div>
                  </div>
                  <div class="text-main-screen__buttons service _animate">
                     <a class="text-main-screen__call service" href="tel:%2B0956664748">@lang('therapeutic.main_screen.call')</a>
                  </div>
               </div>
            </div>
         </div>
         
         
            <picture>
               <source type="image/webp" srcset="{{asset('/img/therapeutic/main.webp')}}">

               <source srcset="{{asset('/img/therapeutic/main.jpg')}}">

               <img class="description-main-screen__bacgroud" src="{{asset('/img/therapeutic/main.jpg')}}" alt="@lang('home.main_screen.alt')">
            </picture>
      </div>
   </div>
</section>
@endsection