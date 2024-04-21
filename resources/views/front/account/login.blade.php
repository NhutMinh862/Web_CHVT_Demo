@extends('front.layout.master')
@section('title', 'Login')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">LOGIN ACCOUNT</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="./"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="./account/login">Account</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="register-login-section spad ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>LOGIN</h2>
                        @if(session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{session('notification')}}
                            </div>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="email">Email address *</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">Save Password
                                    <input type="checkbox" id="save-pass" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Forget Your Password</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Sign In</button>
                            <div class="switch-login">
                                <a href="./account/register" class="or-login">Create An Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
