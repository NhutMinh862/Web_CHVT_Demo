@extends('front.layout.master')
@section('title', 'Login')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">REGISTER ACCOUNT</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./shop"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./account/login">Account</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="register-login-section spad ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        @if(session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{session('notification')}}
                            </div>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="group-input">
                                <label for="email">Email address *</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="password" id="con-pass" name="password_confirmation">
                            </div>
                            <button type="submit" class="site-btn login-btn">REGISTER</button>
                            <div class="switch-login">
                                <a href="./account/login" class="or-login">LOGIN</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
