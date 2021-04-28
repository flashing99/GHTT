@php
    //  back();
      /* redirect('/');  */





@endphp
@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,'Restaurants')
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

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'Restaurants', 'sub_title'=>'Déguster des repas chaleureux et très variés','bg_id'=>'bg-3'])


    {{-- ++++++++++++++++++++++++ START BODY ++++++++++++++++++++++++++++++++++--}}
    {{--    {{ dd($data ) }}--}}
    <section class="section-room-detail bg-white pt40 pb30">
        <div class="container">
            <!-- INTRO TEXT -->
            <div class="room-detail">
                <div class="row  text-center">
                    <div class=" col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8  col-sm-12">
                        <p>
                            Le Complexe dispose de 4 grands restaurants en son sein, qui combinent un espace de
                            restauration classique avec un espace familial qui fait se sentir vraiment chez soi.
                        </p>
                        <div>
                            <img src="./assets/images/icon-accmod.png" alt="icon">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    @for($i=0; $i<count($data)  ;$i++)
        <div class="hidden">
            {{ $name =$data[$i]['name']}}
            {{  $type= $data[$i]['type'] }}
            {{  $url= $data[$i]['url'] }}
            {{  $countImg = $data[$i]['count-img'] }}


        </div>
        <span id="{{$name}}"> </span>

        {{--   ++++++++++++++++++++++++ START loop++++++++++++++++++++++++++++++++++--}}
        <!-- ROOM DETAIL -->
            <section class="section-room-detail bg-white pt30 pb30">
                <div class="container">

                    <!-- DETAIL -->
                    <div class="room-detail">
                        <div class="row ">


                            <div class=" col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8  col-sm-12">
                                <h2 class="  f24  upper "> Restaurant {{$name}}</h2>
                                <p class="resto-type  f-600 f16 upper">{{ $type }}</p>

                            @if(!is_null($countImg) && $countImg >1)
                                <!-- LAGER IMGAE -->

                                    <div class="room-detail_img id1 mt10">
                                        @for($j=0; $j<$countImg  ;$j++)
                                            <div class="room_img-item">
                                                <img src="../assets/images/restaurants/{{$url}}/img-{{$j+1}}.jpg"
                                                     alt="">
                                                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry</h6>
                                            </div>
                                        @endfor
                                    </div>
                                    <!-- END / LAGER IMGAE -->

                                    <!-- THUMBNAIL IMAGE -->
                                    <div class="room-detail_thumbs id1" id='{{$type}}'>
                                        @for($j=0; $j<$countImg ;$j++)
                                            <a href="#"><img
                                                    src="../assets/images/restaurants/{{$url}}/img-{{$j+1}}.jpg"
                                                    alt=""></a>
                                        @endfor

                                    </div>
                                    <!-- END / THUMBNAIL IMAGE -->
                            </div>
                            @else
                                <div>
                                    <img src="../assets/images/restaurants/{{$url}}/img-1.jpg" alt="">
                                </div>

                            @endif


                        </div>
                    </div>
                </div>
                <!-- END / DETAIL -->
            </section>
            <!-- END / SHOP DETAIL -->
        {{--  ++++++++++++++++++++++++ END Loop++++++++++++++++++++++++++++++++++--}}

        @endfor


        {{--
            <!-- ROOM DETAIL -->
            <section class="section-room-detail bg-white">
                <div class="container">

                    <!-- DETAIL -->
                    <div class="room-detail">
                        <div class="row ">
                            <div class=" col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8  col-sm-12">
                                <h2 class="mt30"> Restaurant {{$name}}</h2>

                                <!-- LAGER IMGAE -->
                                <div class="room-detail_img  mt10">
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-1.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-2.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-3.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-4.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-5.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-6.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/restaurants/{{$url}}/img-7.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>

                                </div>
                                <!-- END / LAGER IMGAE -->

                                <!-- THUMBNAIL IMAGE -->
                                <div class="room-detail_thumbs" id='Casbah'>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-1.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-2.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-3.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-4.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-5.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-6.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/restaurants/{{$url}}/img-7.jpg" alt=""></a>

                                </div>
                                <!-- END / THUMBNAIL IMAGE -->
                            </div>



                            </div>
                        </div>
                    </div>
                    <!-- END / DETAIL -->




            </section>
            <!-- END / SHOP DETAIL -->--}}








        {{-- ++++++++++++++++++++++++++++  END BODY  ++++++++++++++++++++++++++++++--}}

        @endsection




        @section('include_scripts')
            {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
            {{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>--}}
            <!-- Owl carousel carousel -->
                <script type="text/javascript" src="{{ asset('./assets/js/lib/owl.carousel.js') }}"></script>

        {{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>--}}
        {{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>--}}
        {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection

