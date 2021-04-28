@php

@endphp


@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,'Hébergement')
{{-- add CSS LINKS--}}
@section('include_css')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/lib/owl.carousel.css') }}">
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
@endsection

@section('main-content')

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.header')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'Hébergement', 'sub_title'=>'Trouvez l\'hébergement Idéal pour vous et votre famille',"bg_id"=>'bg-16'])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}



    <!-- ROOM DETAIL -->
    <section class="section-room-detail bg-white">
        <div class="container">

            <!-- DETAIL -->
            <div class="room-detail">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">


                            <div class="col-md-12">
                                <h2 class="mt30 f24"> Bungalow type {{$type}}</h2>

                                <!-- LAGER IMGAE -->
                                <div class="room-detail_img  mt10 ">
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-1.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-2.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-3.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-4.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-5.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-6.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-7.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                    <div class="room_img-item">
                                        <img src="../assets/images/rooms/{{$type}}/detail/img-8.jpg" alt="">
                                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry</h6>
                                    </div>
                                </div>
                                <!-- END / LAGER IMGAE -->

                                <!-- THUMBNAIL IMAGE -->
                                <div class="room-detail_thumbs">
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-1.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-2.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-3.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-4.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-5.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-6.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-7.jpg" alt=""></a>
                                    <a href="#"><img src="../assets/images/rooms/{{$type}}/detail/img-8.jpg" alt=""></a>
                                </div>
                                <!-- END / THUMBNAIL IMAGE -->
                            </div>
                            <!-- TAB -->
                            <div class="col-md-12 mt50">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto beatae cum
                                distinctio illum labore non nulla quasi quod sint tenetur. Amet aspernatur ea facilis
                                magnam, officiis sunt voluptatibus? Dolore doloremque, expedita iste molestiae nesciunt
                                nisi non numquam praesentium quo repellat suscipit voluptatum. Earum illum minus nam
                                optio, quidem totam veritatis.
                            </div>
                            <div class="col-md-12">
                                        <div class="room-detail_tab-content">
                                            <ul class="room-detail_tab-header mt20 ">
                                                <li class="active"><a href="#" data-toggle="tab">Services du Bungalow</a></li>
                                            </ul>
                                            <!-- AMENITIES -->
                                            <div class="room-detail_services f16 mt30 ">
                                                <p>Located in the heart of Aspen with a unique blend of contemporary luxury and
                                                    historic heritage, deluxe accommodations, superb amenities, genuine hospitality
                                                    and dedicated service for an elevated experience in the Rocky Mountains.</p>

                                                <div class="row">

                                                    <div class="col-xs-6 col-lg-6">
                                                        {{-- <h6>LIVING ROOM</h6>--}}

                                                        <ul class="no-list">
                                                            <li><i class="fa fa-check-circle-o pr10"></i>Air conditioning</li>
                                                            <li><i class="fa fa-check-circle-o pr10"></i>wifi</li>
                                                            <li><i class="fa fa-check-circle-o pr10"></i>Frigo</li>
                                                            <li><i class="fa fa-check-circle-o pr10"></i>Terrasse privé</li>
                                                            <li><i class="fa fa-check-circle-o pr10"></i>Salle de séjour<small>petit
                                                                    salon, mini bar cuisine</small></li>

                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- END / AMENITIES -->

                                            <ul class="room-detail_tab-header  mt20 ">
                                                <li class="active"><a href="#" data-toggle="tab">Services du complexe</a></li>
                                            </ul>
                                            <!-- OVERVIEW -->
                                            <div class="room-detail_services mt30">
                                                <h5 class='text-uppercase'>de Finibus Bonorum et Malorum", written by Cicero in 45
                                                    BC</h5>
                                                <p>Located in the heart of Aspen with a unique blend of contemporary luxury and
                                                    historic heritage, deluxe accommodations, superb amenities.</p>

                                                {{-- +++++++++++++++   add services template  ++++++++++--}}
                                                <section class="ot-out-best pt40 pb40  pt-sm-20 pb-sm-20">
                                                    <div class="row">

                                                        <div class=" col-md-12 content ">

                                                            <div class="owl-single owl-best" data-single_item="false"
                                                                 data-desktop="5"
                                                                 data-small_desktop="3"
                                                                 data-tablet="3" data-mobile="2"
                                                                 data-nav="true"
                                                                 data-pagination="false">
                                                                <div class="item text-center">
                                                                    {{--                        d-flex flex-column align-items-end  justify-content-end--}}

                                                                    {{--  <img class="img-responsive mb10" src="./assets/images/home/icons/icons-1.png" alt="icons">--}}
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-wifi f52 color-blue "></i></div>
                                                                    <span class="font-hind f-500">Free Wifi</span>


                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-parking f52 "></i></div>
                                                                    <span class="font-hind f-500">Packing</span>
                                                                </div>
                                                                {{--  <div class="item text-center">
                                                                      <div class="  d-block  mb10"><i class="ghtt-icon-clim f46"></i></div>
                                                                      <span class="font-hind f-500">Climatisation</span>
                                                                  </div>--}}
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-garderie-enfants f52 "></i></div>
                                                                    <span class="font-hind f-500">Garderie d'enfants</span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-landry f52 "></i></div>
                                                                    <span class="font-hind f-500"> Blanchisserie</span>
                                                                </div>

                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-equitation f52 "></i></div>
                                                                    <span class="font-hind f-500">Équitation</span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-horse-club f52 "></i></div>
                                                                    <span class="font-hind f-500">Horse club</span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-salle-gym f52 "></i></div>
                                                                    <span class="font-hind f-500"> Salle de GYM</span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-terains-tennis f52 "></i></div>
                                                                    <span class="font-hind f-500"> Terrains de Tennis </span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-sports f52 "></i></div>
                                                                    <span class="font-hind f-500"> Terrain multi-sport</span>
                                                                </div>

                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-piscine f52 "></i></div>
                                                                    <span class="font-hind f-500">Piscines Adultes et enfants</span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-plage f52 "></i></div>
                                                                    <span class="font-hind f-500">  Plage </span>
                                                                </div>

                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-base-nautique f52 "></i></div>
                                                                    <span class="font-hind f-500"> Base nautique</span>
                                                                </div>

                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-foret f52 "></i></div>
                                                                    <span class="font-hind f-500"> Foret récréative</span>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="  d-block  mb10"><i
                                                                            class="ghtt-icon-theatre f52 "></i></div>
                                                                    <span class="font-hind f-500"> Théâtre en plein air</span>
                                                                </div>


                                                            </div>


                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- END / OUR BEST -->
                                                {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

                                            </div>
                                            <!-- END / OVERVIEW -->


                                        </div>
                                    </div>
                            <!-- END / TAB -->
                        </div>
                    </div>


                    {{-- BOOKING FORM--}}

                    <div class="col-lg-4">

                        <!-- FORM BOOK -->
                        <div class="room-detail_book  mt30">

                            <div class="room-detail_total">
                                <img src="../assets/images/logo140.png" alt="" class="icon-logo">

                                <h6>À partir de</h6>

                                <p class="price">
                                    <span class="amout">8800 </span> dzd/jour
                                </p>
                            </div>

                            <div class="room-detail_form">
                                <label>Arrivée</label>
                                <input type="text" class="awe-calendar from" placeholder="Date d'arrivée">
                                <label>Départ</label>
                                <input type="text" class="awe-calendar to" placeholder="Date de départ">
                                <label>Adultes</label>
                                <select class="awe-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option selected>3</option>
                                    <option>4</option>
                                </select>
                                <label>Enfants</label>
                                <select class="awe-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option selected>3</option>
                                    <option>4</option>
                                </select>
                                <button class="awe-btn awe-btn-13 f12">Vérifier les disponibilités</button>
                                <button class="awe-btn awe-btn-8 f12 ">Réservez</button>
                            </div>

                        </div>
                        <!-- END / FORM BOOK -->

                    </div>
                </div>
            </div>
            <!-- END / DETAIL -->





            {{--<!-- COMPARE ACCOMMODATION -->
            <div class="room-detail_compare">
                <h2 class="room-compare_title">COMPARE ACCOMMODATION</h2>

                <div class="room-compare_content">

                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="room-compare_item">
                                <div class="img">
                                    <a href="#"><img src="../assets/images/rooms/detail/compare/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2><a href="">LUxury room</a></h2>

                                    <ul>
                                        <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                        <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                        <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                    </ul>

                                    <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>

                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="room-compare_item">
                                <div class="img">
                                    <a href="#"><img src="../assets/images/rooms/detail/compare/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2><a href="">Family Room</a></h2>

                                    <ul>
                                        <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                        <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                        <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                    </ul>

                                    <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>

                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="room-compare_item">
                                <div class="img">
                                    <a href="#"><img src="../assets/images/rooms/detail/compare/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2><a href="">standard Room</a></h2>

                                    <ul>
                                        <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                        <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                        <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                    </ul>

                                    <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>

                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="room-compare_item">
                                <div class="img">
                                    <a href="#"><img src="../assets/images/rooms/detail/compare/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2><a href="">couple Room</a></h2>

                                    <ul>
                                        <li><i class="lotus-icon-person"></i> Max: 2 Person(s)</li>
                                        <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                        <li><i class="lotus-icon-view"></i> View: Ocen</li>
                                    </ul>

                                    <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>

                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->
                    </div>

                </div>
            </div>
            <!-- END / COMPARE ACCOMMODATION -->--}}

        </div>
    </section>
    <!-- END / SHOP DETAIL -->





@endsection




@section('include_scripts')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>

    <!-- Owl carousel carousel -->
    <script type="text/javascript" src="{{ asset('./assets/js/lib/owl.carousel.js') }}"></script>
    <!-- validate -->

    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection
