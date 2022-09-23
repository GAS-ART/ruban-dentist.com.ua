@section('header')

<header class="header">

   <div class="header__wraper">
      <div class="header__background"></div>
      <div class="header__container">
         <div class="header__items">
            <div class="header__item header-logo">
               <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}" class="header-logo__logo">
                  @if(!Request::is('ru/teeth_cleaning', 'ua/teeth_cleaning'))
                  <img class="blue" src="{{asset('/img/logo.png')}}" alt="Досктор стаматолог Татьяна Рубан">
                  <img class="white inactive" src="{{asset('/img/logo_white.png')}}"
                     alt="Досктор стаматолог Татьяна Рубан">
                  @else
                  <img src="{{asset('/img/logo_white.png')}}" alt="Досктор стаматолог Татьяна Рубан">
                  @endif
               </a>
               <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}"
                  class="header-logo__text @yield('white')">
                  <div class="header-logo__text-name">DR. TANYA RUBAN</div>
                  <div class="header-logo__text-status">dentist</div>
               </a>
            </div>
            <nav class="header__item header-menu @yield('white')">
               <a class="header-menu__link"
                  href="{{ route('index.lang', ['locale' => __('lang.current')]) }}">@lang('header.advantages')</a>
               <button class="header-menu__link _services-menu-btn">@lang('header.services')</button>
               <!--#service-->
               <a class="header-menu__link" href="#contacts">@lang('header.contacts')</a>
            </nav>
            <div class="header__item header-actions">
               <div class="header-actions__row">
                  <a class="header-actions__phone _icon-phone" href="tel:%2B380956664748">+38 (095) 666-47-48</a>
               </div>
               <div class="header-actions__row">
                  <a class="header-actions__lang" href="{{ route('locale', __('lang.ua')) }}">UA</a>
                  <span class="header-actions__separator">|</span>
                  <a class="header-actions__lang" href="{{ route('locale', __('lang.ru')) }}">RU</a>
               </div>
            </div>
            <div class="header__menu menu burger">
               <nav class="menu__body">
                  <ul class="menu__list">
                     <li class="menu__item">
                        <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}"
                           class="menu__link @yield('main')">
                           @lang('header.advantages')
                        </a>
                     </li>
                     <li class="menu__item">
                        <p>
                           @lang('header.services')
                        <ul class="menu__sub-list">
                           <li class="menu__sub-item"><a
                                 href="{{ route('cleaning.lang', ['locale' => __('lang.current')]) }}"
                                 class="menu__sub-link @yield('cleaning')">@lang('home.services.service.title_3')</a>
                           </li>
                           <li class="menu__sub-item"><a
                                 href="{{ route('therapeutic.lang', ['locale' => __('lang.current')]) }}"
                                 class="menu__sub-link @yield('therapeutic')">@lang('home.services.service.title_1')</a>
                           </li>
                           <li class="menu__sub-item"><a
                                 href="{{ route('surgery.lang', ['locale' => __('lang.current')]) }}"
                                 class="menu__sub-link @yield('surgery')">@lang('home.services.service.title_2')</a>
                           </li>
                           <li class="menu__sub-item"><a
                                 href="{{ route('prosthesis.lang', ['locale' => __('lang.current')]) }}"
                                 class="menu__sub-link @yield('prosthesis')">@lang('home.services.service.title_4')</a>
                           </li>
                           <li class="menu__sub-item"><a
                                 href="{{ route('pediatrician.lang', ['locale' => __('lang.current')]) }}"
                                 class="menu__sub-link @yield('pediatrician')">@lang('home.services.service.title_5')</a>
                           </li>
                           <li class="menu__sub-item"><a
                                 href="{{ route('plasmotherapy.lang', ['locale' => __('lang.current')]) }}"
                                 class="menu__sub-link @yield('plasmotherapy')">@lang('home.services.service.title_6')</a>
                           </li>
                        </ul>
                        </p>
                     </li>
                     <li class="menu__item">
                        <a href="#contacts" class="menu__link ancor">
                           @lang('header.contacts')
                        </a>

                     </li>
                     <li class="menu__item">
                        <a class="header-actions__lang" href="{{ route('locale', __('lang.ua')) }}">UA</a>
                        <span class="header-actions__separator">|</span>
                        <a class="header-actions__lang" href="{{ route('locale', __('lang.ru')) }}">RU</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <div class="icon-menu">
            <span></span>
         </div>
         <div class="header__services-menu header-services-menu">
            <div class="header-services-menu__container">
               <a class="header-services-menu__link @yield('therapeutic')"
                  href="{{ route('therapeutic.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_1')</a>

               <a class="header-services-menu__link @yield('cleaning')"
                  href="{{ route('cleaning.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_3')</a>

               <a class="header-services-menu__link @yield('pediatrician')"
                  href="{{ route('pediatrician.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_5')</a>

               <a class="header-services-menu__link @yield('surgery')"
                  href="{{ route('surgery.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_2')</a>

               <a class="header-services-menu__link @yield('prosthesis')"
                  href="{{ route('prosthesis.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_4')</a>

               <a class="header-services-menu__link @yield('plasmotherapy')"
                  href="{{ route('plasmotherapy.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_6')</a>
            </div>

         </div>
      </div>
   </div>
</header>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

</body>

</html>