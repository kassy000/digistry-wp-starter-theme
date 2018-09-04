// JavaScript Document

var bp = {
    pc:1220,
    site:959,
    tab: 767,
    sp: 560
};

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
