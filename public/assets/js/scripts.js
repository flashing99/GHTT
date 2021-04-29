(function ($) {
    "use strict";
    /*==============================
     Is mobile
     ==============================*/
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }

    /* Datepicker */
   /* jQuery(function($){
        $.datepicker.regional['fr'] = {
            closeText: 'Fermer',
            prevText: '&#x3c;Préc',
            nextText: 'Suiv&#x3e;',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
                'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
            monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
                'Jul','Aou','Sep','Oct','Nov','Dec'],
            dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
            dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
            dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
            weekHeader: 'Sm',
            dateFormat: 'dd-mm-yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: '',
            minDate: 0,
            maxDate: '+12M +0D',
            numberOfMonths: 2,
            showButtonPanel: true
        };
        $.datepicker.setDefaults($.datepicker.regional['fr']);
    });*/
     DatePicker();
    function DatePicker() {
        /* Datepicker from - to */

        $(".awe-calendar.from").datepicker({
            prevText: '<i class="lotus-icon-left-arrow"></i>',
            nextText: '<i class="lotus-icon-right-arrow"></i>',
            //-----------------------
            clear: "Clear",
            format: 'yy-mm-dd', //"2007-01-26".
            // autoclose: true,
            // prevText: 'Précédent',
            // nextText: 'Suivant',
            todayHighlight:true,
            currentText: 'Aujourd\'hui',
            dayNames: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
            dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Vend", "Sam"],
            dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
            monthNames: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"],
            monthNamesShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Juin", "Jul", "Ao", "Sep", "Oct", "Nov", "Dec"],

            //-----------------------
            buttonImageOnly: false,
            minDate: 0,
            onClose: function (selectedDate) {
                var newDate = new Date(selectedDate),
                    tomorrow = new Date(newDate.getTime() + 24 * 60 * 60 * 1000),
                    nextDate = (tomorrow.getMonth() + 1) + '/' + tomorrow.getDate() + '/' + tomorrow.getFullYear();
                $(".awe-calendar.to").datepicker("option", "minDate", nextDate).focus();
            }
        });
        $(".awe-calendar.to").datepicker({
            prevText: '<i class="lotus-icon-left-arrow"></i>',
            nextText: '<i class="lotus-icon-right-arrow"></i>',
            buttonImageOnly: false,
            minDate: 0,
            numberOfMonths: 1,
            onClose: function (selectedDate) {
                //$(".awe-calendar.from").datepicker( "option", "maxDate", selectedDate );
            }
        });
        $.datepicker.setDefaults($.datepicker.regional['fr']);
    }

    /*Accordion*/
    Accordion();

    function Accordion() {
        $(".accordion").accordion({
            heightStyle: "content"
        });
    }

    /* Tabs */
    Tabs();

    function Tabs() {
        $('.tabs').tabs({
            show: {effect: "fadeIn", duration: 300},
            hide: {effect: "fadeOut", duration: 300},

        });
    }

    /* Select */
    aweSelect();

    function aweSelect() {
        $('.awe-select').each(function (index, el) {
            $(this).selectpicker();
        });

    }

    /* aweCalendar */
    aweCalendar();

    function aweCalendar() {
        $('.awe-calendar').each(function () {
            var aweselect = $(this);
            aweselect.wrap('<div class="awe-calendar-wrapper"></div>');
            aweselect.after('<i class="lotus-icon-calendar"></i>');
        });
    }

    /*Menu Sticky*/
    function MenuSticky() {
        if ($('#header_content').length) {
            var $this = $('#header_content'),
                size_point = $this.data().responsive,
                window_w = $(window).innerWidth(),
                window_scroll = $(window).scrollTop(),
                top_h = $('#header .header_top').innerHeight(),
                this_h = $this.innerHeight();

            if (size_point == undefined || size_point == '') {
                size_point = 1199;
            }

            if (window_scroll > top_h) {

                if (($this).hasClass('header-sticky') == false) {
                    $this.parent().addClass('header-sticky');

                    if (window_w <= size_point) {
                        $this.find('.header_menu').css('top', this_h + 'px');
                    }
                }

            } else {
                $this.parent().removeClass('header-sticky');

                if (window_w <= size_point) {
                    $this.find('.header_menu').css('top', (this_h + top_h) + 'px');
                }
            }
        }
    }

    /* Menu Resize */
    function MenuResize() {

        if ($('#header_content').length) {

            var $this = $('#header_content'),
                size_point = $this.data().responsive,
                window_scroll = $(window).scrollTop(),
                top_h = $('#header .header_top').innerHeight(),
                this_h = $this.innerHeight(),
                window_w = $(window).innerWidth();

            if (size_point == undefined || size_point == '') {
                size_point = 1199;
            }

            if (window_w <= size_point) {
                $this.addClass('header_mobile').removeClass('header_content');
            } else {
                $('.menu-bars').removeClass('active');
                $this.removeClass('header_mobile').addClass('header_content');
                $('#header_content .header_menu').css({
                    'top': ''
                }).removeClass('active').find('ul').css('display', '');
            }
        }
    }

    /* Menu Click */
    MenuBar();

    function MenuBar() {

        $('.menu-bars').on('click', function (event) {

            if ($('.header_menu').hasClass('active')) {
                $('.header_menu').removeClass('active');
                $(this).removeClass('active');
            } else {
                $('.header_menu').addClass('active');
                $(this).addClass('active');
            }

        });

        $('.menu li a').on('click', 'span', function (event) {
            event.preventDefault();

            var $this = $(this),
                $parent_li = $this.parent('a').parent('li'),
                $parent_ul = $parent_li.parent('ul');

            if ($parent_li.find('> ul').is(':hidden')) {
                $parent_ul.find('> li > ul').slideUp();
                $parent_li.find('> ul').slideDown();
            } else {
                $parent_li.find('> ul').slideUp();
            }

            return false;
        });
    }

    /* AwePopup */
    AwePopup(CallBackPopup);

    function CallBackPopup() {
        PopupCenter();
    }

    function AwePopup(callback) {
        $('.awe-ajax').on('click', function (event) {
            var $this = $(this),
                link_href = $this.attr('href');

            $('body').addClass('awe-overflow-h');
            $('#awe-popup-overlay, #awe-popup-wrap').addClass('in');
            getContentAjax(link_href, '#awe-popup-wrap .awe-popup-content', callback);
            return false;
        });

        $(document).on('click', '#awe-popup-overlay, #awe-popup-close, #awe-popup-wrap', function (event) {
            event.preventDefault();
            $('#awe-popup-wrap, #awe-popup-overlay').removeClass('in');
            $('body').removeClass('awe-overflow-h');
            $('#awe-popup-wrap .awe-popup-content').html('');
            return false;
        });

        $(document).on('click', '#awe-popup-wrap .awe-popup-content', function (event) {
            event.stopPropagation();
        });
    }

    function PopupCenter() {
        if ($('#awe-popup-wrap').hasClass('in')) {
            var $this = $('#awe-popup-wrap .awe-popup-content'),
                window_h = $(window).innerHeight(),
                height_e = $this.innerHeight(),
                height_part = (window_h - height_e) / 2;

            if (height_e < window_h && height_e > 0) {

                $this.parent().css({
                    'padding-top': height_part + 'px',
                    'padding-bottom': '0'
                });

            } else {

                $this.parent().css({
                    'padding-top': '10px',
                    'padding-bottom': '10px'
                });
            }
        }
    }

    function getContentAjax(url, id, callback, beforesend) {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            beforeSend: function () {
                if (beforesend) {
                    beforesend();
                }
            }
        })
            .done(function (data) {

                $(id).html(data);

                // Apply callback
                if (callback) {
                    callback();
                }
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
    }

    /*Banner Slide*/
    /* BannerSlider();

     function BannerSlider() {
         if ($('#banner-slider').length) {
             var offset_h = $('#header').innerHeight();
             $('#banner-slider').owlCarousel({
                 autoPlay: 5000,
                 navigation: true,
                 singleItem: true,
                 pagination: false,
                 transitionStyle: 'fade',
                 navigationText: ['<i class="lotus-icon-left-arrow"></i>', '<i class="lotus-icon-right-arrow"></i>'],
                 beforeInit: function () {
                     var height = $('#banner-slider').data().height,
                         window_h = $(window).height(),
                         window_w = $(window).width();

                     $('.slider-item').each(function (index, el) {
                         var url = $(this).data().image;

                         $(this).css('background-image', 'url(' + url + ')');

                         if (height != '' && height != undefined) {

                             if (window_w > 767) {
                                 $(this).css('height', height);
                             } else if (window_w <= 767) {
                                 $(this).css('height', 500);
                             } else if (window_w <= 480) {
                                 $(this).css('height', 400);
                             }

                         } else {
                             $(this).css('height', window_h - offset_h);
                         }

                     });

                 },
                 beforeUpdate: function () {
                     var height = $('#banner-slider').data().height,
                         window_w = $(window).width();

                     if (!(height != '' && height != undefined)) {
                         $('.slider-item').each(function (index, el) {
                             var window_h = $(window).height()
                             $(this).css('height', window_h - offset_h + 'px');
                         });
                     } else {
                         $('.slider-item').each(function (index, el) {
                             if (window_w > 767) {
                                 $(this).css('height', height);
                             } else if (window_w <= 767) {
                                 $(this).css('height', 500);
                             } else if (window_w <= 480) {
                                 $(this).css('height', 400);
                             }
                         });
                     }
                 }
             });
         }
     }*/

    /* Gallery Isotope */
    function GalleryIsotope() {
        if ($('.gallery').length) {
            $('.gallery').each(function (index, el) {
                var $this = $(this),
                    $isotope = $this.find('.gallery-isotope'),
                    $filter = $this.find('.gallery-cat');

                if ($isotope.length) {
                    var isotope_run = function (filter) {
                        $isotope.isotope({
                            itemSelector: '.item-isotope',
                            filter: filter,
                            percentPosition: true,
                            masonry: {columnWidth: '.item-size'},
                            transitionDuration: '0.8s',
                            hiddenStyle: {opacity: 0},
                            visibleStyle: {opacity: 1}
                        });
                    }

                    $filter.on('click', 'a', function (event) {
                        event.preventDefault();
                        $(this).parents('ul').find('.active').removeClass('active');
                        $(this).parent('li').addClass('active');
                        isotope_run($(this).attr('data-filter'));
                    });

                    isotope_run('*');
                }
            });
        }
    }

    /* Guest Book Masonry */
    function GuestBookMasonry() {
        if ($('.guest-book_mansory').length) {
            $('.guest-book_mansory').each(function (index, el) {
                $(this).isotope({
                    itemSelector: '.item-masonry'
                });
            });
        }
    }

    /* Modal*/
    $(".btn-play").click(function (event) {
        var target = $(this).attr('href'),
            url = $(target).data('video');

        var has_query_string = url.split('?', url);
        if (typeof has_query_string[1] == 'string') {
            url += '&' + $(target).data('query-string');
        } else {
            url += '?' + $(target).data('query-string');

        }

        $(target).find('iframe').attr('src', url) ;
        $(target).find('iframe').attr('width', 560);

        $(target).addClass('opened');
        $(target).click(function () {
            $(this).removeClass('opened').attr('src', '');
        });

        event.preventDefault();
    });

    /* Owl Single */
    function OwlSingle() {
        if ($('.owl-single').length) {
            $('.owl-single').each(function (index, el) {
                var $this = $(this);
                var options = {
                    autoPlay: false,
                    autoplayHoverPause: true,
                    singleItem: true,
                    smartSpeed: 1000,
                    navigation: true,
                    navigationText: ['<i class="lotus-icon-left-arrow"></i>', '<i class="lotus-icon-right-arrow"></i>']
                };
                var single_item = $this.data('single_item');

                if (typeof single_item == 'boolean' && single_item == false) {
                    options['singleItem'] = false;
                    var mobile = parseInt($this.data("mobile")),
                        tablet = parseInt($this.data("tablet")),
                        small_desktop = parseInt($this.data("small_desktop")),
                        desktop = parseInt($this.data("desktop")),
                        nav = ($this.data("nav")) ? true : false,
                        pagination = ($this.data("pagination")) ? true : false;
                    options['items'] = desktop;
                    options['itemsDesktop'] = [1200, desktop];
                    options['itemsDesktopSmall'] = [992, small_desktop];
                    options['itemsTablet'] = [767, tablet];
                    options['itemsMobile'] = [600, mobile];
                    options['navigation'] = nav;
                    options['pagination'] = pagination;
                }
                $this.owlCarousel(options);
            });
        }
    }

    var timeout_slider;
    $(window).resize(function () {
        clearTimeout(timeout_slider);
        timeout_slider = setTimeout(function () {
            OwlSingle();
        }, 500);
    }).resize();


    /* Coming Soon
    CountDown();

    function CountDown() {
        if ($('#countdown').length) {

            var nextYear = new Date(new Date().getFullYear() + 1, 1 - 1, 26);
            $('#countdown').countdown(nextYear, function (event) {
                var $this = $(this).html(event.strftime(''
                    + '<div class="item"><span class="count">%D</span><span>Days</span></div>'
                    + '<div class="item"><span class="count">%H</span><span>Hours</span></div>'
                    + '<div class="item"><span class="count">%M</span><span>Minutes</span></div>'
                    + '<div class="item"><span class="count">%S</span><span>Seconds</span></div>'));
            });
        }
    }
   */

   /*
    CountDate();
    function CountDate() {
        if ($('.count-date').length) {
            $('.count-date').each(function (index, el) {
                var $this = $(this),
                    end_date = $this.attr('data-end');

                if ($this.attr('data-end') !== '' && typeof $this.attr('data-end') !== 'undefined') {

                    $this.countdown(end_date, function (event) {
                        $(this).html(
                            event.strftime('<span> %D <span>JOURS</span></span> <span> %H <span>HEURES</span></span> <span> %M <span>MINUTES</span></span> <span> %S <span>SECONDS</span></span>')
                        );
                    });

                }

            });
        }
    }*/

    /* Popup Gallery */
    GalleryPopup();

    function GalleryPopup() {

        if ($('.gallery_item').length) {

            $('.gallery_item').each(function (index, el) {
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    mainClass: 'mfp-with-zoom',
                    zoom: {
                        enabled: true,
                        duration: 300,
                        easing: 'ease-in-out',
                    },
                    gallery: {
                        enabled: true,
                        arrowMarkup: '<button title="%title%" type="button" class="mfp-prevent-%dir% lotus-icon-%dir%-arrow"></button>',
                        tPrev: '',
                        tNext: ''
                    }
                });
            });
        }
    }


    /*Multi carousel Room Detail*/


    $('.owl-carousel').each(function () {
        var carousel = $(this),
            carousel_properties = carousel.data('properties') || null;

        carousel.owlCarousel(carousel_properties != null ? carousel_properties : false);
    });


    /*Gallery Room Detail*/
    GalleryRoomDetail();

    function GalleryRoomDetail() {

        if ($('.room-detail_img').length) {

            $(".room-detail_img").owlCarousel({
                navigation: true,
                pagination: false,
                navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                singleItem: true,
                mouseDrag: true,
                transitionStyle: 'fade'
            });
        }

        if ($('.room-detail_thumbs').length) {

            $(".room-detail_thumbs").owlCarousel({
                items: 7,
                pagination: false,
                navigation: false,
                mouseDrag: true,
                navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                itemsCustom: [[0, 3], [320, 4], [480, 5], [768, 6], [992, 7], [1200, 7]]
            });

            if ($(".room-detail_img").data("owlCarousel") !== undefined && $(".room-detail_thumbs").data("owlCarousel") !== undefined) {
                $('.room-detail_thumbs').on('click', '.owl-item', function (event) {

                    var $this = $(this),
                        index = $this.index();
                    $('.room-detail_thumbs').find('.active').removeClass('active');
                    $this.addClass('active');
                    $(".room-detail_img").data("owlCarousel").goTo(index);

                    return false;
                });

                $('.room-detail_img').on("click", '.owl-item', function (event) {

                    var $this = $(this),
                        index = $this.index();
                    $('.room-detail_thumbs').find('.active').removeClass('active');

                    // $(".room-detail_thumbs").data("owlCarousel").goTo(index);
                    $(".room-detail_thumbs").find('.owl-item').eq(index).addClass('active');
                    $this.addClass('active');


                    return false;
                });
            }
        }
    }


    /* ACCOMMODATIONS SLIDE */
    Accommodations1();

    function Accommodations1() {
        if ($('.accomd-modations-slide_1').length) {

            $(".accomd-modations-slide_1").owlCarousel({
                pagination: true,
                navigation: false,
                itemsCustom: [[0, 1], [480, 2], [992, 3], [1200, 3]]
            });

        }
    }

    /* SET BACKGROUND ROOM ITEM */
    BackgroundRoomItem();

    function BackgroundRoomItem() {
        $('.room_item-6, .room_item-5').each(function (index, el) {
            var $this = $(this),
                link_src = $this.data().background;

            if (link_src != undefined && link_src != '') {
                $this.css('background-image', 'url(' + link_src + ')');
            }
        });
    }

    /* Parallax */
    function ParallaxScroll() {
        if (isMobile.iOS()) {
            $('.awe-parallax, .awe-static').addClass('fix-background-ios');
        } else {
            $('.awe-parallax').each(function (index, el) {
                $(this).parallax("50%", 0.2);
            });
        }
    }

    /*GOOGLE MAP*/
    function ContactMap() {
        if ($('#map').length) {
            var $this = $('#map'),
                center = ($this.data().center).split(','),
                locations = ($this.data().locations).split('--'),
                styles = $this.data('styles');

            var LatLng_center = new google.maps.LatLng(center[0], center[1]);

            /* Map Option */
            var map_styles = {
                silver: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#f0f0f0"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#f3f3f3"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#efefef"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    }
                ]
            };
            var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: LatLng_center,
            };
            switch (styles) {
                case 'silver':
                    mapOptions['styles'] = map_styles.silver;
                    break;
            }

            /* Create Map*/
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            /* Marker Map */
            for (var i = 0; i < locations.length; i++) {
                var LatLng = locations[i].split(',');

                var locationmarker = new google.maps.LatLng(LatLng[0], LatLng[1])

                setMarket(map, locationmarker, '', '');
            }

            $('.location-item').on('click', function (event) {
                event.preventDefault();
                var $this = $(this),
                    location_item = ($this.data().location).split(',');

                var location_center = new google.maps.LatLng(location_item[0], location_item[1]);

                map.setCenter(location_center);

            });
        }
    }

    /* Set Market */
    function setMarket(map, location, title, content) {

        /* Icon Marker*/
        var icon_map = {
            url: 'images/icon-marker.png',
            size: new google.maps.Size(27, 40),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(14, 40)
        };

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            draggable: false,
            icon: icon_map,
            title: title,
        });
    }

    /* MAP ATTRACTION */
    function AttractionMap() {

        if ($('#attraction-maps').length) {
            var infoWindow = new google.maps.InfoWindow();
            var $firstload = $('#attraction_location').find('.active a'),
                firstlocation = ($firstload.data().latlng).split(',');

            var latlng = new google.maps.LatLng(firstlocation[0], firstlocation[1]);

            /* Map Option */
            var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: latlng
            };

            /* Create Map*/
            var map = new google.maps.Map(document.getElementById('attraction-maps'), mapOptions);

            infoWindow.setOptions({
                content: "<div class='info-location-map'><h2>" + $firstload.data().title + "</h2><span>" + $firstload.data().address + "</span></div>",
                position: latlng,
            });

            infoWindow.open(map);

            $(document).on('click', '#attraction_location a', function (event) {
                event.preventDefault();

                var $this = $(this),
                    url = $this.attr('href'),
                    location = ($this.data().latlng).split(','),
                    title = $this.data().title,
                    address = $this.data().address;

                $this.parents('#attraction_location').find('.active').removeClass('active');
                $this.parent('li').addClass('active');

                /* Ajax Content */
                getContentAjax(url, '#attraction_content');

                /* Info Window */
                latlng = new google.maps.LatLng(location[0], location[1]);

                map.setCenter(latlng);

                infoWindow.open(map);

                infoWindow.setOptions({
                    content: "<div class='info-location-map'><h2>" + title + "</h2><span>" + address + "</span></div>",
                    position: latlng,
                });

                return false;

            });

            google.maps.event.addDomListener(window, "resize", function () {
                google.maps.event.trigger(map, "resize");
                map.setCenter(latlng);
            });
        }
    }

    function AttractionClick() {
        var window_w = window.innerWidth;

        if (window_w < 991) {
            $('.attraction_sidebar .attraction_heading').addClass('attraction_heading_dropdown');
        } else {
            $('.attraction_sidebar .attraction_heading').removeClass('attraction_heading_dropdown');
            $('.attraction_sidebar .attraction_sidebar-content').css('display', '');
        }
    }

    AttractionList();

    function AttractionList() {
        $('.attraction_sidebar').on('click', '.attraction_heading_dropdown', function (event) {
            event.preventDefault();

            if ($('.attraction_sidebar-content').is(':hidden')) {
                $('.attraction_sidebar .attraction_sidebar-content').slideDown();
            } else {
                $('.attraction_sidebar .attraction_sidebar-content').slideUp();
            }
        });
    }

    /*STATISTICS Count Number*/
    StatisticsCount();

    function StatisticsCount() {
        if ($('.statistics_item .count').length) {

            $('.statistics_item').appear(function () {

                var count_element = $('.count', this).html();
                $(".count", this).countTo({
                    from: 0,
                    to: count_element,
                    speed: 2000,
                    refreshInterval: 50,
                });
            });
        }
    }

    /*View Password*/
    ViewPassword();

    function ViewPassword() {
        $('.view-pass').mousedown(function (event) {
            $(this).prev('input[type="password"]').attr('type', 'text');
        });
        $('.view-pass').mouseup(function (event) {
            $(this).prev('input[type="text"]').attr('type', 'password');
        });
    }

    /*Validate message*/
    if ($('#send-contact-form').length) {
        $('#send-contact-form').validate({
            rules: {
                lastName: {
                    required: true,
                    minlength: 3
                },
                firstName: {
                    required: true,
                    minlength: 3
                },
               /* company: {
                    required: true,
                    minlength: 2
                },*/
                phone: {
                    required: true,
                    minlength: 10,
                    digits:true,
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 2
                },
                message: {
                    required: true,
                    minlength: 5
                }

            },
            messages: {
                lastName: {
                    required: "Entrez votre nom.",
                    minlength: $.format(" {0} caractères ou plus sont requis.")
                },
                firstName: {
                    required: "Entrez votre prénom.",
                    minlength: $.format(" {0} caractères ou plus sont requis.")
                },
                /*company: {
                    required: "Entrez votre nom d'entreprise.",
                    minlength: $.format(" {0} caractères ou plus sont requis.")
                },*/
                phone: {
                    required: "Entrez unméro de téléphone valide .",
                    minlength: $.format(" {0} nombres ou plus sont requis.")
                },
                email: {
                    required: "Entrez votre adresse e-mail.",
                    email: "Entrez un email valide."
                },
                subject: {
                    required: "Entrez votre sujet.",
                    minlength: $.format(" {0} caractères ou plus sont requis.")
                },
                message: {
                    required: "Entrez votre message.",
                    minlength: $.format(" {0} caractères ou plus sont requis.")
                }

            },

            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    success: function (responseText, statusText, xhr, $form) {
                        $('#contact-content').slideUp(600, function () {
                            $('#send-contact-form input[type=text], #send-contact-form textarea').val('');
                            $('#contact-content').html(responseText).slideDown(600);
                        });
                    }
                });
                return false;
            }
        });
    }

    /* ----------------------------- search form ------------------------- */
    /*if ($('#ajax-form-search-room').length) {
        $('#ajax-form-search-room').validate({
            rules: {
                arrive: {
                    required: true,
                    minlength: 10,
                    date: true
                },
                departure: {
                    required: true,
                    minlength: 10,
                    date: true
                },
                type: {
                    required: true,
                    // minlength: 1,
                    digits: false
                },
                adults: {
                    required: true,
                    // minlength: 1,
                    digits: true
                },
                children: {
                    required: true,
                    minlength: 1,
                    digits: true
                }
            },
            messages: {
                arrive: {
                    required: "Merci de renseignez vos dates.",
                    minlength: $.format("At least {0} characters required.")
                },
                departure: {
                    required: "Merci de renseignez vos dates.",
                    minlength: $.format("At least {0} characters required.")
                },
                type: {
                    required: "Veuillez séléctionner le type d'hébergement.",
                    minlength: $.format("At least {0} characters required.")
                },
                adults: {
                    required: "Entrez le nombre de personnes Adultes",
                    minlength: $.format("At least {0} characters required.")
                },
                children: {
                    required: "Entrez le nombre de d'enfants ",
                    minlength: $.format("At least {0} characters required.")
                }
            },

            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    success: function (responseText, statusText, xhr, $form) {
                       // console.log('response'+responseText);
                        $(form).parent().append(responseText);
                        $(form).remove();
                    }
                });
                return false;
            }
        });

        $('#ajax-form-search-room .vailability-submit .awe-btn').on('click', function () {
            $(this).parents('form:first').submit();
        });
    }*/

    // =============================================
    // Boocking Cart
    // =============================================


   /*function BoockingRooms(e) {

        let $totalBox = $('.reservation-room-seleted_total span');
        let  $finalizeBook =  $('#finalize-Book');
        let $initializeBook  =  $('#initialize-Book');
        let $totalPrice = 0;
        let $html = "";
        //let $roomSelected = $('.reservation-room-selected');
        // Your jquery code
        $(".awe-btn-9").on('click', function (e) {
            e.preventDefault();
            let $listSelectedRooms = $('#list-selected-rooms');
            let $price = $(this).parent().find('.reservation-room_price .price').text();
            let $type = $(this).parent().parent().find('.reservation-room_name').text();
            let $id = $(this).data('id');
            let $itemId = 'item-' + $id;
            //  $id= $(this).parent().attr("data-id");

            // alert("PRICE : " + $price + " / NAME : " + $type);
            //----------------------------------
            $html = '';
            $html += ' <div class="reservation-room-seleted_item  pl0 pr0"  id="' + $itemId + '" data-id="' + $id + '" style="display: flex;">';
            $html += '   <div class=" col-md-8">';
            $html += '       <h6 class="block "> ' + $type + ' </h6>';
            $html += '       <span class="block apb-option">2 Adult, 1 Child</span>';
            $html += '       <span class="block pb-option">Du 04/04/22 Au 08/04/22</span>';
            $html += '       <a href="#" class=" block reservation-room-seleted_change f14 f-600  deleteRowButton" data-item="#' + $itemId + '"  >Supprimer</a>';
            $html += '   </div>';
            $html += '   <div class=" col-md-4  text-right">';
            $html += '        <span class="reservation-amout f16 f-600  ">' + $price + '</span>  dzd';
            $html += '   </div>';
            $html += ' </div>';
            //--------------- add Html -------------------
            $listSelectedRooms.append($html);
            updateTotals();

            // ---- Disable Button [Reserver]
            $(this).prop("disabled", true).addClass('disabled');

            //--------------- Update total Value-------------------
            function updateTotals() {
                $totalPrice = getItemsTotal('.reservation-amout');
                // console.log('totalPrice =====' + $totalPrice);
                $totalBox.text( toMoney($totalPrice));

                //--- Display Button  [ Finaliser la réservation ]
                if($totalPrice > 0){
                    console.log('Hidden');
                    $finalizeBook.removeClass('hidden');
                    $initializeBook.removeClass('hidden');
                }else{
                    console.log('Visible');
                    $finalizeBook.addClass('hidden');
                    $initializeBook.addClass('hidden');
                }
            }

            //--------------- Calculate  Sum Total -------------------
            function getItemsTotal(selector) {
                return Array.from($(selector)).reduce(sumReducer, 0);
            }

            function sumReducer(total, item) {
                return total += parseInt(item.innerHTML, 10);
            }
            function toMoney(number) {
                return   number.toFixed(2) +' dzd';
            }

            //--------- DELETE SELECTED ITEM -------
            function deleteItem(itemId) {
                $(itemId).remove();
                //  $(this).prop("disabled", true).addClass('disabled');
            }

            //---- Actions for Button Delete
            $listSelectedRooms.on('click', '.deleteRowButton', function (event) {

                //----- Enable Button  [ Reserver] --------
                let $BtnDeleteId = $(this).parent().parent().attr('data-id');
                console.log('data-id BTN RESERVE ::: '+$BtnDeleteId);

                $('.awe-btn-9[data-id=' + $BtnDeleteId + ']').prop("disabled", false).removeClass('disabled');

                //----DELETE ITEM ------------------
                deleteItem($(event.target).data('item'));
                //----UPDATE TOTAL ----------------
                updateTotals();

            });


        });
    }*/

    // =============================================
    // Check availability Step-1
    //===============================================


    /*if ($('#send-availability-form').length) {
        $('#send-availability-form').validate({

            rules: {
                arrival: {
                    required: true,
                    date: true

                },
                Departure: {
                    required: true,
                    date: true
                },
                room_type: {
                    required: true,
                    minlength: 2
                },
                adult: {
                    required: true,
                    minlength: 1
                },
                child: {
                    required: true,
                    minlength: 1
                }
            },
            messages: {
                arrival: {
                    // required: "Please enter your name.",
                    // minlength: $.format("At least {0} characters required.")
                    required: "Merci de renseignez vos dates.",
                    // minlength: $.format("At least {0} characters required.")

                },
                Departure: {
                    required: "Merci de renseignez vos dates.",
                    // minlength: $.format("At least {0} characters required.")
                },
                room_type: {
                    required: "Veuillez séléctionner le type de Bungalow.",
                    // minlength: $.format("At least {0} characters required.")
                },
                adult: {
                    required: "Entrez le nombre de personnes Adultes",
                    // minlength: $.format("At least {0} characters required.")
                },
                child: {
                    required: "Entrez le nombre d'enfants.",
                    // minlength: $.format("At least {0} characters required.")
                }
            },

            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    success: function (responseText, statusText, xhr, $form) {
                        $('#availability-content').slideUp(600, function () {
                            $('#send-availability-form input[type=text], #send-availability-form textarea').val('');
                            $('#availability-content').html(responseText).slideDown(600);
                        });
                    }
                });
                return false;
            }
        });
    }
*/

    //===============================================

    $(document).ready(function () {
        $(window).load(function () {
            $('#preloader').delay(800).fadeOut('400', function () {
                $(this).fadeOut()
            });
            $('body').append('<div class="awe-popup-overlay" id="awe-popup-overlay"></div><div class="awe-popup-wrap" id="awe-popup-wrap"><div class="awe-popup-content"></div><span class="awe-popup-close" id="awe-popup-close"></div>');
            GalleryIsotope();
             GuestBookMasonry();
            // AttractionMap();
            // ContactMap();
           //BoockingRooms();

        });

        $(window).scroll(function (event) {
            MenuSticky();
        });

        $(window).resize(function (event) {
            ParallaxScroll();
            //PopupCenter();
            MenuResize();
            MenuSticky();
            // AttractionClick();
        }).trigger('resize');

    });

})(jQuery);

