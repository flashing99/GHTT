@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,'À propos ')
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
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'À propos ', 'sub_title'=>'À propos du complexe touristique CET','bg_id'=>'bg-9'])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


    {{-- +++++++++++++++++++++++++ BODY +++++++++++++++++++++++++++++++++--}}
    <!-- ABOUT -->
    <section class="section-about">
        <div class="container">

            <div class="about">

                <!-- ITEM -->
                <div class="about-item">

                    <div class="img owl-single">
                        <img src="./assets/images/about/img-1.jpg" alt="">
                        <img src="./assets/images/about/img-1.jpg" alt="">
                    </div>

                    <div class="text">
                        <h2 class="heading">À propos du complext CET</h2>

                        <div class="desc">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <b>The point of using Lorem Ipsum is that it has a more-or-less normal</b> distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing<br> packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p><br>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>

                </div>
                <!-- END / ITEM -->

                <!-- ITEM -->
                <div class="about-item about-right">

                    <div class="img">
                        <img src="./assets/images/about/img-1.jpg" alt="">
                    </div>

                    <div class="text">
                        <h2 class="heading"> Pourquoi nos clients nous choisissent-ils?</h2>
                        <div class="desc">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, <b>sometimes by accident, sometimes on purpose</b> (injected humour and the like).</p>
                        </div>
                    </div>

                </div>
                <!-- END / ITEM -->

            </div>

        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- HOTEL STATISTICS -->
    <section class="section-statistics bg-10">

        <div class="awe-overlay"></div>

        <div class="container">
            <div class="statistics">

                <h2 class="heading white text-center">Hotel statistics</h2>

                <div class="statistics_content">
                    <div class="row">

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">768</span>
                                <span>Guest Stay</span>
                            </div>
                        </div>
                        <!-- END ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">632</span>
                                <span>BOOK ROOM</span>
                            </div>
                        </div>
                        <!-- END ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">1024</span>
                                <span>MEMBER STAY</span>
                            </div>
                        </div>
                        <!-- END ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="statistics_item">
                                <span class="count">256</span>
                                <span>MEALS SERVED</span>
                            </div>
                        </div>
                        <!-- END ITEM -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / HOTEL STATISTICS -->

    <!-- TEAM -->
    <section class="section-team">
        <div class="container">

            <div class="team">
                <h2 class="heading text-center">Team Member</h2>
                <p class="sub-heading text-center">Lorem Ipsum is simply dummy text of the printing</p>

                <div class="team_content">
                    <div class="row">

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="team_item text-center">

                                <div class="img">
                                    <a href=""><img src="./assets/images/team/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2>JESSICA ALBA</h2>
                                    <span>Manager lotus Hotel</span>
                                    <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                    <div class="team-share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="team_item text-center">

                                <div class="img">
                                    <a href=""><img src="./assets/images/team/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2>Robet WILIAM</h2>
                                    <span>Founder Hotel</span>
                                    <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                    <div class="team-share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="team_item text-center">

                                <div class="img">
                                    <a href=""><img src="./assets/images/team/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2>Adam</h2>
                                    <span>Lorem lipsum</span>
                                    <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                    <div class="team-share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="col-xs-6 col-md-3">
                            <div class="team_item text-center">

                                <div class="img">
                                    <a href=""><img src="./assets/images/team/img-1.jpg" alt=""></a>
                                </div>

                                <div class="text">
                                    <h2>David Gari</h2>
                                    <span>Lorem lipsum</span>
                                    <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri, quod natum evertitur ne per.</p>
                                    <div class="team-share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END / ITEM -->

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END / TEAM -->

    {{-- +++++++++++++++++++++++++ END BODY +++++++++++++++++++++++++++++++++--}}



@endsection




@section('include_scripts')

    <script type="text/javascript" src="{{ asset('./assets/js/lib/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.parallax-1.1.3.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
{{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>--}}

    <!-- validate -->

{{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>--}}
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection

