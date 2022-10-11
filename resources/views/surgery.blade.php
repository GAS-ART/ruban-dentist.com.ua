@extends('layout')
@section('title', __('titles.surgery.title'))
@section('description', __('titles.surgery.description'))
@section('ogTitle', __('titles.surgery.ogTitle'))
@section('ogDescription', __('titles.surgery.ogDescription'))
@section('ogUrl', __('titles.surgery.ogUrl'))

@section('surgery', '_current-page-surgery')

@section('content')
<section class="service-main-screen surgery">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('surgery.main_screen.title')</h1>
         <picture class="_animate">
            <source type="image/webp" srcset="{{asset('/img/surgery/main_mob.webp')}}">
            <source srcset="{{asset('/img/surgery/main_mob.jpg')}}">
            <img src="{{asset('/img/surgery/main_mob.jpg')}}" alt="@lang('surgery.main_screen.alt')">
         </picture>
         <h3 class="_animate _white">@lang('surgery.main_screen.text')</h3>
         <a href="tel:%2B380956664748" class="_animate">@lang('surgery.main_screen.call')</a>
      </div>
   </div>
</section>
<section class="surgery-indications _margin-big">
   <div class="surgery-indications__container">
      <div class="surgery-indications__title _title-block">
         <h2>@lang('surgery.indications.title')</h2>
         <p>@lang('surgery.indications.title_text')</p>
      </div>
      <div class="surgery-indications__title _title-block">
         <h2>@lang('surgery.indications.title_2')</h2>
      </div>
      <div class="surgery-indications__body">
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_1')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_2')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_3')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_4')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_5')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_6')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_7')</div>
         </div>
         <div class="surgery-indications__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-indications__text">@lang('surgery.indications.img_text_8')</div>
         </div>
      </div>
   </div>

</section>
<section class="surgery-removal _margin-big">
   <div class="surgery-removal__container">
      <div class="surgery-removal__title _title-block">
         <h2>@lang('surgery.removal.title')</h2>
      </div>
      <div class="surgery-removal__body">
         <div class="surgery-removal__row">
            <div class="surgery-removal__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/surgery/removal/1.webp')}}">
                  <source srcset="{{asset('img/surgery/removal/1.jpg')}}">
                  <img src="{{asset('img/surgery/removal/1.jpg')}}" alt="">
               </picture>
               <div class="surgery-removal__content">
                  <div class="surgery-removal__content-title">@lang('surgery.removal.img_title_1')</div>
                  <div class="surgery-removal__content-text">@lang('surgery.removal.img_text_1')</div>
               </div>
            </div>
            <div class="surgery-removal__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/surgery/removal/2.webp')}}">
                  <source srcset="{{asset('img/surgery/removal/2.jpg')}}">
                  <img src="{{asset('img/surgery/removal/2.jpg')}}" alt="">
               </picture>
               <div class="surgery-removal__content">
                  <div class="surgery-removal__content-title">@lang('surgery.removal.img_title_2')</div>
                  <div class="surgery-removal__content-text">@lang('surgery.removal.img_text_2')</div>
               </div>
            </div>
         </div>
         <div class="surgery-removal__row">
            <div class="surgery-removal__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/surgery/removal/3.webp')}}">
                  <source srcset="{{asset('img/surgery/removal/3.jpg')}}">
                  <img src="{{asset('img/surgery/removal/3.jpg')}}" alt="">
               </picture>
               <div class="surgery-removal__content">
                  <div class="surgery-removal__content-title">@lang('surgery.removal.img_title_3')</div>
                  <div class="surgery-removal__content-text">@lang('surgery.removal.img_text_3')</div>
               </div>
            </div>
            <div class="surgery-removal__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/surgery/removal/4.webp')}}">
                  <source srcset="{{asset('img/surgery/removal/4.jpg')}}">
                  <img src="{{asset('img/surgery/removal/4.jpg')}}" alt="">
               </picture>
               <div class="surgery-removal__content">
                  <div class="surgery-removal__content-title">@lang('surgery.removal.img_title_4')</div>
                  <div class="surgery-removal__content-text">@lang('surgery.removal.img_text_4')</div>
               </div>
            </div>
         </div>
         <div class="surgery-removal__row">
            <div class="surgery-removal__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/surgery/removal/5.webp')}}">
                  <source srcset="{{asset('img/surgery/removal/5.jpg')}}">
                  <img src="{{asset('img/surgery/removal/5.jpg')}}" alt="">
               </picture>
               <div class="surgery-removal__content">
                  <div class="surgery-removal__content-title">@lang('surgery.removal.img_title_5')</div>
                  <div class="surgery-removal__content-text">@lang('surgery.removal.img_text_5')</div>
               </div>
            </div>
         </div>
      </div>
      <div class="surgery-removal__attention attention">
         <div class="attention__img">
            <img src="{{asset('/img/attention.jpg')}}" alt="">
         </div>
         <div class="attention__text min">
            @lang('surgery.removal.attention')
         </div>
      </div>
   </div>
</section>
<section class="surgery-eighth _margin-big">
   <div class="surgery-eighth__container">
      <div class="surgery-eighth__title _title-block">
         <h2>@lang('surgery.eighth.title')</h2>
         <p>@lang('surgery.eighth.title_text')</p>
      </div>
      <div class="surgery-eighth__body">
         <div class="surgery-eighth__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-eighth__text">@lang('surgery.eighth.img_text_1')</div>
         </div>
         <div class="surgery-eighth__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-eighth__text">@lang('surgery.eighth.img_text_2')</div>
         </div>
         <div class="surgery-eighth__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-eighth__text">@lang('surgery.eighth.img_text_3')</div>
         </div>
         <div class="surgery-eighth__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-eighth__text">@lang('surgery.eighth.img_text_4')</div>
         </div>
         <div class="surgery-eighth__item">
            <picture>
               <source type="image/webp" srcset="{{asset('img/surgery/indications/1.webp')}}">
               <source srcset="{{asset('img/surgery/indications/1.jpg')}}">
               <img src="{{asset('img/surgery/indications/1.jpg')}}" alt="">
            </picture>
            <div class="surgery-eighth__text">@lang('surgery.eighth.img_text_5')</div>
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