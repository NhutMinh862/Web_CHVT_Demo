@extends('front.layout.master')
@section('title', 'Home')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">CONTACT</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="trending-product">
        <div class="container" style=" background-color: #FFE4E1">
            &nbsp;
            <div class="row">
            <div class="col-lg-8 col-12 custom-padding-right">
                <h4 class="text-center">Store Contact Address</h4>
                &nbsp;
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d583.4124020726208!2d105.44035580767869!3d10.364643211917095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a736ae11982f1%3A0xd8d10c5ec924e6c3!2zVkkgVMONTkggVOG6pE4gUEjDgVQ!5e0!3m2!1svi!2s!4v1713507362161!5m2!1svi!2s"
                        width="680" height="470" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="form" style="padding-right: 20px">
                        <h3 class="text-center" style="font-weight: bold">Do you need support?</h3>
                        <p>We want to hear your opinions. Please send all requests and questions using the information below, we will contact you as soon as possible.</p>
                        <form class="contact-form">
                            <div class="group-input">
                                <label for="name">FULL NAME *</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="group-input">
                                <label for="email">EMAIL *</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="group-input">
                                <label for="phone">PHONE *</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone">
                            </div>
                            <div class="group-input">
                                <label for="content">CONTENT *</label>
                                <textarea class="form-control" name="content" cols="12" rows="5"></textarea>
                            </div>
                            <div class="btn">
                                <input style="background-color: #555555; color: #FFFFFF;font-size: 20px;" type="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
