<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') | ViTinh Tấn Phát </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->

    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="assets/css_1/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css_1/themify-icons.css" />
    <link rel="stylesheet" href="assets/css_1/elegant-icons.css" />
    <link rel="stylesheet" href="assets/css_1/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css_1/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css_1/nice-select.css" />
    <link rel="stylesheet" href="assets/css_1/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css_1/slicknav.min.css" />
    <link rel="stylesheet" href="assets/css_1/style.css" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            {{--<ul class="menu-top-link" >
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
                                            <option value="0" selected>$ USD</option>
                                            <option value="1">€ EURO</option>
                                            <option value="2">$ CAD</option>
                                            <option value="3">₹ INR</option>
                                            <option value="4">¥ CNY</option>
                                            <option value="5">৳ BDT</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">@lang('lang.language')</button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="{{url('lang/en')}}">En</a></li>
                                            <li class="dropdown-item"><a href="{{url('lang/vi')}}">Vi</a></li>
                                            <li class="dropdown-item"><a href="{{url('lang/cn')}}">Cn</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>--}}
                            <div class="btn-group">
                               <a href="{{url('lang/en')}}">En</a>&nbsp;
                               <a href="{{url('lang/vi')}}">Vi</a>&nbsp;
                               <a href="{{url('lang/cn')}}">Cn</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="./">Home</a></li>
                                <li><a href="./about">About Us</a></li>
                                <li><a href="./contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello
                            </div>
                            @if(Auth::check())
                                <ul class="user-login">
                                    <li>
                                        <a href="">{{Auth::user()->name}}</a>
                                    </li>
                                    <li>
                                        <a href="./account/logout">Logout</a>
                                    </li>
                                </ul>
                            @else
                                <<ul class="user-login">
                                    <li>
                                        <a href="./account/login">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="./account/register">Register</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="./">
                            <img height="50px" width="50px" src="assets/images/logo/4.jpg" alt="Logo">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position" style="background:#b4cdcd">
                                        <select id="select1">
                                            <option selected>All</option>
                                        </select>
                                    </div>
                                </div>
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="search-input">
                                                <input type="text" name="search" value="{{request('search')}}"   placeholder="What do you need?">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="search-btn">
                                                <button style="background-color:#b4cdcd"><i class="lni lni-search-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone" style="background:#b4cdcd"></i>
                                <h3>Hotline:
                                    <span>(+84) 972931007</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="javascript:void(0)" style="background:  #b4cdcd">
                                        <i class="lni lni-heart"></i>
                                        <span class="total-count">0</span>
                                    </a>
                                </div>
                                <div class="cart-items">
                                    <a href="./cart" class="main-btn" style="background:  #b4cdcd">
                                        <i class="lni lni-cart"></i>
                                        <span class="total-items">{{Cart::count()}}</span>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span class="item-total">{{Cart::count()}} Items</span>
                                            <a href="./cart">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            @foreach(Cart::content() as $cart)
                                            <li data-rowId="{{$cart->rowId }}">
                                                <div class="cart-img-head">
                                                        <a class="cart-img" href="./cart"><img
                                                            src="assets/images/{{$cart->options->images[0]->path}}" alt="#"></a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="./cart">{{$cart->name}}</a></h4>
                                                    <p class="quantity1">{{$cart->qty}} x <span class="amount">${{$cart->price}}</span></p>
                                                </div>

                                                <a href="javascript:void(0)" class="remove" title="Remove this item">
                                                    <i onclick="removeCart('{{$cart->rowId}}')" class="lni lni-close"></i></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">${{Cart::total()}}</span>
                                            </div>
                                            <div class="button">
                                                <a href="./checkout" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container" style="background: #b4cdcd">
            <div class="row align-items-center" >
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">
                        <!-- Start Mega Category Menu -->
                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                            <ul class="sub-category">
                                @foreach($categories as $category)
                                <li><a href="shop/category/{{ $category->name }}">{{$category->name}} <i class="lni lni-chevron-right"></i></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Mega Category Menu -->
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item {{(request()->segment(1)=='') ? 'active': ''}}">
                                        <a href="./" aria-label="Toggle navigation">@lang('lang.home')</a>
                                    </li>
                                    <li class="nav-item {{( request()->segment(1) == 'shop') ? 'active': ''}}">
                                        <a href="./shop" aria-label="Toggle navigation">@lang('lang.shop')</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">@lang('lang.page')</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="./about">About Us</a></li>
                                            <li class="nav-item"><a href="./account/login">Login</a></li>
                                            <li class="nav-item"><a href="./account/register">Register</a></li>
                                            <li class="nav-item"><a href="./cart">Cart</a></li>
                                            <li class="nav-item"><a href="./checkout">Checkout</a></li>
                                            <li class="nav-item"><a href="./my-order">My Order</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item" {{( request()->segment(1) == 'blog') ? 'active': ''}}>
                                        <a href="./blog" aria-label="Toggle navigation">@lang('lang.blog')</a>
                                    </li>
                                    <li class="nav-item" {{( request()->segment(1) == 'contact') ? 'active': ''}}>
                                        <a href="./contact" aria-label="Toggle navigation">@lang('lang.contact us')</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Nav Social -->
                    <div class="nav-social">
                        <h5 class="title">Follow Us:</h5>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->

{{--body here--}}
@yield('body')


    <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul style="background:#b4cdcd">
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Shipping Info -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="./">
                                    <img src="assets/images/logo/4.jpg" alt="#">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="footer-newsletter">
                                <h4 class="title">
                                    Subscribe to our Newsletter
                                    <span>Get all the latest information, Sales and Offers.</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="Email address here..." type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe<span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>Get In Touch With Us</h3>
                                <p class="phone">Phone: (+84) 972931007</p>
                                <ul>
                                    <li><span>Monday-Friday: </span> 8.00 am - 5.00 pm</li>
                                    <li><span>Saturday: </span> 7.00 am - 6.00 pm</li>
                                </ul>
                                <p class="mail">
                                    <a href="mailto:support@shopgrids.com">nnminh_21th@student.agu.edu.vn</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer our-app">
                                <h3>Our Mobile App</h3>
                                <ul class="app-btn">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-apple"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">App Store</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-play-store"></i>
                                            <span class="small-title">Download on the</span>
                                            <span class="big-title">Google Play</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">Downloads</a></li>
                                    <li><a href="javascript:void(0)">Sitemap</a></li>
                                    <li><a href="javascript:void(0)">FAQs Page</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Shop Departments</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Computers & Accessories</a></li>
                                    <li><a href="javascript:void(0)">Smartphones & Tablets</a></li>
                                    <li><a href="javascript:void(0)">TV, Video & Audio</a></li>
                                    <li><a href="javascript:void(0)">Cameras, Photo & Video</a></li>
                                    <li><a href="javascript:void(0)">Headphones</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>We Accept:</span>
                                <img src="assets/images/footer/credit-cards-footer.png" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="copyright">
                                <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow"
                                        target="_blank">DTH205862-NguyenNhutMinh</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/style.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="assets/js_1/owl.carousel.min.js"></script>
    <script src="assets/js_1/main.js"></script>

    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/main.js"></script>
    <script src="front/js/owlcarousel2-filter.min.js"></script>
    <script>
        function addCart(productId) {
            $.ajax({
                type: "GET",
                url: "cart/add",
                data: {productId: productId},
                success: function (response){
                    $('.item-total').text(response['count'] + ' ' + 'Items');
                    $('.total-items').text(response['count']);
                    $('.total-amount').text('$' + response['total']);

                    var cartItem_Li = $('.shopping-item ul');
                    var cartItem_exitItem = cartItem_Li.find("li" + "[data-rowId= '" + response['cart'].rowId +"']");
                    if (cartItem_exitItem.length){
                        cartItem_exitItem.find('.content p').text(response['cart'].qty + 'x' + '$' + response['cart'].price.toFixed(2));
                    } else{
                        var newItem=
                            '<li data-rowId="'+ response['cart'].rowId +  '">\n' +
                            '   <a href="javascript:void(0)" class="remove" title="Remove this item">' +
                            '<i\n' +
                            '         onclick="removeCart(\'' + response['cart'].rowId +'\')"  class="lni lni-close"></i></a>\n' +
                            '   <div class="cart-img-head">\n' +
                            '        <a class="cart-img" href="product-details.html"><img\n' +
                            '               src="assets/images/'+ response['cart'].options.images[0].path +'" alt="#"></a>\n' +
                            '   </div>\n' +
                            '   <div class="content">\n' +
                            '       <h4><a href="product-details.html">' + response['cart'].name +' </a></h4>\n' +
                            '        <p class="quantity">' + response['cart'].qty +'  x    <span class="amount"> $' + response['cart'].price.toFixed(2) + ' </span></p>\n' +
                            '   </div>\n' +
                            '</li>';
                        cartItem_Li.append(newItem);
                    }

                    alert('Add successful!\nProduct: ' + response['cart'].name);
                    console.log(response);
                },
                error: function (response){
                    alert('Add failed.');
                    console.log(response);
                },
            })
        }
        function removeCart(rowId){
            $.ajax({
                type: "GET",
                url: "cart/delete",
                data: {rowId: rowId},
                success: function (response){
                    //xử lí trong master page
                    $('.item-total').text(response['count'] + ' ' + 'Items');
                    $('.total-items').text(response['count']);
                    $('.total-amount').text('$' + response['total']);

                    var cartItem_Li = $('.shopping-item ul');
                    var cartItem_exitItem = cartItem_Li.find("li" + "[data-rowId= '" + rowId +"']");
                    cartItem_exitItem.remove();
                    //xử lí trong shop/cart
                    var cart_tbody = $('.cart-table tbody');
                    var cart_exitItems = cart_tbody.find("tr" + "[data-rowId= '" + rowId +"']");
                    cart_exitItems.remove();


                    alert('Delete successful!\nProduct: ' + response['cart'].name);
                    console.log(response);
                },
                error: function (response){
                    alert('Delete failed.');
                    console.log(response);
                },
            })
        }
        function destroyCart(){
            $.ajax({
                type: "GET",
                url: "cart/destroy",
                data: {},
                success: function (response){
                    //xử lí trong master page
                    $('.item-total').text('0');
                    $('.total-items').text('0');
                    $('.total-amount').text('0');

                    var cartItem_Li = $('.shopping-item ul');
                    cartItem_Li.children().remove();
                    //xử lí trong shop/cart
                    var cart_tbody = $('.cart-table tbody');
                    cart_tbody.children().remove();

                    $('.subtotal span').text('0');
                    $('.cart-total span').text('0');

                    alert('Delete successful!\nProduct: ' + response['cart'].name);
                    console.log(response);
                },
                error: function (response){
                    alert('Delete failed.');
                    console.log(response);
                },
            })
        }
        function updateCart(rowId, qty){
            $.ajax({
                type: "GET",
                url: "cart/update",
                data: {rowId: rowId, qty: qty},
                success: function (response){
                    //xử lí trong master page
                    $('.item-total').text(response['count'] + ' ' + 'Items');
                    $('.total-items').text(response['$' + 'count']);
                    $('.total-amount').text('$' + response['total']);
                    var cartItem_Li = $('.shopping-item ul');
                    var cartItem_exitItem = cartItem_Li.find("li" + "[data-rowId= '" + rowId +"']");
                    if(qty === 0){
                        cartItem_exitItem.remove();
                    }else{
                        cartItem_exitItem.find('.content p').text(response['cart'].qty + 'x' + '$' + response['cart'].price.toFixed(2));
                    }
                    //xử lí trong shop/cart
                    var cart_tbody = $('.cart-table tbody');
                    var cart_exitItems = cart_tbody.find("tr" + "[data-rowId= '" + rowId +"']");
                    if(qty === 0){
                        cart_exitItems.remove();
                    }else{
                        cart_exitItems.find('.total-price').text('$' + (response['cart'].price * response['cart'].qty).toFixed(2));
                    }
                    $('.subtotal span').text('$' + response['subtotal']);
                    $('.cart-total span').text('$' + response['total']);
                    alert('Update successful!\nProduct: ' + response['cart'].name);
                    console.log(response);
                },
                error: function (response){
                    alert('Update failed.');
                    console.log(response);
                },
            })
        }
    </script>
    <script type="text/javascript">
        //========= Hero Slider
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
</body>
</html>
