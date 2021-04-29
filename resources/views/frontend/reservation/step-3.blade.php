{{--##############################################################--}}

<!-------------------  RESERVATION  STEP 3  (checkout From) ------------------------->

{{--###############################################################--}}


<section class="section-reservation-page bg-white">
    <div class="container">
        <div class="reservation-page">

            <div class="row">

                <!-- ::::::::::::: SIDEBAR :::::::::::::-->
                <div class="col-md-4 col-lg-4">
                    <div class="reservation-sidebar mb40  sticky">

                        <!-- :::::::::::::ROOM SELECT -->
                        <div class="reservation-room-selected bg-gray">

                            <h6 class="f-600 reservation-room-seleted_current bg-green pd15  text-center">
                                Réservation en cours</h6>

                           {{-- BOOKING 1 --}}
                            <div id="list-selected-rooms">
                                <div class="reservation-room-seleted_item  pl0 pr0" id="item-1" data-id="1"
                                     style="display: flex; flex-direction: row">
                                    <div class=" col-md-8"><h6 class="block "> Bungalow type F1 </h6>
                                        <span class="block apb-option">2 Adult, 1 Child</span>
                                        <span class="block pb-option">Du 04/04/22 Au 08/04/22</span>
                                        <span class="block pb-option">Séjour : 8 nuités</span>
                                        <span class="block pb-option">Service : Free</span>
                                        <span class="block pb-option">Tax : 1200 dzd</span>
                                    </div>
                                    <div class=" col-md-4  text-right"><span
                                            class="reservation-amout f16 f-600  ">15000 </span> dzd
                                    </div>
                                </div>
                            </div>

                          {{--  BOOKING 2 --}}

                            <div id="list-selected-rooms">
                                <div class="reservation-room-seleted_item  pl0 pr0" id="item-1" data-id="1"
                                     style="display: flex ; flex-direction: row">
                                    <div class=" col-md-8"><h6 class="block "> Bungalow type F1 </h6>
                                        <span class="block apb-option">2 Adult, 1 Child</span>
                                        <span class="block pb-option">Du 04/04/22 Au 08/04/22</span>
                                        <span class="block pb-option">Séjour : 8 nuités</span>
                                        <span class="block pb-option">Service : Free</span>
                                        <span class="block pb-option">Tax : 1600 dzd</span>
                                    </div>
                                    <div class=" col-md-4  text-right"><span
                                            class="reservation-amout f16 f-600  ">11900 </span> dzd
                                    </div>
                                </div>
                            </div>

                            {{--  TOTAL BOOKING --}}

                            <div class="reservation-room-seleted_total">
                                <label>TOTAL</label>
                                <span class="reservation-total">22900 dzd </span>
                            </div>
                            <div class="reservation-sidebar_availability mt0">
                                <a class="awe-btn awe-btn-13 hidden " id="finalize-Book"
                                   url="{{route('reservation.check',3)}}">  Finalisez la Réservation
                                </a>
                            </div>
                        </div>
                        <!-- END / ROOM SELECT -->




                    </div>
                </div>
                <!-- END SIDEBAR -->

            {{--   :::::::::  CONTENT :::::::::::   --}}

            <!-- CONTENT -->

                <!-- CONTENT -->
                <div class="col-md-8 col-lg-8">

                    <div class="reservation_content">

                        <div class="reservation-billing-detail  pt10">
                            {{--                            <p class="reservation-login">Returning customer? <a href="#">Click here to login</a></p>--}}

                            <h4>DÉTAILS Facture</h4>

                            {{--  +++++++++++++++++++++++++++++++++ --}}
                            <label>Pays <sup>*</sup></label>

                            {{--     COUNTRY  LIST   FR     ///////--}}
                            <select class="awe-select" name="country" required>

                                <option value=" Afghanistan ">Afghanistan</option>
                                <option value=" Afrique du Sud  ">Afrique du Sud</option>
                                <option value=" Albanie  ">Albanie</option>
                                <option value=" Algérie</option  " selected>Algérie</option>
                                <option value=" Allemagne  ">Allemagne</option>
                                <option value=" Andorre  ">Andorre</option>
                                <option value=" Angola  ">Angola</option>
                                <option value=" Anguilla  ">Anguilla</option>
                                <option value=" Antarctique  ">Antarctique</option>
                                <option value=" Antigua-et-Barbuda  ">Antigua-et-Barbuda</option>
                                <option value=" Antilles néerlandaises  ">Antilles néerlandaises</option>
                                <option value=" Arabie saoudite  ">Arabie saoudite</option>
                                <option value=" Argentine  ">Argentine</option>
                                <option value=" Arménie  ">Arménie</option>
                                <option value=" Aruba  ">Aruba</option>
                                <option value=" Australie  ">Australie</option>
                                <option value=" Autriche  ">Autriche</option>
                                <option value=" Azerbaïdjan  ">Azerbaïdjan</option>
                                <option value=" Bahamas  ">Bahamas</option>
                                <option value=" Bahreïn  ">Bahreïn</option>
                                <option value=" Bangladesh  ">Bangladesh</option>
                                <option value=" Barbade  ">Barbade</option>
                                <option value=" Bélarus  ">Bélarus</option>
                                <option value=" Belgique  ">Belgique</option>
                                <option value=" Belize  ">Belize</option>
                                <option value=" Bénin  ">Bénin</option>
                                <option value=" Bermudes  ">Bermudes</option>
                                <option value=" Bhoutan  ">Bhoutan</option>
                                <option value=" Birmanie  ">Birmanie</option>
                                <option value=" Bolivie  ">Bolivie</option>
                                <option value=" Bosnie-Herzégovine  ">Bosnie-Herzégovine</option>
                                <option value=" Botswana  ">Botswana</option>
                                <option value=" Brésil  ">Brésil</option>
                                <option value=" Brunei  ">Brunei</option>
                                <option value=" Bulgarie  ">Bulgarie</option>
                                <option value=" Burkina Faso  ">Burkina Faso</option>
                                <option value=" Burundi  ">Burundi</option>
                                <option value=" Cambodge  ">Cambodge</option>
                                <option value=" Cameroun  ">Cameroun</option>
                                <option value=" Canada  ">Canada</option>
                                <option value=" Cap-Vert  ">Cap-Vert</option>
                                <option value=" Chili  ">Chili</option>
                                <option value=" Chine  ">Chine</option>
                                <option value=" Chypre  ">Chypre</option>
                                <option value=" Cité du Vatican  ">Cité du Vatican</option>
                                <option value=" Colombie  ">Colombie</option>
                                <option value=" Comores  ">Comores</option>
                                <option value=" Congo, république du  ">Congo, république du</option>
                                <option value=" Corée du Sud  ">Corée du Sud</option>
                                <option value=" Costa Rica  ">Costa Rica</option>
                                <option value=" Côte d’Ivoire  ">Côte d’Ivoire</option>
                                <option value=" Croatie  ">Croatie</option>
                                <option value=" Danemark  ">Danemark</option>
                                <option value=" Djibouti  ">Djibouti</option>
                                <option value=" Dominique  ">Dominique</option>
                                <option value=" Égypte  ">Égypte</option>
                                <option value=" Émirats arabes unis  ">Émirats arabes unis</option>
                                <option value=" Équateur  ">Équateur</option>
                                <option value=" Érithrée  ">Érithrée</option>
                                <option value=" Espagne  ">Espagne</option>
                                <option value=" Estonie  ">Estonie</option>
                                <option value=" États-Unis  ">États-Unis</option>
                                <option value=" Éthiopie  ">Éthiopie</option>
                                <option value=" Fidji  ">Fidji</option>
                                <option value=" Finlande  ">Finlande</option>
                                <option value=" France  ">France</option>
                                <option value=" Gabon  ">Gabon</option>
                                <option value=" Gambie  ">Gambie</option>
                                <option value=" Géorgie  ">Géorgie</option>
                                <option value=" Géorgie du Sud et Iles Sandwich du Sud  ">Géorgie du Sud et Iles
                                    Sandwich du Sud
                                </option>
                                <option value=" Ghana  ">Ghana</option>
                                <option value=" Gibraltar  ">Gibraltar</option>
                                <option value=" Grèce  ">Grèce</option>
                                <option value=" Grenade  ">Grenade</option>
                                <option value=" Groenland  ">Groenland</option>
                                <option value=" Guadeloupe  ">Guadeloupe</option>
                                <option value=" Guatemala  ">Guatemala</option>
                                <option value=" Guinée  ">Guinée</option>
                                <option value=" Guinée équatoriale  ">Guinée équatoriale</option>
                                <option value=" Guinée-Bissau  ">Guinée-Bissau</option>
                                <option value=" Guyane  ">Guyane</option>
                                <option value=" Guyane française  ">Guyane française</option>
                                <option value=" Haïti  ">Haïti</option>
                                <option value=" Honduras  ">Honduras</option>
                                <option value=" Hong Kong (RAS de la Chine)  ">Hong Kong (RAS de la Chine)</option>
                                <option value=" Hongrie  ">Hongrie</option>
                                <option value=" Ile Christmas  ">Ile Christmas</option>
                                <option value=" Ile Maurice  ">Ile Maurice</option>
                                <option value=" Ile Norfolk  ">Ile Norfolk</option>
                                <option value=" Iles Caïmans  ">Iles Caïmans</option>
                                <option value=" Iles Cocos (Keeling)  ">Iles Cocos (Keeling)</option>
                                <option value=" Iles Cook  ">Iles Cook</option>
                                <option value=" Iles Féroé  ">Iles Féroé</option>
                                <option value=" Iles Malouines (Falkland)  ">Iles Malouines (Falkland)</option>
                                <option value=" Iles Marshall  ">Iles Marshall</option>
                                <option value=" Iles mineures éloignées des Etats-Unis  ">Iles mineures éloignées des
                                    Etats-Unis
                                </option>
                                <option value=" Iles Pitcairn  ">Iles Pitcairn</option>
                                <option value=" Iles Salomon  ">Iles Salomon</option>
                                <option value=" Iles Turks et Caicos  ">Iles Turks et Caicos</option>
                                <option value=" Iles Vierges britanniques  ">Iles Vierges britanniques</option>
                                <option value=" Inde  ">Inde</option>
                                <option value=" Indonésie  ">Indonésie</option>
                                <option value=" Irak  ">Irak</option>
                                <option value=" Irlande  ">Irlande</option>
                                <option value=" Islande  ">Islande</option>
                                <option value=" Israël  ">Israël</option>
                                <option value=" Italie  ">Italie</option>
                                <option value=" Jamaïque  ">Jamaïque</option>
                                <option value=" Japon  ">Japon</option>
                                <option value=" Jordanie  ">Jordanie</option>
                                <option value=" Kazakhstan  ">Kazakhstan</option>
                                <option value=" Kenya  ">Kenya</option>
                                <option value=" Kirghizistan  ">Kirghizistan</option>
                                <option value=" Kiribati  ">Kiribati</option>
                                <option value=" Kosovo  ">Kosovo</option>
                                <option value=" Koweït  ">Koweït</option>
                                <option value=" Laos  ">Laos</option>
                                <option value=" Lesotho  ">Lesotho</option>
                                <option value=" Lettonie  ">Lettonie</option>
                                <option value=" Liban  ">Liban</option>
                                <option value=" Liberia  ">Liberia</option>
                                <option value=" Libye  ">Libye</option>
                                <option value=" Liechtenstein  ">Liechtenstein</option>
                                <option value=" Lituanie  ">Lituanie</option>
                                <option value=" Luxembourg  ">Luxembourg</option>
                                <option value=" Macao (région administrative spéciale de la Chine)  ">Macao (région
                                    administrative spéciale de la Chine)
                                </option>
                                <option value=" Macédoine, République de  ">Macédoine, République de</option>
                                <option value=" Madagascar  ">Madagascar</option>
                                <option value=" Malaisie  ">Malaisie</option>
                                <option value=" Malawi  ">Malawi</option>
                                <option value=" Maldives  ">Maldives</option>
                                <option value=" Mali  ">Mali</option>
                                <option value=" Malte  ">Malte</option>
                                <option value=" Maroc  ">Maroc</option>
                                <option value=" Martinique  ">Martinique</option>
                                <option value=" Mauritanie  ">Mauritanie</option>
                                <option value=" Mayotte  ">Mayotte</option>
                                <option value=" Mexique  ">Mexique</option>
                                <option value=" Micronésie  ">Micronésie</option>
                                <option value=" Moldavie  ">Moldavie</option>
                                <option value=" Monaco  ">Monaco</option>
                                <option value=" Mongolie  ">Mongolie</option>
                                <option value=" Monténégro  ">Monténégro</option>
                                <option value=" Montserrat  ">Montserrat</option>
                                <option value=" Mozambique  ">Mozambique</option>
                                <option value=" Namibie  ">Namibie</option>
                                <option value=" Nauru  ">Nauru</option>
                                <option value=" Népal  ">Népal</option>
                                <option value=" Nicaragua  ">Nicaragua</option>
                                <option value=" Niger  ">Niger</option>
                                <option value=" Nigeria  ">Nigeria</option>
                                <option value=" Niue  ">Niue</option>
                                <option value=" Norvège  ">Norvège</option>
                                <option value=" Nouvelle-Calédonie  ">Nouvelle-Calédonie</option>
                                <option value=" Nouvelle-Zélande  ">Nouvelle-Zélande</option>
                                <option value=" Oman  ">Oman</option>
                                <option value=" Ouganda  ">Ouganda</option>
                                <option value=" Ouzbékistan  ">Ouzbékistan</option>
                                <option value=" Pakistan  ">Pakistan</option>
                                <option value=" Palestine, territoire de  ">Palestine, territoire de</option>
                                <option value=" Panama  ">Panama</option>
                                <option value=" Papouasie-Nouvelle-Guinée  ">Papouasie-Nouvelle-Guinée</option>
                                <option value=" Paraguay  ">Paraguay</option>
                                <option value=" Pays-Bas  ">Pays-Bas</option>
                                <option value=" Pérou  ">Pérou</option>
                                <option value=" Philippines  ">Philippines</option>
                                <option value=" Pologne  ">Pologne</option>
                                <option value=" Polynésie française  ">Polynésie française</option>
                                <option value=" Portugal  ">Portugal</option>
                                <option value=" Qatar  ">Qatar</option>
                                <option value=" Région de Taiwan  ">Région de Taiwan</option>
                                <option value=" République centrafricaine  ">République centrafricaine</option>
                                <option value=" République démocratique du Congo  ">République démocratique du Congo
                                </option>
                                <option value=" République dominicaine  ">République dominicaine</option>
                                <option value=" République tchèque  ">République tchèque</option>
                                <option value=" Réunion  ">Réunion</option>
                                <option value=" Roumanie  ">Roumanie</option>
                                <option value=" Royaume-Uni  ">Royaume-Uni</option>
                                <option value=" Russie  ">Russie</option>
                                <option value=" Rwanda  ">Rwanda</option>
                                <option value=" Sahara occidental  ">Sahara occidental</option>
                                <option value=" Saint-Christophe-et-Niévès  ">Saint-Christophe-et-Niévès</option>
                                <option value=" Saint-Marin  ">Saint-Marin</option>
                                <option value=" Saint-Pierre-et-Miquelon  ">Saint-Pierre-et-Miquelon</option>
                                <option value=" Saint-Vincent-et-les-Grenadines  ">Saint-Vincent-et-les-Grenadines
                                </option>
                                <option value=" Sainte-Hélène  ">Sainte-Hélène</option>
                                <option value=" Sainte-Lucie  ">Sainte-Lucie</option>
                                <option value=" Salvador  ">Salvador</option>
                                <option value=" Samoa  ">Samoa</option>
                                <option value=" Samoa américaines  ">Samoa américaines</option>
                                <option value=" Sao Tomé-et-Principe  ">Sao Tomé-et-Principe</option>
                                <option value=" Sénégal  ">Sénégal</option>
                                <option value=" Serbie  ">Serbie</option>
                                <option value=" Seychelles  ">Seychelles</option>
                                <option value=" Sierra Leone  ">Sierra Leone</option>
                                <option value=" Singapour  ">Singapour</option>
                                <option value=" Slovaquie  ">Slovaquie</option>
                                <option value=" Slovénie  ">Slovénie</option>
                                <option value=" Somalie  ">Somalie</option>
                                <option value=" Sri Lanka  ">Sri Lanka</option>
                                <option value=" Suède  ">Suède</option>
                                <option value=" Suisse  ">Suisse</option>
                                <option value=" Suriname  ">Suriname</option>
                                <option value=" Svalbard et Jan Mayen  ">Svalbard et Jan Mayen</option>
                                <option value=" Swaziland  ">Swaziland</option>
                                <option value=" Tadjikistan  ">Tadjikistan</option>
                                <option value=" Tanzanie  ">Tanzanie</option>
                                <option value=" Tchad  ">Tchad</option>
                                <option value=" Territoire britannique de l'Océan indien  ">Territoire britannique de
                                    l'Océan indien
                                </option>
                                <option value=" Thaïlande  ">Thaïlande</option>
                                <option value=" Timor oriental  ">Timor oriental</option>
                                <option value=" Togo  ">Togo</option>
                                <option value=" Tokelau  ">Tokelau</option>
                                <option value=" Tonga  ">Tonga</option>
                                <option value=" Trinité-et-Tobago  ">Trinité-et-Tobago</option>
                                <option value=" Tunisie  ">Tunisie</option>
                                <option value=" Turkménistan  ">Turkménistan</option>
                                <option value=" Turquie  ">Turquie</option>
                                <option value=" Tuvalu  ">Tuvalu</option>
                                <option value=" Ukraine  ">Ukraine</option>
                                <option value=" Uruguay  ">Uruguay</option>
                                <option value=" Vanuatu  ">Vanuatu</option>
                                <option value=" Venezuela  ">Venezuela</option>
                                <option value=" Viêtnam  ">Viêtnam</option>
                                <option value=" Wallis et Futuna  ">Wallis et Futuna</option>
                                <option value=" Yémen  ">Yémen</option>
                                <option value=" Zambie  ">Zambie</option>
                                <option value=" Zimbabwe  ">Zimbabwe</option>
                            </select>
                            {{--  +++++++++++++++++++++++++++++++++ --}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Nom<sup>*</sup></label>
                                    <input type="text" class="input-text" name=" lastname" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>Prénom<sup>*</sup></label>
                                    <input type="text" class="input-text" name="firstname" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Email<sup>*</sup></label>
                                    <input type="text" class="input-text" name="email" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>Mobile<sup>*</sup></label>
                                    <input type="text" class="input-text" name="phone" required>
                                </div>
                            </div>

                            <label>Description </label>
                            <textarea class="input-textarea"
                                      placeholder="Remarques concernant votre resèrvation, Séjour..."
                                      name="description"></textarea>

                            <ul class="option-bank">
                                <li>
                                    <label class="label-radio">
                                        <input type="radio" class="input-radio" name="chose-bank">
                                        Direct Bank Transfer
                                    </label>
                                    <p>Effectuez votre paiement directement sur notre compte bancaire. Veuillez utiliser
                                        votre ID de commande comme référence de paiement. Votre commande ne sera pas
                                        expédiée tant que les fonds n'auront pas été compensés sur notre compte.</p>
                                </li>

                                <li>
                                    <label class="label-radio">
                                        <input type="radio" class="input-radio" name="chose-bank">
                                        Cheque Payment
                                    </label>
                                </li>

                                <li>
                                    <label class="label-radio">
                                        <input type="radio" class="input-radio" name="chose-bank">
                                        Cart CB
                                    </label>

                                    <img src="../assets/images/cb.jpg" alt="carte cb"
                                         style="  height: 42px;  margin-left: 20px;">
                                </li>

                            </ul>
                            <button class="awe-btn awe-btn-8">Confirmer votre réservation</button>
                        </div>

                    </div>

                </div>
                <!-- END / CONTENT -->


            </div>
        </div>
    </div>

</section>
<!-- END / RESERVATION -->

{{--

@section('include_scripts')

    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>

@endsection
--}}
