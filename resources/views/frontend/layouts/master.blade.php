<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- START HEAD--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="../assets/images/favicon.png"/>

    {{-- add HEAD template--}}
    @include('frontend.layouts.common.htmlheader')

    {{-- display additive CSS Links--}}
    @yield('include_css')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

</head>
{{-- END HEAD--}}

{{-- +++++++++++++++++++++ START BODY +++++++++++++++++++++++++--}}
<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

<!-- PRELOADER -->
<div id="preloader">
    <span class="preloader-dot"></span>
</div>
<!-- END / PRELOADER -->

<!-- PAGE WRAP -->
<div id="page-wrap">
{{-- ++++++++++<!-- INCLUDE CONTENT BODY -->++++++++++++++++++++--}}

    {{--   @yield('breadcrumbs')--}}
     @yield('main-content')

{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
</div>
<!-- END / PAGE WRAP -->


{{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
{{--@include('frontend.layouts.common.footer')--}}
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
@include('frontend.layouts.common.footer-1')
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
<script src="{{ asset('./assets/js/app.js') }}"></script>
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=G-FTD49DTM2N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FTD49DTM2N');
</script>--}}
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}




<!-- LOAD JQUERY -->
<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>--}}
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/isotope.pkgd.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.themepunch.revolution.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.themepunch.tools.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/owl.carousel.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.appear.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countTo.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countdown.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.parallax-1.1.3.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.magnific-popup.min.js') }}"></script>--}}
 <script type="text/javascript" src="{{ asset('./assets/js/lib/SmoothScroll.js') }}"></script>

{{--<!-- validate -->--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>--}}
{{-- +++++++++++ include extra script links for this page +++++++++++ --}}
@yield('include_scripts')
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{{-- +++++++++++++ include script code for this page +++++++++++++++ --}}
@yield('scripts')
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
<!-- Custom jQuery -->
<script type="text/javascript" src="{{ asset('./assets/js/scripts.js') }}"></script>


<!-- /. Global Scripts -->
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>--}}
{{--<script src="{{ asset('https://www.inforca-algerie.com/assets/js/app.js') }}"></script>--}}


</body>
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


{{--END BODY--}}
</html>

