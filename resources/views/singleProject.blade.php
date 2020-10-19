@extends('main')

@section('body')

<!-- Breadcrumbs -->
<div class="breadcrumbs" style="background-image:url('/storage/project_images/{{ $project->image }}')">
    <div class="container">
        <div class="row">
            <!-- Breadcrumbs-Content -->
            <div class="col-lg-7 col-md-7 col-12">
                <div class="breadcrumbs-content">
                    <h2>{{ $project->title }}</h2>
                    
                </div>
            </div>
            <!-- Breadcrumbs-Menu -->
            <div class="col-lg-5 col-md-5 col-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
                        <li class="active"><a href="">Project</a></li>
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
                                <img src="/storage/project_images/{{ $project->image }}" alt="#">
                                <div class="blog-title-meta">
                                    <!-- Blog Meta -->
                                    <div class="blog-meta">
                                        {{-- <span><i class="fa fa-user"></i><a href="#">By Admin</a></span>
                                        <span><i class="fa fa-calendar"></i>{{  \Carbon\Carbon::parse($project->created_at)->format('j F, Y') }}</span> --}}
                                        <span>Status: {{ $project->progress }} Project</span>
                                    </div>
                                    <h1>{{ $project->title }}</h1>
                                </div>
                            </div>
                            <!-- Blog Content -->
                            <div class="single-content">
                                {!! $project->description !!}
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