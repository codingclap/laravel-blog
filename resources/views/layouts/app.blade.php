
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title> Laravel Blog System </title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
	<!--====== Slick  css ======-->
	<link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
	<!--====== Nice Select ======-->
	<link rel="stylesheet" href="{{ asset('css/jquery-nice-select.min.css') }}" />
	<!--====== Style css ======-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== Header part start ======-->
	<header class="sticky-header">
		<div class="container-fluid">
			<div class="d-flex align-items-center justify-content-between">
				<div class="site-logo">
					<a href="{{ route('home') }}"><h2><strong>CodingClap</strong></h2></a>
				</div>
				<div class="header-right">
					<!-- <div class="search-area">
						<a href="javascript:void(0)" class="search-btn"><i class="fas fa-search"></i></a>
						<div class="search-form">
							<a href="#" class="search-close"><i class="fal fa-times"></i></a>
							<form action="#">
								<input type="search" placeholder="Type here to search">
							</form>
							<div class="search-overly"></div>
						</div>
					</div> -->
					<!-- <div class="shoping-cart">
						<a href="cart.html" class="shoping-cart-btn">
							<i class="fas fa-shopping-cart"></i>
							<span class="count">2</span>
						</a>
					</div> -->
					<div class="offcanvas-panel">
						<a href="javascript:void(0)" class="panel-btn">
							<span>
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<div class="panel-overly"></div>
						<div class="offcanvas-items">
							<!-- Navbar Toggler -->
							<a href="javascript:void(0)" class="panel-close">
								Back <i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>

							<ul class="offcanvas-menu">
								<!-- <li>
									<a href="index.html">Home</a>
									<ul class="submenu">
										<li><a href="index-1.html">Home One</a></li>
										<li><a href="index-2.html">Home Two</a></li>
										<li><a href="index-3.html">Home Three</a></li>
										<li><a href="index-4.html">Home Four</a></li>
									</ul>
								</li> -->
                                <li><a href="{{ route('home') }}">Home</a></li> 
								<li><a href="{{ route('blog') }}">Blog</a></li> 
								 <li><a href="{{ route('single') }}">Single</a></li> 
							</ul>

							<div class="social-icons">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--====== Header part end ======-->
 

    @yield('content')


	<!--====== Footer Area Start ======-->
	<footer>
		<div class="footer-widgets-area">
			<div class="container container-1360">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="widget address-widget">
							<h4 class="widget-title">Our Address</h4>
							<p>Ghaziabad, India Seelam Puri. <br> Seelam, Road 8A, Dehradun.</p>
							<!-- <p>+91 <br> coding@gmail.com</p> -->
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="widget nav-widget">
							<h4 class="widget-title">Quick Links</h4>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Comming Soon</a></li> 
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="widget nav-widget">
							<h4 class="widget-title">Technology</h4>
							<ul>
								<li><a href="#">React</a></li>
								<li><a href="#">Node-Js</a></li>
								<li><a href="#">Javascript</a></li> 
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 ml-auto">
						<div class="widget newsletter-widget">
							<h4 class="widget-title">Our Monthly Newsletter </h4>
							<p>
								Sign Up TO Get Updates On Articles.
							</p>
							<form action="#">
								<input type="email" placeholder="your email">
								<button type="submit">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright-area">
			<div class="container container-1360">
				<div class="row align-items-center">
					<div class="col-lg-6 col-12">
						<div class="social-links">
							<ul>
								<li class="title">Follow Me</li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Youtube</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Linkedin</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="copyright-text text-lg-right">
							<p><span>Copyright</span> - 2025 CodingClap</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer Area End ======-->

	<!--====== jquery js ======-->
	<script src="{{ asset('js/modernizr-3.6.0.min.js') }} "></script>
	<script src="{{ asset('js/jquery-1.12.4.min.js') }} "></script>
	<!--====== Bootstrap js ======-->
	<script src="{{ asset('js/bootstrap.min.js') }} "></script>
	<script src="{{ asset('js/popper.min.js') }} "> </script>
	<!--====== Slick js ======-->
	<script src="{{ asset('js/slick.min.js') }} "> </script>
	<!--====== Images Loaded ======-->
	<script src="{{ asset('js/imagesloaded.pkgd.min.js') }} "> </script>
	<!--====== Isotope js ======-->
	<script src="{{ asset('js/isotope.pkgd.min.js') }} "></script>
	<!--====== Magnific Popup js ======-->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }} "></script>
	<!--====== Nice Select js ======-->
	<script src="{{ asset('js/jquery.nice-select.min.js') }} "></script>
	<!--====== Main js ======-->
	<script src="{{ asset('js/main.js') }} "></script>
</body>

</html>    