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
</head>
<body>
	<div class="preloader ">
		<div class="preloader-inner">
			<span class="loader"></span>
		</div>
	</div>
	<div class="popup-search-box">
		<button class="searchClose"><i class="ri-close-line"></i></button>
		<form action="{{route('search')}}" method="POST">
			<input type="text" placeholder="Arama Yap">
			<button type="submit"><i class="ri-search-line"></i></button>
		</form>
	</div>
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
								<button type="button" class="search-btn searchBoxToggler simple-icon">
									<i class="ri-search-line"></i>
								</button>
							</div>
						</div>
					</div>
				</div>                
			</div>
		</div>
	</header>
	
	@yield('content')
	
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
	{{-- <footer class="footer footer-default-padding">
		<div class="container">
			<div class="row footer-row">
				<div class="col-lg-4 mb-30">
					<div class="footer-widget">
						<div class="footer-logo">
							<img src="assets/images/logo.png" alt="{{setting('site.title')}}">
						</div>
						<p class="mb-30">{{$sharedContent['Contact']->address1}}</p>
					</div>
				</div>
				
				
				
				<div class="col-sm-6 col-lg-4 mb-30">
					<div class="footer-widget mb-0">
						<h4>Quick Links</h4>
						<div class="line-footer"></div>
						<div class="row">
							<div class="col-12">
								<ul class="footer-link mb-0 row">
									{{menu('Header', 'menus.footer')}}
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				
				
				
				
				<div class="col-sm-6 col-lg-4">
					<div class="footer-widget">
						<h4>Social Media</h4>
						<ul class="social-media mt-3">
							@if (isset($sharedContent['Social']->facebook))
							<li><a href="{{$sharedContent['Social']->facebook}}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
							@endif
							@if (isset($sharedContent['Social']->twitter))
							<li><a href="{{$sharedContent['Social']->twitter}}" class="twitter"><i class="fab fa-twitter"></i></a></li>
							@endif
							@if (isset($sharedContent['Social']->instagram))
							<li><a href="{{$sharedContent['Social']->instagram}}" class="instagram"><i class="fab fa-instagram"></i></a></li>
							@endif
							@if (isset($sharedContent['Social']->linkedin))
							<li><a href="{{$sharedContent['Social']->linkedin}}" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							@endif
							@if (isset($sharedContent['Social']->youtube))
							<li><a href="{{$sharedContent['Social']->youtube}}" class="youtube"><i class="fab fa-youtube"></i></a></li>
							@endif
						</ul> 
					</div>
				</div>
			</div>
			<div class="row row-contact">
				<div class="col-lg-4 col-sm-6 no-padding">
					<div class="single-item">
						<span class="flaticon-call"></span>
						@if (isset($sharedContent['Contact']->phone1))
						<p><a href="tel:{{$sharedContent['Contact']->phone1}}">{{$sharedContent['Contact']->phone1}}</a></p>
						@endif
						@if (isset($sharedContent['Contact']->phone2))
						<p><a href="tel:{{$sharedContent['Contact']->phone2}}">{{$sharedContent['Contact']->phone2}}</a></p>
						@endif
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 no-padding">
					<div class="single-item">
						<span class="flaticon-email"></span>
						@if (isset($sharedContent['Contact']->email1))
						<p><a href="mailto:{{$sharedContent['Contact']->email1}}">{{$sharedContent['Contact']->email1}}</a></p>
						@endif
						@if (isset($sharedContent['Contact']->email2))
						<p><a href="mailto:{{$sharedContent['Contact']->email2}}">{{$sharedContent['Contact']->email2}}</a></p>
						@endif
					</div>  
				</div>
				<div class="col-lg-4 col-sm-12 no-padding">
					<div class="single-item">
						<span class="flaticon-location"></span>
						<p>{{$sharedContent['Contact']->address1}}</p>
						@if (isset($sharedContent['Contact']->address2))
						<p>{{$sharedContent['Contact']->address2}}</p>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bar">
			<div class="container">
				<div class="footer-copy">
					<div class="row">
						<div class="col-md-6">
							<div class="copyright">
								&copy; {{date('Y')}} Made with <i class="fa fa-heart"></i> by 
								<a rel="nofollow" href="https://bario.com.tr" target="_blank">Bario.</a>
							</div>
						</div>
						
						<div class="col-md-6">
							<ul class="links-of-footer">
								{{menu('Footer Alt Bar','menus.footer-alt')}}
							</ul>
						</div>
					</div>
				</div>   
			</div> 
		</div>
	</footer> --}}
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<!-- Slick Slider -->
	<script src="assets/js/slick.min.js"></script>
	<!-- Range Slider -->
	<script src="assets/js/jquery-ui.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Magnific Popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- Marquee -->
	<script src="assets/js/jquery.marquee.min.js"></script>
	<!-- Isotope Filter -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- Nice Select -->
	<script src="assets/js/nice-select.min.js"></script>
	<!-- WOW -->
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	
	
	<!-- Main Js File -->
	<script src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<script>
		Fancybox.bind("[data-fancybox]");
	</script>
	@stack('scripts')
</body>
</html>