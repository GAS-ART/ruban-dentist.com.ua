//require('./bootstrap');

window.onload = function () {
   document.addEventListener('click', documentActions);

   function documentActions(e) {
      const target = e.target;

      //remove burger
      if (!target.closest('.burger') && !target.closest('.icon-menu')) {
         menuBtn.classList.remove('open');
         burger.classList.remove('open');
         phone.classList.remove('white');
         langsSeparator.classList.remove('white');
         langs.forEach(lang => lang.classList.remove('white'))
      }

      //popUp
      /*  if (target.closest('.link-on-popup')) {
           popUp(target.closest('.link-on-popup').dataset.popupId);
           e.preventDefault();
        }*/
   }

   //Menu burger
   const menuBtn = document.querySelector('.icon-menu');
   const burger = document.querySelector('.burger');
   const phone = document.querySelector('.header-actions__phone');
   const langs = document.querySelectorAll('.header-actions__lang');
   const langsSeparator = document.querySelector('.header-actions__separator');
   menuBtn.addEventListener('click', function () {
      menuBtn.classList.toggle('open');
      burger.classList.toggle('open');
      phone.classList.toggle('white');
      langs.forEach(lang => lang.classList.toggle('white'));
      langsSeparator.classList.toggle('white');
   });


}
