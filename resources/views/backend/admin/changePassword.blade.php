@extends('layouts.admin')

@section('breadcrumbs', Breadcrumbs::render('changePassword'))

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="ibox ">
            <div class="ibox-title">
                <h5>Changer mon mot de passe actuel</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                
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



