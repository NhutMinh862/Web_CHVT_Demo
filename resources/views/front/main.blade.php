@extends('front.layout.master')
@section('title', 'Home')
@section('body')
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url(assets/images/hero/slider-bg1.jpg);">
                                <div class="content">
                                    <h2><span>No restocking fee ($35 savings)</span>
                                        M75 Sport Watch
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <h3><span>Now Only</span> $320.99</h3>
                                    <div class="button">
                                        <a href="./shop" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url(assets/images/hero/slider-bg2.jpg);">
                                <div class="content">
                                    <h2><span>Big Sale Offer</span>
                                        Get the Best Deal on CCTV Camera
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <h3><span>Combo Only:</span> $590.00</h3>
                                    <div class="button">
                                        <a href="./shop" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner"
                                style="background-image: url('assets/images/hero/slider-bnr.jpg');">
                                <div class="content">
                                    <h2>
                                        <span>New line required</span>
                                        iPhone 12 Pro Max
                                    </h2>
                                    <h3>$259.99</h3>
                                </div>
                            </div>
                            <!-- End Small Banner -->
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p>Saving up to 50% off all online store items this week.</p>
                                    <div class="button">
                                        <a class="btn" href="./shop">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Small Banner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- Start Trending Product Area -->

    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                        <p>Unlocking Tomorrow's Technology Today: Exploring the Trendsetting Products at Vi Tinh Tan Phat. Elevate Your Tech Experience with Our Latest Innovations. Stay Informed, Stay Ahead - Trust Vi Tinh Tan Phat.</p>
                    </div>
                </div>
            </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-large set-bg" data-setbg="assets/images/sp_images/large.jpg">
                                <h2>Products</h2>
                                <a href="./shop">Discover More</a>
                            </div>
                        </div>
                        <div class="col-lg-8 offset-lg-1">
                            <div class="filter-control">
                                <ul>
                                    <li class="active item" data-tag="*" data-category="hardware">All</li>
                                    <li class="item" data-tag=" .accessory " data-category="hardware">Accessory</li>
                                    <li class="item" data-tag=" .case " data-category="hardware">Case</li>
                                    <li class="item" data-tag=" .mouse " data-category="hardware">Mouse</li>
                                    <li class="item" data-tag=" .laptop " data-category="hardware">Laptop</li>
                                    <li class="item" data-tag=" .storage " data-category="hardware">Storage</li>
                                </ul>
                            </div>
                            <div class="product-slider owl-carousel hardware">
                                @foreach($featuredProducts['hardware'] as $product)
                                    @include('front.components.product-item')
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- End Trending Product Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image:url('assets/images/banner/banner-1-bg.jpg')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="./shop" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                         style="background-image:url('assets/images/banner/banner-2-bg.jpg')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="./shop" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-1">
                            <div class="filter-control">
                                <ul>
                                    <li class="active item" data-tag="*" data-category="technology">All</li>
                                    <li class="item" data-tag=" .accessory " data-category="technology">Accessory</li>
                                    <li class="item" data-tag=" .case " data-category="technology">Case</li>
                                    <li class="item" data-tag=" .mouse " data-category="technology">Mouse</li>
                                    <li class="item" data-tag=" .laptop " data-category="technology">Laptop</li>
                                    <li class="item" data-tag=" .storage " data-category="technology">Storage</li>

                                </ul>
                            </div>
                            <div class="product-slider owl-carousel technology">
                                @foreach($featuredProducts['technology'] as $product)
                                    @include('front.components.product-item')
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-large set-bg" data-setbg="assets/images/sp_images/new-pro2.jpg">
                                <h2>New Products</h2>
                                <a href="./shop">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Call Action Area -->
    <section class="call-action section" style="background:#b4cdcd">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <div class="content" >
                            <h2 class="wow fadeInUp" data-wow-delay=".4s" style="color: #1a1e21">Currently You are using free<br>
                                Lite version of vitinh Tan Phat</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s" style="color: #1a1e21">Please, purchase full version of the template
                                to get all pages,<br> features and commercial license.</p>
                            <div class="button wow fadeInUp" data-wow-delay=".8s">
                                <a href="javascript:void(0)" class="btn">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Call Action Area -->

    <!-- Start Banner Area -->
      <!-- End Banner Area -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>From The Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img height="200px" src="assets/images/blogs_IT/{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item"><i class="fa fa-calendar-o"></i>
                                        {{date('M d, Y', strtotime($blog->created_at))}}
                                    </div>
                                    <div class="tag-item"><i class="fa fa-comment-o"></i>
                                        {{count($blog->blogComment)}}
                                    </div>
                                </div>
                                <a href="#"><h4>{{$blog->title}}</h4></a>
                                <p>{{$blog->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $( function() {
                $('.set-bg').each(function () {
                    var bg = $(this).data('setbg');
                    $(this).css('background-image', 'url(' + bg + ')');
                });
                $(".product-slider").owlCarousel({
                    loop: true,
                    margin: 25,
                    nav: true,
                    items: 4,
                    dots: true,
                    navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
                    smartSpeed: 1200,
                    autoHeight: false,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        576: {
                            items: 2,
                        },
                        992: {
                            items: 2,
                        },
                        1200: {
                            items: 3,
                        }
                    }
                });

                /*------------------
                   logo Carousel
                --------------------*/
                $(".logo-carousel").owlCarousel({
                    loop: false,
                    margin: 30,
                    nav: false,
                    items: 5,
                    dots: false,
                    navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
                    smartSpeed: 1200,
                    autoHeight: false,
                    mouseDrag: false,
                    autoplay: true,
                    responsive: {
                        0: {
                            items: 3,
                        },
                        768: {
                            items: 5,
                        }
                    }
                });

                /*-----------------------
                   Product Single Slider
                -------------------------*/
                $(".ps-slider").owlCarousel({
                    loop: false,
                    margin: 10,
                    nav: true,
                    items: 3,
                    dots: false,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    smartSpeed: 1200,
                    autoHeight: false,
                    autoplay: true,
                });
                //Lọc sản phẩm ở Home
                const pro_hardware = $(".product-slider.hardware");
                const pro_technology = $(".product-slider.technology");

                $('.filter-control').on('click', '.item', function ()
                {
                    const $item = $(this);
                    const filter = $item.data('tag');
                    const category = $item.data('category');
                    $item.siblings().removeClass('active');
                    $item.addClass('active');

                    if(category==='hardware'){
                        pro_hardware.owlcarousel2_filter(filter);
                    }
                    if(category==='technology'){
                        pro_technology.owlcarousel2_filter(filter);
                    }
                })
            } );
        </script>
    </section>
@endsection


