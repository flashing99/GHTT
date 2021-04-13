<!-- RESERVATION -->
<section class="section-reservation-page bg-white">

    <div class="container">
        <div class="reservation-page">

            <!-- STEP -->
            <div class="reservation_step">
                <ul>
                    <li ><a href="#"><span>1.</span> Choisissez la date</a></li>
                    <li class="active"><a href="#"><span>2.</span> Choisissez la pièce</a></li>
                    <li><a href="#"><span>3.</span> Faites une réservation</a></li>
                    <li><a href="#"><span>4.</span> Confirmation</a></li>
                </ul>
            </div>
            <!-- END / STEP -->

            <div class="row">




                <!-- ::::::::::::: SIDEBAR :::::::::::::-->
                <div class="col-md-4 col-lg-3">
                    <div class="reservation-sidebar mb40">

                        <!-- :::::::::::::ROOM SELECT -->
                        <div class="reservation-room-selected bg-gray">
                            <!-- HEADING -->
                            <h2 class="reservation-heading">Select Rooms</h2>
                            <!-- END / HEADING -->

                            <!-- CURRENT -->
                            <div class="reservation-room-seleted_current bg-green">
                                <h6>Vous avez résevé Bungalow type F3</h6>
                                <span>2 Adultes, 1 Enfant</span>
                            </div>
                            <!-- CURRENT -->

                            <!-- ITEM -->
                            <div class="reservation-room-seleted_item reservation_disable">
                                <h6>Bungalow F3</h6> <span class="reservation-option">2 Adultes, 1 Enfant</span>
                            </div>
                            <!-- END / ITEM -->
                        </div>
                        <!-- END / ROOM SELECT -->

                        <!-- SIDEBAR AVAILBBILITY -->
                        <div class="reservation-sidebar_availability bg-gray">

                            <!-- HEADING -->
                            <h2 class="reservation-heading">VOTRE RESERVATION</h2>
                            <!-- END / HEADING -->

                            <h6 class="check_availability_title">VOS DATES DE SÉJOUR</h6>

                            <div class="check_availability-field">
                                <label>Arrivée</label>
                                <input type="text" class="awe-calendar awe-input from" placeholder="Arrive">
                            </div>

                            <div class="check_availability-field">
                                <label>Départ</label>
                                <input type="text" class="awe-calendar awe-input to" placeholder="Depature">
                            </div>

                            <h6 class="check_availability_title">NOMBRE DE PERSONES</h6>

                            <div class="check_availability-field">
                                <label>TYPE DE BUNGALOWS</label>
                                <select class="awe-select">
                                    <option>F1</option>
                                    <option>F2</option>
                                    <option>F3</option>
                                    <option>F4</option>

                                </select>
                            </div>

                            <div class="check_availability_group pl0">
                       {{--         <span class="label-group">Nombres de personnes</span>--}}
                                <div class="check_availability-field_group ">
                                    <div class="check_availability-field">
                                        <label>Adulte</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>

                                    <div class="check_availability-field">
                                        <label>Enfant</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                          {{--  <div class="check_availability_group">

                                <span class="label-group">CHAMBRE 2</span>

                                <div class="check_availability-field_group">

                                    <div class="check_availability-field">
                                        <label>Adulte</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>

                                    <div class="check_availability-field">
                                        <label>Chirld</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>

                                </div>

                            </div>--}}

                            <button class="awe-btn awe-btn-13">VÉRIFIER LA DISPONIBILITÉ</button>

                        </div>
                        <!-- END / SIDEBAR AVAILBBILITY -->

                    </div>
                </div>
                <!-- END SIDEBAR -->



                {{--   :::::::::  CONTENT :::::::::::   --}}

                <!-- CONTENT -->
                <div class="col-md-8 col-lg-9">

                    <div class="reservation_content">

                        <!-- RESERVATION ROOM -->
                        <div class="reservation-room">

                            <!-- ITEM -->
                            <div class="reservation-room_item">

                                <h2 class="reservation-room_name"><a href="#">Bungalow F3</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-1.jpg" alt=""></a>
                                </div>

                                <div class="reservation-room_text">

                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>

                                        </ul>
                                    </div>

                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>

                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout">11900 dzd</span> / days
                                    </p>

                                    <a href="#" class="awe-btn awe-btn-default">Réserver</a>

                                </div>

                                <div class="reservation-room_package">

                                    <a data-toggle="collapse" href="#reservation-room_package-1"
                                       class="reservation-room_package-more collapsed">Afficher plus de package</a>

                                    <div class="reservation-room_package-content collapse"
                                         id="reservation-room_package-1">

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standard</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">12900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-4.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                    </div>

                                </div>

                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="reservation-room_item">

                                <h2 class="reservation-room_name"><a href="#">COUPLE room</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-4.jpg" alt=""></a>
                                </div>

                                <div class="reservation-room_text">

                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>

                                        </ul>
                                    </div>

                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>

                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout">11900 dzd</span> / days
                                    </p>

                                    <a href="#" class="awe-btn awe-btn-default">Réserver</a>

                                </div>

                                <div class="reservation-room_package">

                                    <a data-toggle="collapse" href="#reservation-room_package-2"
                                       class="reservation-room_package-more collapsed">Show more package</a>

                                    <div class="reservation-room_package-content collapse"
                                         id="reservation-room_package-2">

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                    </div>

                                </div>

                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="reservation-room_item  current-select">

                                <h2 class="reservation-room_name"><a href="#">STANDARD room</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-3.jpg" alt=""></a>
                                </div>

                                <div class="reservation-room_text">

                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>

                                        </ul>
                                    </div>

                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>

                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout">11900 dzd</span> / days
                                    </p>

                                    <a href="#" class="awe-btn awe-btn-default">Réserver</a>

                                </div>

                                <div class="reservation-room_package">

                                    <a data-toggle="collapse" href="#reservation-room_package-3"
                                       class="reservation-room_package-more collapsed">Show more package</a>

                                    <div class="reservation-room_package-content collapse"
                                         id="reservation-room_package-3">

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                    </div>

                                </div>

                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="reservation-room_item">

                                <h2 class="reservation-room_name"><a href="#">FAMILY room</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-1.jpg" alt=""></a>
                                </div>

                                <div class="reservation-room_text">

                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>

                                        </ul>
                                    </div>

                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>

                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout">11900 dzd</span> / days
                                    </p>

                                    <a href="#" class="awe-btn awe-btn-default">Réserver</a>

                                </div>

                                <div class="reservation-room_package">

                                    <a data-toggle="collapse" href="#reservation-room_package-4"
                                       class="reservation-room_package-more collapsed">Show more package</a>

                                    <div class="reservation-room_package-content collapse"
                                         id="reservation-room_package-4">

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item current-select">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                        <!-- ITEM PACKAGE -->
                                        <div class="reservation-package_item">

                                            <div class="reservation-package_img">
                                                <a href="#"><img src="../assets/images/reservation/package/img-1.jpg" alt=""></a>
                                            </div>

                                            <div class="reservation-package_text">

                                                <h4><a href="#">package standar</a></h4>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature from
                                                    45 BC, making it over 2000 years old.</p>

                                                <div class="reservation-package_book-price">
                                                    <p class="reservation-package_price">
                                                        <span class="amout">11900 dzd</span>
                                                    </p>
                                                    <a href="#" class="awe-btn awe-btn-default">Réservez le package</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- END / ITEM PACKAGE -->

                                    </div>

                                </div>

                            </div>
                            <!-- END / ITEM -->

                        </div>
                        <!-- END / RESERVATION ROOM -->

                    </div>

                </div>
                 <!-- END / CONTENT -->

            </div>
        </div>
    </div>

</section>
<!-- END / RESERVATION -->
