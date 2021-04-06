{{-- extend  TEMPLATE MASTER  page--}}
@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,' Accueil')
{{-- add CSS LINKS--}}
@section('include_css')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/owl.carousel.css') }}">
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
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

    {{-- +++++++++++++++  Chambres et tarifs - add ROOMS & RATES template  ++++++++++--}}
    @include('frontend.home.rooms')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++   add About template  ++++++++++--}}
    @include('frontend.home.about')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

@endsection


@section('include_scripts')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>
    <!-- Filtre Isotop  -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/isotope.pkgd.min.js') }}"></script>
    <!-- Revolution carousel -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.themepunch.tools.min.js') }}"></script>
    <!-- Owl carousel carousel -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/owl.carousel.js') }}"></script>

    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.magnific-popup.min.js') }}"></script>

    <!-- validate -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection
