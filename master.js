(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

var _variables = require('./modules/variables.js');

var _init = require('./modules/init.js');

var npmDir = '../../node_modules/';
//window.jQuery = require('jquery');
//window.$ = require('jquery');
//window.easing = require('../../node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js');
//window.popper = require('../../node_modules/bootstrap/dist/js/bootstrap.min.js');
//window.bootstrap = require('../../node_modules/bootstrap/dist/js/bootstrap.min.js');


window.variables = new _variables.Variables();

var init = new _init.Init(window.variables);

},{"./modules/init.js":2,"./modules/variables.js":3}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Init = exports.Init = function Init(variables) {
    _classCallCheck(this, Init);

    //Variables
    this.variables = variables;
    var $variables = this.variables;

    jQuery(function ($) {
        var contentWidth = 960;

        $(function () {
            //resize
            $(window).resize(function () {
                resize();
            });
            resize();

            //hiraku
            $(".offcanvas-nav").hiraku({
                btn: '.js-offcanvas-btn',
                //fixedHeader:"#header",
                direction: "right"
            });
        });

        function resize() {}
    });
};

},{}],3:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Variables = exports.Variables = function Variables() {
    _classCallCheck(this, Variables);

    this.bp = {
        pc: 1220,
        site: 959,
        tab: 767,
        sp: 560
    };
};

;

},{}]},{},[1]);
