@section('footer')
<span id="contacts"></span>
<footer class="footer">
   <div class="footer__container">

      <div class="footer__body">
         <div class="footer__content content-footer">

            <div class="content-footer__logo">
               <div class="content-footer__logo-img">
                  <img src="{{asset('/img/logo_dark.png')}}" alt="">
               </div>
               <div class="content-footer__logo-title">
                  <h2>DR. TANYA RUBAN</h2>
                  <h3>dentist</h3>
               </div>
            </div>

            <div class="content-footer__text">

               <div class="contant-footer__menu">
                  <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}"
                     class="@yield('main')">@lang('header.advantages')</a>
                  <button class="contant-footer__menu-services">@lang('header.services')</button>
                  <ul class="contant-footer__menu-list">
                     <li class="contant-footer__menu-item"><a
                           href="{{ route('therapeutic.lang', ['locale' => __('lang.current')]) }}"
                           class="contant-footer__menu-link @yield('therapeutic')">@lang('home.services.service.title_1')</a>
                     </li>
                     <li class="contant-footer__menu-item"><a
                           href="{{ route('surgery.lang', ['locale' => __('lang.current')]) }}"
                           class="contant-footer__menu-link @yield('surgery')">@lang('home.services.service.title_2')</a>
                     </li>
                     <li class="contant-footer__menu-item"><a
                           href="{{ route('cleaning.lang', ['locale' => __('lang.current')]) }}"
                           class="contant-footer__menu-link @yield('cleaning')">@lang('home.services.service.title_3')</a>
                     </li>
                     <li class="contant-footer__menu-item"><a
                           href="{{ route('prosthesis.lang', ['locale' => __('lang.current')]) }}"
                           class="contant-footer__menu-link @yield('prosthesis')">@lang('home.services.service.title_4')</a>
                     </li>
                     <li class="contant-footer__menu-item"><a
                           href="{{ route('pediatrician.lang', ['locale' => __('lang.current')]) }}"
                           class="contant-footer__menu-link @yield('pediatrician')">@lang('home.services.service.title_5')</a>
                     </li>
                     <li class="contant-footer__menu-item"><a
                           href="{{ route('plasmotherapy.lang', ['locale' => __('lang.current')]) }}"
                           class="contant-footer__menu-link @yield('plasmotherapy')">@lang('home.services.service.title_6')</a>
                     </li>
                  </ul>
               </div>
               <div class="contant-footer__working-hours">
                  <div class="contant-footer__working-hours-title">
                     @lang('footer.work_hourse_title')
                  </div>
                  <div class="contant-footer__working-hours-text">
                     @lang('footer.work_hourse_text')
                  </div>
               </div>

            </div>

         </div>
         <div class="footer__contacts contacts-footer">
            <div class="contacts-footer__title">@lang('footer.contacts')</div>
            <div class="contacts-footer__name">@lang('footer.name')</div>
            <div class="contacts-footer__address">@lang('footer.address')</div>
            <div class="contacts-footer__phone"><a class="contacts-footer__phone-link _icon-phone1"
                  href="tel:%2B380956664748">@lang('footer.phone')</a></div>
            <div class="contacts-footer__mesengers">

               <a class="contacts-footer__mesengers-viber" href="viber://chat?number=%2B380956664748">
                  <img class="contacts-footer__mesengers-img" src="{{asset('img/icons/viber_white.png')}}"
                     alt="Записть на прием к стоматолгу через viber">
                  <img class="contacts-footer__mesengers-img" src="{{asset('img/icons/viber_min.png')}}"
                     alt="Записть на прием к стоматолгу через viber">
               </a>

               <a class="contacts-footer__mesengers-telegram" href="tg://resolve?domain=DR_Tanya_Ruban">
                  <img class="contacts-footer__mesengers-img" src="{{asset('img/icons/telegram_white.png')}}"
                     alt="Записть на прием к стоматолгу через telegram">
                  <img class="contacts-footer__mesengers-img" src="{{asset('img/icons/telegram_blue-white.png')}}"
                     alt="Записть на прием к стоматолгу через telegram">
               </a>

               <a class="contacts-footer__mesengers-whatsapp" href="https://wa.me/380956664748">
                  <img class="contacts-footer__mesengers-img" src="{{asset('img/icons/whatsapp_white.png')}}"
                     alt="Записть на прием к стоматолгу через watsapp">
                  <img class="contacts-footer__mesengers-img" src="{{asset('img/icons/whatsapp_green.png')}}"
                     alt="Записть на прием к стоматолгу через watsapp">
               </a>

            </div>
            <div class="contacts-footer__social">
               <a class="contacts-footer__social-link _icon-instagram" href="https://www.instagram.com/dr.ruban.t.v/"
                  target="_blank">dr.ruban.t.v</a>
            </div>
         </div>
      </div>
      <div class="contact-footer__copiright"><span>©</span> Copyright 2022</div>
   </div>
</footer>