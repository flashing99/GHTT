{{-- extend  TEMPLATE MASTER  page--}}
@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,' Accueil')
{{-- add CSS LINKS--}}
@section('include_css')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/owl.carousel.css') }}">
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    <link rel="stylesheet" href="../assets/revolution/css/layers.css">
    <link rel="stylesheet" href="../assets/revolution/css/settings.css">
    <link rel="stylesheet" href="../assets/revolution/css/navigation.css">
@endsection



@section('main-content')

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.header')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add slider template  +++++++++++++++++++++--}}
    @include('frontend.home.slider')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add availability template  +++++++++++++++++++++--}}
    @include('frontend.home.availability')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


    {{-- +++++++++++++++   add About template  ++++++++++--}}
    @include('frontend.home.about')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++  Chambres et tarifs - add ROOMS & RATES template  ++++++++++--}}
    @include('frontend.home.rooms')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add template Restaurant  ++++++++++--}}
    @include('frontend.home.restaurant')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


    {{-- +++++++++++++++   add services template  ++++++++++--}}
    @include('frontend.home.services')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++   add gallery template  ++++++++++--}}
    @include('frontend.home.gallery')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}



@endsection


@section('include_scripts')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>
    <!-- Filtre Isotop  -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/isotope.pkgd.min.js') }}"></script>
    <!-- Revolution carousel -->
{{--
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.themepunch.tools.min.js') }}"></script>
--}}

    <!-- Revolution carousel -->
    <script src="{{ asset('./assets/js/main.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
     <script  src="{{ asset('./assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('./assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>

    <!-- Owl carousel carousel -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/owl.carousel.js') }}"></script>

    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.appear.min.js') }}"></script>
{{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countTo.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countdown.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.magnific-popup.min.js') }}"></script>

    <!-- validate -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection
