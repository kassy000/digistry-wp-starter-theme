(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

// JavaScript Document

var bp = {
    pc: 1220,
    site: 959,
    tab: 767,
    sp: 560
};

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

},{}]},{},[1]);
