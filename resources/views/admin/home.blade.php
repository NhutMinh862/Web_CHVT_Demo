@extends('admin.layout.master')
@section('title', 'Home')
@section('body')
    <style>
        .colorful-box {
            width: auto;
            height: auto;
            background-color: #FFFFFF; /* Màu đỏ */
            text-align: center;
            line-height: 100px; /* Căn giữa theo chiều dọc */
            color: #1a1e21; /* Màu trắng cho văn bản */
            border-radius: 10px;
            margin: 5px;
            font-weight: bold;
        }
        .admin-latest-blog {
            background-color: #FFFFFF; /* Màu đỏ */
            color: #1a1e21; /* Màu trắng cho văn bản */
            border-radius: 10px;
            margin: 5px;
            height: 250px;
        }
        .admin-latest-blog img{
            padding: 25px 15px 5px 15px;
            height: 200px;
            width: auto;
        }
        .admin-latest-blog h4{
            margin-top: 10px;
            text-align: center;
        }
        .title-technology {
            width: auto;
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #FAEBD7;
            text-align: center;
            font-weight: bold;
            color: #528B8B;
            margin-top: 30px;
        }
        .title-technology h4{
            font-weight: bold;
        }
        .colorful-all {
            background-color: #FAEBD7;;
        }
        .page-title-actions{
            background-color: #0a53be;
            color: #FFFFFF;
            padding: 3px 10px 3px 3px;
            margin: 3px;
            font-size: 20px;
        }
    </style>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Home
                        <div class="page-title-subheading">
                            Welcome To The Admin Page
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                        <span class="btn-icon-wrapper pr-2 opacity-7"></span>
                    Admin Page
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 custom-padding-right">
                   <div class="colorful-box">
                       <h3>Tổng Sản Phẩm</h3>
                       <h2>{{Count($products)}} </h2>
                       <h5> <a href="./admin/product"> Detail</a></h5>
                   </div>
                </div>
                <div class="col-lg-4 col-12 custom-padding-center">
                    <div class="colorful-box">
                        <h3>Tổng Đơn Hàng</h3>
                        <h2>{{Count($orders)}}</h2>
                        <h5> <a href="./admin/order"> Detail</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-12 custom-padding-left">
                    <div class="colorful-box">
                        <h3>Tổng Bài Viết</h3>
                        <h2>{{Count($blogs)}}</h2>
                        <h5><a href="./admin/blog"> Detail</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="title-technology">
                <h4>Some Of The Latest Information Technology Websites</h4>
            </div>
            <div class="colorful-all">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                            <div class="admin-latest-blog">
                                <img src="./dashboard/assets/images/techno/Chrunchbase.jpg" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                    </div>
                                    <a href="https://www.crunchbase.com/"><h4>TechCrunch</h4></a>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-6">
                            <div class="admin-latest-blog">
                                <img src="./dashboard/assets/images/techno/mashable.jpg" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                    </div>
                                    <a href="https://sea.mashable.com/"><h4>Mashable</h4></a>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-6">
                            <div class="admin-latest-blog">
                                <img src="./dashboard/assets/images/techno/cnet1.jpg" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                    </div>
                                    <a href="https://www.cnet.com/"><h4>CNET</h4></a>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="admin-latest-blog">
                            <img src="./dashboard/assets/images/techno/techz.jpg" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                </div>
                                <a href="https://www.techz.vn/C/cong-nghe-130"><h4>TechZ</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="admin-latest-blog">
                            <img src="./dashboard/assets/images/techno/genk.jpg" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                </div>
                                <a href="https://genk.vn/"><h4>GenK</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="admin-latest-blog">
                            <img src="./dashboard/assets/images/techno/insight.jpg" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                </div>
                                <a href="https://insightsoftware.com/logi-analytics/"><h4>InsightSoftware</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
