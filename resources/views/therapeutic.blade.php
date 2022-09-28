@extends('layout')
@section('title', __('titles.therapeutic.title'))
@section('description', __('titles.therapeutic.description'))
@section('ogTitle', __('titles.therapeutic.ogTitle'))
@section('ogDescription', __('titles.therapeutic.ogDescription'))
@section('ogUrl', __('titles.therapeutic.ogUrl'))

@section('therapeutic', '_current-page-therapeutic')


@section('content')
<section class="service-main-screen">
   <div class="service-main-screen__container">
      <div class="service-main-screen__title">
         <h1 class="_animate">@lang('therapeutic.main_screen.title')</h1>
         <picture class="_animate">
            <source type="image/webp" srcset="{{asset('/img/therapeutic/main_mob.webp')}}">
            <source srcset="{{asset('/img/therapeutic/main_mob.jpg')}}">
            <img src="{{asset('/img/therapeutic/main_mob.jpg')}}" alt="@lang('therapeutic.main_screen.alt')">
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
      <div class="caries__degree _margin-big">
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
      <div class="caries__find _margin-big">
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
      <div class="caries__middle _margin-big">
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
<section class="pulpitis _margin-big">
   <div class="pulpitis__container">
      <div class="pulpitis__title _title-block">
         <h2>@lang('therapeutic.pulpitis.title')</h2>
         <p>@lang('therapeutic.pulpitis.title_text')</p>
      </div>
      <div class="pulpitis__symptoms _margin-big">
         <div class="pulpitis__symptoms-title">
            <h2 class="_title">@lang('therapeutic.pulpitis.symptoms.title')</h2>
         </div>
         <div class="pulpitis__symptoms-body icon-six">
            <div class="icon-six__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/symptoms/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/symptoms/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/symptoms/1.jpg')}}" alt="">
               </picture>
               <div class="icon-six__content">
                  <div class="icon-six__title _title-icon">@lang('therapeutic.pulpitis.symptoms.img_title_1')</div>
                  <div class="icon-six__text">@lang('therapeutic.pulpitis.symptoms.img_text_1')</div>
               </div>
            </div>
            <div class="icon-six__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/symptoms/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/symptoms/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/symptoms/2.jpg')}}" alt="">
               </picture>
               <div class="icon-six__content">
                  <div class="icon-six__title _title-icon">@lang('therapeutic.pulpitis.symptoms.img_title_2')</div>
                  <div class="icon-six__text">@lang('therapeutic.pulpitis.symptoms.img_text_2')</div>
               </div>
            </div>
            <div class="icon-six__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/symptoms/3.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/symptoms/3.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/symptoms/3.jpg')}}" alt="">
               </picture>
               <div class="icon-six__content">
                  <div class="icon-six__title _title-icon">@lang('therapeutic.pulpitis.symptoms.img_title_3')</div>
                  <div class="icon-six__text">@lang('therapeutic.pulpitis.symptoms.img_text_3')</div>
               </div>
            </div>
            <div class="icon-six__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/symptoms/4.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/symptoms/4.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/symptoms/4.jpg')}}" alt="">
               </picture>
               <div class="icon-six__content">
                  <div class="icon-six__title _title-icon">@lang('therapeutic.pulpitis.symptoms.img_title_4')</div>
                  <div class="icon-six__text">@lang('therapeutic.pulpitis.symptoms.img_text_4')</div>
               </div>
            </div>
            <div class="icon-six__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/symptoms/5.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/symptoms/5.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/symptoms/5.jpg')}}" alt="">
               </picture>
               <div class="icon-six__content">
                  <div class="icon-six__title _title-icon">@lang('therapeutic.pulpitis.symptoms.img_title_5')</div>
                  <div class="icon-six__text">@lang('therapeutic.pulpitis.symptoms.img_text_5')</div>
               </div>
            </div>
            <div class="icon-six__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/symptoms/6.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/symptoms/6.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/symptoms/6.jpg')}}" alt="">
               </picture>
               <div class="icon-six__content">
                  <div class="icon-six__title _title-icon">@lang('therapeutic.pulpitis.symptoms.img_title_6')</div>
                  <div class="icon-six__text">@lang('therapeutic.pulpitis.symptoms.img_text_6')</div>
               </div>
            </div>
         </div>
      </div>
      <div class="pulpitis__reasons _margin-big">
         <div class="pulpitis__symptoms-title">
            <h2 class="_title">@lang('therapeutic.pulpitis.reasons.title')</h2>
         </div>
         <div class="pulpitis__reasons-body">
            <div class="pulpitis__reasons-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/reasons/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/reasons/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/reasons/1.jpg')}}" alt="">
               </picture>
               <div class="pulpitis__reasons-content">
                  <div class="pulpitis__reasons-title _title-icon">@lang('therapeutic.pulpitis.reasons.img_title_1')
                  </div>
                  <div class="pulpitis__reasons-text">@lang('therapeutic.pulpitis.reasons.img_text_1')</div>
               </div>
            </div>
            <div class="pulpitis__reasons-item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/reasons/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/reasons/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/reasons/2.jpg')}}" alt="">
               </picture>
               <div class="pulpitis__reasons-content">
                  <div class="pulpitis__reasons-title _title-icon">@lang('therapeutic.pulpitis.reasons.img_title_2')
                  </div>
                  <div class="pulpitis__reasons-text">@lang('therapeutic.pulpitis.reasons.img_text_2')</div>
               </div>
            </div>
         </div>
      </div>
      <div class="pulpitis__stages _margin-big">
         <div class="pulpitis__symptoms-title">
            <h2 class="_title">@lang('therapeutic.pulpitis.stages.title')</h2>
         </div>
         <div class="pulpitis__stages-body">
            <div class="pulpitis__stages-row">
               <div class="pulpitis__stages-item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}" alt="">
                  </picture>
                  <div class="pulpitis__stages-content">
                     <div class="pulpitis__stages-title _title-icon">@lang('therapeutic.pulpitis.stages.img_title_1')
                     </div>
                     <div class="pulpitis__stages-text">@lang('therapeutic.pulpitis.stages.img_text_1')</div>
                  </div>
               </div>
               <div class="pulpitis__stages-item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}" alt="">
                  </picture>
                  <div class="pulpitis__stages-content">
                     <div class="pulpitis__stages-title _title-icon">@lang('therapeutic.pulpitis.stages.img_title_2')
                     </div>
                     <div class="pulpitis__stages-text">@lang('therapeutic.pulpitis.stages.img_text_2')</div>
                  </div>
               </div>
               <div class="pulpitis__stages-item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}" alt="">
                  </picture>
                  <div class="pulpitis__stages-content">
                     <div class="pulpitis__stages-title _title-icon">@lang('therapeutic.pulpitis.stages.img_title_3')
                     </div>
                     <div class="pulpitis__stages-text">@lang('therapeutic.pulpitis.stages.img_text_3')</div>
                  </div>
               </div>
            </div>
            <div class="pulpitis__stages-row">
               <div class="pulpitis__stages-item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}" alt="">
                  </picture>
                  <div class="pulpitis__stages-content">
                     <div class="pulpitis__stages-title _title-icon">@lang('therapeutic.pulpitis.stages.img_title_4')
                     </div>
                     <div class="pulpitis__stages-text">@lang('therapeutic.pulpitis.stages.img_text_4')</div>
                  </div>
               </div>
               <div class="pulpitis__stages-item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/stages/1.jpg')}}" alt="">
                  </picture>
                  <div class="pulpitis__stages-content">
                     <div class="pulpitis__stages-title _title-icon">@lang('therapeutic.pulpitis.stages.img_title_5')
                     </div>
                     <div class="pulpitis__stages-text">@lang('therapeutic.pulpitis.stages.img_text_5')</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="caries__tipes-attention attention">
            <div class="attention__img">
               <img src="{{asset('/img/attention.jpg')}}" alt="">
            </div>
            <div class="attention__text min">
               @lang('therapeutic.pulpitis.stages.attention')
            </div>
         </div>
      </div>
      <div class="pulpitis__stages-therapy">
         <div class="pulpitis__stages-therapy-title">
            <h2 class="_title">@lang('therapeutic.pulpitis.stages_therapy.title')</h2>
         </div>

         <div class="pulpitis__stages-therapy-body img-block-three">
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages_therapy/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/stages_therapy/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/stages_therapy/1.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.pulpitis.stages_therapy.img_title_1')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.pulpitis.stages_therapy.img_text_1')
               </div>
            </div>
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages_therapy/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/stages_therapy/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/stages_therapy/2.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.pulpitis.stages_therapy.img_title_2')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.pulpitis.stages_therapy.img_text_2')
               </div>
            </div>
            <div class="img-block-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/pulpitis/stages_therapy/3.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/stages_therapy/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/stages_therapy/3.jpg')}}" alt="">
               </picture>
               <div class="img-block-three__title _title-img">
                  @lang('therapeutic.pulpitis.stages_therapy.img_title_3')
               </div>
               <div class="img-block-three__text">
                  @lang('therapeutic.pulpitis.stages_therapy.img_text_3')
               </div>
            </div>
         </div>
         <div class="caries__tipes-attention attention">
            <div class="attention__img">
               <img src="{{asset('/img/attention.jpg')}}" alt="">
            </div>
            <div class="attention__text">
               @lang('therapeutic.pulpitis.stages_therapy.attention')
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
<section class="periodontitis _margin-big">
   <div class="periodontitis__container">
      <div class="periodontitis__title _title-block">
         <h2>@lang('therapeutic.periodontitis.title')</h2>
         <p>@lang('therapeutic.periodontitis.title_text')</p>
      </div>
      <div class="periodontitis__classification _margin-big">
         <div class="periodontitis__classification-title">
            <h2 class="_title">@lang('therapeutic.periodontitis.classification.title')</h2>
            <div class="periodontitis__classification-body icon-three">
               <div class="icon-three__item">
                  <picture>
                     <source type="image/webp"
                        srcset="{{asset('img/therapeutic/periodontitis/classification/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/classification/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/classification/1.jpg')}}" alt="">
                  </picture>
                  <div class="icon-three__content">
                     <div class="icon-three__title _title-icon">
                        @lang('therapeutic.periodontitis.classification.img_title_1')
                     </div>
                     <div class="icon-three__text">
                        @lang('therapeutic.periodontitis.classification.img_text_1')</div>
                  </div>
               </div>
               <div class="icon-three__item">
                  <picture>
                     <source type="image/webp"
                        srcset="{{asset('img/therapeutic/periodontitis/classification/2.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/classification/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/classification/2.jpg')}}" alt="">
                  </picture>
                  <div class="periodontitis__classification-content">
                     <div class="icon-three__title _title-icon">
                        @lang('therapeutic.periodontitis.classification.img_title_2')
                     </div>
                     <div class="icon-three__text">
                        @lang('therapeutic.periodontitis.classification.img_text_2')</div>
                  </div>
               </div>
               <div class="icon-three__item">
                  <picture>
                     <source type="image/webp"
                        srcset="{{asset('img/therapeutic/periodontitis/classification/2.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/classification/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/classification/2.jpg')}}" alt="">
                  </picture>
                  <div class="periodontitis__classification-content">
                     <div class="icon-three__title _title-icon">
                        @lang('therapeutic.periodontitis.classification.img_title_2')
                     </div>
                     <div class="icon-three__text">
                        @lang('therapeutic.periodontitis.classification.img_text_2')</div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="periodontitis__forms _margin-big">
         <div class="periodontitis__forms-title">
            <h2 class="_title">@lang('therapeutic.periodontitis.forms.title')</h2>
            <div class="periodontitis__forms-body icon-three">
               <div class="icon-three__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/forms/1.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/forms/1.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/forms/1.jpg')}}" alt="">
                  </picture>
                  <div class="icon-three__content">
                     <div class="icon-three__title _title-icon">
                        @lang('therapeutic.periodontitis.forms.img_title_1')
                     </div>
                     <div class="icon-three__text">
                        @lang('therapeutic.periodontitis.forms.img_text_1')</div>
                  </div>
               </div>
               <div class="icon-three__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/forms/2.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/forms/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/forms/2.jpg')}}" alt="">
                  </picture>
                  <div class="periodontitis__forms-content">
                     <div class="icon-three__title _title-icon">
                        @lang('therapeutic.periodontitis.forms.img_title_2')
                     </div>
                     <div class="icon-three__text">
                        @lang('therapeutic.periodontitis.forms.img_text_2')</div>
                  </div>
               </div>
               <div class="icon-three__item">
                  <picture>
                     <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/forms/2.webp')}}">
                     <source srcset="{{asset('img/therapeutic/pulpitis/forms/2.jpg')}}">
                     <img src="{{asset('img/therapeutic/pulpitis/forms/2.jpg')}}" alt="">
                  </picture>
                  <div class="periodontitis__forms-content">
                     <div class="icon-three__title _title-icon">
                        @lang('therapeutic.periodontitis.forms.img_title_2')
                     </div>
                     <div class="icon-three__text">
                        @lang('therapeutic.periodontitis.forms.img_text_2')</div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="periodontitis__kinds _margin-big">
         <div class="periodontitis__kinds-title">
            <h2 class="_title">@lang('therapeutic.periodontitis.kinds.title')</h2>
         </div>
         <div class="periodontitis__kinds-body icon-three">
            <div class="icon-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/kinds/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/kinds/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/kinds/1.jpg')}}" alt="">
               </picture>
               <div class="icon-three__content">
                  <div class="icon-three__title _title-icon">
                     @lang('therapeutic.periodontitis.kinds.img_title_1')
                  </div>
                  <div class="icon-three__text">
                     @lang('therapeutic.periodontitis.kinds.img_text_1')</div>
               </div>
            </div>
            <div class="icon-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/kinds/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/kinds/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/kinds/2.jpg')}}" alt="">
               </picture>
               <div class="periodontitis__kinds-content">
                  <div class="icon-three__title _title-icon">
                     @lang('therapeutic.periodontitis.kinds.img_title_2')
                  </div>
                  <div class="icon-three__text">
                     @lang('therapeutic.periodontitis.kinds.img_text_2')</div>
               </div>
            </div>
            <div class="icon-three__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/kinds/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/pulpitis/kinds/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/pulpitis/kinds/2.jpg')}}" alt="">
               </picture>
               <div class="periodontitis__kinds-content">
                  <div class="icon-three__title _title-icon">
                     @lang('therapeutic.periodontitis.kinds.img_title_2')
                  </div>
                  <div class="icon-three__text">
                     @lang('therapeutic.periodontitis.kinds.img_text_2')</div>
               </div>
            </div>
         </div>
      </div>

      <div class="periodontitis__methods">
         <div class="periodontitis__kinds-title">
            <h2 class="_title">@lang('therapeutic.periodontitis.methods.title')</h2>
         </div>
         <div class="periodontitis__methods-body img-block-two">
            <div class="img-block-two__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/methods/1.webp')}}">
                  <source srcset="{{asset('img/therapeutic/periodontitis/methods/1.jpg')}}">
                  <img src="{{asset('img/therapeutic/periodontitis/methods/1.jpg')}}" alt="">
               </picture>
               <div class="img-block-two__title _title-img">
                  @lang('therapeutic.periodontitis.methods.img_title_1')
               </div>
               <div class="img-block-two__text">
                  @lang('therapeutic.periodontitis.methods.img_text_1')
               </div>
            </div>
            <div class="img-block-two__item">
               <picture>
                  <source type="image/webp" srcset="{{asset('img/therapeutic/periodontitis/methods/2.webp')}}">
                  <source srcset="{{asset('img/therapeutic/periodontitis/methods/2.jpg')}}">
                  <img src="{{asset('img/therapeutic/periodontitis/methods/2.jpg')}}" alt="">
               </picture>
               <div class="img-block-two__title _title-img">
                  @lang('therapeutic.periodontitis.methods.img_title_2')
               </div>
               <div class="img-block-two__text">
                  @lang('therapeutic.periodontitis.methods.img_text_2')
               </div>
            </div>
         </div>

         <div class="periodontitis__tipes-attention attention">
            <div class="attention__img">
               <img src="{{asset('/img/attention.jpg')}}" alt="">
            </div>
            <div class="attention__text">
               @lang('therapeutic.periodontitis.methods.attention')
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