<!-- HEADER -->
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
                    <li class="current-menu-item">
                        <a href="/">Accueil </a>
                        {{--  <ul class="sub-menu">
                              <li><a href="index.html">Home 1</a></li>
                              <li class="current-menu-item"><a href="index-2.html">Home 2</a></li>
                              <li><a href="index-3.html">Home 3</a></li>
                              <li><a href="index-4.html">Home 4</a></li>
                          </ul>--}}
                    </li>
                    {{-- <li><a href="/about">A propos</a></li>--}}

                    <li>
                        <a href='{{ route('show-rooms') }}'>Hébergement </a>
                        {{--     <ul class="sub-menu">
                                 <li><a href="room-1.html">Bungalow F1</a></li>
                                 <li><a href="room-2.html">Bungalow F2</a></li>
                                 <li><a href="room-3.html">Bungalow F3</a></li>
                                 <li><a href="room-4.html">Bungalow F4</a></li>
                             </ul>--}}
                    </li>
                    <li>
                        <a href="#">Restaurants <span class="fa fa-caret-down"></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('show-restaurants')}}/#Casbah">Restaurant Casbah </a></li>
                            <li><a href="{{route('show-restaurants')}}/#Panoramique ">Restaurant panoramique</a></li>
                            <li><a href="{{route('show-restaurants')}}/#Horse Club">Restaurant Horse club</a></li>
                            <li><a href="{{route('show-restaurants')}}/#Typique">Restaurant Typique</a></li>
                            <li><a href="{{route('show-restaurants')}}/#Buvette">Buvettes</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{route('reservation.show',1 )}}">Reservation </a>
                    </li>

                    <li>
                        <a href="#">Gallerie </a>
                        {{--  <ul class="sub-menu">
                              <li><a href="gallery.html">Gallery Style 1</a></li>
                              <li><a href="gallery-2.html">Gallery Style 2</a></li>
                              <li><a href="gallery-3.html">Gallery Style 3</a></li>
                          </ul>--}}
                    </li>

                    </li>
                    <li><a href="contactus">Contact</a></li>
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
