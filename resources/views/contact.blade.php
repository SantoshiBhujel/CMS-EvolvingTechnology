@extends('main')

@section('body')

<!-- Breadcrumbs -->
<div class="breadcrumbs" style="background-image:url('/storage/img/breadcrumbs-bg.jpg')">
	<div class="container">
		<div class="row">
			<!-- Breadcrumbs-Content -->
			<div class="col-lg-7 col-md-7 col-12">
				<div class="breadcrumbs-content">
					<h2>Blog Area</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
				</div>
			</div>
			<!-- Breadcrumbs-Menu -->
			<div class="col-lg-5 col-md-5 col-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="{{ route('welcome') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
						<li class="active"><a href="blog-grid.html">Blog grid</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
	<!-- Contact Area -->
    <section class="contact-area">
        @include('includes.alert')
        <div class="content-area">
            <div class="left-col" style="background-image:url(img/contact-bg.jpg);"></div>
            <!-- Contact Right -->
            <div class="right-col">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6 col-12 wow fadeInRight" data-wow-duration="1s">
                        <div class="contact-right">
                            <div class="top-content">
                                <h3><span>Contact</span>Request A Free Consulting</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit Aenean commo doligula eget dolor. Aenean massa. Cum sociis natoque penatibus</p>
                            </div>
                            <form action="{{ route('freeConsult') }}" method="post">
                                @csrf
                                <div class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Full Name *" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email *" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <input type="text" name="subject" placeholder="Subject *" required="required">
                                            </div>
                                        </div>	
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Your Message *" required="required"></textarea>
                                            </div>
                                        </div>	
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group contact-button">
                                                <button type="submit" class="theme-btn">submit now</button>
                                            </div>	
                                        </div>
                                    </div>
                                </div>	
                            </form>	
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Right -->
        </div>
    </section>	
    <!-- End Contact Area -->

@endsection