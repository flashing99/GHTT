@if(is_null($slides) || count($slides) ==0){

{{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
<div style="    margin-bottom: 65px; margin-top:25px">
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'La Complexe Touristique C.E.T', 'sub_title'=>" Trouvez l'hébergement Idéal pour vous et votre famille",'bg_id'=>'bg-2'])
</div>
{{-- ########### start #############--}}

@else

    <section class="section-slider slider-style-2 clearfix">

        <h1 class="element-invisible">Slider</h1>

        <div class="slider">
            <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
                <ul>
                @foreach($slides as $slide)
                    {{$slide}}
                    <!-- SLIDE NR. 1 -->
                        <li data-transition="crossfade">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('storage/slides/images/'.$slide->picture)}}"
                                 alt="Image"
                                 title="Image"
                                 data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 class="rev-slidebg"
                                 data-no-retina=""
                            >
                            <!-- LAYER NR. 1 -->
                            <div class="wrapper">
                                <div
                                    class="tp-caption tp-resizeme text-uppercase"
                                    data-x="center"
                                    data-hoffset=""
                                    data-y="350"
                                    data-voffset=""
                                    data-responsive_offset="on"
                                    data-fontsize="['70','60','50','80']"
                                    data-lineheight="['70','60','50','80']"
                                    data-whitespace="wrap"
                                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    style="z-index: 5; color: #fff; font-weight: 900;">{{ $slide->title }}
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div
                                    class="tp-caption tp_m_title tp-resizeme"
                                    data-x="center"
                                    data-hoffset=""
                                    data-y="250"
                                    data-voffset=""
                                    data-responsive_offset="on"
                                    data-fontsize="['18','18','16','16']"
                                    data-lineheight="['18','18','16','16']"
                                    data-whitespace="nowrap"
                                    data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    style="color: #fff">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                   {{-- <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>--}}
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div
                                    class="tp-caption tp_m_title tp-resizeme "
                                    data-x="center"
                                    data-hoffset=""
                                    data-y="290"
                                    data-voffset=""
                                    data-responsive_offset="on"
                                    data-fontsize="['25','25','18','18']"
                                    data-lineheight="['25','25','18','18']"
                                    data-whitespace="nowrap"
                                    data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    style="color: #fff">
                                    COMPLEXE TOURISTIQUE C . E . T
                                </div>
                                <div
                                    class="tp-caption tp-resizeme"
                                    data-x="center"
                                    data-hoffset=""
                                    data-y="420"
                                    data-voffset=""
                                    data-responsive_offset="on"
                                    data-fontsize="['24','24','21','16']"
                                    data-lineheight="['30','30','24','16']"
                                    data-whitespace="nowrap"
                                    data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                    style="z-index: 6; color: #fff;">
                                    {{ $slide->text }}
                                   {{-- Faites de votre séjour et de celui de vos proches un moment unique !--}}
                                </div>
                                <!-- LAYER NR. 2 -->
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


        {{--   <div class="slider">
               <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
                   <ul>



                       <!-- SLIDE NR. 1 -->
                       <li data-transition="crossfade">
                           <!-- MAIN IMAGE -->
                           <img src="{{ asset('assets/images/slider/slide-1.png')}}"
                                alt="Image"
                                title="Image"
                                data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="10"
                                class="rev-slidebg"
                                data-no-retina=""
                           >
                           <!-- LAYER NR. 1 -->
                           <div class="wrapper">
                           <div
                               class="tp-caption tp-resizeme text-uppercase"
                               data-x="center"
                               data-hoffset=""
                               data-y="350"
                               data-voffset=""
                               data-responsive_offset="on"
                               data-fontsize="['70','60','50','80']"
                               data-lineheight="['70','60','50','80']"
                               data-whitespace="wrap"
                               data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               style="z-index: 5; color: #fff; font-weight: 900;">ALLIANT CHARME ET CONFORT
                           </div>

                           <!-- LAYER NR. 5 -->
                           <div
                               class="tp-caption tp_m_title tp-resizeme"
                               data-x="center"
                               data-hoffset=""
                               data-y="250"
                               data-voffset=""
                               data-responsive_offset="on"
                               data-fontsize="['18','18','16','16']"
                               data-lineheight="['18','18','16','16']"
                               data-whitespace="nowrap"
                               data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               style="color: #fff">
                               <i class="fa fa-star-o"></i>
                               <i class="fa fa-star-o"></i>
                               <i class="fa fa-star-o"></i>
                               <i class="fa fa-star-o"></i>
                               <i class="fa fa-star-o"></i>
                           </div>
                           <!-- LAYER NR. 6 -->
                           <div
                               class="tp-caption tp_m_title tp-resizeme"
                               data-x="center"
                               data-hoffset=""
                               data-y="290"
                               data-voffset=""
                               data-responsive_offset="on"
                               data-fontsize="['25','25','18','18']"
                               data-lineheight="['25','25','18','18']"
                               data-whitespace="nowrap"
                               data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               style="color: #fff">
                               COMPLEXE TOURISTIQUE CET
                           </div>
                           <!-- LAYER NR. 2 -->
                           </div>

                       </li>

                       <!-- SLIDE NR. 2 -->
                       <li data-transition="crossfade">
                           <!-- MAIN IMAGE -->
                           <img src="{{ asset('assets/images/slider/slide-3.jpg')}}"
                                alt="Image"
                                title="Image"
                                data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="10"
                                class="rev-slidebg"
                                data-no-retina=""
                           >
                           <!-- LAYER NR. 1 -->
                          <div class="wrapper">
                              <div
                                  class="tp-caption tp-resizeme text-uppercase"
                                  data-x="center"
                                  data-hoffset=""
                                  data-y="350"
                                  data-voffset=""
                                  data-responsive_offset="on"
                                  data-fontsize="['70','60','50','80']"
                                  data-lineheight="['70','60','50','80']"
                                  data-whitespace="wrap"
                                  data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                  style="z-index: 5; color: #fff; font-weight: 900;">Un lieu unique
                              </div>

                              <!-- LAYER NR. 5 -->
                              <div
                                  class="tp-caption tp_m_title tp-resizeme"
                                  data-x="center"
                                  data-hoffset=""
                                  data-y="250"
                                  data-voffset=""
                                  data-responsive_offset="on"
                                  data-fontsize="['18','18','16','16']"
                                  data-lineheight="['18','18','16','16']"
                                  data-whitespace="nowrap"
                                  data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                  style="color: #fff">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <!-- LAYER NR. 6 -->
                              <div
                                  class="tp-caption tp_m_title tp-resizeme"
                                  data-x="center"
                                  data-hoffset=""
                                  data-y="290"
                                  data-voffset=""
                                  data-responsive_offset="on"
                                  data-fontsize="['25','25','18','18']"
                                  data-lineheight="['25','25','18','18']"
                                  data-whitespace="nowrap"
                                  data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                  style="color: #fff">
                                  COMPLEXE TOURISTIQUE CET
                              </div>
                              <!-- LAYER NR. 2 -->
                              <div
                                  class="tp-caption tp-resizeme"
                                  data-x="center"
                                  data-hoffset=""
                                  data-y="420"
                                  data-voffset=""
                                  data-responsive_offset="on"
                                  data-fontsize="['24','24','21','16']"
                                  data-lineheight="['30','30','24','16']"
                                  data-whitespace="nowrap"
                                  data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                  style="z-index: 6; color: #fff;">
                                  Faites de votre séjour et de celui de vos proches un moment unique !
                              </div>
                          </div>

                       </li>



                       <!-- SLIDE NR. 3 -->
                       <!-- SLIDE NR. 2 -->
                       <li data-transition="crossfade">
                           <!-- MAIN IMAGE -->
                           <img src="{{ asset('assets/images/slider/slide-2.png')}}"
                                alt="Image"
                                title="Image"
                                data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="10"
                                class="rev-slidebg"
                                data-no-retina=""
                           >
                           <!-- LAYER NR. 1 -->
                           <div class="wrapper">
                               <div
                                   class="tp-caption tp-resizeme text-uppercase"
                                   data-x="center"
                                   data-hoffset=""
                                   data-y="350"
                                   data-voffset=""
                                   data-responsive_offset="on"
                                   data-fontsize="['70','60','50','80']"
                                   data-lineheight="['70','60','50','80']"
                                   data-whitespace="wrap"
                                   data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   style="z-index: 5; color: #fff; font-weight: 900;"> Profitez de vos vacances
                               </div>

                               <!-- LAYER NR. 5 -->
                               <div
                                   class="tp-caption tp_m_title tp-resizeme"
                                   data-x="center"
                                   data-hoffset=""
                                   data-y="250"
                                   data-voffset=""
                                   data-responsive_offset="on"
                                   data-fontsize="['18','18','16','16']"
                                   data-lineheight="['18','18','16','16']"
                                   data-whitespace="nowrap"
                                   data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   style="color: #fff">
                                   <i class="fa fa-star-o"></i>
                                   <i class="fa fa-star-o"></i>
                                   <i class="fa fa-star-o"></i>
                                   <i class="fa fa-star-o"></i>
                                   <i class="fa fa-star-o"></i>
                               </div>
                               <!-- LAYER NR. 6 -->
                               <div
                                   class="tp-caption tp_m_title tp-resizeme"
                                   data-x="center"
                                   data-hoffset=""
                                   data-y="290"
                                   data-voffset=""
                                   data-responsive_offset="on"
                                   data-fontsize="['25','25','18','18']"
                                   data-lineheight="['25','25','18','18']"
                                   data-whitespace="nowrap"
                                   data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   style="color: #fff">
                                   COMPLEXE TOURISTIQUE CET
                               </div>
                               <!-- LAYER NR. 2 -->
                               <div
                                   class="tp-caption tp-resizeme"
                                   data-x="center"
                                   data-hoffset=""
                                   data-y="420"
                                   data-voffset=""
                                   data-responsive_offset="on"
                                   data-fontsize="['24','24','21','16']"
                                   data-lineheight="['30','30','24','16']"
                                   data-whitespace="nowrap"
                                   data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   style="z-index: 6; color: #fff;">
                                   Profitez de la vie et faites vous plaisir!
                               </div>
                           </div>

                       </li>





                   </ul>
               </div>

           </div>--}}


    </section>


@endif
