<!-- HEADER -->
<?php


if (!isset($currentPageId)) {
    $currentPageId = 1;
} ;

echo($currentPageId);
?>
<header id="header" class="header-v2">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span><i class="lotus-icon-cloud"></i> 25 °C</span>
                <span><i class="lotus-icon-location"></i> Complexe touristique CET, Tipaza</span>
                <span><i class="lotus-icon-phone"></i>+213 (0) 23 252-525 </span>
            </div>
            <div class="header_right float-right">

                        <span class="login-register">
                            <a href="login.html">Login</a>
                            <a href="register.html">register</a>
                        </span>

                <div class="dropdown currency">
                    <span>DZD <i class="fa fa"></i></span>
                    <ul>
                        <li class="active"><a href="#">DZD</a></li>
                        <li><a href="#">EUR</a></li>
                    </ul>
                </div>

                <div class="dropdown language">
                    <span>FR</span>

                    <ul>
                        <li class="active"><a href="#">FR</a></li>
                        <li><a href="#">AR</a></li>
                        <li><a href="#">ENG</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- END / HEADER TOP -->

    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">
            <!-- HEADER LOGO -->
            <div class="header_logo">
                <a href="#"><img src="../assets/images/logo140.png" alt=""></a>
            </div>
            <!-- END / HEADER LOGO -->

            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">
                    <li class="current-menu-item" data-id="1">
                        <a href="/">Accueil </a>
                    </li>
                    {{-- <li><a href="/about">A propos</a></li>--}}
                    <li data-id="2"><a href='{{ route('show-rooms') }}'>Hébergement </a></li>
                    <li   data-id="3">
                        <a href="#">Restaurants <span class="fa fa-caret-down"></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('show.restaurants')}}/#Casbah">Restaurant Casbah </a></li>
                            <li><a href="{{route('show.restaurants')}}/#Panoramique ">Restaurant panoramique</a></li>
                            <li><a href="{{route('show.restaurants')}}/#Horse Club">Restaurant Horse club</a></li>
                            <li><a href="{{route('show.restaurants')}}/#Typique">Restaurant Typique</a></li>
                            <li><a href="{{route('show.restaurants')}}/#Buvette">Buvettes</a></li>
                        </ul>
                    </li>

                    <li data-id="4">
                        <a href="{{route('reservation.show',1 )}}">Reservation </a>
                        {{-- <a href="{{route('Booking.searchRoomForm') }}">Reservation </a>--}}
                    </li>

                    <li data-id="5"><a href="{{route('show.galleries')}}">Galerie </a></li>
                    <li data-id="6"><a href="{{route('contactus.store')}}">Contact</a></li>
                </ul>
            </nav>
            <!-- END / HEADER MENU -->

            <!-- MENU BAR -->
            <span class="menu-bars">
                        <span></span>
                    </span>
            <!-- END / MENU BAR -->

        </div>
    </div>
    <!-- END / HEADER LOGO & MENU -->

</header>
<!-- END / HEADER -->



@section('include_js_scripts')


    <script type="text/javascript">

        $(document).ready(function () {
            let currentId = {{ $currentPageId }}
            $('.header_menu li').each(function () {
                $(this).removeClass("current-menu-item");
            });


            $('.header_menu li').each(function () {
                let id = $(this).data('id');
                /*if (id !== 'undefined') {
                    console.log(id);
                }*/
                if (id === currentId) {
                    console.log(' menu header - currentId (active Btn)  ::::: ', currentId);
                    $(this).addClass("current-menu-item");
                }
            });

        })

    </script>
@endsection

