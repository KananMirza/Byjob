@extends('layouts.master')
@section('title','Byjob')
@section('content')
    <!-- Titlebar -->
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Log In</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index-1.html">Home</a></li>
                            <li>Log In</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="utf-login-register-page-aera margin-bottom-50">
                    <div class="utf-welcome-text-item">
                        <h3>Welcome Back Sign in to Continue</h3>
                        <span>Don't Have an Account? <a href="{{route('register')}}">Sign Up!</a></span>
                    </div>
                    <form method="post" id="login-form">
                        <div class="utf-no-border">
                            <input type="text" class="utf-with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
                        </div>
                        <div class="utf-no-border">
                            <input type="password" class="utf-with-border" name="password" id="password" placeholder="Password" required/>
                        </div>
                        <div class="checkbox margin-top-10">
                            <input type="checkbox" id="two-step">
                            <label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
                        </div>
                        <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
                    </form>
                    <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-feather-chevron-right"></i></button>
                    <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
                    <div class="utf-social-login-buttons-block">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google+</button>
                        <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
