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

<!-- Blog Archive -->
<section id="blogs" class="blog-area archive">
	<div class="container">
		<div class="row">
			@foreach ($blogs as $blog)
				
			<a href="{{ route('singleBlog',$blog->id) }}">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Single Blog -->
				
					<div class="single-blog">
						<div class="blog-img">
							<img src="/storage/blog_images/{{ $blog->image }}" alt="#">
							<span class="date">{{  \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}</span>
						</div>
						<div class="blog-body">
							<h3><a href="{{ route('singleBlog',$blog->id) }}">{{ $blog->title }}</a></h3>
							<div class="blog-meta">
								<div class="single-meta">
									<img src="/storage/img/blog/admin/admin-1.jpg" alt="">
									<p>Admin</p>
								</div>
							</div>
						</div>
					</div>
				
				<!-- End Single Blog -->
			</div>
		</a>
			@endforeach
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Start Pagination -->
				<div class="bonik-pagination-main">
					<ul class="pagination justify-content-center">
						{{ $blogs->links() }}
					</ul>
				</div>
				<!--/ End Pagination -->
			</div>
		</div>	
	</div>
</section>	
<!-- End Blog Archive -->
@endsection