@extends('front.layout.master')

@section('title', 'Product')

@section('body')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Single Product</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./shop">Shop</a></li>
                        <li>Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Item Details -->
    <section class="item-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"> @include('front.shop.components.products-sidebar-filter')</div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-area">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="product-images">
                                            <main id="gallery">
                                                <div class="main-img">
                                                    <img src="assets/images/{{ $product->productImages[0]->path ?? ''}}" id="current" alt="#">
                                                </div>
                                                <div class="images">
                                                    @foreach($product->productImages as $productImages)
                                                        <img height="100px" src="assets/images/{{$productImages->path}}" id="current" alt="#">
                                                    @endforeach

                                                </div>
                                            </main>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="product-info">
                                            <h1 class="title" style="text-transform: uppercase">{{ $product->name }}</h1>
                                            <p class="category"><i class="lni lni-tag"></i> Drones:<a href="javascript:void(0)">{{ $product->tag }}</a></p>
                                            @if($product->discount != null)
                                                <h3 class="price" style="color: red">${{ $product->discount }}<span class="text-decoration-line-through">${{ $product->price }}</span></h3>
                                            @else
                                                <h3 class="price">${{ $product->price }}</h3>
                                            @endif
                                            <p class="info-text">{{ $product->content }}</p>
                                            <div class="pd-rating">
                                                @for($i =1; $i<=5; $i++)
                                                    @if($i<= $product->avgRating)
                                                        <span><i class="lni lni-star-filled" style="color: #ffcd39"></i></span>
                                                    @else
                                                        <span><i class="lni lni-star-filled"></i></span>
                                                    @endif
                                                @endfor
                                                <span>({{ count($product->productComments) }})</span>
                                            </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                          <div class="form-group color-option">
                                                               <label class="title-label" for="size">Choose color</label>
                                                              @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                                                    <div class="single-checkbox checkbox-{{$productColor}}">
                                                                        <input type="checkbox" id="{{$productColor}}" checked>
                                                                        <label for="{{$productColor}}"><span></span></label>
                                                                    </div>
                                                              @endforeach
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                            <div class="form-group">
                                                                @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                                <label for="{{$productSize}}">Size</label>
                                                                <select class="form-control" id="{{$productSize}}">
                                                                    <option>{{$productSize}}</option>
                                                                </select>
                                                                @endforeach
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="form-group quantity">
                                                            <label for="color">Quantity</label>
                                                            <input type="number" class="form-control" value="1">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="bottom-content">
                                                <div class="row align-items-end">
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="button cart-button">
                                                            <button onclick="addCart({{$product->id}})" class="btn" style="width: 100%;">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="wish-button">
                                                            <button class="btn"><i class="lni lni-reload"></i> Compare</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="wish-button">
                                                            <button class="btn"><i class="lni lni-heart"></i> To Wishlist</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                                <div class="pd-tag">
                                                    <li><span>CATEGORIES</span>: {{$product->productCategory->name}}</li>
                                                    <li><span>TAG</span>: {{$product->tag}}</li>
                                                </div>
                                                <div class="pd-share">
                                                   <li><span>SKU : {{$product->sku}}</span> </li>
                                                   <div class="p-social">
                                                       <li>
                                                            <a href="#"><i class="lni lni-facebook-filled"></i>&nbsp;FACEBOOK</a>
                                                       </li>
                                                       <li>
                                                            <a href="#"><i class="lni lni-twitter-original">&nbsp;TWITTER</i></a>
                                                       </li>
                                                       <li>
                                                            <a href="#"><i class="lni lni-instagram">&nbsp;INSTAGRAM</i></a>
                                                       </li>
                                                   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-details-info">
                                <div class="single-block">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="info-body custom-responsive-margin">
                                                <h3>Description</h3>
                                                <p>{!! $product->description !!}</p>
                                            </div>
                                            <br>
                                            <div class="info-body custom-responsive-margin">
                                                <h3>Product Commitment</h3>
                                                <h4>Shipping Options:</h4>
                                                <ul class="normal-list">
                                                    <li><span>Courier:</span> 2 - 4 days, $22.50</li>
                                                    <li><span>Local Shipping:</span> up to one week, $10.00</li>
                                                    <li><span>UPS Ground Shipping:</span> 4 - 6 days, $18.00</li>
                                                    <li><span>Unishop Global Export:</span> 3 - 4 days, $25.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="info-body">
                                                <h3 class="text-center">Specifications</h3>
                                                <div class="specification-table">
                                                    <table>
                                                        <tr>
                                                            <td class="p-catagory">Customer Rating</td>
                                                            <td>
                                                                <div class="at-rating">
                                                                    @for($i =1; $i<=5; $i++)
                                                                        @if($i<= $product->avgRating)
                                                                            <span><i class="lni lni-star-filled" style="color: #ffcd39"></i></span>
                                                                        @else
                                                                            <span><i class="lni lni-star-filled"></i></span>
                                                                        @endif
                                                                    @endfor
                                                                    <span>({{count($product->productComments)}})</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Price</td>
                                                            <td>
                                                                <div class="p-price">${{$product->price}}</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Add to Cart</td>
                                                            <td>
                                                                <div class="cart-add">+ add to cart</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Availability</td>
                                                            <td>
                                                                <div class="p-stock">{{$product->qty}}</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Weight</td>
                                                            <td>
                                                                <div class="p-weight">{{$product->weight}}</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Size</td>
                                                            <td>
                                                                <div class="p-size">
                                                                    @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                                        {{$productSize}}
                                                                    @endforeach
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Color</td>
                                                            <td>
                                                                @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                                                    <span class="cs-{{$productColor}}">{{$productColor}}</span>
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-catagory">Sku</td>
                                                            <td>
                                                                <div class="p-code">{{$product->sku}} </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <div class="main-img">
                <img width="2500px" src="assets/images/banner/1.jpg" alt="">
            </div>
            <div class="product-tab">
                <div class="single-block">
                    <div class="tab-item">
                        <div class="tab-content">
                            <div class="custom-review-option">
                                <h3 class="text-center text-danger">Customer Reviews</h3>
                                <h4 class="text-center">({{count($product->productComments)}} Comments)</h4>
                                <div class="comment-option  ">
                                    @foreach($product->productComments as $productComment)
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img height="50px" width="70px" src="assets/images/users/{{ $productComment->user->avatar ?? 'user.png' }}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    @for($i=1; $i<=5; $i++)
                                                        @if($i <= $productComment->rating)
                                                            <i class="lni lni-star-filled" style="color: #ffcd39"></i>
                                                        @else
                                                            <i class="lni lni-star-filled"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <p>{{$productComment->name}}-<span>{{date('M d, Y', strtotime($productComment->created_at))}}</span></p>
                                                <h5>{{$productComment->messages}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="single-block">
                <div class="leave-comment">
                    <h4 class="text-center">Leave A Comment</h4>
                    <br>
                    <form action="" method="post" class="comment-form">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null}}">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea class="form-control" name="messages" cols="12" rows="5" placeholder="Enter your message"></textarea>
                                    <div class="personal-rating">
                                        <h5>Your Rating</h5>
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Related Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($relatedProduct as $product)
                    <div class="col-lg-3 col-sm-6">
                        @include('front.components.product-item')
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

