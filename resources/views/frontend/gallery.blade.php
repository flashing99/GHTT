@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,'Galerie CET')
{{-- add CSS LINKS--}}
@section('include_css')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/magnific-popup.css') }} ">
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
@endsection


@section('main-content')

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.header', ['currentPageId'=>5 ])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}

    @include('frontend.layouts.common.banner-header',[ 'title'=> 'La Galerie du Cet', 'sub_title'=>'Découvrez Notre complexe touristique en image au travers de notre galerie photos et vidéos','bg_id'=>'bg-2'])
    {{-- ########### start #############--}}

    <!-- GALLERY -->
    <section class="section_page-gallery">
        <div class="container">
            <div class="gallery">

                <!-- FILTER -->
                <div class="gallery-cat text-center">
                    <ul class="list-inline">
                        <li class="active"><a href="#" data-filter="*">TOUT</a></li>
                        <li><a href="#" data-filter=".rooms">HEBERGEMENT</a></li>
                        <li><a href="#" data-filter=".leisure"> LOISIRE</a></li>
                        <li><a href="#" data-filter=".animations">ANIMATION</a></li>
                        <li><a href="#" data-filter=".restaurants">RESTAURATION</a></li>
                        {{--                        <li><a href="#" data-filter=".complexe">LE COMPLEXE</a></li>--}}
                    </ul>
                </div>
                <!-- END / FILTER -->

                <!-- GALLERY CONTENT -->
                <div class="gallery-content">
                    <div class="row">
                        <div class="gallery-isotope col-4">

                            <!-- ITEM SIZE -->
                            <div class="item-size "></div>
                            <!-- END / ITEM SIZE -->

                            <!-- ITEM -->
                            @isset($galleries)
                                @foreach($galleries as $media)


                                    @if($media['type'] =='2')

                                        {{-- {{"+ + + + + "}}--}}
                                       {{--
                                         type =1 => image
                                         type =2 => movie
                                        --}}
                                        {{-- {{"+ + + + + "}}--}}

                                        @for ($i = 0; $i <count($media['categories']); $i++)
                                            <p style="display: none;  color: white">
                                                {{$text=""}}
                                                {{   $text= $text.' '.$media['categories'][$i] }}</p>
                                        @endfor
                                        {{--{{"+ + + + + "}}--}}
                                    <!-- ITEM -->
                                        <div class="item-isotope {{$text}}">
                                            <div class="gallery_item">
                                                <a href="{{$media['urlMovie']}}" target="_blank" class="mfp-iframe"
                                                   title="{{$media['title']}}">
                                                    <img src="./assets/images/gallery/page/{{$media['url']}}.jpg" alt="">
                                                </a>
                                                <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->
                                    @else
                                        {{$text=""}}
                                        @for ($i = 0; $i <count($media['categories']); $i++)
                                            <p style="display: none;  color: white">
                                                {{  $text= $text.' '.$media['categories'][$i] }}</p>
                                        @endfor
                                    <!-- END / ITEM  image -->
                                        <div class="item-isotope  {{$text}}">
                                            <div class="gallery_item">
                                                <a href="./assets/images/gallery/popup/img-1.jpg" class="mfp-image"
                                                   title="{{$media['title']}}">
                                                    <img src="./assets/images/gallery/page/{{$media['url']}}.jpg"
                                                         alt="">
                                                </a>
                                                <h6 class="text">{{$media['title']}}</h6>
                                            </div>

                                        </div>
                                        <!-- END / ITEM images -->
                                    @endif


                                @endforeach
                            @endisset

                        </div>
                    </div>

                </div>
                <!-- GALLERY CONTENT -->

            </div>
        </div>
    </section>
    <!-- END / GALLERY -->



    {{-- ########### start #############--}}
@endsection


@section('include_scripts')

    {{--    +++++++++++++++++++++++ Filtre Isotop +++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/isotope.pkgd.min.js') }}"></script>
    {{--    +++++++++++++++++++++++ Magnific popup +++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.magnific-popup.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

@endsection
