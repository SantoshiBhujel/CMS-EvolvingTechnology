@extends('main')

@section('body')

<!-- Breadcrumbs -->
<div class="breadcrumbs" style="background-image:url('/storage/img/breadcrumbs-bg.jpg')">
    <div class="container">
        <div class="row">
            <!-- Breadcrumbs-Content -->
            <div class="col-lg-7 col-md-7 col-12">
                <div class="breadcrumbs-content">
                    <h2>{{ $blog->title }}</h2>
                    
                </div>
            </div>
            <!-- Breadcrumbs-Menu -->
            <div class="col-lg-5 col-md-5 col-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
                        <li class="active"><a href="">Blog Single</a></li>
                    </ul>
                </div>	
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Blogs-Single-Area -->
<section class="blog-single-post section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-area">
                            <!-- Blog Head -->
                            <div class="single-head">
                                <img src="/storage/blog_images/{{ $blog->image }}" alt="#">
                                <div class="blog-title-meta">
                                    <!-- Blog Meta -->
                                    <div class="blog-meta">
                                        <span><i class="fa fa-user"></i><a href="#">By Admin</a></span>
                                        <span><i class="fa fa-calendar"></i>{{  \Carbon\Carbon::parse($blog->created_at)->format('j F, Y') }}</span>
                                        {{-- <span><i class="fa fa-comments"></i>30 comments</span> --}}
                                    </div>
                                    <h1>{{ $blog->title }}</h1>
                                </div>
                            </div>
                            <!-- Blog Content -->
                            <div class="single-content">
                                {!! $blog->body !!}
                                <!-- Blog Post Tag -->
                                {{-- <div class="blog-post-tag">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-12">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="blog-share share-tag">
                                                <h5>Share Now</h5>
                                                    <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Prev Next Button-->
                                <div class="prev-next-btn">
                                    <ul>
                                        <li class="prev"><i class="fa fa-angle-double-left"></i><a href="#">prev</a></li>
                                        <li><a href="#">next</a><i class="fa fa-angle-double-right"></i></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <!-- Blog Sidebar -->
                <div class="blog-sidebar">
                   <!-- Future Projects-->
                    <div class="widget popular-feeds">
                        <h4 class="widget-title">Future Projects</h4>
                        <div class="popular-feed-loop">
                            <!-- Single Popular -->
                            @foreach ($futureProjects as $futureProject)
                                <div class="single-popular-feed">
                                    <div class="feed-img">
                                        <img src="/storage/project_images/{{ $futureProject->image }}" alt="#">
                                    </div>
                                    <div class="feed-desc">
                                        <h6><a href="{{ route('singleProject',$futureProject->id) }}">{{ $futureProject->title }}</a></h6>
                                        {{-- <span class="time"><i class="fa fa-calendar"></i>{{  \Carbon\Carbon::parse($futureProject->created_at)->format('j F, Y') }}</span> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Work On-->
                    <div class="widget popular-feeds">
                        <h4 class="widget-title">Work On</h4>
                        <div class="popular-feed-loop">
                            <!-- Single Popular -->
                            @foreach ($projects as $project)
                                <div class="single-popular-feed">
                                    <div class="feed-img">
                                        <img src="/storage/project_images/{{ $project->image }}" alt="#">
                                    </div>
                                    <div class="feed-desc">
                                        <h6><a href="{{ route('singleProject',$project->id) }}">{{ $project->title }}</a></h6>
                                        {{-- <span class="time"><i class="fa fa-calendar"></i>{{  \Carbon\Carbon::parse($project->created_at)->format('j F, Y') }}</span> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Products-->
                    <div class="widget popular-feeds">
                        <h4 class="widget-title">Products</h4>
                        <div class="popular-feed-loop">
                            <!-- Single Popular -->
                            @foreach ($products as $product)
                                <div class="single-popular-feed">
                                    <div class="feed-img">
                                        <img src="/storage/product_images/{{ $product->image }}" alt="#">
                                    </div>
                                    <div class="feed-desc">
                                        <h6><a href="{{ route('singleProduct',$product->id) }}">{{ $product->title }}</a></h6>
                                        {{-- <span class="time"><i class="fa fa-calendar"></i>{{  \Carbon\Carbon::parse($project->created_at)->format('j F, Y') }}</span> --}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Blog Sidebar -->
            </div>
        </div>
    </div>
</section>
<!--/ End Blogs Area -->

@endsection