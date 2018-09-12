"use strict";
var npmDir = '../../node_modules/';
//window.jQuery = require('jquery');
//window.$ = require('jquery');
//window.easing = require('../../node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js');
//window.popper = require('../../node_modules/bootstrap/dist/js/bootstrap.min.js');
//window.bootstrap = require('../../node_modules/bootstrap/dist/js/bootstrap.min.js');


import { Variables } from './modules/variables.js';
window.variables = new Variables();
import { Init } from './modules/init.js';
var init = new Init(window.variables);