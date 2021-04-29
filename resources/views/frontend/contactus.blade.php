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
    @include('frontend.layouts.common.banner-header',[ 'title'=> 'Contactez-NOUS ', 'sub_title'=>'Contactez nous pour plus d\'informations','bg_id'=>'bg-15'])
    {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}

    <!-- CONTACT -->
    <section class="section-contact">
        <div class="container">
            <div class="contact">
                <div class="row">

                    <div class="col-md-6 col-lg-5">

                        <div class="text">
                            <h2>Contact</h2>
                            <p>Le complexe touristique C.E.T se situe à 68 km à l'ouest de la capitale Alger, comportant
                                plusieurs bungalow, des espaces verts, deux plages, des espaces de loisirs, une ambiance
                                parfaite.</p>
                            <p>

                            </p>
                            <ul>
                                <li><i class="icon fa  fa-map-marker"></i>COMPLEXE TOURISTIQUE C.E.T Tipaza, Algérie
                                </li>
                                <li><i class="icon  fa fa-phone"></i> +213(0) 24 37 65 90</li>
                                <li><i class="icon  fa fa-fax"></i> +213(0) 24 37 65 90</li>
                                <li><i class="icon fa fa-envelope-o"></i> complexe-cet@cet.com</li>
                            </ul>
                        </div>

                        <div class="contact-location">

                            <div class="__collapse" id="location">
                                <div class="location-group">
                                    <h6> Autres localisation</h6>
                                    <span> Près du Complexe CET</span>

                                    <!-- ITEM -->
                                    <div class="location-item" data-location="39.0926986,-94.5747324">
                                        <div class="img">
                                            <img src="./assets/images/contact/img-1.jpg" alt="">
                                            <i class="fa  fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                            <address class="f12 f-600">Ruines romaines de Tipaza</address>
                                            <p>À l'inverse de Timgad et Djémila, dont les ruines apparaissent compactes
                                                et facilement lisibles, Tipasa présente un site éclaté : tout n'a pas
                                                été dégagé et une bonne partie de la ville, explorée en 1891 par
                                                Stéphane Gsell3, est encore sous les sédiments.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="location-item" data-location="39.0912284,-94.5743515">
                                        <div class="img">
                                            <img src="./assets/images/contact/img-2.jpg" alt="">
                                            <i class="fa  fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                            <address class=" f12 f-600">Le mystère du Tombeau de la Chrétienne</address>
                                            <p>
                                                Le Tombeau de la Chrétienne est situé à une dizaine de kilomètres à
                                                l’est de Tipaza sur un promontoire dominant d’un côté la mer et de
                                                l’autre la Mitidja.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>
                            </div>
                        </div>

                    </div>


                    {{--####### Contact Form ###################--}}

                    <div class="col-md-6 col-lg-6 col-lg-offset-1">
                        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                        <div class="section ">


                            <div class="text-center mb50">
                                <p  >Pour toutes questions, suggestions ou remarques n’hésitez pas à nous contacter en remplissant le formulaire ci-dessous :</p>
                                <img src="./assets/images/icon-accmod.png" alt="icon">
                            </div>

                            <div class="contact-form">

                                <!-- Success message -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                @endif

                                <form method="post" action="{{ route('contactus.store') }}" class="form_box box-lg m-0"
                                      id="send-contact-form">

                                @csrf

                                <!-- +++++++++++  -->
                                    <div class="row">
                                        <!-- ... -->
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Nom"
                                                       class="form-control field-text dark {{ $errors->has('lastName') ? 'error' : '' }}"
                                                       name="lastName" id="lastName" required>
                                            </div>
                                            @if ($errors->has('lastName'))
                                                <div class="alert alert-danger m-b-none">
                                                    <strong>{{ $errors->first('lastName') }}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Prénom"
                                                       class="form-control field-text  dark {{ $errors->has('firstName') ? 'error' : '' }}"
                                                       name="firstName" id="firstName" required>
                                            </div>
                                            @if ($errors->has('firstName'))
                                                <div class="alert alert-danger m-b-none">
                                                    <strong>{{ $errors->first('firstName') }}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Société"
                                                       class="form-control field-text  dark {{ $errors->has('company') ? 'error' : '' }}"
                                                       name="company" id="company" >
                                            </div>

                                            @if ($errors->has('company'))
                                                <div class="alert alert-danger m-b-none">
                                                    <strong>{{ $errors->first('company') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="number" placeholder="Téléphone"
                                                       class="form-control  field-text dark {{ $errors->has('phone') ? 'error' : '' }}"
                                                       name="phone" id="phone" required>
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
                                                <input type="email" placeholder="E-Mail"
                                                       class="form-control field-text  dark {{ $errors->has('email') ? 'error' : '' }}"
                                                       name="email" id="email" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <div class="alert alert-danger m-b-none">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>


                                        <div class="col-12 col-xs-12">
                                            <div class="form-group">

                                                <input type="text" placeholder="Objet"
                                                       class="form-control field-text  dark {{ $errors->has('subject') ? 'error' : '' }}"
                                                       name="subject" id="subject" required>
                                            </div>

                                            @if ($errors->has('subject'))
                                                <div class="alert alert-danger m-b-none">
                                                    <strong>{{ $errors->first('subject') }}</strong>
                                                </div>
                                            @endif
                                        </div>


                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                    <textarea
                                        class=" form-control field-text  dark {{ $errors->has('message') ? 'error' : '' }}"
                                        cols="45" rows="5" name="message" id="message" placeholder="Votre message"
                                        required></textarea>
                                            </div>
                                            @if ($errors->has('message'))
                                                <div class="alert alert-danger m-b-none">
                                                    <strong>{{ $errors->first('message') }}</strong>
                                                </div>
                                            @endif
                                        </div>


                                        <div class=" line-bar">&nbsp;</div>
                                        <!--  -->
                                    </div>


                                    <div class="text-center row">
                                        <div class=" mt-2 col-md-6 col-sm-6 col-xs-12   _text-end">
                                            <button type="reset" class="  awe-btn  mt0 awe-btn-1  " name="button">
                                                Annuler
                                            </button>
                                        </div>
                                        <div class="mt-2 col-md-6 col-sm-6 col-xs-12 _text-left">
                                            <button type="submit" class=" mt0 awe-btn awe-btn-7" name="button">
                                                Envoyer
                                            </button>
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

                </div>
            </div>
        </div>
    </section>
    <!-- END / CONTACT -->


    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



@endsection




@section('include_scripts')
    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
    <script type="text/javascript" src="{{ asset('./assets/js/lib/bootstrap-select.js') }}"></script>

    <!-- validate -->

    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('./assets/js/lib/jquery.validate.min.js') }}"></script>
    {{--    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}


@endsection
