@extends('backend.layouts.app')
@section('header_page_title', 'Changer mot de passe')

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

@section('breadcrumbs', Breadcrumbs::render('changePassword'))

@section('main-content')

<div class="row">
    <div class="col-lg-12">



        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Changer mon mot de passe actuel</h3>
            </div>
            <div class="card-body">
                
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('change.password') }}">
                    @csrf 

                    <div class="form-group row @error('current_password') has-error @enderror">
                        <label class="col-lg-2 col-form-label">Mot de passe actuel</label>
                        <div class="col-lg-10">
                            <input type="password" id="password" name="current_password" class="form-control" autocomplete="current-password">

                            @error('current_password')
                            <div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row @error('new_password') has-error @enderror">
                        <label class="col-lg-2 col-form-label">Nouveau mot de passe</label>
                        <div class="col-lg-10">
                            <input type="password" id="new_password" name="new_password" class="form-control" autocomplete="current-password" @error('new_password') is-invalid @enderror>

                            @error('new_password')
                            <div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row @error('new_confirm_password') has-error @enderror">
                        <label class="col-lg-2 col-form-label">Confirmer le nouveau mot de passe</label>
                        <div class="col-lg-10">
                            <input type="password" id="new_confirm_password" name="new_confirm_password" class="form-control" autocomplete="current-password" @error('new_confirm_password') is-invalid @enderror>

                            @error('new_confirm_password')
                            <div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-lg-10 offset-lg-2">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
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


});
</script>
@endsection

