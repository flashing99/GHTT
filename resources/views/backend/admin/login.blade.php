@extends('backend.layouts.layout_login')


@section('content')


<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Adresse E-Mail') }}" required autocomplete="email" autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>

        @error('email')
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{ $message }}
        </div>
        @enderror

    </div>
    <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Mot de passe') }}" required autocomplete="current-password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
    <div class="row">

        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Connexion') }}</button>
            
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                <small>{{ __('Mot de passe oublié ?') }}</small>
            </a>
            @endif
        </div>

    </div>

</form>



@endsection
