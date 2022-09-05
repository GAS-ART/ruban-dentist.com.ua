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
<section class="caries">
   <div class="caries__container">
      <div class="caries__title _title-block">
         <h2>@lang('therapeutic.caries.title')</h2>
         <p>@lang('therapeutic.caries.title_text')</p>
      </div>

      <div class="caries__tipes">
         <div class="caries__tipes-title">
            <h2 class="_title">@lang('therapeutic.caries.caries_tipes.title')</h2>
         </div>
         <div class="caries__tipes-body img-block-three">
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/kinds/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/kinds/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/kinds/1.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.caries.caries_tipes.img_title_1')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.caries.caries_tipes.img_text_1')
               </div>
            </div>
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/kinds/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/kinds/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/kinds/2.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.caries.caries_tipes.img_title_2')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.caries.caries_tipes.img_text_2')
               </div>
            </div>
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/kinds/3.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/kinds/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/kinds/3.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.caries.caries_tipes.img_title_3')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.caries.caries_tipes.img_text_3')
               </div>
            </div>
         </div>
         <div class="caries__tipes-attention attention">
            <div class="attention__img">
               <img src="{{asset('/img/attention.jpg')}}" alt="">
            </div>
            <div class="attention__text">
               @lang('therapeutic.caries.caries_tipes.attention')
            </div>
         </div>
      </div>
      <div class="caries__degree">
         <div class="caries__degree-title">
            <h2 class="_title">@lang('therapeutic.caries.caries_degree.title')</h2>
         </div>
         <div class="caries__tipes-body img-block-four">
            <div class="img-block-four__row">
               <div class="img-block-four__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/caries/degree/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/caries/degree/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/caries/degree/1.jpg')}}" alt="">
                  </picture>
                  <div class="img-block__title _title-img">
                     @lang('therapeutic.caries.caries_degree.img_title_1')
                  </div>
                  <div class="img-block__text">
                     @lang('therapeutic.caries.caries_degree.img_text_1')
                  </div>
               </div>
               <div class="img-block-four__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/caries/degree/2.webp')}}">
                     <source srcset="{{asset('img/therapeutic/caries/degree/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/caries/degree/2.jpg')}}" alt="">
                  </picture>
                  <div class="img-block__title _title-img">
                     @lang('therapeutic.caries.caries_degree.img_title_2')
                  </div>
                  <div class="img-block__text">
                     @lang('therapeutic.caries.caries_degree.img_text_2')
                  </div>
               </div>
            </div>

            <div class="img-block-four__row">
               <div class="img-block-four__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/caries/degree/3.webp')}}">
                     <source srcset="{{asset('img/therapeutic/caries/degree/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/caries/degree/3.jpg')}}" alt="">
                  </picture>
                  <div class="img-block__title _title-img">
                     @lang('therapeutic.caries.caries_degree.img_title_3')
                  </div>
                  <div class="img-block__text">
                     @lang('therapeutic.caries.caries_degree.img_text_3')
                  </div>
               </div>
               <div class="img-block-four__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/caries/degree/4.webp')}}">
                     <source srcset="{{asset('img/therapeutic/caries/degree/4.jpg')}}">
                     <img src="{{asset('img/therapeutic/caries/degree/4.jpg')}}" alt="">
                  </picture>
                  <div class="img-block__title _title-img">
                     @lang('therapeutic.caries.caries_degree.img_title_4')
                  </div>
                  <div class="img-block__text">
                     @lang('therapeutic.caries.caries_degree.img_text_4')
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="caries__find">
         <div class="caries__find-title">
            <h2 class="_title">@lang('therapeutic.caries.caries_tipes.title')</h2>
         </div>

         <div class="caries__find-body img-block-three">
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/find/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/find/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/find/1.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.caries.caries__find.img_title_1')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.caries.caries__find.img_text_1')
               </div>
            </div>
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/find/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/find/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/find/2.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.caries.caries__find.img_title_2')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.caries.caries__find.img_text_2')
               </div>
            </div>
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/find/3.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/find/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/find/3.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.caries.caries__find.img_title_3')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.caries.caries__find.img_text_3')
               </div>
            </div>
         </div>

      </div>
      <div class="caries__therapy">
         <div class="caries__therapy-title">
            <h2 class="_title">@lang('therapeutic.caries.caries_therapy.title')</h2>
         </div>

         <div class="caries__therapy">
            <div class="caries__therapy-body img-block-two">
               <div class="img-block-two__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/caries/therapy/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/caries/therapy/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/caries/therapy/1.jpg')}}" alt="">
                  </picture>
                  <div class="img-block-two__title _title-img">
                     @lang('therapeutic.caries.caries_therapy.img_title_1')
                  </div>
                  <div class="img-block-two__text">
                     @lang('therapeutic.caries.caries_therapy.img_text_1')
                  </div>
               </div>
               <div class="img-block-two__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/caries/therapy/2.webp')}}">
                     <source srcset="{{asset('img/therapeutic/caries/therapy/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/caries/therapy/2.jpg')}}" alt="">
                  </picture>
                  <div class="img-block-two__title _title-img">
                     @lang('therapeutic.caries.caries_therapy.img_title_2')
                  </div>
                  <div class="img-block-two__text">
                     @lang('therapeutic.caries.caries_therapy.img_text_2')
                  </div>
               </div>
            </div>

            <div class="caries__tipes-attention attention">
               <div class="attention__img">
                  <img src="{{asset('/img/attention.jpg')}}" alt="">
               </div>
               <div class="attention__text">
                  @lang('therapeutic.caries.caries_therapy.attention')
               </div>
            </div>

         </div>

      </div>
      <div class="caries__middle">
         <div class="caries__middle-title">
            <h2 class="_title">@lang('therapeutic.caries.caries_middle.title')</h2>
         </div>
         <div class="caries__middle-body">
            <div class="caries__middle-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/middle/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/middle/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/middle/1.jpg')}}" alt="">
               </picture>
               <div class="caries__middle-title _title-img">
                  @lang('therapeutic.caries.caries_middle.img_title_1')
               </div>
               <div class="caries__middle-text">
                  @lang('therapeutic.caries.caries_middle.img_text_1')
               </div>
            </div>
            <div class="caries__middle-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/middle/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/middle/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/middle/2.jpg')}}" alt="">
               </picture>
               <div class="caries__middle-title _title-img">
                  @lang('therapeutic.caries.caries_middle.img_title_2')
               </div>
               <div class="caries__middle-text">
                  @lang('therapeutic.caries.caries_middle.img_text_2')
               </div>
            </div>
            <div class="caries__middle-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/middle/3.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/middle/3.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/middle/3.jpg')}}" alt="">
               </picture>
               <div class="caries__middle-title _title-img">
                  @lang('therapeutic.caries.caries_middle.img_title_3')
               </div>
               <div class="caries__middle-text">
                  @lang('therapeutic.caries.caries_middle.img_text_3')
               </div>
            </div>
            <div class="caries__middle-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/middle/4.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/middle/4.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/middle/4.jpg')}}" alt="">
               </picture>
               <div class="caries__middle-title _title-img">
                  @lang('therapeutic.caries.caries_middle.img_title_4')
               </div>
               <div class="caries__middle-text">
                  @lang('therapeutic.caries.caries_middle.img_text_4')
               </div>
            </div>
            <div class="caries__middle-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/middle/5.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/middle/5.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/middle/5.jpg')}}" alt="">
               </picture>
               <div class="caries__middle-title _title-img">
                  @lang('therapeutic.caries.caries_middle.img_title_5')
               </div>
               <div class="caries__middle-text">
                  @lang('therapeutic.caries.caries_middle.img_text_5')
               </div>
            </div>
            <div class="caries__middle-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/caries/middle/6.webp')}}">
                  <source srcset="{{asset('img/therapeutic/caries/middle/6.jpg')}}">
                  <img src="{{asset('img/therapeutic/caries/middle/6.jpg')}}" alt="">
               </picture>
               <div class="caries__middle-title _title-img">
                  @lang('therapeutic.caries.caries_middle.img_title_6')
               </div>
               <div class="caries__middle-text">
                  @lang('therapeutic.caries.caries_middle.img_text_6')
               </div>
            </div>
         </div>
      </div>
      <div class="caries__title _title-block">
         <h2>@lang('therapeutic.caries.title_2')</h2>
         <p>@lang('therapeutic.caries.title_text_2')</p>
      </div>
      <div class="caries__tipes-attention attention">
         <div class="attention__img">
            <img src="{{asset('/img/attention.jpg')}}" alt="">
         </div>
         <div class="attention__text min">
            @lang('therapeutic.caries.attention')
         </div>
      </div>
   </div>
</section>



@endsection