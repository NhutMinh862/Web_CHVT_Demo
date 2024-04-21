@extends('front.layout.master')

@section('title', 'Blog')

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">BLOG</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Blogs About Technology</h2>
                    <p>Discover the Dynamic World of Technology: Explore Our Rich Collection of Tech Blogs Offering In-Depth Analysis, Expert Opinions, and Cutting-Edge Developments Driving Innovation and Progress.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="banner section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-6 col-md-6 col-12">
                    <a href="./blog/{{$blog->id}}"><div class="single-banner" style="background-image:url('assets/images/blogs_IT/{{$blog->image}}')"></a>
                    <div class="content">
                            <div class="button">
                                <a href="./blog/{{$blog->id}}" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item"><i class="fa fa-calendar-o"></i>
                                {{date('M d, Y', strtotime($blog->created_at))}}
                            </div>
                            <div class="tag-item"><i class="fa fa-comment-o"></i>
                                {{count($blog->blogComment)}}
                            </div>
                        </div>
                        <a href="./blog/{{$blog->id}}"><h4>{{$blog->title}}</h4></a>
                        <p>{{$blog->subtitle}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
	<div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="assets/images/blogs_IT/blog-banner1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-light">Paris Olympia 2024</h4>
                        <p class="text-light">The torch was lit in ancient Olympia during a traditional ceremony, marking the final stretch of the seven-year preparations for the start of the Games on July 26..</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="assets/images/blogs_IT/blog-banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-light">Smartphones under 4 million VND have 12 GB RAM</h4>
                        <p class="text-light">Oscal Tiger 12 is equipped with 12 GB RAM, 120 Hz screen and costs 3.9 million VND.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/blogs_IT/blog-banner3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-light">Largest capacity data center in Vietnam</h4>
                        <p class="text-light">Viettel's data center in Hoa Lac, Thach That is located on an area of 9.1 hectares, with a total floor area of 21 thousand square meters with eight floors, opened on the morning of April 10.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/blogs_IT/blog-banner4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-light">Zenbook Duo - laptop with two OLED screens priced from 50 million VND</h4>
                        <p class="text-light">Asus Zenbook Duo laptop is equipped with two 14-inch Lumina OLED touch screens, Core 9 Ultra chip and weighs 1.35 kg.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

					 -->
@endsection

