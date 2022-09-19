@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('prosthesis', '_current-page-prosthesis')

@section('content')
<section class="service-main-screen prosthesis">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('prosthesis.main_screen.title')</h1>
         <picture class="_animate">
            <source type="image/webp" srcset="{{asset('/img/prosthesis/main_mob.webp')}}">
            <source srcset="{{asset('/img/prosthesis/main_mob.jpg')}}">
            <img src="{{asset('/img/prosthesis/main_mob.jpg')}}" alt="@lang('prosthesis.main_screen.alt')">
         </picture>
         <h3 class="_animate">@lang('prosthesis.main_screen.text')</h3>
         <a href="tel:%2B0956664748" class="_animate">@lang('prosthesis.main_screen.call')</a>
      </div>
   </div>
</section>
<section class="prosthesis goals _margin-big">
   <div class="goals__container">
      <div class="goals__title _title-block">
         <h2>@lang('prosthesis.goals.title')</h2>
      </div>
      <div class="goals__body">
         <div class="goals__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/goals/1.webp')}}">
               <source srcset="{{asset('img/prosthesis/goals/1.jpg')}}">
               <img src="{{asset('img/prosthesis/goals/1.jpg')}}" alt="">
            </picture>
            <div class="goals__text">@lang('prosthesis.goals.img_text_1')</div>
         </div>
         <div class="goals__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/goals/1.webp')}}">
               <source srcset="{{asset('img/prosthesis/goals/1.jpg')}}">
               <img src="{{asset('img/prosthesis/goals/1.jpg')}}" alt="">
            </picture>
            <div class="goals__text">@lang('prosthesis.goals.img_text_2')</div>
         </div>
         <div class="goals__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/goals/1.webp')}}">
               <source srcset="{{asset('img/prosthesis/goals/1.jpg')}}">
               <img src="{{asset('img/prosthesis/goals/1.jpg')}}" alt="">
            </picture>
            <div class="goals__text">@lang('prosthesis.goals.img_text_3')</div>
         </div>
         <div class="goals__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/goals/1.webp')}}">
               <source srcset="{{asset('img/prosthesis/goals/1.jpg')}}">
               <img src="{{asset('img/prosthesis/goals/1.jpg')}}" alt="">
            </picture>
            <div class="goals__text">@lang('prosthesis.goals.img_text_4')</div>
         </div>
      </div>
   </div>
</section>
<section class="prosthesis kinds">
   <div class="kinds__container">
      <div class="kinds__title _title-block">
         <h2>@lang('prosthesis.kinds.title')</h2>
      </div>
      <div class="caries__title _title-block">
         <h2>@lang('prosthesis.kinds.fixed.title')</h2>
         <p>@lang('prosthesis.kinds.removable.text')</p>
      </div>
      <div class="periodontitis__removable-body img-block-two">
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/removable/1.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/removable/1.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/removable/1.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.removable.img_title_1')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.removable.img_text_1')
            </div>
         </div>
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/removable/2.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/removable/2.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/removable/2.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.removable.img_title_2')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.removable.img_text_2')
            </div>
         </div>
      </div>
      <div class="periodontitis__fixed-body img-block-two">
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/removable/3.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/removable/3.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/removable/3.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.removable.img_title_3')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.removable.img_text_3')
            </div>
         </div>
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/removable/4.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/removable/4.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/removable/4.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.removable.img_title_4')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.removable.img_text_4')
            </div>
         </div>
      </div>

      <div class="caries__title _title-block">
         <h2>@lang('prosthesis.kinds.fixed.title')</h2>
         <p>@lang('prosthesis.kinds.fixed.text')</p>
      </div>
      <div class="periodontitis__fixed-body img-block-two">
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/fixed/1.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/fixed/1.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/fixed/1.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.fixed.img_title_1')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.fixed.img_text_1')
            </div>
         </div>
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/fixed/2.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/fixed/2.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/fixed/2.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.fixed.img_title_2')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.fixed.img_text_2')
            </div>
         </div>
      </div>
      <div class="periodontitis__fixed-body img-block-two">
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/fixed/3.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/fixed/3.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/fixed/3.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.fixed.img_title_3')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.fixed.img_text_3')
            </div>
         </div>
         <div class="img-block-two__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/prosthesis/kinds/fixed/4.webp')}}">
               <source srcset="{{asset('img/prosthesis/kinds/fixed/4.jpg')}}">
               <img src="{{asset('img/prosthesis/kinds/fixed/4.jpg')}}" alt="">
            </picture>
            <div class="img-block-two__title _title-img">
               @lang('prosthesis.kinds.fixed.img_title_4')
            </div>
            <div class="img-block-two__text">
               @lang('prosthesis.kinds.fixed.img_text_4')
            </div>
         </div>
      </div>
      <div class="caries__tipes-attention attention">
         <div class="attention__img">
            <img src="{{asset('/img/attention.jpg')}}" alt="">
         </div>
         <div class="attention__text min">
            @lang('prosthesis.kinds.fixed.attention')
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