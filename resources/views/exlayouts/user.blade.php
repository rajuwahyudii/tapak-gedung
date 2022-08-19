<!doctype html>
<html lang="en">

<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C4Q5CC9GPV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-C4Q5CC9GPV');
    </script>
    
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('logo/logo.png') }}" type="image/png">
	<title>RINDU HATI</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/jquery-ui/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/popup/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/swiper/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('user/vendors/scroll/jquery.mCustomScrollbar.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ URL::asset('user/css/style.css') }}">
	@yield('style')
</head>

<body>
	@yield('content')
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('user/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('user/js/popper.js') }}"></script>
	<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('user/js/stellar.js') }}"></script>
	<script src="{{ asset('user/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('user/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('user/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('user/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('user/vendors/jquery-ui/jquery-ui.js') }}"></script>
	<script src="{{ asset('user/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('user/js/mail-script.js') }}"></script>
	<script src="{{ asset('user/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('user/vendors/swiper/js/swiper.min.js') }}"></script>
	<script src="{{ asset('user/vendors/scroll/jquery.mCustomScrollbar.js') }}"></script>
	<script src="{{ asset('user/js/theme.js') }}"></script>
</body>

</html>