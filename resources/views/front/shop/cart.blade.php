@extends('front.layout.master')
@section('title', 'Cart')
@section('body')
    <!-- Start coding here -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">CART</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./cart">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                @if(Cart::count()>0)
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead style="background: #b4cdcd">
                                <tr>
                                    <th>IMAGES</th>
                                    <th class="p-name">PRODUCTS NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th><i onclick="confirm('Are you sure to delete all carts?') === true ? destroyCart() : '' "
                                           style="cursor: pointer" class="lni lni-close"></i> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                    <tr data-rowid="{{$cart->rowId}}">
                                        <td class="cart-pic first-row"><img height="70px" src="assets/images/{{$cart->options->images[0]->path}}" alt=""></td>
                                        <td class="cart-title first-row" style="text-align: center"><h5>{{$cart->name}}</h5></td>
                                        <td class="p-price first-row">{{number_format($cart->price, 2)}}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">{{number_format($cart->price, 2)}}</td>
                                        <td class="close-tde first-row">
                                            <i onclick="removeCart('{{$cart->rowId}}')" class="lni lni-close"></i> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cart-buttons">
                                    <a href="" class="primary-btn continue-shop">Continue Shopping</a>
                                    <a href="./cart" class="primary-btn up-cart">Update Cart</a>
                                </div>
                                <div class="discount-coupon">
                                    <h6>Discount codes</h6>
                                    <form action="" class="coupon-form">
                                        <tr>
                                            <td><input type="text" placeholder="Add Discount Codes"></td>
                                            <td>
                                                <div class="coupon-btn">
                                                    <button>Enter Codes</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="subtotal">Subtotal <span>{{$subtotal}}</span></li>
                                        <li class="cart-total">Total <span>{{$total}}</span></li>
                                    </ul>
                                    <a href="./checkout" class="proceed-btn"> Proceed To Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <h3 class="text-primary">Your cart is empty !! Please add your products to the cart !!</h3>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
<!-- Js Plugins -->
