
<head>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- title dynamic-->
<title> GHTT ::: @yield('header_page_title')</title>
<!-- Fav icon -->
<link rel="icon" href="{{ asset('./images/favicons/favicon.ico') }}">

<!-- GOOGLE FONT -->
<link href='{{ asset('http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' ) }}' rel='stylesheet' type='text/css'>

<!-- CSS LIBRARY -->
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/font-lotusicon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/bootstrap.min.css') }}">
{{--<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/owl.carousel.css) }}">--}}
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/jquery-ui.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/magnific-popup.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/lib/bootstrap-select.min.css') }}">

<!-- MAIN STYLE -->
<link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/style.css') }}">

<!-- /. Styles -->
{{--<link  rel="stylesheet" href="{{ asset('./assets/css/app.css') }}" >--}}
<link  rel="stylesheet" href="{{ asset('./assets/css/custom.css') }}" >

<!--[if lt IE 9]>
<script src="{{ asset('http://html5shim.googlecode.com/svn/trunk/html5.js') }}"></script>
<script src="{{ asset('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') }}"></script>
<![endif]-->
</head>
