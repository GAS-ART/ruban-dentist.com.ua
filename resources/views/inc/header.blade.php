@section('header')
<header class="header">
   <div class="header__wraper">
      <div class="header__container">
         <div class="header__items">
            <div class="header__item header-logo">
               <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}" class="header-logo__logo">
                  <img src="{{asset('/img/logo.png')}}" alt="Досктор стаматолог Татьяна Рубан">
               </a>
               <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}" class="header-logo__text">
                  <div class="header-logo__text-name">DR. TANYA RUBAN</div>
                  <div class="header-logo__text-status">dentist</div>
               </a>
            </div>
            <nav class="header__item header-menu">
               <a class="header-menu__link" href="#why-me">@lang('header.advantages')</a>
               <a class="header-menu__link" href="#service">@lang('header.services')</a>
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
         </div>
      </div>
   </div>
</header>