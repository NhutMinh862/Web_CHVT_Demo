@extends('front.layout.master')
@section('title', 'Checkout')
@section('body')
    <section class="checkout-section">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12">
                     <h4>
                         {{$notification}}
                     </h4>
                     <a href="./" class="primary-btn mt-5">Continue Shopping</a>
                 </div>
            </div>
        </div>
    </section>
@endsection

