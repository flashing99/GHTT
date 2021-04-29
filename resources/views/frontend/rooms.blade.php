@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,'Hébergement'  )
{{-- add CSS LINKS--}}
@section('include_css')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/owl.carousel.css') }}">
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
@endsection

@section('main-content')

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.header ',['currentPageId'=>2 ])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'Hébergement', 'sub_title'=>'Trouvez l\'hébergement Idéal pour vous et votre famille',"bg_id"=>'bg-16' ])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

<!--    --><?php // $type="F3"; ?>

    <!-- ROOM -->
    <section class="section-room bg-white">
        <div class="container">

            <div class="room-wrap-2">

                <!-- ITEM -->
                <div class="room_item-2">

                    <div class="img">
                        <a href="#"><img src="../assets/images/rooms/f1/img-1.jpg" alt=""></a>
                    </div>

                    <div class="text">
                        <h2 class="f28"><a href="#">Bungalow type F1</a></h2>
                        <span class="price">À partir de <span class="amout f-600 ">8800 dzd</span> Par jour</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <b>more-or-less</b> normal <b>distribution</b> of letters.</p>
                        <ul class="no-list">
                            <li > <i class="fa fa-check-circle-o pr10"></i> Air conditioning</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>wifi</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Frigo</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>terrasse privé</li>

                        </ul>

                        <a  href="{{ route('details-room','F1') }}"  class="awe-btn awe-btn-13">VOIR PLUS</a>
                    </div>
                </div>
                <!-- ITEM -->

                <!-- ITEM -->
                <div class="room_item-2 img-right">

                    <div class="img">
                        <a href="#"><img src="../assets/images/rooms/f2/img-1.jpg" alt=""></a>
                    </div>

                    <div class="text">
                        <h2 class="f28"><a href="#">Bungalow type F2</a></h2>
                        <span class="price">À partir de <span class="amout  f-600">10999 dzd</span> Par jour</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <b>more-or-less</b> normal <b>distribution</b> of letters.</p>
                       {{-- <ul>
                            <li>Max: 4 Person(s)</li>
                            <li>Superficie: 35 m2</li>
                            <li>Vue: Sur mère</li>
                            <li>Lits: King-size Ou double lits</li>
                        </ul>--}}

                        <ul class="no-list">
                            <li > <i class="fa fa-check-circle-o pr10"></i> Air conditioning</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>wifi</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Frigo</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>terrasse privé</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Salle de séjour( petit salon, mini bar cuisine )</li>
                        </ul>

                        <a  href="{{ route('details-room','F2') }}"  class="awe-btn awe-btn-13">VOIR PLUS</a>
                    </div>
                </div>
                <!-- ITEM -->

                <!-- ITEM -->
                <div class="room_item-2">

                    <div class="img">
                        <a href="#"><img src="../assets/images/rooms/f3/img-1.jpg" alt=""></a>
                    </div>

                    <div class="text">
                        <h2 class="f28"><a href="#">Bungalow type F3</a></h2>
                        <span class="price">À partir de <span class="amout  f-600">12900 dzd</span> Par jour</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <b>more-or-less</b> normal <b>distribution</b> of letters.</p>
                        <ul class="no-list">
                            <li > <i class="fa fa-check-circle-o pr10"></i>Air conditioning</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>wifi</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Frigo</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>terrasse privé</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Salle de séjour( petit salon, mini bar cuisine )</li>
                        </ul>

                        <a  href="{{ route('details-room','F3') }}"  class="awe-btn awe-btn-13">VOIR PLUS</a>
                    </div>
                </div>
                <!-- ITEM -->

                <!-- ITEM -->
                <div class="room_item-2 img-right">

                    <div class="img">
                        <a href="#"><img src="../assets/images/rooms/f4/img-1.jpg" alt=""></a>
                    </div>

                    <div class="text">
                        <h2 class="f28"><a href="#">Bungalow type F4</a></h2>
                        <span class="price">À partir de <span class="amout f-600">15000 dzd</span> Par jour</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <b>more-or-less</b> normal <b>distribution</b> of letters.</p>
                        <ul class="no-list">
                            <li > <i class="fa fa-check-circle-o pr10"></i> Air conditioning</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>wifi</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Frigo</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>terrasse privé</li>
                            <li><i class="fa fa-check-circle-o pr10"></i>Salle de séjour( petit salon, mini bar cuisine )</li>
                        </ul>

                        <a   href="{{ route('details-room','F4') }}"  class="awe-btn awe-btn-13">VOIR PLUS</a>
                    </div>
                </div>
                <!-- ITEM -->

            </div>

        </div>
    </section>
    <!-- END / ROOM -->


@endsection




@section('include_scripts')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>

    <!-- validate -->

    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection
