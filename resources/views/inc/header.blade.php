@section('header')

<header class="header">
   <div class="header__wraper">
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
               <div class="icon-menu">
                  <span></span>
               </div>
               <div class="header-actions__row">
                  <a class="header-actions__phone _icon-phone" href="tel:%2B0956664748">+38 (095) 666-47-48</a>
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
                        <a href="#why-me" class="menu__link">
                           @lang('header.advantages')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#service" class="menu__link">
                           @lang('header.services')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#contacts" class="menu__link">
                           @lang('header.contacts')
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="header__services-menu header-services-menu">
               <div class="header-services-menu__container">
                  <a class="header-services-menu__link"
                     href="{{ route('therapeutic.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_1')</a>
                  <a class="header-services-menu__link"
                     href="{{ route('cleaning.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_3')</a>
                  <a class="header-services-menu__link"
                     href="{{ route('pediatrician.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_5')</a>
                  <a class="header-services-menu__link"
                     href="{{ route('surgery.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_2')</a>
                  <a class="header-services-menu__link"
                     href="{{ route('prosthesis.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_4')</a>
                  <a class="header-services-menu__link"
                     href="{{ route('plasmotherapy.lang', ['locale' => __('lang.current')]) }}">@lang('home.services.service.title_6')</a>
               </div>

            </div>
         </div>
      </div>
   </div>
</header>