@extends('backend.layouts.app')
@section('header_page_title', 'Ajouter un nouveau slide')

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

    <style>
        #image_slide { display: none; }
        #custom-button {
        padding: 8px 15px;
        color: white;
        background-color: #00529F;
        border: 1px solid #054989;
        border-radius:4px;
        cursor: pointer;
        }

        #custom-button:hover {
        background-color: #187ad6;
        }

        #custom-text {
        margin-left: 10px;
        font-family: sans-serif;
        color: #aaa;
        }
    </style>

@endsection

@section('breadcrumbs', Breadcrumbs::render('createSlider'))

@section('main-content')

<div class="row">
    <div class="col-lg-12">



        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Ajouter un nouveau slide</h3>
            </div>
            <div class="card-body">


                <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('POST')}}


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Titre</label>
                        <div class="col-lg-10">
                            <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre') }}" required autofocus placeholder="Veuillez introduire le titre du slide">

                            @error('titre')
                            <div class="alert alert-danger m-b-none">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Description</label>
                        <div class="col-lg-10">

                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="8" required placeholder="Veuillez introduire la description du slide">{{ old('description') }}</textarea>

                            @error('description')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Image du slide</label>
                        <div class="col-lg-10">

                            <input id="image_slide" type="file" hidden="hidden" class="form-control @error('image_slide') is-invalid @enderror" name="image_slide">
                            <button type="button" id="custom-button">Choisir une image</button>
                            <span id="custom-text">Aucun fichier choisi, pour le moment.</span>

                            @error('image_slide')
                            <div class="alert alert-danger m-b-none">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Texte sur le bouton</label>
                        <div class="col-lg-10">
                            <input id="texte_bouton" type="text" class="form-control @error('texte_bouton') is-invalid @enderror" name="texte_bouton" value="{{ old('texte_bouton') }}" required autofocus placeholder="Veuillez introduire le texte du bouton">

                            @error('texte_bouton')
                            <div class="alert alert-danger m-b-none">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Le lien</label>
                        <div class="col-lg-10">
                            <input id="lien" type="text" class="form-control @error('lien') is-invalid @enderror" name="lien" value="{{ old('lien') }}" required autofocus placeholder="Veuillez introduire le lien du slide">

                            @error('lien')
                            <div class="alert alert-danger m-b-none">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Statut du slide</label>
                        <div class="col-lg-10">

                            <div class="radio radio-inline radio-danger">
                                <input type="radio" name="etat" id="desactiver" value="0">
                                <label for="desactiver">
                                    Bloquer
                                </label>
                            </div>
                            <div class="radio radio-inline radio-success">
                                <input type="radio" name="etat" id="activer" value="1" checked>
                                <label for="activer">
                                    Débloquer
                                </label>
                            </div>

                            @error('etat')
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

    // $(".marque").select2({
    //             theme: 'bootstrap4',
    //             placeholder: "Selectionner une marque",
    //             allowClear: true
    //     });

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
