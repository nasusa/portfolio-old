/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {



/***/ },
/* 1 */
/***/ function(module, exports) {

	var $backToTop = $(".back-to-top");
	$backToTop.hide();
	$(window).on('scroll', function() {
	  if ($(this).scrollTop() > 200) {
	    $backToTop.fadeIn();
	  } else {
	    $backToTop.fadeOut();
	  }
	});
	
	$backToTop.on('click', function(e) {
	  $("html, body").animate({scrollTop: 0}, 500);
	});

/***/ },
/* 2 */
/***/ function(module, exports) {

	$(document).ready(function(){
	    $('input[type="checkbox"]').click(function(){
	        if($(this).attr("value")=="nav-trigger"){
	            $("#nav").toggle();
	        }
	    });
	    $( "#nav-trigger" ).click(function() {
	        $( "#nav" ).toggle( "slow", function() {
	            // Animation complete.
	        });
	    });
	});

/***/ },
/* 3 */
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(1);
	__webpack_require__(2);
	module.exports = __webpack_require__(0);


/***/ }
/******/ ]);
//# sourceMappingURL=all.js.map