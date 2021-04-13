<!-- RESERVATION -->
<section class="section-reservation-page bg-white">

    <div class="container">
        <div class="reservation-page">

            <!-- STEP -->
            <div class="reservation_step">
                <ul>
                    <li class="active"><a href="#"><span>1.</span> Choisissez la date</a></li>
                    <li><a href="#"><span>2.</span> Choisissez la pièce</a></li>
                    <li><a href="#"><span>3.</span> Faites une réservation</a></li>
                    <li><a href="#"><span>4.</span> Confirmation</a></li>
                </ul>
            </div>
            <!-- END / STEP -->

            <div class="row">

                <div class="col-md-4 col-lg-3">

                    <div class="reservation-sidebar mb40">

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

                <div class="col-md-8 col-lg-9">
                    <div class="reservation_content bg-gray">
                        <h2 class="reservation-heading">DISPONIBILITÉ DU COMPLEXE</h2>

                        <div class="col-sm-6">
                            <div class="reservation-calendar_custom">

                                <div class="reservation-calendar_title">
                                    <span class="reservation-calendar_month uppercase">Avril</span>
                                    <span class="reservation-calendar_year"> 2021</span>

                                    <a href="#" class="reservation-calendar_prev reservation-calendar_corner"><i class="lotus-icon-left-arrow"></i></a>
                                </div>

                                <table class="reservation-calendar_tabel">
                                    <thead>
                                    <tr>
                                        <th> Lun</th>
                                        <th> Mar</th>
                                        <th> Mer</th>
                                        <th> Jeu</th>
                                        <th> Ven</th>
                                        <th> Sam</th>
                                        <th> Dim</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td></td>
                                        <td class="reservation-calendar_current-date">
                                            <a href="#"><small>1</small> <span class="f24">&bull;</span></a>
                                        </td>
                                        <td class="current-select"><a href="#"><small>2</small> <span>Arrivée</span></a></td>
                                        <td class="current-select"><a href="#"><small>3</small></a></td>
                                        <td class="current-select"><a href="#"><small>4</small></a></td>
                                        <td class="current-select"><a href="#"><small>5</small> <span>Départ</span></a></td>
                                        <td><a href="#"><small>6</small></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><small>7</small></a></td>
                                        <td><a href="#"><small>8</small></a></td>
                                        <td><a href="#"><small>9</small></a></td>
                                        <td><a href="#"><small>10</small></a></td>
                                        <td class="reservation-calendar_current-select"><a href="#"><small>11</small></a></td>
                                        <td class="reservation-calendar_current-select"><a href="#"><small>12</small></a></td>
                                        <td><a href="#"><small>13</small></a></td>
                                    </tr>
                                    <tr>
                                        <td  class="current-select" ><a href="#"  ><small>14</small><span>Arrivée</span></a></td>
                                        <td  class="current-select"><a href="#"><small>15</small></a></td>
                                        <td  class="current-select"><a href="#"><small>16</small></a></td>
                                        <td  class="current-select"><a href="#"><small>17</small></a></td>
                                        <td  class="current-select"><a href="#"><small>18</small></a></td>
                                        <td  class="current-select"><a href="#"><small>19</small></a></td>
                                        <td  class="current-select"><a href="#"><small>20</small></a></td>
                                    <tr>
                                        <td  class="current-select"><a href="#"><small>21</small><span>Départ</span></a></td>
                                        <td><a href="#"><small>22</small></a></td>
                                        <td><a href="#"><small>23</small></a></td>
                                        <td><a href="#"><small>24</small></a></td>
                                        <td><a href="#"><small>25</small></a></td>
                                        <td><a href="#"><small>26</small></a></td>
                                        <td><a href="#"><small>27</small></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><small>28</small></a></td>
                                        <td><a href="#"><small>29</small></a></td>
                                        <td><a href="#"><small>30</small></a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="reservation-calendar_custom">

                                <div class="reservation-calendar_title">
                                    <span class="reservation-calendar_month">Mai </span>
                                    <span class="reservation-calendar_year">2021</span>

                                    <a href="#" class="reservation-calendar_next reservation-calendar_corner"><i class="lotus-icon-right-arrow"></i></a>
                                </div>

                                <table class="reservation-calendar_tabel">
                                    <thead>
                                    <tr>
                                        <th> Lun</th>
                                        <th> Mar</th>
                                        <th> Mer</th>
                                        <th> Jeu</th>
                                        <th> Ven</th>
                                        <th> Sam</th>
                                        <th> Dim</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td></td>
                                        <td class="reservation-calendar_current-date">
                                            <a href="#"><small>1</small> <span> </span></a>
                                        </td>
                                        <td class="current-select"><a href="#"><small>2</small> <span>Arrivée</span></a></td>
                                        <td class="current-select"><a href="#"><small>3</small></a></td>
                                        <td class="current-select"><a href="#"><small>4</small></a></td>
                                        <td class="current-select"><a href="#"><small>5</small> <span>Départ</span></a></td>
                                        <td><a href="#"><small>6</small></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><small>7</small></a></td>
                                        <td><a href="#"><small>8</small></a></td>
                                        <td><a href="#"><small>9</small></a></td>
                                        <td><a href="#"><small>10</small></a></td>
                                        <td class="reservation-calendar_current-select"><a href="#"><small>11</small></a></td>
                                        <td class="reservation-calendar_current-select"><a href="#"><small>12</small></a></td>
                                        <td><a href="#"><small>13</small></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><small>14</small></a></td>
                                        <td><a href="#"><small>15</small></a></td>
                                        <td><a href="#"><small>16</small></a></td>
                                        <td><a href="#"><small>17</small></a></td>
                                        <td><a href="#"><small>18</small></a></td>
                                        <td><a href="#"><small>19</small></a></td>
                                        <td><a href="#"><small>20</small></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><small>21</small></a></td>
                                        <td><a href="#"><small>22</small></a></td>
                                        <td><a href="#"><small>23</small></a></td>
                                        <td><a href="#"><small>24</small></a></td>
                                        <td><a href="#"><small>25</small></a></td>
                                        <td><a href="#"><small>26</small></a></td>
                                        <td><a href="#"><small>27</small></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#"><small>28</small></a></td>
                                        <td><a href="#"><small>29</small></a></td>
                                        <td><a href="#"><small>30</small></a></td>
                                        <td><a href="#"><small>31</small></a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- END / RESERVATION -->
