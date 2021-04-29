{{--##############################################################--}}

<!-------------------  RESERVATION  STEP 2  ( Listing )------------------------->

{{--###############################################################--}}

 {{ $value = session('type')}}


<section class="section-reservation-page bg-white">
    <div class="container">
        <div class="reservation-page">

            <div class="row">

                <!-- ::::::::::::: SIDEBAR :::::::::::::-->
                <div class="col-md-4 col-lg-4">
                    <div class="reservation-sidebar mb40  stick">

                        <!-- :::::::::::::ROOM SELECT -->
                        <div class="reservation-room-selected bg-gray">
                            <!-- HEADING -->
                        {{--                            <h2 class="reservation-heading  text-lowercase">Hébergement choisit</h2>--}}
                        <!-- END / HEADING -->

                            <h6 class="f-600 reservation-room-seleted_current bg-green f18 pd15  text-center">
                                Réservation en cours</h6>

                            <div id="list-selected-rooms">
                                <div class="reservation-room-selected_item " style="display: flex; flex-direction: row"></div>
                            </div>

                            <div class="reservation-room-seleted_total">
                                <label>TOTAL</label>
                                <span class="reservation-total">0.00 dzd </span>
                            </div>

                            <div class="reservation-sidebar_availability  mt0   pd5">
                                <a class="awe-btn awe-btn-3 hidden mt15 pl15   pr15" id="initialize-Book"
                                   href= "#">
                                    Rénitialiser
                                </a>
                            </div>


                            <div class="reservation-sidebar_availability  mt0   pd5">
                                <a class="awe-btn awe-btn-13 hidden  mt15" id="finalize-Book"
                                   href= "{{route('reservation.check',3)}}">
                                    Finaliser la Réservation
                                </a>
                            </div>

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
                                <input type="text" class="awe-calendar awe-input from" placeholder="Arrivée">
                            </div>

                            <div class="check_availability-field">
                                <label>Départ</label>
                                <input type="text" class="awe-calendar awe-input to" placeholder="Départ">
                            </div>

                            <h6 class="check_availability_title">NOMBRE DE PERSONES</h6>

                            <div class="check_availability-field">
                                <label>TYPE DE BUNGALOW</label>
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
                                        <label>Adultes</label>
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
                                        <label>Enfants</label>
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

                            <button class="awe-btn awe-btn-13">VÉRIFIER LA DISPONIBILITÉ</button>

                        </div>
                        <!-- END / SIDEBAR AVAILBBILITY -->

                    </div>
                </div>
                <!-- END SIDEBAR -->




            {{--   :::::::::  CONTENT :::::::::::  :::::::::  CONTENT ::::::::::: :::::::::  CONTENT :::::::::::  --}}




            <!-- CONTENT -->
                <div class="col-md-8 col-lg-8">

                    <div class="reservation_content">

                        <!-- RESERVATION ROOM -->
                        <div class="reservation-room">
                            <!-- ITEM -->
                            <div class="reservation-room_item">
                                <h2 class="reservation-room_name  "><a href="#">Bungalow type F1</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-1.jpg" alt=""></a>
                                </div>
                                <div class="reservation-room_text" data-type="f3">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                        <ul>
                                            <li>Air conditionné</li>
                                            <li>Accès Internet/WI-FI</li>
                                            <li>Vue sur mère</li>
                                        </ul>
                                    </div>
                                  <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>

                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout price">15000 </span> dzd/Nuit
                                    </p>
                                    <button class="awe-btn f-600 awe-btn-9" data-id="1"> Réserver</button>
                                    {{--   <a href="#" class="awe-btn f-600 awe-btn-9">Réserver</a>--}}
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="reservation-room_item">

                                <h2 class="reservation-room_name"><a href="#">Bungalow type F1</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-2.jpg" alt=""></a>
                                </div>

                                <div class="reservation-room_text" data-type="f2">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                        <ul>
                                            <li>Air conditionné</li>
                                            <li>Accès Internet/WI-FI</li>
                                            <li>Vue sur mère</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>

                                    <div class="clear"></div>
                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout price">11900 </span> dzd/Nuit
                                    </p>
                                    <button class="awe-btn f-600 awe-btn-9 " data-id="2">
                                        Réserver
                                    </button>

                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="reservation-room_item">
                                <h2 class="reservation-room_name"><a href="#">Bungalow type F1</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-4.jpg" alt=""></a>
                                </div>
                                <div class="reservation-room_text" data-type="f2">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                        <ul>
                                            <li>Air conditionné</li>
                                            <li>Accès Internet/WI-FI</li>
                                            <li>Vue sur gazon</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>
                                    <div class="clear"></div>
                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout  price">11900 </span> dzd/Nuit
                                    </p>
                                    <button class="awe-btn f-600 awe-btn-9 " data-id="3">
                                        Réserver
                                    </button>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            <!-- ITEM -->
                            <div class="reservation-room_item">
                                <h2 class="reservation-room_name"><a href="#">Bungalow type F1</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-1.jpg" alt=""></a>
                                </div>
                                <div class="reservation-room_text" data-type="f2">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                        <ul>
                                            <li>Air conditionné</li>
                                            <li>Accès Internet/WI-FI</li>
                                            <li>Vue sur mère</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>
                                    <div class="clear"></div>
                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout  price">11900 </span> dzd/Nuit
                                    </p>
                                    <button class="awe-btn f-600 awe-btn-9" data-id="4"> Réserver</button>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            <!-- ITEM -->
                            <div class="reservation-room_item">

                                <h2 class="reservation-room_name"><a href="#">Bungalow type F1</a></h2>

                                <div class="reservation-room_img">
                                    <a href="#"><img src="../assets/images/reservation/img-3.jpg" alt=""></a>
                                </div>

                                <div class="reservation-room_text" data-type="f1">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                        <ul>
                                            <li>Air conditionné</li>
                                            <li>Accès Internet/WI-FI</li>
                                            <li>Vue sur mère</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="reservation-room_view-more">Voir plus d"informations</a>
                                    <div class="clear"></div>

                                    <p class="reservation-room_price">
                                        <span class="reservation-room_amout  price ">1200 </span> dzd/Nuit
                                    </p>
                                    <button class="awe-btn f-600 awe-btn-9 " data-id="5">
                                        Réserver
                                    </button>
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




<!-- END / RESERVATION - search form -->

@section('include_scripts')

    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>
    <script type="text/javascript">


        // alert('sdqsdqsdqsdq');

        function BookingRooms(e) {

            let $totalBox = $('.reservation-room-seleted_total span');
            let $finalizeBook = $('#finalize-Book');
            let $initializeBook = $('#initialize-Book');
            let $totalPrice = 0;
            let $html = "";
            //let $roomSelected = $('.reservation-room-selected');
            // Your jquery code
            $(".awe-btn-9").on('click', function (e) {
                e.preventDefault();
                let $listSelectedRooms = $('#list-selected-rooms');
                let $price = $(this).parent().find('.reservation-room_price .price').text();
                let $type = $(this).parent().parent().find('.reservation-room_name').text();
                let $id = $(this).data('id');
                let $itemId = 'item-' + $id;
                //  $id= $(this).parent().attr("data-id");

                // alert("PRICE : " + $price + " / NAME : " + $type);
                //----------------------------------
                $html = '';
                $html += ' <div class="reservation-room-seleted_item  pl0 pr0"  id="' + $itemId + '" data-id="' + $id + '" style="display: flex;">';
                $html += '   <div class=" col-md-8">';
                $html += '       <h6 class="block "> ' + $type + ' </h6>';
                $html += '       <span class="block apb-option">2 Adult, 1 Child</span>';
                $html += '       <span class="block pb-option">Du 04/04/22 Au 08/04/22</span>';
                $html += '       <a href="#" class=" block reservation-room-seleted_change f14 f-600  deleteRowButton" data-item="#' + $itemId + '"  >Supprimer</a>';
                $html += '   </div>';
                $html += '   <div class=" col-md-4  text-right">';
                $html += '        <span class="reservation-amout f16 f-600  ">' + $price + '</span>  dzd';
                $html += '   </div>';
                $html += ' </div>';
                //--------------- add Html -------------------
                $listSelectedRooms.append($html);
                updateTotals();

                // ---- Disable Button [Reserver]
                $(this).prop("disabled", true).addClass('disabled');

                //--------------- Update total Value-------------------
                function updateTotals() {
                    $totalPrice = getItemsTotal('.reservation-amout');
                    // console.log('totalPrice =====' + $totalPrice);
                    $totalBox.text(toMoney($totalPrice));

                    //--- Display Button  [ Finaliser la réservation ]
                    if ($totalPrice > 0) {
                        console.log('Hidden');
                        $finalizeBook.removeClass('hidden');
                        $initializeBook.removeClass('hidden');
                    } else {
                        console.log('Visible');
                        $finalizeBook.addClass('hidden');
                        $initializeBook.addClass('hidden');
                    }
                }



                //--------------- Calculate  Sum Total -------------------
                function getItemsTotal(selector) {
                    return Array.from($(selector)).reduce(sumReducer, 0);
                }

                function sumReducer(total, item) {
                    return total += parseInt(item.innerHTML, 10);
                }

                function toMoney(number) {
                    return number.toFixed(2) + ' dzd';
                }

                //--------- DELETE SELECTED ITEM -------
                function deleteItem(itemId) {
                    $(itemId).remove();
                    //  $(this).prop("disabled", true).addClass('disabled');
                }

                //---- Actions for Button Delete
                $listSelectedRooms.on('click', '.deleteRowButton', function (event) {
                    e.preventDefault();

                    //----- Enable Button  [ Reserver] --------
                    let $BtnDeleteId = $(this).parent().parent().attr('data-id');
                    console.log('data-id BTN RESERVE ::: ' + $BtnDeleteId);

                    $('.awe-btn-9[data-id=' + $BtnDeleteId + ']').prop("disabled", false).removeClass('disabled');


                    //----DELETE ITEM ------------------
                    deleteItem($(event.target).data('item'));
                    //----UPDATE TOTAL ----------------
                    updateTotals();

                });

                //---- Initialize Booking - Empty list booking -----
                $initializeBook.on('click',function (event){
                    e.preventDefault();
                    $listSelectedRooms.empty();
                    //----UPDATE TOTAL ----------------
                    updateTotals();
                    $('.awe-btn-9').each(function(){
                       $(this).prop("disabled", false).removeClass('disabled');
                    });


                });

            });
        }


        $(document).ready(function () {
            BookingRooms();
            $('#ajax-form-search-room').submit(function (e) {
                e.preventDefault();

                let arrive = $('#arrive').val();
                let departure = $('#departure').val();
                let type = $('#type').val();
                let adults = $('#adults').val();
                let children = $('#children').val();
                let _token = $('input[name=_token]').val();
                let col = "8";
                $.ajax(
                    {
                        url: "{{ route('reservation.check',2) }}",
                        type: "POST",
                        dataType: "json",
                        data: {
                            arrive: arrive,
                            departure: departure,
                            type: type,
                            adults: adults,
                            children: children,
                            _token: _token,
                            col: col
                        },
                        success: function (response) {
                            if (response) {

                                console.log('done :'+ response);

                            }

                        }

                    }
                )

            });

        })

    </script>
@endsection
