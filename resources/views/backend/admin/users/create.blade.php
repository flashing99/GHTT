@extends('backend.layouts.app')
@section('header_page_title', 'Ajouter un nouveau administrateur')

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

@section('breadcrumbs', Breadcrumbs::render('addAdmin'))

@section('main-content')

<div class="row">
    <div class="col-lg-12">



        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Ajouter un nouveau administrateur</h3>
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
                        {{ method_field('POST')}}
                        
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Nom</label>
                        <div class="col-lg-10">
                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autofocus>

                            @error('nom')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Prenom</label>
                        <div class="col-lg-10">
                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required>
    
                            @error('prenom')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Genre</label>
                        <div class="col-lg-10">
                            <select class="gender form-control m-b" name="gender">
                                <option value="1">Madame</option>
                                <option value="2">Mademoiselle</option>
                                <option value="3">Monsieur</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Adresse E-Mail</label>
                        <div class="col-lg-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Type admin</label>
                        <div class="col-lg-10">

                            <select id="roles" name="roles" class="roles form-control @error('roles') is-invalid @enderror" required>
                                <option></option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
    
                            @error('roles')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Etat</label>
                        <div class="col-lg-10">
                            
                            <div class="radio radio-inline radio-danger">
                                <input type="radio" name="etat" id="desactiver" value="0">
                                <label for="desactiver">
                                    Désactiver
                                </label>
                            </div>
                            <div class="radio radio-inline radio-success">
                                <input type="radio" name="etat" id="activer" value="1">
                                <label for="activer">
                                    Activer
                                </label>
                            </div>
    
                            @error('etat')
                            <div class="alert alert-danger m-b-none">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Mot de passe</label>
                        <div class="col-lg-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
    
                            @error('password')
                                <div class="alert alert-danger m-b-none">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Confirmer le mot de passe</label>
                        <div class="col-lg-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
    
                    <hr>

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

    $(".gender").select2({
            theme: 'bootstrap4',
            placeholder: "Selectionner un gendre",
            allowClear: true
    });

    $(".roles").select2({
            theme: 'bootstrap4',
            placeholder: "Selectionner une type",
            allowClear: true
    });


});
</script>
@endsection
