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
@include('frontend.layouts.common.footer')
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


</body>
{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


{{--END BODY--}}
</html>

