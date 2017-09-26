jQuery(document).ready(function() {
    jQuery("#site-navigation ul.menu").slicknav({
        label: "Menu",
        duration: 1e3,
        prependTo: "#slickmenu"
    }), jQuery("#site-navigation div.menu > ul").slicknav({
        label: "Menu",
        duration: 1e3,
        prependTo: "#slickmenu"
    }), jQuery("#searchicon").click(function() {
        jQuery(".masthead-container").animate({
            top: "-110px"
        }, 300, function() {
            jQuery("#jumbosearch").fadeIn();
        });
    }), jQuery("#jumbosearch .closeicon").click(function() {
        jQuery("#jumbosearch").fadeOut(function() {
            jQuery(".masthead-container").animate({
                top: "0px"
            }, 300);
        });
    }), jQuery("body").keydown(function(e) {
        27 == e.keyCode && jQuery("#jumbosearch").fadeOut(function() {
            jQuery(".masthead-container").animate({
                top: "0px"
            }, 300);
        });
    });
}), jQuery(function() {
    jQuery(".slider-container").swiper({
        pagination: ".swiper-pagination",
        paginationClickable: ".swiper-pagination",
        nextButton: ".sliderext",
        prevButton: ".sliderprev",
        spaceBetween: 30,
        autoplay: 2500,
        effect: "fade"
    });
}), "center" === align.menu_alignment && jQuery(".menu-main-container").addClass("center", function() {
    jQuery(this).addClass("current");
});