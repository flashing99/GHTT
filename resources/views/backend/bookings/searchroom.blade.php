@extends('backend.layouts.app')
@section('header_page_title', 'Search Romm')

@section('include_css')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">



@endsection

@section('breadcrumbs', Breadcrumbs::render('Bookings'))

@section('main-content')

<div class="row">
    <div class="col-lg-12">



        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Chercher la disponibilité</h3>
            </div>
            <div class="card-body">


            <form method="POST" action="{{ route('Bookings.searchRoom') }}">
                @csrf
                {{ method_field('POST')}}

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Categorie</label>
                    <div class="col-lg-10">
                        <select id="category" name="category" class="category form-control">
                            <option></option>
                            @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        
                        @error('category')
                        <div class="alert alert-danger m-b-none">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Date début</label>
                    <div class="col-lg-10">
                        <input id="start_date" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" required autofocus placeholder="Veuillez introduire la date de début">

                        @error('start_date')
                        <div class="alert alert-danger m-b-none">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Date fin</label>
                    <div class="col-lg-10">
                        <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" required placeholder="Veuillez introduire la date de fin">

                        @error('end_date')
                        <div class="alert alert-danger m-b-none">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>




                <div class="form-group row">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                </div>

            </form>


            </div>
        </div>
    </div>

</div>
@endsection

@section('include_scripts')
    <!-- Select2 -->
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
@endsection

@section('scripts')
<script type="text/javascript">
var SITEURL = '{{URL::to('')}}';
$(document).ready( function () {


    // $('.i-checks').iCheck({
    //             checkboxClass: 'icheckbox_square-green',
    //             radioClass: 'iradio_square-green'
    //         });

    //--
    const realFileBtn   = document.getElementById("image_slide");
    const customBtn     = document.getElementById("custom-button");
    const customTxt     = document.getElementById("custom-text");

    customBtn.addEventListener("click", function() {
    realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
            /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customTxt.innerHTML = "Aucun fichier choisi, pour le moment.";
        }
    });

});
</script>
@endsection