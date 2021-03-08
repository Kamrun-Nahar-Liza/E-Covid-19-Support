(function ($) {
    "use strict";


    // Preloder

    $(window).on('load', function () {
        $('#status').fadeOut();
        $('#preloader').delay(500).fadeOut('slow');
        $('body').delay(500).css({ 'overflow': 'visible' });
    });

    //======================
    // Mobile menu 
    //======================
    $('#mobile-menu-toggler').on('click', function (e) {
        e.preventDefault();
        $('nav.navbar > ul').slideToggle();
    })
    $('.coupon-btn').on('click', function (e) {
        e.preventDefault();
        $('#couponBox').slideToggle();
    })
    $('.has-menu-child').append('<i class="menu-dropdown ti-angle-down"></i>');
    $('.langbtn').on('click', function (e) {


    })
    $('.langbtn').on('click', function (e) {
        if ($(this).find('i').hasClass('ti-angle-down')) {
            $(this).find('i').removeClass('ti-angle-down')
            $(this).find('i').addClass('ti-angle-up')
            console.log('wo');
        } else {
            $(this).find('i').addClass('ti-angle-down')
            $(this).find('i').removeClass('ti-angle-up')
        }
        $('ul.list-unstyled.dropdown-menu').slideToggle();
        e.preventDefault();
    });
    setTimeout(function () {
        $('.profile-btn').on('click', function (e) {
            $('.profile-drop').slideToggle();
            e.preventDefault();
        });
    }, 1000)

    $('.mbtn').on('click', function (e) {
        e.preventDefault();
    });

    if ($('nav').length > 0) {
        $('nav').coreNavigation({
            menuPosition: "right",
            container: true,
            animated: false,
            animatedIn: 'fadeIn',
            animatedOut: 'fadeOut',
            responsideSlide: true,
            mode: 'sticky',
            dropdownEvent: 'hover'
        });
    }

    //======================
    // Tabs
    //======================


    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('active');
        $('.tab-content').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    })


    //======================
    // SEARCH POPUP
    //======================

    $('.search-btn').on('click', function () {
        $('.search-popup').toggle(300);

    });


    //=================================
    // CART BTN & SIDE BAR POPUP
    //=================================
    function clickFuntion(btn, container) {
        var closeBTN = $('.close');
        $('.' + btn).on('click', function (e) {
            e.preventDefault();
            if ($(this).hasClass(btn)) {
                console.log(this);
                $(closeBTN).addClass('active');
                $(container).addClass('active');
            }
        })
        $(closeBTN).on('click', function (e) {
            e.preventDefault();
            $(container).removeClass('active');
            $(closeBTN).addClass('active');
        })
    }
    clickFuntion('cart-bar', '.mini-cart-con');
    clickFuntion('menu-bar', '.sideInfo');


    //=================================
    // Add/Minus Quantity
    //=================================

    $('.incressQnt').on('click', function () {
        var $qty = $(this).closest('div').find('.qnttinput');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.decressQnt').on('click', function () {
        var $qty = $(this).closest('div').find('.qnttinput');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });


    //=========================
    // Price Range Slider
    //=========================

    if ($("#slider-range").length > 0) {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 100,
            values: [13, 80],
            slide: function (event, ui) {
                $("#minamount").html("$" + ui.values[0]);
                $("#maxamount").html("$" + ui.values[1]);
            }
        });
        $("#minamount").html("$" + $("#slider-range").slider("values", 0));
        $("#maxamount").html("$" + $("#slider-range").slider("values", 1));

    };




    //======================
    // Slider carousel
    //======================
    $('.slider-carousel').owlCarousel({
        autoplay: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        dots: true,
        loop: true,
        nav: true,
        items: 1,
        navText: [
            "<i class='ti-angle-left'>",
            "<i class='ti-angle-right'>"
        ]

    });

    //======================
    // Partner slider carousel
    //======================


    $(".partner-logo").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        nav: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            768: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });


    //======================
    // MIXIT-UP START
    //======================

    if ($(".filter").length > 0) {
        mixitup(".filter");

    }


    //========================
    //    BLOG SLIDER  START
    //========================


    $(".blog-slider").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        dots: false,
        nav: true,
        items: 1,
        navText: [
            "<i class='fas fa-long-arrow-alt-right'>",
            "<i class='fas fa-long-arrow-alt-left'>"
        ]
    });

    //======================
    // NICE SELECT
    //======================


    if ($("select").length > 0) {
        $('select').niceSelect();
    }

    //======================
    // APPOINTMENT START
    //======================


    $(".apointment-btn").on("click", function () {
        $(".appoinment-box").slideToggle("2000");
        $(this).toggleClass('btn-secondary-filled');
    });


    //======================
    //    TESTIMONIAL  START */
    //======================


    $(".testimonial").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    //======================
    //  Back to Top JS 
    //======================


    $('body').append('<div id="toTop" class="back-to-top"><span class="xicon-syringe"></span></div>');
    $(window).on('scroll', function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, 2000);
        return false;
    });


    //======================
    // GOOGLE MAP SCRIPT
    //======================

    function init() {
        var locations = [
            ['Xirosoft', 23.810331, 90.412521, 3],
            ['Xirosoft', 23.9980797, 90.4229848],
            ['Xirosoft', 23.8780696, 90.2540589],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(23.810331, 90.412521),
            mapTypeId: google.maps.MapTypeId.ROADMAP,


            styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i <= locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: 'assets/img/home1.png',
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }


    }

    if ($('#map').length > 0) {
        google.maps.event.addDomListener(window, 'load', init);
    }

    //======================
    // COUNTER 
    //======================

    $('.counter').countUp({
        'time': 6000,
        'delay': 10
    });



    //======================
    // More Item function
    //======================
    function moreItem(selector, receiver) {
        var tele = document.getElementById(selector),
            rec = document.getElementById(receiver);
        $(window).on('resize', function () {
            resize();
        })
        resize();

        function resize() {
            const rChildren = rec.children;
            let numW = 0;

            [...rChildren].forEach(item => {
                item.outHTML = '';
                tele.appendChild(item);
            })

            const teleW = tele.offsetWidth,
                tChildren = tele.children;

            [...tChildren].forEach(item => {
                numW += item.offsetWidth;

                if (numW > teleW) {
                    item.outHTML = '';
                    rec.appendChild(item);
                }
            });
        }
    }

    if ($('#teleporter').length > 0) {
        moreItem('teleporter', 'receiver')
    }


    //======================
    //SCROLL BAR FUNCTION
    //======================



    $(window).on("load", function () {
        $(".miniCart").mCustomScrollbar();
        $(".slideCol").mCustomScrollbar();
    });

})(jQuery);



