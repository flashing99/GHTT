{{--##############################################################--}}

<!-------------------  RESERVATION  STEP 0  ( Form )------------------------->

{{--###############################################################--}}

{{$col = 8}}
{{--{{--}}

{{--( is_null($col)) ?$col= 8 : $col= 4--}}


{{--}}--}}


<section class="section-reservation-page bg-white">

    <div class="container">
        <div class="reservation-page">

            <div class="row">

                <div class="col-12 col-md-{{$col}} col-lg-{{$col}} col-md-offset-2">
                    <div class="form-search-room">
                        {{--          <form id="ajax-form-search-room" action="{{route('reservation-step-2',2)}}" method="post">--}}
                        <form id="ajax-form-search-room1" method="post">
                            @csrf

                            <div class="reservation-sidebar mb40">

                                <!-- SIDEBAR AVAILBBILITY -->
                                <div class="reservation-sidebar_availability bg-gray">

                                    <!-- HEADING -->
                                    <h2 class="reservation-heading">VOTRE RESERVATION</h2>
                                    <!-- END / HEADING -->

                                    <h6 class="check_availability_title">VOS DATES DE SÉJOUR</h6>

                                    <div class="check_availability-field">
                                        <label>Arrivée</label>
                                        <div>
                                            <input type="text" class="awe-calendar awe-input from field-text "
                                                   id='arrive' placeholder="Arrivée" required>
                                        </div>

                                    </div>

                                    <div class="check_availability-field">
                                        <label>Départ</label>
                                        <input type="text" class="awe-calendar awe-input to field-text "
                                               id='departure' placeholder="Départ" required>
                                    </div>

                                    <h6 class="check_availability_title">NOMBRE DE PERSONES</h6>

                                    <div class="check_availability-field">
                                        <label>TYPE DE BUNGALOWS</label>
                                        <select class="awe-select field-text " id="type"
                                                placeholder="Séléctionner le type d'hébergement" required>
                                            {{--                                    <option value="-1">Séléctionner le type d'hébergement </option>--}}
                                            <option value="f1">F1</option>
                                            <option value="f2">F2</option>
                                            <option value="f3">F3</option>
                                            <option value="f4">F4</option>

                                        </select>
                                    </div>

                                    <div class="check_availability_group pl0">
                                        {{--         <span class="label-group">Nombres de personnes</span>--}}
                                        <div class="check_availability-field_group ">
                                            <div class="check_availability-field">
                                                <label>Adultes</label>
                                                <select class="awe-select field-text" id="adults" required>
                                                    {{--                                            <option value="-1">Nombre d'adultes</option>--}}
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>

                                            <div class="check_availability-field">
                                                <label>Enfants</label>
                                                <select class="awe-select field-text " id="children" required>
                                                    {{--                                            <option value="-1">Nombre d'anfants</option>--}}
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>

                                    <button class="vailability-submit awe-btn awe-btn-13">VÉRIFIER LA DISPONIBILITÉ
                                    </button>

                                </div>
                                <!-- END / SIDEBAR AVAILBBILITY -->

                                <div id="contact-content"></div>

                            </div>
                        </form>
                    </div>
                </div>

                {{-- :::::::::::::::: CALANDER ::::::::::::::: --}}


            </div>
        </div>
    </div>

</section>
<!-- END / RESERVATION -->

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

                    //----- Enable Button  [ Reserver] --------
                    let $BtnDeleteId = $(this).parent().parent().attr('data-id');
                    console.log('data-id BTN RESERVE ::: ' + $BtnDeleteId);

                    $('.awe-btn-9[data-id=' + $BtnDeleteId + ']').prop("disabled", false).removeClass('disabled');

                    //----DELETE ITEM ------------------
                    deleteItem($(event.target).data('item'));
                    //----UPDATE TOTAL ----------------
                    updateTotals();

                });


            });
        }


        $(document).ready(function () {
            BookingRooms();
            $('#ajax-form-search-room1').submit(function (e) {
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
                        url: "{{ route('reservation.search') }}",
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


