{{--##############################################################--}}

<!-------------------  RESERVATION  STEP 1  ( Form )------------------------->

{{--###############################################################--}}

<section class="section-reservation-page bg-white">

    <div class="container">
        <div class="reservation-page">

            <div class="row">

                <div class="col-12 col-md-8 col-lg-8 col-md-offset-2">
                    <div class="form-search-room">
                               <form id="ajax-form-search-room" action="{{route('reservation.show',2)}}" method="post">
{{--                        <form id="ajax-form-search-room1" action="#" method="post">--}}
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
                                                   name='arrive' placeholder="Arrivée" required>
                                        </div>

                                    </div>

                                    <div class="check_availability-field">
                                        <label>Départ</label>
                                        <input type="text" class="awe-calendar awe-input to field-text "
                                               name='departure' placeholder="Départ" required>
                                    </div>

                                    <h6 class="check_availability_title">NOMBRE DE PERSONES</h6>

                                    <div class="check_availability-field">
                                        <label>TYPE DE BUNGALOWS</label>
                                        <select class="awe-select field-text " name="type"
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
                                                <select class="awe-select field-text" name="adults" required>
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
                                                <select class="awe-select field-text " name="children" required>
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

                                <div name="contact-content"></div>

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
