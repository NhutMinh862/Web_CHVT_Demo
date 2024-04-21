@extends('front.layout.master')
@section('title', 'My Order')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">MY ORDER</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./shop"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./account/login">My Orders</a></li>
                        <li>My Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead style="background: #b4cdcd">
                                    <tr>
                                        <th>IMAGES</th>
                                        <th>ID</th>
                                        <th>PRODUCTS</th>
                                        <th>TOTALS</th>
                                        <th>DETAILS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="cart-pic first-row"><img style="height: 100px"
                                            src="assets/images/{{$order->orderDetails[0]->product->productImages[0]->path}}" alt="">
                                        </td>
                                        <td class="first-row"># {{$order->id}}</td>
                                        <td class="cart-title first-row" style="text-align: center">
                                            <h5>{{$order->orderDetails[0]->product->name}}
                                                @if(count($order->orderDetails) > 1)
                                                (and {{count($order->orderDetails) }} other products)
                                                @endif
                                            </h5>
                                        </td>
                                        <td class="total-price first-row">
                                            $ {{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}
                                        </td>
                                        <td class="first-row">
                                            <a class="btn" style="background: #b4cdcd" href="./my-order/{{$order->id}}">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
