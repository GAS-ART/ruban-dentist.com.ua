@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')


@section('content')

<section class="service-main-screen">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('therapeutic.main_screen.title')</h1>
         <picture class="_animate">
            <source type="image/webp" srcset="{{asset('/img/therapeutic/main.webp')}}">
            <source srcset="{{asset('/img/therapeutic/main.jpg')}}">
            <img src="{{asset('/img/therapeutic/main.jpg')}}" alt="@lang('therapeutic.main_screen.alt')">
         </picture>
         <h3 class="_animate">@lang('therapeutic.main_screen.text')</h3>
         <a href="tel:%2B0956664748" class="_animate">@lang('therapeutic.main_screen.call')</a>
      </div>
   </div>
</section>



@endsection