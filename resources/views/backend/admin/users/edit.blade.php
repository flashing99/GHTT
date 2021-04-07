@extends('layouts.admin')
@section('title', 'Modifier les données d\'un utilisatur')

@section('include_css')
    <!-- Jasny -->
    <link href="{{ asset('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <!-- select2 -->
    <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/select2/select2-bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumbs', Breadcrumbs::render('editAdmin', $user))

@section('content')

<div class="row">

    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Modifier les données d'un utilisateur</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

            <form method="POST" action="{{ route('admin.users.update', $user) }}">
                @csrf
                {{ method_field('PUT')}}

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Nom</label>
                    <div class="col-lg-10">
                        <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $user->lastname }}" required autocomplete="nom" autofocus>

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
                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $user->firstname }}" required autocomplete="prenom" autofocus>

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
                            <option value="1" @if($user->gender==1) selected @endif >Madame</option>
                            <option value="2" @if($user->gender==2) selected @endif>Mademoiselle</option>
                            <option value="3" @if($user->gender==3) selected @endif>Monsieur</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Adresse E-Mail</label>
                    <div class="col-lg-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

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
                            <option value="{{ $role->id }}" @if( $user->roles->pluck('id')->contains($role->id) ) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>

                        @error('role')
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
                            <input type="radio" name="etat" id="desactiver" value="0" @if( $user->state == '0' ) checked @endif>
                            <label for="desactiver">
                                Désactiver
                            </label>
                        </div>
                        <div class="radio radio-inline radio-success">
                            <input type="radio" name="etat" id="activer" value="1" @if( $user->state == '1' ) checked @endif>
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
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

    $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

});
</script>
@endsection