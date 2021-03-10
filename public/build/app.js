(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_styles_app_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/navbar */ "./assets/scripts/navbar.js");
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_scripts_navbar__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_heroParallax__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/heroParallax */ "./assets/scripts/heroParallax.js");
/* harmony import */ var _scripts_heroParallax__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_scripts_heroParallax__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _scripts_modale__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/modale */ "./assets/scripts/modale.js");
/* harmony import */ var _scripts_modale__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_scripts_modale__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)



 // start the Stimulus application



/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/*! exports provided: app */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "app", function() { return app; });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _symfony_autoimport__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @symfony/autoimport */ "./node_modules/@symfony/autoimport.js");
/* harmony import */ var _symfony_autoimport__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_symfony_autoimport__WEBPACK_IMPORTED_MODULE_1__);

 // Registers Stimulus controllers from controllers.json and in the controllers/ directory

var app = Object(_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__["startStimulusApp"])(__webpack_require__("./assets/controllers sync recursive \\.(j|t)sx?$"));

/***/ }),

/***/ "./assets/controllers sync recursive \\.(j|t)sx?$":
/*!*********************************************!*\
  !*** ./assets/controllers sync \.(j|t)sx?$ ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./hello_controller.js": "./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive \\.(j|t)sx?$";

/***/ }),

/***/ "./assets/controllers/hello_controller.js":
/*!************************************************!*\
  !*** ./assets/controllers/hello_controller.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var stimulus__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! stimulus */ "./node_modules/stimulus/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }




function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);

  return _default;
}(stimulus__WEBPACK_IMPORTED_MODULE_2__["Controller"]);



/***/ }),

/***/ "./assets/scripts/heroParallax.js":
/*!****************************************!*\
  !*** ./assets/scripts/heroParallax.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Parallax Hero image
// -------------------------------------
var heroImg = document.querySelector('.hero-background-img'); // la possition de l'image au chargement (media queries css top change )

var topImageOrigin;

if (heroImg) {
  topImageOrigin = heroImg.offsetTop; // heroImg.style.top = topImageOrigin + "px"
}

function parallax() {
  heroImg.style.top = -(window.scrollY / 4) + topImageOrigin + "px";
}

;
window.addEventListener("scroll", parallax);

/***/ }),

/***/ "./assets/scripts/modale.js":
/*!**********************************!*\
  !*** ./assets/scripts/modale.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");

// Modale Mentions légales
// -------------------------------------
var overlay = document.querySelector('#mentions-container');
var modale = document.querySelector('.mentions-wrapper');
var btnClose = document.querySelector('#mentions-close');
var btnOpen = document.querySelector('.btn-mentions');

if (btnOpen) {
  // ouverture modale
  btnOpen.addEventListener('click', function () {
    overlay.style.display = "flex";
    setTimeout(function () {
      overlay.classList.add('in');
      modale.classList.add('in');
    }, 100);
  });
}

if (overlay) {
  // fermeture modale
  overlay.addEventListener('click', function () {
    overlay.classList.remove('in');
    modale.classList.remove('in');
    setTimeout(function () {
      overlay.style.display = "none";
    }, 400);
  });
}

/***/ }),

/***/ "./assets/scripts/navbar.js":
/*!**********************************!*\
  !*** ./assets/scripts/navbar.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var navBurgger = document.querySelector('.burger-top-nav');
var navTop = document.querySelector('.nav-top'); // Expand au click pour la version mobiles

navBurgger.addEventListener('click', function () {
  navTop.classList.toggle('expand');
  this.classList.toggle('trigger');
}); // Change la hauteur du logo au scroll

var navLogo = document.querySelector('.nav-logo');

var reduceNav = function reduceNav() {
  if (window.scrollY >= 200) {
    navLogo.classList.add('nav-logo-sm');
  } else {
    navLogo.classList.remove('nav-logo-sm');
  }
};

window.addEventListener('scroll', reduceNav);

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9ib290c3RyYXAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbnRyb2xsZXJzIHN5bmMgXFwuKGp8dClzeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc2NyaXB0cy9oZXJvUGFyYWxsYXguanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3NjcmlwdHMvbW9kYWxlLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zY3JpcHRzL25hdmJhci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5zY3NzIl0sIm5hbWVzIjpbImFwcCIsInN0YXJ0U3RpbXVsdXNBcHAiLCJyZXF1aXJlIiwiZWxlbWVudCIsInRleHRDb250ZW50IiwiQ29udHJvbGxlciIsImhlcm9JbWciLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ0b3BJbWFnZU9yaWdpbiIsIm9mZnNldFRvcCIsInBhcmFsbGF4Iiwic3R5bGUiLCJ0b3AiLCJ3aW5kb3ciLCJzY3JvbGxZIiwiYWRkRXZlbnRMaXN0ZW5lciIsIm92ZXJsYXkiLCJtb2RhbGUiLCJidG5DbG9zZSIsImJ0bk9wZW4iLCJkaXNwbGF5Iiwic2V0VGltZW91dCIsImNsYXNzTGlzdCIsImFkZCIsInJlbW92ZSIsIm5hdkJ1cmdnZXIiLCJuYXZUb3AiLCJ0b2dnbGUiLCJuYXZMb2dvIiwicmVkdWNlTmF2Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBSUE7QUFDQTtDQUtBOzs7Ozs7Ozs7Ozs7OztBQ2xCQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtDQUdBOztBQUNPLElB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LFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixXQUF2QixDQUFoQjs7QUFFQSxJQUFNc0IsU0FBUyxHQUFHLFNBQVpBLFNBQVksR0FBTTtBQUNwQixNQUFJaEIsTUFBTSxDQUFDQyxPQUFQLElBQWtCLEdBQXRCLEVBQTJCO0FBQ3ZCYyxXQUFPLENBQUNOLFNBQVIsQ0FBa0JDLEdBQWxCLENBQXNCLGFBQXRCO0FBQ0gsR0FGRCxNQUVPO0FBQ0hLLFdBQU8sQ0FBQ04sU0FBUixDQUFrQkUsTUFBbEIsQ0FBeUIsYUFBekI7QUFDSDtBQUNKLENBTkQ7O0FBUUFYLE1BQU0sQ0FBQ0UsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0NjLFNBQWxDLEU7Ozs7Ozs7Ozs7O0FDcEJBLHVDIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcblxuXG5cbmltcG9ydCAnLi9zY3JpcHRzL25hdmJhcic7XG5pbXBvcnQgJy4vc2NyaXB0cy9oZXJvUGFyYWxsYXgnO1xuaW1wb3J0ICcuL3NjcmlwdHMvbW9kYWxlJztcblxuXG5cbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxuaW1wb3J0ICcuL2Jvb3RzdHJhcCc7IiwiaW1wb3J0IHsgc3RhcnRTdGltdWx1c0FwcCB9IGZyb20gJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZSc7XG5pbXBvcnQgJ0BzeW1mb255L2F1dG9pbXBvcnQnO1xuXG4vLyBSZWdpc3RlcnMgU3RpbXVsdXMgY29udHJvbGxlcnMgZnJvbSBjb250cm9sbGVycy5qc29uIGFuZCBpbiB0aGUgY29udHJvbGxlcnMvIGRpcmVjdG9yeVxuZXhwb3J0IGNvbnN0IGFwcCA9IHN0YXJ0U3RpbXVsdXNBcHAocmVxdWlyZS5jb250ZXh0KCcuL2NvbnRyb2xsZXJzJywgdHJ1ZSwgL1xcLihqfHQpc3g/JC8pKTtcbiIsInZhciBtYXAgPSB7XG5cdFwiLi9oZWxsb19jb250cm9sbGVyLmpzXCI6IFwiLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL2Fzc2V0cy9jb250cm9sbGVycyBzeW5jIHJlY3Vyc2l2ZSBcXFxcLihqfHQpc3g/JFwiOyIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdzdGltdWx1cyc7XG5cbi8qXG4gKiBUaGlzIGlzIGFuIGV4YW1wbGUgU3RpbXVsdXMgY29udHJvbGxlciFcbiAqXG4gKiBBbnkgZWxlbWVudCB3aXRoIGEgZGF0YS1jb250cm9sbGVyPVwiaGVsbG9cIiBhdHRyaWJ1dGUgd2lsbCBjYXVzZVxuICogdGhpcyBjb250cm9sbGVyIHRvIGJlIGV4ZWN1dGVkLiBUaGUgbmFtZSBcImhlbGxvXCIgY29tZXMgZnJvbSB0aGUgZmlsZW5hbWU6XG4gKiBoZWxsb19jb250cm9sbGVyLmpzIC0+IFwiaGVsbG9cIlxuICpcbiAqIERlbGV0ZSB0aGlzIGZpbGUgb3IgYWRhcHQgaXQgZm9yIHlvdXIgdXNlIVxuICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xuICAgIGNvbm5lY3QoKSB7XG4gICAgICAgIHRoaXMuZWxlbWVudC50ZXh0Q29udGVudCA9ICdIZWxsbyBTdGltdWx1cyEgRWRpdCBtZSBpbiBhc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyc7XG4gICAgfVxufVxuIiwiLy8gUGFyYWxsYXggSGVybyBpbWFnZVxuLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuY29uc3QgaGVyb0ltZyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5oZXJvLWJhY2tncm91bmQtaW1nJyk7XG4vLyBsYSBwb3NzaXRpb24gZGUgbCdpbWFnZSBhdSBjaGFyZ2VtZW50IChtZWRpYSBxdWVyaWVzIGNzcyB0b3AgY2hhbmdlIClcbmxldCB0b3BJbWFnZU9yaWdpbjtcbmlmKGhlcm9JbWcpeyAgICBcbiAgdG9wSW1hZ2VPcmlnaW4gPSBoZXJvSW1nLm9mZnNldFRvcDtcbiAgLy8gaGVyb0ltZy5zdHlsZS50b3AgPSB0b3BJbWFnZU9yaWdpbiArIFwicHhcIlxufVxuXG5cblxuZnVuY3Rpb24gcGFyYWxsYXgoKSB7XG5cbiAgICBoZXJvSW1nLnN0eWxlLnRvcCA9ICgtKHdpbmRvdy5zY3JvbGxZIC8gNCkgKyB0b3BJbWFnZU9yaWdpbikgKyBcInB4XCI7XG59O1xuXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcInNjcm9sbFwiLCAocGFyYWxsYXgpKTsiLCIvLyBNb2RhbGUgTWVudGlvbnMgbMOpZ2FsZXNcbi8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbmNvbnN0IG92ZXJsYXkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbWVudGlvbnMtY29udGFpbmVyJyk7XG5jb25zdCBtb2RhbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubWVudGlvbnMtd3JhcHBlcicpO1xuY29uc3QgYnRuQ2xvc2UgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjbWVudGlvbnMtY2xvc2UnKTtcbmNvbnN0IGJ0bk9wZW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYnRuLW1lbnRpb25zJylcblxuaWYgKGJ0bk9wZW4pIHtcbiAgICAvLyBvdXZlcnR1cmUgbW9kYWxlXG4gICAgYnRuT3Blbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcbiAgICAgICAgb3ZlcmxheS5zdHlsZS5kaXNwbGF5ID0gXCJmbGV4XCI7XG5cbiAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XG4gICAgICAgICAgICBvdmVybGF5LmNsYXNzTGlzdC5hZGQoJ2luJyk7XG4gICAgICAgICAgICBtb2RhbGUuY2xhc3NMaXN0LmFkZCgnaW4nKTtcbiAgICAgICAgfSwgMTAwKTtcblxuICAgIH0pO1xufVxuXG5pZiAob3ZlcmxheSkge1xuICAgIC8vIGZlcm1ldHVyZSBtb2RhbGVcbiAgICBvdmVybGF5LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICBvdmVybGF5LmNsYXNzTGlzdC5yZW1vdmUoJ2luJyk7XG4gICAgICAgIG1vZGFsZS5jbGFzc0xpc3QucmVtb3ZlKCdpbicpO1xuXG4gICAgICAgIHNldFRpbWVvdXQoKCkgPT4ge1xuICAgICAgICAgICAgb3ZlcmxheS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gICAgICAgIH0sIDQwMCk7XG4gICAgfSk7XG59IiwiY29uc3QgbmF2QnVyZ2dlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5idXJnZXItdG9wLW5hdicpO1xuY29uc3QgbmF2VG9wID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5hdi10b3AnKTtcblxuLy8gRXhwYW5kIGF1IGNsaWNrIHBvdXIgbGEgdmVyc2lvbiBtb2JpbGVzXG5uYXZCdXJnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgIG5hdlRvcC5jbGFzc0xpc3QudG9nZ2xlKCdleHBhbmQnKTtcbiAgICB0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ3RyaWdnZXInKVxufSk7XG5cbi8vIENoYW5nZSBsYSBoYXV0ZXVyIGR1IGxvZ28gYXUgc2Nyb2xsXG5jb25zdCBuYXZMb2dvID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5hdi1sb2dvJyk7XG5cbmNvbnN0IHJlZHVjZU5hdiA9ICgpID0+IHtcbiAgICBpZiAod2luZG93LnNjcm9sbFkgPj0gMjAwKSB7XG4gICAgICAgIG5hdkxvZ28uY2xhc3NMaXN0LmFkZCgnbmF2LWxvZ28tc20nKVxuICAgIH0gZWxzZSB7XG4gICAgICAgIG5hdkxvZ28uY2xhc3NMaXN0LnJlbW92ZSgnbmF2LWxvZ28tc20nKVxuICAgIH1cbn07XG5cbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdzY3JvbGwnLCByZWR1Y2VOYXYpOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=