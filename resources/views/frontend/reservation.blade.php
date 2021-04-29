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
<?php
// $stepe =$step;
//  dd($stepe);
//

?>


    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.header')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}

    @include('frontend.layouts.common.banner-header',[ 'title'=> 'Réservation', 'sub_title'=>'Réservez votre Bungalow au complexe CET','bg_id'=>'bg-9'])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ Reservation  - STERP-1 template  ++++++++++--}}
    @include("frontend.reservation.step-". $step)
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}




@endsection


@section('include_scripts')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>

    <!-- validate -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection

