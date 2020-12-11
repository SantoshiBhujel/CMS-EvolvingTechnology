<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content='bonik'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Site Title -->
	<title>Evolving Technology</title>

	<!-- Fav Icon -->
	<link rel="icon" type="img/favicon.png" href="/storage/img/favicon.png">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,800;1,900&amp;display=swap" rel="stylesheet">   

	<!-- Theme Stylesheet -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/cube-portfolio.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/maginific-popup.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/jquery.fancybox.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/animate-text.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">

	<!-- Theme Default CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">

	<link rel="stylesheet" href="#" id="bonik_custom">	

	</head>

	<body>
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="topbar-address">
						<ul>
							<li><a href="#"><i class="fa fa-phone"></i>9851053926</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> info@evolvingtechnology.com.au</a></li>
							<li><a href="#"><i class="fa fa-map-marker"></i> New Baneshwor Kathmandu </a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<!-- Menu-Right -->
					<div class="menu-right">
						<a href="{{ route('contact') }}" class="theme-btn">Contact Us</a>
					</div>
					<!-- End-Menu-Right -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Topbar -->
	
	<!-- Header Start -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12">
					<div class="header-inner-top">
						<div class="header-inner">
							<div class="row">
								<div class="col-lg-2 col-md-3 col-12">
									<!-- Logo -->
									<div class="logo">
										<a class="logo-1" href="{{ route('welcome') }}"><img src="{{ asset('/storage/img/logo1.png') }}"  alt="Evolving Technology" title="Evolving Technology"></a>
									</div>
									<!-- End-Logo -->
									<div class="mobile-nav"></div>
								</div>
								<div class="col-lg-10 col-md-9 col-12">
									<div class="main-menu-top">
										<div class="main-menu">
											<div class="navbar">
												<div class="nav-item">
													<!-- Main-Menu -->
													<ul class="nav-menu mobile-menu navigation">
														<li class="active"><a href="{{ route('welcome') }}">Home</a></li>
															<li><a href="#">About Us<i class="fa fa-angle-down"></i></a>
															<ul class="sub-menu">
																<li><a href="{{ route('about') }}">Who We Are</a></li>
																	<li><a href="{{ route('teams') }}">Our Team</a></li>
																</li>
																</ul>

														<li><a href="#">Our Projects<i class="fa fa-angle-down"></i></a>
															<ul class="sub-menu">
																@foreach ($projects as $project)
																<li><a href="{{ route('singleProject',$project->id) }}">{{ $project->title }}</a></li>
																@endforeach															
															</ul>
														</li>
														<li><a href="#">Our Products<i class="fa fa-angle-down"></i></a>
															<ul class="sub-menu">
																@foreach ($products as $product )
																<li><a href="{{ route('singleProduct',$product->id) }}">{{ $product->title }}</a></li>
																@endforeach
																

															</ul>
														</li>
														<li><a href="#">Investment<i class="fa fa-angle-down"></i></a>
															<ul class="sub-menu">
															
																<li><a href="#">Funding For Startup</a></li>
																<li><a href="#">Partner With Us </a></li>
																	<li><a href="#">Investment With Us </a></li>

															</ul>
														</li>
															<li><a href="#">Our Future Projects<i class="fa fa-angle-down"></i></a>
															<ul class="sub-menu">
																@foreach ($futureProjects as $futureProject )
																	<li><a href="{{ route('singleProject',$futureProject->id) }}">{{ $futureProject->title }}</a></li>
																@endforeach
															</ul>
														</li>
														<li><a href="{{ route('blogs') }}">Blog & News</a></li>
													
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
			</div>	
		</div>
	</header>
	<!-- End Header -->

	@yield('body')

	{{-- <section class="subscribe-area" style="background-image: url(/storage/img/subscribe-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12 wow fadeInLeft" data-wow-duration="1s">
					<div class="subscribe-content">
						<h2>Subscribe & stay updated</h2>
						<p>Posuere nam natoque nec rhoncus malesuad phasel ante.</p>
					</div>
					<form class="form-main">
						<div class="form-group">
							<input type="email" name="Email" placeholder="Your email adress" required="required">
							<button type="submit" class="theme-btn">Subscribe Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Subscribe Area -->

	@yield('client')

<!-- Footer Area -->
<footer class="footer-area" style="background-image:url('/storage/img/footer-bg.jpg')">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-widget footer-about">
						<div class="footer-logo">
							<a class="logo" href="#">
								<!--<img src="img/footer-logo.png" alt="#">-->
								<h3 class="widget-title">About us</h3>
							</a>
						</div>
						<div class="about-description">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
						</div>
						<!-- Quick Link Box -->	
						<div class="f-contact-box">
							<div class="box-icon"><i class="fa fa-headphones"></i></div>
							<div class="contact-text">
								<p>Talk To Our Support</p>
								<h5>9851053926</h5>
							</div>
						</div>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-2 col-md-6 col-12">
					<!-- Quick Links -->
					<div class="single-widget f-links">
						<h3 class="widget-title">Quick Links</h3>
						<ul>
							<li><a href="{{ route('welcome') }}"><i class="fa fa-angle-double-right"></i>Home</a></li>
							<li><a href="{{ route('about') }}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
							<li><a href="{{ route('teams') }}"><i class="fa fa-angle-double-right"></i>Our Team</a></li>
							<li><a href="{{ route('blogs') }}"><i class="fa fa-angle-double-right"></i>Blog And News</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right"></i>Contact us</a></li>
						</ul>
					</div>
				</div>
				<!-- Single-Widget -->
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Latest Post -->
					<div class="single-widget">
						<h3 class="widget-title">Latest News</h3>
						<div class="widget-post">
							<div class="post-img">
								<a href="#"><img src="/storage/img/feed-1.jpg" alt="#"></a>
							</div>
							<div class="post-content">
								<h4><a href="#">Define World Best IT Solution Technology</a></h4>
								<span class="post-date"><i class="fa fa-clock-o"></i>24th March 2020</span>
							</div>
						</div>
						<div class="widget-post">
							<div class="post-img">
								<a href="#"><img src="/storage/img/feed-1.jpg" alt="#"></a>
							</div>
							<div class="post-content">
								<h4><a href="#">Define World Best IT Solution Technology</a></h4>
								<span class="post-date"><i class="fa fa-clock-o"></i>24th March 2020</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Single-Widget -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-widget">
						<h3 class="widget-title">Contact</h3>
						<!-- Footer Contact -->
						<div class="footer-contact">
							<ul class="contact-bottom">
								<li><a href="#"><i class="fa fa-map-marker"></i> New Baneshwor Kathmandu</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>9851053926</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>info@evolvingtechnology.com.au</a></li>
							</ul>
						</div>
						<!-- Footer Social -->
						<div class="f-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End-Single-Widget -->
			</div>
		</div>
	</div>
	<!-- End Footer Top -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="copyright-text">
						<p>Copyright © 2020 Evolving Technology. All Rights Reserved</p>
					</div>
				</div>
					<div class="col-lg-6 col-md-6 col-12">
							<div class="footer-bottom-img text-right">
							<p style="color: #fff;" >Design By: <a target="_blank" href="https://ennovativewebdesign.com">Ennovative Web Design</a></p>
							</div
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Copyright -->
		</footer>
		<!-- End Footer Area -->	
		
		<!-- Jquery Plugin JS -->
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/popper.min.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('js/theme-option.js') }}"></script>
		<script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
		<script src="{{ URL::asset('js/modernizer.min.js') }}"></script>
		<script src="{{ URL::asset('js/magnific-popup.min.js') }}"></script>
		<script src="{{ URL::asset('js/cube-portfolio.min.js') }}"></script>
		<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ URL::asset('js/wow.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery-fancybox.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.slicknav.min.js') }}"></script>
		<script src="{{ URL::asset('js/steller.min.js') }}"></script>
		<script src="{{ URL::asset('js/easing.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
		<script src="{{ URL::asset('js/main.js') }}"></script>
		<!-- End Jquery Plugin JS -->
	</body>
	</html>