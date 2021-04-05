@extends('layouts.admin')

@section('title', 'Modifier un slide')

@section('include_css')
    <!-- Jasny -->
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <!-- select2 -->
    <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/select2/select2-bootstrap4.min.css') }}" rel="stylesheet">

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

@section('breadcrumbs', Breadcrumbs::render('editSlider', $slider))

@section('content')

<div class="row">

    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Modifier un slide</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">


            <form method="POST" action="{{ route('sliders.update', $slider) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Informations de base :</legend>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Titre</label>
                        <div class="col-lg-10">
                            <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ $slider->title }}" required autofocus placeholder="Veuillez introduire le titre du slide">

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

                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="8" required placeholder="Veuillez introduire la description du slide">{{ $slider->text }}</textarea>

                            @error('description')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Marque</label>
                        <div class="col-lg-10">

                            <select id="marque" name="marque" class="marque form-control @error('marque') is-invalid @enderror" required>
                                <option></option>
                                @foreach ($manufacturers as $manufacturer)
                                <option value="{{ $manufacturer->id }}" @if($manufacturer->id == $slider->manufacturer_id) selected @endif>{{ $manufacturer->name }}</option>
                                @endforeach
                            </select>

                            @error('marque')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                </fieldset>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Slide :</legend>

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
                            <input id="texte_bouton" type="text" class="form-control @error('texte_bouton') is-invalid @enderror" name="texte_bouton" value="{{ $slider->button_text }}" required autofocus placeholder="Veuillez introduire le texte du bouton">

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
                            <input id="lien" type="text" class="form-control @error('lien') is-invalid @enderror" name="lien" value="{{ $slider->link }}" required autofocus placeholder="Veuillez introduire le lien du slide">

                            @error('lien')
                            <div class="alert alert-danger m-b-none">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                </fieldset>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Statut :</legend>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Statut de l'article</label>
                        <div class="col-lg-10">

                            <div class="radio radio-inline radio-danger">
                                <input type="radio" name="etat" id="desactiver" value="0" @if( $slider->state == '0' ) checked @endif>
                                <label for="desactiver">
                                    Bloquer
                                </label>
                            </div>
                            <div class="radio radio-inline radio-success">
                                <input type="radio" name="etat" id="activer" value="1" @if( $slider->state == '1' ) checked @endif>
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

                </fieldset>

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
    <!-- Input Mask-->
    <script src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('js/plugins/select2/select2.min.js') }}"></script>
@endsection

@section('scripts')
<script type="text/javascript">
var SITEURL = '{{URL::to('')}}';
$(document).ready( function () {

    $(".marque").select2({
                theme: 'bootstrap4',
                placeholder: "Selectionner une marque",
                allowClear: true
        });

    $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

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
