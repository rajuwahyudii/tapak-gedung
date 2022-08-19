<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	@yield('meta')
	<link rel="icon" href="{{ asset('logo/logo.png') }}" type="image/png">
	<title>DESA TAPAK GEDUNG</title>
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
	<link href="{{ asset('css/theme.css') }}" rel="stylesheet">
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
	
	<!-- Histats.com  START  (aync)-->
    <script type="text/javascript">var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,4585399,4,501,95,18,00010000']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
    hs.src = ('//s10.histats.com/js15_as.js');
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();</script>
    <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4585399&101" alt="free geoip" border="0"></a></noscript>
    <!-- Histats.com  END  -->
	
</body>

</html>