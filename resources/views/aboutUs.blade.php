@extends('main')

@section('body')

<div class="breadcrumbs" style="background-image:url('img/breadcrumbs-bg.jpg')">
    <div class="container">
        <div class="row">
            <!-- Breadcrumbs-Content -->
            <div class="col-lg-7 col-md-7 col-12">
                <div class="breadcrumbs-content">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
                </div>
            </div>
            <!-- Breadcrumbs-Menu -->
            <div class="col-lg-5 col-md-5 col-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
                        <li class="active"><a href="about-us.html">About us</a></li>
                    </ul>
                </div>	
            </div>
        </div>
    </div>
</div>
<!-- Service-Area -->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                <div class="section-title">
                    <h6>Services</h6>
                    <h3>Our Services</h3>
                    <div class="line-bot"></div>
                    <p>All the lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
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
<!-- End Service Area -->

<!-- About Area -->
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 wow fadeInLeft" data-wow-duration="1s">
                <!-- About image -->
                <div class="about-img">
                    <img src="img/about-img.png" alt="#">
                    <div class="activity"><span>35+</span> Years</div>
                </div>
                <!-- End About image -->
            </div>
            <div class="col-lg-6 col-md-6 col-12 wow fadeInRight" data-wow-duration="2s">
                <!-- About content -->
                <div class="about-content">
                    <span>About company</span>
                    <h2>More Than <b>35+</b> Years, We Provide Business Solutions.</h2>
                    <p>But I must explain to you how all this mistaken idea of denounc ing pleasure and praising pain was born and I will give yomplete acount of the system Quis ipsum suspendisse ultrices gravida. Risus commodo viverra </p>
                    <div class="feature">
                        <!-- Single Feature -->
                        <div class="single-feature">
                            <i class="fa fa-briefcase"></i>
                            <div class="feature-content">
                                <h3>Smart Business Solutions!</h3>
                                <p>Sedut perspiciatis unde omnis iste natus error sitlupt tem accusantium doloremque laudantium</p>
                            </div>
                        </div>
                        <!-- Single Feature -->
                        <div class="single-feature">
                            <i class="fa fa-code"></i>
                            <div class="feature-content">
                                <h3>Quality Coding & Best Service</h3>
                                <p>Sedut perspiciatis unde omnis iste natus error sitlupt tem accusantium doloremque laudantium</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-theme-btn">
                        <a href="about-us.html" class="theme-btn">More about us</a>
                    </div>
                </div>
                <!-- End About content -->
            </div>
        </div>
    </div>
</section>	
<!-- End About Area -->	

<!-- Team Area -->
<section class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                <div class="section-title">
                    <h6>Team</h6>
                    <h3>Creative Minds</h3>
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