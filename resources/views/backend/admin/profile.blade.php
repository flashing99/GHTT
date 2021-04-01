@extends('backend.layouts.app')
@section('header_page_title', 'Profile')

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

@section('breadcrumbs', Breadcrumbs::render('profile'))

@section('main-content')

<div class="row">
    <div class="col-lg-12">



        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Profile</h3>
            </div>
            <div class="card-body">
                
                


                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                
                <form method="post" action="{{ route('profile.update', $user) }}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Nom</label>
                        <div class="col-lg-10">
                        <input type="text" name="nom" placeholder="Nom" value="{{ $user->firstname }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Prenom</label>
                        <div class="col-lg-10">
                            <input type="text" name="prenom" placeholder="Prenom" value="{{ $user->lastname }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Genre</label>
                        <div class="col-lg-10">
                            <select class="gender form-control m-b" name="gender">
                                <option value="1" @if($user->gender==1) selected @endif>Madame</option>
                                <option value="2" @if($user->gender==2) selected @endif>Mademoiselle</option>
                                <option value="3" @if($user->gender==3) selected @endif>Monsieur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="form-control" disabled>
                        </div>
                    </div>
                    <!--
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Mobile</label>
                        <div class="col-lg-10">
                            <input type="text" name="mobile" placeholder="mobile"  class="form-control">
                        </div>
                    </div>
                    -->

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
        //     checkboxClass: 'icheckbox_square-green',
        //     radioClass: 'iradio_square-green'
        // });
    
        $(".gender").select2({
            theme: 'bootstrap4',
            placeholder: "Sélectionner un genre",
            allowClear: true
        });

    });
    </script>
@endsection