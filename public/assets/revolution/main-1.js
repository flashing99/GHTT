/*=============================================================
Template Name: Hotel Himara - Hotel HTML Template
Author:        Eagle-Themes (Jomin Muskaj)
Author URI:    http://eagle-themes.com
Version:       1.1.0
=============================================================*/

(function($) {
  "use strict";

  // =============================================
  // LOADER
  // =============================================


  /*Document is Ready */
  $(document).ready(function() {

    // =============================================
    // HEADER
    // =============================================

    // =============================================
    // MENU
    // =============================================


    // =============================================
    // ADD TO CART BUTTON
    // =============================================


    // =============================================
    // PRODUCT QUANTITY
    // =============================================


    // =============================================
    // PRODUCT RATING
    // =============================================


    // =============================================
    // POPUP BOOKING FORM
    // =============================================

    // =============================================
    // DATEPICKER
    // =============================================



    // =============================================
    // GUESTS SELECT
    // =============================================


    // =============================================
    // BOOKING FORM
    // =============================================

    // =============================================
    // CONTACT FORM
    // =============================================

    // =============================================
    // SUBSCRIBE FORM (MAILCHIMP)
    // =============================================

    // =============================================
    // HOME PAGE 1 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-1").length) {
      var tpj = jQuery;
      var revapi1;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-1");
        } else {
          revapi1 = tpj("#rev-slider-1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 9000,
            disableProgressBar: "on",
            navigation: {
              keyboardNavigation: "on",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "on",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              arrows: {
                style: "hermes",
                enable: true,
                hide_onmobile: true,
                hide_under: 600,
                hide_onleave: true,
                tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div>',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
                }
              }

            },
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [800, 800, 700, 700],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 2000,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

   /* // =============================================
    // HOME PAGE 2 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-2").length) {
      var tpj = jQuery;
      var revapi2;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-2").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-2");
        } else {
          revapi2 = tpj("#rev-slider-2").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 9000,
            disableProgressBar: "on",
            navigation: {
              keyboardNavigation: "on",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "on",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              arrows: {
                style: "hermes",
                enable: true,
                hide_onmobile: true,
                hide_under: 600,
                hide_onleave: true,
                tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div>',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
                }
              }
            },
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [800, 800, 1100, 1100],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 2000,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // HOME PAGE 3 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-3").length) {
      var tpj = jQuery;
      var revapi3;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-3").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-3");
        } else {
          revapi3 = tpj("#rev-slider-3").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: 'on',
              keyboard_direction: 'horizontal',
              mouseScrollNavigation: 'off',
              mouseScrollReverse: 'default',
              onHoverStop: 'on',
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              bullets: {
                style: "",
                enable: true,
                container: "slider",
                hide_onmobile: true,
                hide_onleave: false,
                hide_delay: 200,
                hide_under: 0,
                hide_over: 9999,
                direction: "vertical",
                space: 5,
                h_align: "right",
                v_align: "center",
                h_offset: 50,
                v_offset: -15
              }
            },
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [800, 800, 800, 800],
            lazyType: "single",
            disableProgressBar: "on",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: 1,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "on",
            autoWidth: "on",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // HOME PAGE 4 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-4").length) {
      var tpj = jQuery;
      var revapi4;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-4").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-4");
        } else {
          revapi4 = tpj("#rev-slider-4").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            parallax: {
              type: "3D",
              origo: "slidercenter",
              speed: 1000,
              levels: [2, 4, 6, 8, 10, 12, 14, 16, 45, 50, 47, 48, 49, 50, 0, 50],
              ddd_shadow: "off",
              ddd_bgfreeze: "on",
              ddd_overflow: "hidden",
              ddd_layer_overflow: "visible",
              ddd_z_correction: 100,
            },
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            autoWidth: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // HOME PAGE 5 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-5").length) {
      var tpj = jQuery;
      var revapi5;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-5").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-5");
        } else {
          revapi5 = tpj("#rev-slider-5").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            delay: 9000,
            navigation: {
              keyboardNavigation: 'on',
              keyboard_direction: 'horizontal',
              mouseScrollNavigation: 'on',
              mouseScrollReverse: 'default',
              onHoverStop: 'on',
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              bullets: {
                style: "",
                enable: true,
                container: "slider",
                hide_onmobile: true,
                hide_onleave: false,
                hide_delay: 200,
                hide_under: 0,
                hide_over: 9999,
                direction: "vertical",
                space: 5,
                h_align: "right",
                v_align: "center",
                h_offset: 50
              }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            scrolleffect: {
              blur: "on",
              maxblur: "2",
              on_slidebg: "on",
              direction: "top",
              multiplicator: "2",
              multiplicator_layers: "2",
              tilt: "10",
              disable_on_mobile: "off",
            },
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "on",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // HOME PAGE 6 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-6").length) {
      var tpj = jQuery;
      var revapi6;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-6").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-6");
        } else {
          revapi6 = tpj("#rev-slider-6").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            delay: 9000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "vertical",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              bullets: {
                style: "",
                enable: true,
                container: "slider",
                hide_onmobile: false,
                hide_onleave: false,
                hide_delay: 200,
                hide_under: 0,
                hide_over: 9999,
                direction: "vertical",
                space: 5,
                h_align: "right",
                v_align: "center",
                h_offset: 50
              }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            scrolleffect: {
              blur: "on",
              maxblur: "2",
              on_slidebg: "on",
              direction: "top",
              multiplicator: "2",
              multiplicator_layers: "2",
              tilt: "10",
              disable_on_mobile: "off",
            },
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // HOME PAGE 8 - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-7").length) {
      var tpj = jQuery;
      var revapi7;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-7").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-7");
        } else {
          revapi7 = tpj("#rev-slider-7").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 9000,
            disableProgressBar: "on",
            navigation: {
              keyboardNavigation: "on",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "on",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              arrows: {
                style: "zeus",
                enable: true,
                hide_onmobile: true,
                hide_under: 600,
                hide_onleave: true,
                tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 50,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 50,
                  v_offset: 0
                }
              }
            },
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [830, 830, 700, 700],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 2000,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // COMING SOON - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-coming-soon").length) {
      var tpj = jQuery;
      var revapi8;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-coming-soon").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-coming-soon");
        } else {
          revapi8 = tpj("#rev-slider-coming-soon").show().revolution({
            sliderType: "hero",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 1000,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            },
            shadow: 0,
            spinner: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // EVENT DETAILS - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-event").length) {
      var tpj = jQuery;
      var revapi9;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-event").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-event");
        } else {
          revapi9 = tpj("#rev-slider-event").show().revolution({
            sliderType: "hero",
            jsFileLocation: "revolution/js/", 
            dottedOverlay: "twoxtwo",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [700, 700, 700, 700],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "enterpoint",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // RESTAURANT - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-restaurant").length) {
      var tpj = jQuery;
      var revapi10;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-restaurant").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-restaurant");
        } else {
          revapi10 = tpj("#rev-slider-restaurant").show().revolution({
            sliderType: "hero",
            jsFileLocation: "revolution/js/",
            dottedOverlay: "twoxtwo",
            delay: 9000,
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [550, 550, 550, 550],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "enterpoint",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            disableProgressBar: "on",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // SPA - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-spa").length) {
      var tpj = jQuery;
      var revapi11;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-spa").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-spa");
        } else {
          revapi11 = tpj("#rev-slider-spa").show().revolution({
            sliderType: "hero",
            jsFileLocation: "revolution/js/",
            dottedOverlay: "twoxtwo",
            delay: 9000,
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [550, 550, 550, 550],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "enterpoint",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            disableProgressBar: "on",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // OFFER - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-offer").length) {
      var tpj = jQuery;
      var revapi12;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-offer").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-offer");
        } else {
          revapi12 = tpj("#rev-slider-offer").show().revolution({
            sliderType: "hero",
            jsFileLocation: "revolution/js/",
            dottedOverlay: "twoxtwo",
            delay: 9000,
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [550, 550, 700, 700],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "enterpoint",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            disableProgressBar: "on",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // GALLERY SLIDER - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-gallery").length) {
      var tpj = jQuery;
      var revapi13;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-gallery").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-gallery");
        } else {
          revapi13 = tpj("#rev-slider-gallery").show().revolution({
            sliderType: "carousel",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: "on",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "on",
              mouseScrollReverse: "default",
              onHoverStop: "on",
            },
            carousel: {
              horizontal_align: "center",
              vertical_align: "center",
              fadeout: "on",
              vary_fade: "on",
              maxVisibleItems: 3,
              infinity: "on",
              space: 0,
              stretch: "off"
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [600, 600, 400, 300],
            gridheight: [800, 800, 533, 400],
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };

    // =============================================
    // ROOM SLIDER - REVOLUTION SLIDER
    // =============================================
    if ($("#rev-slider-room").length) {
      var tpj = jQuery;
      var revapi14;
      tpj(document).ready(function() {
        if (tpj("#rev-slider-room").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev-slider-room");
        } else {
          revapi14 = tpj("#rev-slider-room").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "auto",
            delay: 9000,
            navigation: {
              keyboardNavigation: 'on',
              keyboard_direction: 'horizontal',
              mouseScrollNavigation: 'off',
              mouseScrollReverse: 'default',
              onHoverStop: 'on',
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              bullets: {
                style: "",
                enable: true,
                container: "slider",
                hide_onmobile: true,
                hide_onleave: false,
                hide_delay: 200,
                hide_under: 0,
                hide_over: 9999,
                direction: "vertical",
                space: 5,
                h_align: "right",
                v_align: "center",
                h_offset: 50,
                v_offset: -20
              }
            },
            viewPort: {
              enable: true,
              outof: "wait",
              visible_area: "80%"
            },
            responsiveLevels: [1200, 992, 768, 480],
            visibilityLevels: [1200, 992, 768, 480],
            gridwidth: [1200, 992, 768, 480],
            gridheight: [750, 750, 700, 600],
            lazyType: "single",
            disableProgressBar: "on",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: 1,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      });
    };*/


    // =============================================
    // WOW
    // =============================================
    /*new WOW().init();*/









    // =============================================
    // COMMING SOON PAGE
    // =============================================

    // =============================================
    // BACK TO TOP
    // =============================================
    var amountScrolled = 500;
    var backtotop = $('.back-to-top');
    $(window).on('scroll', function() {
      if ($(window).scrollTop() > amountScrolled) {
        backtotop.addClass('active');
      } else {
        backtotop.removeClass('active');
      }
    });
    backtotop.on('click', function() {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });

  });
})(jQuery);
