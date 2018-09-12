"use strict";
export class Init {
    constructor(variables) {
        //Variables
        this.variables = variables;
        var $variables = this.variables;

        jQuery(function ($) {
            var contentWidth = 960;

            $(function () {
                //resize
                $(window).resize(function () {
                    resize();
                })
                resize();

                //hiraku
                $(".offcanvas-nav").hiraku({
                    btn:'.js-offcanvas-btn',
                    //fixedHeader:"#header",
                    direction:"right"
                });
            })

            function resize() {

            }

        })

    }
}