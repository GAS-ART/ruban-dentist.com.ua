//require('./bootstrap');

import { popUp } from './modules/popup.js';

window.onload = function () {
   document.addEventListener('click', documentActions);

   function documentActions(e) {
      const target = e.target;

      //remove hedaer menu
      if (!target.closest('.header-services-menu') && !target.closest('._services-menu-btn')) {
         headerMenuBody.classList.remove('active');
      }

      //remove burger
      if (!target.closest('.burger') && !target.closest('.icon-menu') || target.classList.contains('menu__link')) {
         menuBtn.classList.remove('open');
         burger.classList.remove('open');
         burger.classList.remove('lock');
      }

      //popUp
      if (target.closest('.link-on-popup')) {
         popUp(target.closest('.link-on-popup').dataset.popupId);
         e.preventDefault();
      }
   }

   //open hedaer menu
   let headerMenuBtn = document.querySelector('._services-menu-btn');
   let headerMenuBody = document.querySelector('.header-services-menu');
   headerMenuBtn.addEventListener('click', () => headerMenuBody.classList.toggle('active'));

   //Menu burger
   const body = document.querySelector('body');
   const menuBtn = document.querySelector('.icon-menu');
   const burger = document.querySelector('.burger');
   menuBtn.addEventListener('click', function () {
      menuBtn.classList.toggle('open');
      burger.classList.toggle('open');
      body.classList.toggle('lock');
   });

   //popup animation
   let viberImages = document.querySelector('._viber');
   let viberBlock = document.querySelector('.popup__viber');
   let telegramImages = document.querySelector('._telegram');
   let telegramBlock = document.querySelector('.popup__telegram');
   let whatsappImages = document.querySelector('._whatsapp');
   let whatsappBlock = document.querySelector('.popup__watsapp');

   viberImages.addEventListener('mouseenter', () => viberBlock.classList.add('active'));
   viberImages.addEventListener('mouseleave', () => viberBlock.classList.remove('active'));
   viberBlock.addEventListener('mouseenter', () => viberImages.classList.add('active'));
   viberBlock.addEventListener('mouseleave', () => viberImages.classList.remove('active'));

   telegramImages.addEventListener('mouseenter', () => telegramBlock.classList.add('active'));
   telegramImages.addEventListener('mouseleave', () => telegramBlock.classList.remove('active'));
   telegramBlock.addEventListener('mouseenter', () => telegramImages.classList.add('active'));
   telegramBlock.addEventListener('mouseleave', () => telegramImages.classList.remove('active'));

   whatsappImages.addEventListener('mouseenter', () => whatsappBlock.classList.add('active'));
   whatsappImages.addEventListener('mouseleave', () => whatsappBlock.classList.remove('active'));
   whatsappBlock.addEventListener('mouseenter', () => whatsappImages.classList.add('active'));
   whatsappBlock.addEventListener('mouseleave', () => whatsappImages.classList.remove('active'));

   //logo actions
   const logo = document.querySelector('.header-logo__logo');
   const logoText = document.querySelector('.header-logo__text');
   if (window.matchMedia("(pointer: fine)").matches) {
      logo.addEventListener('mouseenter', function () {
         logoText.classList.add('active');
      });
      logo.addEventListener('mouseleave', function () {
         logoText.classList.remove('active');
      });
      logoText.addEventListener('mouseenter', function () {
         logo.classList.add('active');
      });
      logoText.addEventListener('mouseleave', function () {
         logo.classList.remove('active');
      });
   }

   //Прокрутка header
   const headerElement = document.querySelector('.header');
   let whiteLogo = document.querySelector('.white');
   let blueLogo = document.querySelector('.blue');

   function watchHeader(entries) {
      if (entries[0].isIntersecting) {
         entries[0].target.classList.remove('_scroll');
         if (blueLogo) {
            blueLogo.classList.remove('inactive')
            whiteLogo.classList.add('inactive');
         }
      } else {
         entries[0].target.classList.add('_scroll');
         if (blueLogo) {
            blueLogo.classList.add('inactive')
            whiteLogo.classList.remove('inactive');
         }
      }

   }

   const headerObserver = new IntersectionObserver(watchHeader,);
   headerObserver.observe(headerElement);

   //header animation
   const animation = document.querySelectorAll('._animate');
   const options = {
      rootMargin: '0px 0px 0px 200%',
   }

   const animationObserver = new IntersectionObserver(watchAnimation, options);
   animation.forEach(item => animationObserver.observe(item));

   function watchAnimation(entries) {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            entry.target.classList.add('_animated');
         }
      });
   }

   //tooth animation
   if (document.querySelector("section.services")) {
      let threshold = 1;
      window.innerWidth < 1050 ? threshold = 0.2 : threshold = 0.5;
      const toothOptions = {
         rootMargin: '200% 0px 0px 200%',
         threshold: threshold,
      }

      if (threshold == 0.5) {
         let animationToothObserver = new IntersectionObserver(watchToothAnimation, toothOptions);
         const animateTooth = document.querySelector('._animate-tooth');
         const toothElements = document.querySelectorAll('._tooth');
         animationToothObserver.observe(animateTooth);

         function watchToothAnimation(entries) {
            if (entries[0].isIntersecting) {
               toothElements.forEach(item => item.classList.add('_animated'));
            }
         }

         window.addEventListener('resize', resize);
         function resize() {
            if (toothElements[0].classList.contains('_animated')) window.removeEventListener('resize', resize);
            if (window.innerWidth < 1050) {
               toothOptions.threshold = 0.2;
               animationToothObserver = new IntersectionObserver(watchToothAnimation, toothOptions);
               animationToothObserver.observe(animateTooth);
            }
         }
      } else {
         const animateToothMobile = document.querySelectorAll('._tooth-mobile');
         const animationToothObserver = new IntersectionObserver(watchToothAnimationMobile, toothOptions);
         animateToothMobile.forEach(item => animationToothObserver.observe(item));

         function watchToothAnimationMobile(entries) {
            entries.forEach(entry => {
               if (entry.isIntersecting) {
                  entry.target.classList.add('_animated');
               }
            });
         }
      }
   }


   //scroll to services
   const scrolling = (selectorBtn) => {
      //const btnUp = document.querySelector(selectorBtn);
      const links = document.querySelectorAll("[href='#contacts']");
      let speed = 0.3;
      const headerHeight = document.querySelector('.header__wraper').offsetHeight;

      /*window.addEventListener("scroll", () => {
        if (document.documentElement.scrollTop > 1600) {
          btnUp.style.opacity = "1";
        } else {
          btnUp.style.opacity = "0";
        }
      });*/

      for (let i = 0; i < links.length; i++) {
         links[i].addEventListener("click", function (event) {
            event.preventDefault();

            let widthTop = Math.round(
               document.documentElement.scrollTop || document.body.scrollTop
            ),
               hash = this.hash,
               toBlock = document.querySelector(hash).getBoundingClientRect().top - headerHeight,
               start = null;
            requestAnimationFrame(step);

            function step(time) {
               if (start === null) {
                  start = time;
               }

               let progress = time - start,
                  r =
                     toBlock < 0
                        ? Math.max(widthTop - progress / speed, widthTop + toBlock)
                        : Math.min(widthTop + progress / speed, widthTop + toBlock);

               let element = document.documentElement || document.body;
               element.scrollTo(0, r);

               if (r != widthTop + toBlock) {
                  requestAnimationFrame(step);
               } else {
                  // location.hash = hash;
               }
            }
         });
      }
   };

   scrolling(/*".pageup"*/);

   //footer drop down menu
   document.querySelector('.contant-footer__menu-services').addEventListener('click', () => document.querySelector('.contant-footer__menu-list').classList.toggle('active'));
}
