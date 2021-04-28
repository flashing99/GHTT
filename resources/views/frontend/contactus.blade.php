@extends('frontend.layouts.master')
{{--add TITLE to page--}}
@section('header_page_title' ,'Restaurants')
{{-- add CSS LINKS--}}
@section('include_css')
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/owl.carousel.css') }}">--}}
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
@endsection

@section('main-content')

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.header')
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    {{-- +++++++++++++++ add footer template  +++++++++++++++++++++--}}
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'Contactez-NOUS ', 'sub_title'=>'Contactez nous pour de plus d\'information','bg_id'=>'bg-15'])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}



            <div class="row   ">
                <!-- Bloc Form -->
                <div class=" offset-md-2 col-md-8">

                    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <div class="section ">

                        <div class="container">

                            <!-- Success message -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif

                            <form method="post" action="{{ route('contactus.store') }}" class="form_box box-lg m-0">

                                @csrf

                                <!-- +++++++++++  -->
                                <div class="row">
                                    <!-- ... -->

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <i class="feather-icon    icon-user "></i>
                                            <input type="text" placeholder="Nom" class="form-control dark {{ $errors->has('lastName') ? 'error' : '' }}" name="lastName" id="lastName" required>
                                        </div>

                                        @if ($errors->has('lastName'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('lastName') }}</strong>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <i class="feather-icon    icon-user  "></i>
                                            <input type="text" placeholder="Prénom" class="form-control dark {{ $errors->has('firstName') ? 'error' : '' }}" name="firstName" id="firstName" required>
                                        </div>

                                        @if ($errors->has('firstName'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('firstName') }}</strong>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <i class="feather-icon    icon-briefcase  "></i>
                                            <input type="text" placeholder="Société" class="form-control dark {{ $errors->has('company') ? 'error' : '' }}" name="company" id="company" required>
                                        </div>

                                        @if ($errors->has('company'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('company') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <i class="feather-icon    icon-phone  "></i>
                                            <input type="number" placeholder="Téléphone" class="form-control dark {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" required>
                                        </div>

                                        @if ($errors->has('phone'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </div>
                                        @endif
                                    </div>

                                    <!--  -->
                                    <div class="col-12 col-xs-12">
                                        <div class="form-group">
                                            <i class="feather-icon    icon-at-sign "></i>
                                            <input type="email" placeholder="E-Mail" class="form-control dark {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" required>
                                        </div>

                                        @if ($errors->has('email'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                        @endif
                                    </div>


                                    <div class="col-12 col-xs-12">
                                        <div class="form-group">
                                            <i class="feather-icon    icon-feather "></i>
                                            <input type="text" placeholder="Objet" class="form-control dark {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" required>
                                        </div>

                                        @if ($errors->has('subject'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </div>
                                        @endif
                                    </div>


                                    <div class="col-md-12 col-xs-12">

                                        <div class="form-group">
                                            <textarea class="form-control dark {{ $errors->has('message') ? 'error' : '' }}" cols="45" rows="5" name="message" id="message" placeholder="Votre message" required></textarea>
                                        </div>

                                        @if ($errors->has('message'))
                                        <div class="alert alert-danger m-b-none">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </div>
                                        @endif
                                    </div>


                                    <div class=" line-bar">&nbsp; </div>
                                    <!--  -->
                                </div>


                                <div class="text-center row">
                                    <div class=" mt-2 col-md-6 col-sm-6 col-xs-12   text-end">
                                        <button type="reset" class=" col btn btn-secondary  " name="button">Annuler</button>
                                    </div>
                                    <div class="mt-2 col-md-6 col-sm-6 col-xs-12 text-left">
                                        <button type="submit" class=" col btn btn-primary sigma_btn-custom" name="button">Envoyer</button>
                                    </div>
                                </div>


                            </form>

                            <!-- ++++++++++++++++ -->
                            <div class="space-1"></div>
                            <!-- ++++++++++++++++ -->


                        </div>
                    </div>
                    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


                </div>
                <!--  -->




            </div>


@endsection




@section('include_scripts')
      ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
       <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>

    <!-- validate -->

       <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection
