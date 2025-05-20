<!DOCTYPE html>
<html lang="{{app()->currentLocale()}}">
<head>
	<base href="{{ url('/') }}">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{!! SEOMeta::generate() !!}
	{!! OpenGraph::generate() !!}
	{!! Twitter::generate() !!}
	{!! JsonLd::generate() !!}
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/remixicon.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="assets/css/slick.min.css">
	<link rel="stylesheet" href="assets/css/nice-select.min.css">
	<link rel="stylesheet" href="assets/css/style.css?ver={{rand(1111,9999)}}">
	@stack('links')
	{!! setting('site.header_libs') !!}
</head>
<body>
	{{-- <div class="preloader ">
		<div class="preloader-inner">
			<span class="loader"></span>
		</div>
	</div> --}}
	<div class="mobile-menu-wrapper">
		<div class="mobile-menu-area">
			<div class="mobile-logo">
				<a href="{{route('home')}}"><img src="assets/img/logo.svg" alt="{{setting('site.title')}}"></a>
				<button class="menu-toggle"><i class="ri-close-line"></i></button>
			</div>
			<div class="mobile-menu">
				{{menu('Header', 'menus.header-mobile')}}
			</div>
		</div>
	</div>
	
	<header class="nav-header header-layout3">
		<div class="sticky-wrapper">
			<div class="menu-area">
				<div class="container">
					<div class="row align-items-center justify-content-lg-start justify-content-between">
						<div class="col-auto">
							<div class="header-logo">
								<a href="{{route('home')}}"><img src="assets/img/logo.svg" alt="{{setting('site.title')}}"></a>
							</div>
						</div>
						<div class="col-auto ms-auto ms-xxl-0">
							<nav class="main-menu d-none d-lg-inline-block">
								{{ menu('Header', 'menus.header')}}
							</nav>
							<div class="navbar-right d-inline-flex d-lg-none">
								<button type="button" class="menu-toggle icon-btn"><i class="ri-menu-line"></i></button>
							</div>
						</div>
						<div class="col-auto ms-auto d-xl-block d-none">
							<div class="header-button">
								<div class="navbar-right-desc">
									<div class="icon-btn">
										<i class="ri-phone-fill"></i>
									</div>
									<div class="navbar-right-desc-details">
										<span class="h3 title">İletişime Geç</span>
										<a class="link" href="tel:{{$sharedContent['Contact']->phone1}}">{{$sharedContent['Contact']->phone1}}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>                
			</div>
		</div>
	</header>
	
	@yield('content')
	<a href="https://wa.me/905422449128" class="whatsapp-float" target="_blank"><i class="ri ri-whatsapp-line float"></i></a>
	<footer class="footer-wrapper footer-layout3" data-bg-src="assets/img/bg/footer.jpg">    
		<div class="container">
			<div class="widget-area">
				<div class="row justify-content-between">
					<div class="col-md-6 col-xl-3">
						<div class="widget widget-about footer-widget">
							<h2 class="widget_title">{{setting('site.title')}} Hakkında</h2>
							<h3 class="about-year">{{ $sharedContent['About']->history }}</h3>
							<p class="about-text">{{ $sharedContent['About']->short_about }}</p>
						</div>
					</div>
					{{ menu('Footer', 'menus.footer')}}
					<div class="col-md-6 col-xl-auto">
						<div class="widget footer-widget widget-contact">
							<h3 class="widget_title">Adres</h3>
							@if (!(empty($sharedContent['Contact']->address1)))
							<p class="contact-text">{{-- <strong>{{$sharedContent['Contact']->contact1}}:</strong>--}} {{$sharedContent['Contact']->address1}}</p>
							@endif
							@if (!(empty($sharedContent['Contact']->address2)))
							<p class="contact-text">{{-- <strong>{{$sharedContent['Contact']->contact2}}:</strong>--}}{{$sharedContent['Contact']->address2}}</p>
							@endif
							<h3 class="widget_title">E-Posta</h3> 
							@if (!(empty($sharedContent['Contact']->email1)))
							<p class="footer-text">{{-- <strong>{{$sharedContent['Contact']->contact1}}:</strong>--}} <a href="mailto:{{$sharedContent['Contact']->email1}}">{{$sharedContent['Contact']->email1}}</a></p>
							@endif
							@if (!(empty($sharedContent['Contact']->email2)))
							<p class="footer-text">{{-- <strong>{{$sharedContent['Contact']->contact2}}:</strong>--}}<a href="mailto:{{$sharedContent['Contact']->email2}}">{{$sharedContent['Contact']->email2}}</a></p>
							@endif
						</div>
					</div>
					<div class="col-md-6 col-xl-auto">
						<div class="widget footer-widget">
							<h3 class="widget_title">Telefon</h3>
							@if (!(empty($sharedContent['Contact']->phone1)))
							<p class="footer-text">{{-- <strong>{{$sharedContent['Contact']->contact1}}:</strong>--}} <a href="tel:{{$sharedContent['Contact']->phone1}}">{{$sharedContent['Contact']->phone1}}</a></p>
							@endif
							@if (!(empty($sharedContent['Contact']->phone2)))
							<p class="footer-text">{{-- <strong>{{$sharedContent['Contact']->contact2}}:</strong>--}}<a href="tel:{{$sharedContent['Contact']->phone2}}">{{$sharedContent['Contact']->phone2}}</a></p>
							@endif
							<h3 class="widget_title">Takip Et</h3>
							<div class="social-btn style2">
								@if (isset($sharedContent['Social']->facebook))
								<a href="{{$sharedContent['Social']->facebook}}"><i class="ri-facebook-fill"></i></a>
								@endif
								@if (isset($sharedContent['Social']->twitter))
								<a href="{{$sharedContent['Social']->twitter}}"><i class="ri-twitter-x-line"></i></a>
								@endif
								@if (isset($sharedContent['Social']->instagram))
								<a href="{{$sharedContent['Social']->instagram}}"><i class="ri-instagram-line"></i></a>
								@endif
								@if (isset($sharedContent['Social']->linkedin))
								<a href="{{$sharedContent['Social']->linkedin}}"><i class="ri-linkedin-fill"></i></a>
								@endif
								@if (isset($sharedContent['Social']->youtube))
								<a href="{{$sharedContent['Social']->youtube}}"><i class="ri-youtube-line"></i></a>
								@endif
							</div>
						</div>
					</div>                    
				</div>
			</div>
		</div>
		<div class="container">
			<div class="copyright-wrap">
				<div class="row gy-3 justify-content-md-between justify-content-center">
					<div class="col-auto align-self-center"><p class="copyright-text text-center">© {{date('Y')}} Tüm Hakları Saklıdır.</p></div>
					<div class="col-auto">
						<p>Made with <i class="ri-heart-fill"></i> by 
							<a class="text-white" rel="nofollow" href="https://bario.com.tr" target="_blank">Bario.</a></p>
					</div>
					<div class="col-auto">
						<div class="footer-links">
							{{menu('Footer Alt Bar', 'menus.footer-alt')}}
						</div>
					</div>
				</div>                
			</div>
		</div>
	</footer>
	<div class="scroll-top">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
		</svg>
	</div>
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/jquery.marquee.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/nice-select.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	
	
	<script src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.4/dist/lazyload.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<script>
		var lazyLoadInstance = new LazyLoad({
			elements_selector: ".lazy",
			threshold: 0,
		});
		Fancybox.bind("[data-fancybox]");
	</script>
	@stack('scripts')
</body>
</html>