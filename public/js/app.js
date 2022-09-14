/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_popup_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/popup.js */ "./resources/js/modules/popup.js");
//require('./bootstrap');


window.onload = function () {
  document.addEventListener('click', documentActions);

  function documentActions(e) {
    var target = e.target; //remove burger

    if (!target.closest('.burger') && !target.closest('.icon-menu') || target.classList.contains('menu__link')) {
      menuBtn.classList.remove('open');
      burger.classList.remove('open');
    } //popUp


    if (target.closest('.link-on-popup')) {
      (0,_modules_popup_js__WEBPACK_IMPORTED_MODULE_0__.popUp)(target.closest('.link-on-popup').dataset.popupId);
      e.preventDefault();
    }
  } //Menu burger


  var menuBtn = document.querySelector('.icon-menu');
  var burger = document.querySelector('.burger');
  menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('open');
    burger.classList.toggle('open');
  }); //popup animation

  var viberImages = document.querySelector('._viber');
  var viberBlock = document.querySelector('.popup__viber');
  var telegramImages = document.querySelector('._telegram');
  var telegramBlock = document.querySelector('.popup__telegram');
  var whatsappImages = document.querySelector('._whatsapp');
  var whatsappBlock = document.querySelector('.popup__watsapp');
  viberImages.addEventListener('mouseenter', function () {
    return viberBlock.classList.add('active');
  });
  viberImages.addEventListener('mouseleave', function () {
    return viberBlock.classList.remove('active');
  });
  viberBlock.addEventListener('mouseenter', function () {
    return viberImages.classList.add('active');
  });
  viberBlock.addEventListener('mouseleave', function () {
    return viberImages.classList.remove('active');
  });
  telegramImages.addEventListener('mouseenter', function () {
    return telegramBlock.classList.add('active');
  });
  telegramImages.addEventListener('mouseleave', function () {
    return telegramBlock.classList.remove('active');
  });
  telegramBlock.addEventListener('mouseenter', function () {
    return telegramImages.classList.add('active');
  });
  telegramBlock.addEventListener('mouseleave', function () {
    return telegramImages.classList.remove('active');
  });
  whatsappImages.addEventListener('mouseenter', function () {
    return whatsappBlock.classList.add('active');
  });
  whatsappImages.addEventListener('mouseleave', function () {
    return whatsappBlock.classList.remove('active');
  });
  whatsappBlock.addEventListener('mouseenter', function () {
    return whatsappImages.classList.add('active');
  });
  whatsappBlock.addEventListener('mouseleave', function () {
    return whatsappImages.classList.remove('active');
  }); //logo actions

  var logo = document.querySelector('.header-logo__logo');
  var logoText = document.querySelector('.header-logo__text');

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
  } //Прокрутка header


  var headerElement = document.querySelector('.header');
  var whiteLogo = document.querySelector('.white');
  var blueLogo = document.querySelector('.blue');

  function watchHeader(entries) {
    if (entries[0].isIntersecting) {
      entries[0].target.classList.remove('_scroll');

      if (blueLogo) {
        blueLogo.classList.remove('inactive');
        whiteLogo.classList.add('inactive');
      }
    } else {
      entries[0].target.classList.add('_scroll');

      if (blueLogo) {
        blueLogo.classList.add('inactive');
        whiteLogo.classList.remove('inactive');
      }
    }
  }

  var headerObserver = new IntersectionObserver(watchHeader);
  headerObserver.observe(headerElement); //header animation

  var animation = document.querySelectorAll('._animate');
  var options = {
    rootMargin: '0px 0px 0px 200%'
  };
  var animationObserver = new IntersectionObserver(watchAnimation, options);
  animation.forEach(function (item) {
    return animationObserver.observe(item);
  });

  function watchAnimation(entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('_animated');
      }
    });
  } //tooth animation


  if (document.querySelector("section.services")) {
    var threshold = 1;
    window.innerWidth < 1050 ? threshold = 0.2 : threshold = 0.5;
    var toothOptions = {
      rootMargin: '200% 0px 0px 200%',
      threshold: threshold
    };

    if (threshold == 0.5) {
      var watchToothAnimation = function watchToothAnimation(entries) {
        if (entries[0].isIntersecting) {
          toothElements.forEach(function (item) {
            return item.classList.add('_animated');
          });
        }
      };

      var resize = function resize() {
        if (toothElements[0].classList.contains('_animated')) window.removeEventListener('resize', resize);

        if (window.innerWidth < 1050) {
          toothOptions.threshold = 0.2;
          animationToothObserver = new IntersectionObserver(watchToothAnimation, toothOptions);
          animationToothObserver.observe(animateTooth);
        }
      };

      var animationToothObserver = new IntersectionObserver(watchToothAnimation, toothOptions);
      var animateTooth = document.querySelector('._animate-tooth');
      var toothElements = document.querySelectorAll('._tooth');
      animationToothObserver.observe(animateTooth);
      window.addEventListener('resize', resize);
    } else {
      var watchToothAnimationMobile = function watchToothAnimationMobile(entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('_animated');
          }
        });
      };

      var animateToothMobile = document.querySelectorAll('._tooth-mobile');

      var _animationToothObserver = new IntersectionObserver(watchToothAnimationMobile, toothOptions);

      animateToothMobile.forEach(function (item) {
        return _animationToothObserver.observe(item);
      });
    }
  } //scroll to services


  var scrolling = function scrolling(selectorBtn) {
    //const btnUp = document.querySelector(selectorBtn);
    var links = document.querySelectorAll("[href^='#']");
    var speed = 0.3;
    var headerHeight = document.querySelector('.header__wraper').offsetHeight;
    /*window.addEventListener("scroll", () => {
      if (document.documentElement.scrollTop > 1600) {
        btnUp.style.opacity = "1";
      } else {
        btnUp.style.opacity = "0";
      }
    });*/

    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener("click", function (event) {
        event.preventDefault();
        var widthTop = Math.round(document.documentElement.scrollTop || document.body.scrollTop),
            hash = this.hash,
            toBlock = document.querySelector(hash).getBoundingClientRect().top - headerHeight,
            start = null;
        requestAnimationFrame(step);

        function step(time) {
          if (start === null) {
            start = time;
          }

          var progress = time - start,
              r = toBlock < 0 ? Math.max(widthTop - progress / speed, widthTop + toBlock) : Math.min(widthTop + progress / speed, widthTop + toBlock);
          var element = document.documentElement || document.body;
          console.log(r != widthTop + toBlock);
          element.scrollTo(0, r);

          if (r != widthTop + toBlock) {
            requestAnimationFrame(step);
          } else {// location.hash = hash;
          }
        }
      });
    }
  };

  scrolling();
};

/***/ }),

/***/ "./resources/js/modules/popup.js":
/*!***************************************!*\
  !*** ./resources/js/modules/popup.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "popUp": () => (/* binding */ popUp)
/* harmony export */ });
function popUp(popupId) {
  var popUp = document.getElementById(popupId);
  var bodyLock = document.getElementById('body');
  var popupCloseIcon = popUp.querySelector('.close-popup'); //const popupBtn = popUp.querySelector('.popup__button');

  var popupSending = popUp.querySelector('.popup__send-load');
  var filePreview = popUp.querySelector('.preview-file') || false;
  popUp.classList.add('open');
  bodyLock.classList.add('lock');
  popupCloseIcon.addEventListener('click', function (e) {
    popupClose(popUp);
    e.preventDefault();
  });
  /*popupBtn.addEventListener('click', function () {
  	popupClose(popUp);
  });*/

  function popupClose(popupActive) {
    popupActive.classList.remove('open');
    bodyLock.classList.remove("lock");
    popUp.classList.remove('send');

    if (filePreview) {
      filePreview.innerHTML = '';
    }
  }

  popUp.addEventListener('mousedown', function (e) {
    if (!e.target.closest('.popup__content')) {
      popupClose(popUp);
    }
  });
}
;

/***/ }),

/***/ "./resources/css/scss/style.scss":
/*!***************************************!*\
  !*** ./resources/css/scss/style.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/css/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;