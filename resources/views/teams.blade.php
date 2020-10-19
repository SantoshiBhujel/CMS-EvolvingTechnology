@extends('main')

@section('body')
	<!-- Breadcrumbs -->
    <div class="breadcrumbs" style="background-image:url('/storage/img/breadcrumbs-bg.jpg')">
        <div class="container">
            <div class="row">
                <!-- Breadcrumbs-Content -->
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="breadcrumbs-content">
                        <h2>Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
                    </div>
                </div>
                <!-- Breadcrumbs-Menu -->
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="breadcrumbs-menu">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
                            <li class="active"><a href="blog-grid.html">Team Members</a></li>
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
                <div class="col-lg-8 col-12">
                    <div class="row">
                        @foreach ($teams as $team)
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="/storage/team_images/{{ $team->image }}" alt="#">
                                    <span>{{ $team->faculty }}</span>
                                </div>
                                <div class="blog-body">
                                    <h3><a href="#">{!! $team->description !!}</a></h3>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Pagination -->
                            <div class="bonik-pagination-main">
                                <ul class="bonik-pagination justify-content-center">
                                    {{ $teams->links() }}
                                </ul>
                            </div>
                            <!--/ End Pagination -->
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

    @endsection