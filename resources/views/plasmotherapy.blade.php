@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))


@section('content')
<section class="service-main-screen plasmotherapy">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('plasmotherapy.main_screen.title')</h1>
         <picture class="_animate">
            <source type="image/webp" srcset="{{asset('/img/plasmotherapy/main_mob.webp')}}">
            <source srcset="{{asset('/img/plasmotherapy/main_mob.jpg')}}">
            <img src="{{asset('/img/plasmotherapy/main_mob.jpg')}}" alt="@lang('plasmotherapy.main_screen.alt')">
         </picture>
         <h3 class="_animate">@lang('plasmotherapy.main_screen.text')</h3>
         <a href="tel:%2B0956664748" class="_animate">@lang('plasmotherapy.main_screen.call')</a>
      </div>
   </div>
</section>
<section class="plasmotherapy-why _margin-big">
   <div class="plasmotherapy-why__container">
      <div class="plasmotherapy-why__title _title-block">
         <h2>@lang('plasmotherapy.why.title')</h2>
      </div>
      <div class="plasmotherapy-why__body">
         <div class="plasmotherapy-why__row">
            <div class="plasmotherapy-why__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/why/1.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/why/1.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/why/1.jpg')}}" alt="">
               </picture>
               <div class="plasmotherapy-why__content">
                  <div class="plasmotherapy-why__content-title">@lang('plasmotherapy.why.img_title_1')</div>
                  <div class="plasmotherapy-why__content-text">@lang('plasmotherapy.why.img_text_1')</div>
               </div>
            </div>
            <div class="plasmotherapy-why__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/why/2.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/why/2.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/why/2.jpg')}}" alt="">
               </picture>
               <div class="plasmotherapy-why__content">
                  <div class="plasmotherapy-why__content-title">@lang('plasmotherapy.why.img_title_2')</div>
                  <div class="plasmotherapy-why__content-text">@lang('plasmotherapy.why.img_text_2')</div>
               </div>
            </div>
            <div class="plasmotherapy-why__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/why/3.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/why/3.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/why/3.jpg')}}" alt="">
               </picture>
               <div class="plasmotherapy-why__content">
                  <div class="plasmotherapy-why__content-title">@lang('plasmotherapy.why.img_title_3')</div>
                  <div class="plasmotherapy-why__content-text">@lang('plasmotherapy.why.img_text_3')</div>
               </div>
            </div>
         </div>
         <div class="plasmotherapy-why__row">
            <div class="plasmotherapy-why__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/why/4.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/why/4.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/why/4.jpg')}}" alt="">
               </picture>
               <div class="plasmotherapy-why__content">
                  <div class="plasmotherapy-why__content-title">@lang('plasmotherapy.why.img_title_4')</div>
                  <div class="plasmotherapy-why__content-text">@lang('plasmotherapy.why.img_text_4')</div>
               </div>
            </div>
            <div class="plasmotherapy-why__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/why/5.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/why/5.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/why/5.jpg')}}" alt="">
               </picture>
               <div class="plasmotherapy-why__content">
                  <div class="plasmotherapy-why__content-title">@lang('plasmotherapy.why.img_title_5')</div>
                  <div class="plasmotherapy-why__content-text">@lang('plasmotherapy.why.img_text_6')</div>
               </div>
            </div>
            <div class="plasmotherapy-why__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/why/6.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/why/6.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/why/6.jpg')}}" alt="">
               </picture>
               <div class="plasmotherapy-why__content">
                  <div class="plasmotherapy-why__content-title">@lang('plasmotherapy.why.img_title_6')</div>
                  <div class="plasmotherapy-why__content-text">@lang('plasmotherapy.why.img_text_6')</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="plasmotherapy-plasmotherapy _margin-big">
   <div class="plasmotherapy-plasmotherapy__container">
      <div class="plasmotherapy-plasmotherapy__title _title-block">
         <h2>@lang('plasmotherapy.plasmotherapy.title')</h2>
      </div>
      <div class="plasmotherapy-plasmotherapy__content">
         <p>@lang('plasmotherapy.plasmotherapy.title_text')</p>
         <p>@lang('plasmotherapy.plasmotherapy.title_text_2')</p>
      </div>
   </div>
</section>
<section class="plasmotherapy-task _margin-big">
   <div class="plasmotherapy-task__container">
      <div class="plasmotherapy-task__title _title-block">
         <h2>@lang('plasmotherapy.task.title')</h2>
      </div>
      <div class="plasmotherapy-task__body">
         <div class="plasmotherapy-task__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/plasmotherapy/task/1.webp')}}">
               <source srcset="{{asset('img/plasmotherapy/task/1.jpg')}}">
               <img src="{{asset('img/plasmotherapy/task/1.jpg')}}" alt="">
            </picture>
            <div class="plasmotherapy-task__text">@lang('plasmotherapy.task.img_text_1')</div>
         </div>
         <div class="plasmotherapy-task__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/plasmotherapy/task/1.webp')}}">
               <source srcset="{{asset('img/plasmotherapy/task/1.jpg')}}">
               <img src="{{asset('img/plasmotherapy/task/1.jpg')}}" alt="">
            </picture>
            <div class="plasmotherapy-task__text">@lang('plasmotherapy.task.img_text_2')</div>
         </div>
         <div class="plasmotherapy-task__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/plasmotherapy/task/1.webp')}}">
               <source srcset="{{asset('img/plasmotherapy/task/1.jpg')}}">
               <img src="{{asset('img/plasmotherapy/task/1.jpg')}}" alt="">
            </picture>
            <div class="plasmotherapy-task__text">@lang('plasmotherapy.task.img_text_3')</div>
         </div>
         <div class="plasmotherapy-task__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/plasmotherapy/task/1.webp')}}">
               <source srcset="{{asset('img/plasmotherapy/task/1.jpg')}}">
               <img src="{{asset('img/plasmotherapy/task/1.jpg')}}" alt="">
            </picture>
            <div class="plasmotherapy-task__text">@lang('plasmotherapy.task.img_text_4')</div>
         </div>
         <div class="plasmotherapy-task__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/plasmotherapy/task/1.webp')}}">
               <source srcset="{{asset('img/plasmotherapy/task/1.jpg')}}">
               <img src="{{asset('img/plasmotherapy/task/1.jpg')}}" alt="">
            </picture>
            <div class="plasmotherapy-task__text">@lang('plasmotherapy.task.img_text_5')</div>
         </div>
         <div class="plasmotherapy-task__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/plasmotherapy/task/1.webp')}}">
               <source srcset="{{asset('img/plasmotherapy/task/1.jpg')}}">
               <img src="{{asset('img/plasmotherapy/task/1.jpg')}}" alt="">
            </picture>
            <div class="plasmotherapy-task__text">@lang('plasmotherapy.task.img_text_6')</div>
         </div>
      </div>
   </div>
</section>
<section class="plasmotherapy-how">
   <div class="plasmotherapy-how__container">
      <div class="plasmotherapy-how__kinds-title _title-block">
         <h2 class="_title">@lang('plasmotherapy.how.title')</h2>
         <p>@lang('plasmotherapy.how.title_text')</p>
      </div>
      <div class="plasmotherapy-how__methods">
         <div class="plasmotherapy-how__methods-body img-block-two">
            <div class="img-block-two__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/how/1.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/how/1.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/how/1.jpg')}}" alt="">
               </picture>
               <div class="img-block-two__title _title-img">
                  @lang('plasmotherapy.how.img_title_1')
               </div>
               <div class="img-block-two__text">
                  @lang('plasmotherapy.how.img_text_1')
               </div>
            </div>
            <div class="img-block-two__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/how/2.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/how/2.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/how/2.jpg')}}" alt="">
               </picture>
               <div class="img-block-two__title _title-img">
                  @lang('plasmotherapy.how.img_title_2')
               </div>
               <div class="img-block-two__text">
                  @lang('plasmotherapy.how.img_text_2')
               </div>
            </div>
         </div>
         <div class="plasmotherapy-how__methods-body img-block-two">
            <div class="img-block-two__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/how/3.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/how/3.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/how/3.jpg')}}" alt="">
               </picture>
               <div class="img-block-two__title _title-img">
                  @lang('plasmotherapy.how.img_title_3')
               </div>
               <div class="img-block-two__text">
                  @lang('plasmotherapy.how.img_text_3')
               </div>
            </div>
            <div class="img-block-two__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/plasmotherapy/how/4.webp')}}">
                  <source srcset="{{asset('img/plasmotherapy/how/4.jpg')}}">
                  <img src="{{asset('img/plasmotherapy/how/4.jpg')}}" alt="">
               </picture>
               <div class="img-block-two__title _title-img">
                  @lang('plasmotherapy.how.img_title_4')
               </div>
               <div class="img-block-two__text">
                  @lang('plasmotherapy.how.img_text_4')
               </div>
            </div>
         </div>
         <div class="plasmotherapy-how__tipes-attention attention">
            <div class="attention__img">
               <img src="{{asset('/img/attention.jpg')}}" alt="">
            </div>
            <div class="attention__text min">
               @lang('plasmotherapy.how.attention')
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