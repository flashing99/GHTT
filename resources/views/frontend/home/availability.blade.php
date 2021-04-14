<!-- CHECK AVAILABILITY -->
<section class="section-check-availability">
    <div class="container">
        <div class="check-availability">
            <div class="row">
               {{-- <div class="col-lg-3">
                    <h2>VÉRIFIER LA DISPONIBILITÉ</h2>
                </div>--}}
                <div class="col-lg-12">
                    <form id="ajax-form-search-room" action="search_step_2.php" method="post">
                        <div class="availability-form d-flex align-items-center">
                            <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                            <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">
                            <select class="awe-select" name="type">
                                <option>Type de Bungalow</option>
                                <option>F1</option>
                                <option>F2</option>
                                <option>F3</option>
                                <option>F4</option>
                            </select>
                            <select class="awe-select" name="adults">
                                <option>Adults</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <select class="awe-select" name="children">
                                <option>Children</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="vailability-submit">
                                <button class="awe-btn awe-btn-13">VÉRIFIER LA DISPONIBILITÉ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / CHECK AVAILABILITY -->
