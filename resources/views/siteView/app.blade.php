<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>@yield('title', 'FDMF')</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{ asset('fdmf.mastagate.com/img/favicon.png') }}">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/bootstrap.min.css') }}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/nice-select.css') }}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/font-awesome.min.css') }}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/icofont.css') }}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/slicknav.min.css') }}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/owl-carousel.css') }}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/datepicker.css') }}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/animate.min.css') }}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/magnific-popup.css') }}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fdmf.mastagate.com/css/responsive.css') }}">

        <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
        <!-- Slicknav -->
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		
    </head>
    <body>
        <!-- header -->
         @include('siteView.header')
        <!--/ End Header Area -->
        <!-- Preloader -->
         @yield('content')
        <!--/ End Preloader -->

        <!-- Footer Area -->
         @include('siteView.footer')
        <!--/ End Footer Area -->

        <!-- jquery Min JS -->
        <script src="{{ asset('fdmf.mastagate.com/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{ asset('fdmf.mastagate.com/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{ asset('fdmf.mastagate.com/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{ asset('fdmf.mastagate.com/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{ asset('fdmf.mastagate.com/js/owl-carousel.js') }}"></script>
		<!-- counterup JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src=" {{ asset('fdmf.mastagate.com/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{ asset('fdmf.mastagate.com/js/main.js')}}"></script>

		@stack('scripts')
    </body>
</html>