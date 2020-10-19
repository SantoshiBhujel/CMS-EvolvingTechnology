@extends('main')

@section('body')
	<!-- Hero Area For Banner-->
	<section  class="hero-area">
		<div  class="hero-slider">
			@foreach ($banners as $banner )
				
			<div  class="single-slider" style="background-image:url('/storage/banner_images/{{ $banner->image}}')">
				<div class="hero-content">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-md-10">
								<h1>{{ $banner->title }}</h1>
								<p>{!! $banner->description !!}</p>
							</div>
							<div class="col-lg-2 col-md-2">
								<!-- Menu-Right -->
								<div class="menu-right top-margin">
									<a href="#" class="theme-btn">Read More</a>
								</div>
								<!-- End-Menu-Right -->
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</section>
	<!-- End Hero Area -->


	<!-- Portfolio Area -->	
	<section class="portfolio-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
					<div class="section-title">
						<h6>We Works On</h6>
						<!--<h3>Our Projects</h3>-->
						<div class="line-bot"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">	
					<div class="portfolio-main">
						<div id="portfolio-item" class="portfolio-item-active">
							<!-- Single Portfolio -->
							@foreach ($projects as $project )
							<div class="cbp-item ui-ux branding">
								<div class="portfolio-single">
									<div class="portfolio-img">
										<img src="/storage/project_images/{{ $project->image }}" alt="#">
									</div>
								</div>
								<div class="portfolio-content">
									<h4><a href="#">{{ $project->title }}</a></h4>
								</div>
							</div>
							@endforeach
							
						</div>	
					</div>	
				</div>
			</div>	
		</div>
	</section>
<!--End Portfolio Area -->	

<div class="product-section">
	<section class="portfolio-areas">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
					<div class="section-title">
						<h6>Our Product</h6>
						<!--<h3>Future Projects</h3>-->
						<div class="line-bot"></div>
					</div>
				</div>
			</div>

			
			<div class="portfolio-main">
				<div id="portfolio-item" class="portfolio-item-active">
					<!-- Single Portfolio -->
					<div class="row">
						@foreach ($randomProducts as $product )
							<div class="col-md-6">
								<div class="cbp-item ui-ux branding">
									<div class="portfolio-single">
										<div class="portfolio-img">
											<img src="/storage/product_images/{{ $product->image }}" alt="#">
										</div>
									</div>

									<div class="portfolio-content">
										<h4><a href="#">{{ $product->title }}</a></h4>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>	
			</div>	
		</div>
	</section>
</div>

<div class="explore-area exparea">
	<div class="client-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12 icon-main">
					<img src="img/single.png">
					<h2>7+ years</h2>
					<p>of experience</p>
				</div>
				<div class="col-md-3 col-sm-12 icon-main">
					<img src="img/oil-barrel.png">
					<h2>5 Crore+</h2>
					<p>Investment</p>
				</div>
				<div class="col-md-3 col-sm-12 icon-main">
					<img src="img/onboarding.png">
					<h2>100+</h2>
					<p>job created</p>
				</div>
				<div class="col-md-3 col-sm-12 icon-main">
					<img src="img/onboarding.png">
					<h2>10+ </h2>
					<p>Business Projects</p>
				</div>

			</div>
		</div>
	</div>

</div>


<!-- About Area -->	
<section class="about-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12 wow fadeInLeft" data-wow-duration="1s">
				<!-- About image -->
				<div class="about-img">
					<img src="img/about-img.jpg" alt="#">
					<div class="activity"><span>7+</span> Years</div>
				</div>
				<!-- End About image -->
			</div>
			<div class="col-lg-6 col-md-6 col-12 wow fadeInRight" data-wow-duration="2s">
				<!-- About content -->
				<div class="about-content">
					<span>About company</span>
					<h2><b style="color: #009000;">7+</b> Years of Providing IT & Business Solutions.</h2>
					<p>But I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system Quis ipsum suspendisse ultrices gravida. Risus commodo viverra. But I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system Quis ipsum suspendisse ultrices gravida. Risus commodo viverraBut I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>

						<p>But I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system Quis ipsum suspendisse ultrices gravida. Risus commodo viverra,. But I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p></BR>
				
					<div class="about-theme-btn">
						<a href="{{ route('about') }}" class="theme-btn">More about us</a>
							<a href="{{ route('about') }}" class="theme-btn">Investment</a>
					</div>
				</div>
				<!-- End About content -->
			</div>
		</div>
	</div>
</section>	


<!-- Future Project Area -->	
<section class="portfolio-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
				<div class="section-title">
					<h6>Future Project</h6>
					<!--<h3>Future Projects</h3>-->
					<div class="line-bot"></div>
				</div>
			</div>
		</div>
		<div class="portfolio-main">
			<div id="portfolio-item" class="portfolio-item-active">
				<div class="future-project owl-carousel owl-theme">
					@foreach ($futureProjects as $futureProject)
						<div class="item">
							<div class="cbp-item development seo">
								<div class="portfolio-single">
									<div class="portfolio-img">
										<img src="/storage/project_images/{{ $futureProject->image }}" alt="#">
									</div>
									<div class="portfolio-content">
										<h4><a href="#">{{ $futureProject->title }}</a></h4>
									</div>
								</div>
							</div>
						</div>
					@endforeach				
				</div>	
			</div>
		</div>	
	</div>
</section>
<!--End Future Project Area -->	


<!-- START HOW Can I HElp -->
<section class="howcan-area">
	<!--<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">-->
	<!--	<div class="section-title">-->
	<!--		<h3 style="color: #fff;">How can we help?</h3>-->
	<!--		<p style="color: #fff;">All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
	<!--	</div>-->
	<!--</div>-->
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 button-style">
				<h4><a href="#">FUNDING  FOR  STARTUP</a></h4>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 button-style">
				<h4><a href="#">PARTNER  WITH  US</a></h4>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 button-style ">
			<h4>	<a href="#">INVESTMENT  WITH  US</a></h4>
			</div>
		</div>
	</div>

</section>
<!-- End HOW CAN I HELP -->

<!-- Team Area -->
<section class="team-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
				<div class="section-title">
					<h6>Our Team</h6>
					<div class="line-bot"></div>
					<!--<p>All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>-->
				</div>
			</div>
		</div>
		<div class="our-team owl-carousel owl-theme">
			@foreach ($teams as $team)
			<div class="item">
				<div class="wow fadeInUp" data-wow-duration="2s">
						   <!-- Single Team -->
						   <div class="single-team text-center">
							   <div class="team-img">
								   <img src="/storage/team_images/{{ $team->image }}" alt="#">
							   </div>
							   <div class="team-bottom">
								   <!-- Team content -->
								   <div class="team-content">
									   <h4>{{ $team->name }}</h4>
									   <p>{{ $team->faculty }}</p>
								   </div>
								   <!-- Team social -->
								   <div class="team-social">
									   <ul>
										   @if ($team->facebook)
										   	<li><a href="{{ $team->facebook }}"><i class="fa fa-facebook"></i></a></li>
										   @endif
										   @if ($team->google)
										   	<li><a href="{{ $team->google }}"><i class="fa fa-google"></i></a></li>
										   @endif
										   @if ($team->twitter)
										   	<li><a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a></li>
										   @endif
										   @if ($team->linkedin)
										   	<li><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
										   @endif
										   @if ($team->dribble)
										   	<li><a href="{{ $team->dribble }}"><i class="fa fa-dribbble"></i></a></li>
										   @endif
										   @if ($team->instagram)
										   	<li><a href="{{ $team->instagram }}"><i class="fa fa-instagram"></i></a></li>
										   @endif
									   </ul>
								   </div>
							   </div>
						   </div>
						   <!-- End Single Team -->
					   </div>
			   </div>
			@endforeach
			
		</div>
	</div>	
</section>		
<!-- End Team Area -->

@endsection



@section('client')
<!-- Client-Area -->
<div class="client-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
				<div class="section-title">
					<h6>Our Client </h6>

				</div>
			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			@foreach ($clients as $client)
			<div class="col-md-3 client-bod">
				<img src="/storage/client_images/{{ $client->image }}">
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- End Client Area -->
@endsection