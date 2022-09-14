@section('popup')

<div id="lead" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup">X</a>
         <div class="popup__text-link">
            <h4>@lang('popup.title')</h4>
            <p>@lang('popup.text')</p>
         </div>
         <div class="popup__mesengers">
            <div class="popup__mesenger">
               <a class="popup__mesenger-link-img _viber" href="viber://chat?number=%2B380956664748"><img
                     class="popup__mesenger-img" src="{{asset('img/icons/viber_white.png')}}"
                     alt="Записть на прием к стоматолгу через viber"><img class="popup__mesenger-img"
                     src="{{asset('img/icons/viber.png')}}" alt="Записть на прием к стоматолгу через viber"></a>
               <a class="popup__viber" href="viber://chat?number=%2B380956664748">@lang('popup.viber')</a>
            </div>

            <div class="popup__mesenger">
               <a class="popup__mesenger-link-img _telegram" href="tg://resolve?domain="><img
                     class="popup__mesenger-img" src="{{asset('img/icons/telegram_white.png')}}"
                     alt="Записть на прием к стоматолгу через telegram"><img class="popup__mesenger-img"
                     src="{{asset('img/icons/telegram.png')}}" alt="Записть на прием к стоматолгу через telegram"></a>
               <a class="popup__telegram" href="tg://resolve?domain=">@lang('popup.telegram')</a>
            </div>

            <div class="popup__mesenger">
               <a class="popup__mesenger-link-img _whatsapp" href="https://wa.me/380956664748"><img
                     class="popup__mesenger-img" src="{{asset('img/icons/whatsapp_white.png')}}"
                     alt="Записть на прием к стоматолгу через watsapp"><img class="popup__mesenger-img"
                     src="{{asset('img/icons/whatsapp.png')}}" alt="Записть на прием к стоматолгу через watsapp"></a>
               <a class="popup__watsapp" href="https://wa.me/380956664748">@lang('popup.whatsapp')</a>
            </div>
         </div>
      </div>
   </div>
</div>