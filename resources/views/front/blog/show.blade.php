@extends('front.layout.master')

@section('title', 'Blog')

@section('body')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Single Blog</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./shop">Blog</a></li>
                        <li>Single Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="item-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div class="top-area">
                            <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <h2 class="title" style="text-transform: uppercase; font-weight: bold">{{ $blog->title }}</h2>
                                            <span> </span>
                                            <p style="font-size: 24px"><i class="lni lni-tag"></i> Category:<a href="javascript:void(0)">{{ $blog->category }}</a></p>
                                            <h4 class="title">{{ $blog->subtitle }}</h4>
                                        </div>
                                        &nbsp;
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="product-images">
                                                <main id="gallery">
                                                    <div class="main-img">
                                                        <img src="assets/images/blogs_IT/{{ $blog->image ?? ''}}" id="current" alt="#">
                                                    </div>
                                                </main>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <h4 class="title">{!! $blog->content  !!} </h4>
                                        </div>
                                        &nbsp;
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="pd-share">
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
            <br>
            <div class="product-tab">
                    <div class="single-block">
                        <div class="tab-item">
                            <div class="tab-content">
                                <div class="custom-review-option">
                                    <h3 class="text-center text-danger">Customer Reviews</h3>
                                    <h4 class="text-center">({{count($blog->blogComment)}} Comments)</h4>
                                    <div class="comment-option  ">
                                        @foreach($blog->blogComment as $blogComment)
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img height="50px" width="70px" src="assets/images/users/{{ $blogComment->user->avatar ?? 'user.png' }}" alt="">
                                                </div>
                                                    <p>{{$blogComment->name}}-<span>{{date('M d, Y', strtotime($blogComment->created_at))}}</span></p>
                                                    <h5>{{$blogComment->messages}}</h5>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <br>
            <div class="product-tab">
                <div class="single-block">
                    <div class="tab-item">
                        <div class="tab-content">
                            <div class="leave-comment">
                    <h4 class="text-center">Leave A Comment</h4>
                    <br>
                    <form action="" method="post" class="comment-form">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
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
                                </div>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

