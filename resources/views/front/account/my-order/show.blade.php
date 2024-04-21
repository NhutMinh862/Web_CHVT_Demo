@extends('front.layout.master')
@section('title', 'My Order Details')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">MY ORDER DETAILS</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./shop"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./account/login">My Orders</a></li>
                        <li>My Order Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="checkout-section">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="#" class="content-btn">Order ID: <b># {{$order->id}}</b></a>
                            </div>
                            <h4>Billing Details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fir">First Name <span>*</span></label>
                                    <input disabled type="text" id="fir" name="first_name" value="{{$order->first_name}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Last Name <span>*</span></label>
                                    <input disabled type="text" id="last" name="last_name" {{$order->last_name}}>
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun-name">Company Name <span>*</span></label>
                                    <input disabled type="text" id="cun-name" name="company_name" value="{{$order->company_name}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun">Country <span>*</span></label>
                                    <input disabled type="text" id="cun" name="country" value="{{$order->country}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Street Address <span>*</span></label>
                                    <input disabled type="text" id="street" name="street_address" class="street-first" value="{{$order->street_address}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Postcode / ZIP (optional)</label>
                                    <input disabled type="text" id="zip" name="postcode_zip" value="{{$order->postcode_zip}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Town / City <span>*</span></label>
                                    <input disabled type="text" id="town" name="town_city" value="{{$order->town_city}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Email Address <span>*</span></label>
                                    <input disabled type="text" id="email" name="email" value="{{$order->email}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Phone <span>*</span></label>
                                    <input disabled type="text" id="phone" name="phone" value="{{$order->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="#" class="content-btn">
                                    Status: <b>{{ \App\Utilities\Constant::$oder_status[$order->status] }}</b>
                                </a>
                            </div>
                            <div class="place-order">
                                    <h4>Your Order</h4>
                                    <div class="order-total">
                                        <ul class="order-table">
                                            <li>Products <span>Totals</span></li>
                                            @foreach($order->orderDetails as $orderDetails)
                                                <li class="fw-normal">
                                                    {{$orderDetails->product->name}} x {{$orderDetails->qty}}
                                                    <span>${{ $orderDetails->total}}</span>
                                                </li>
                                            @endforeach
                                            <li class="total-price">Total
                                                <span>$ {{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}</span>
                                            </li>
                                        </ul>

                                        <div class="payment-check">
                                            <div class="pc-item">
                                                <label for="pc-check">
                                                    Pay later (COD)
                                                    <input disabled type="radio" name="payment_type" value="pay_later" id="pc-check"
                                                        {{$order->payment_type == 'pay_later' ? 'checked' : ''}}>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="pc-item">
                                                <label for="pc-paypal">
                                                    Online payment
                                                    <input disabled type="radio" name="payment_type" value="online_payment" id="pc-paypal"
                                                        {{$order->payment_type == 'online_payment' ? 'checked' : ''}}>>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
@endsection
