@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('white', 'white')


@section('content')

<section class="service-main-screen white">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('cleaning.main_screen.title')</h1>

         <h3 class="_animate">@lang('cleaning.main_screen.text')</h3>
         <a href="tel:%2B0956664748" class="_animate">@lang('cleaning.main_screen.call')</a>
         <div class="service-main-screen__img _animate">
            <img src="{{asset('/img/cleaning/main_mob.png')}}" alt="@lang('cleaning.main_screen.alt')">
         </div>

      </div>
   </div>
</section>

@endsection