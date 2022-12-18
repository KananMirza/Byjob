@extends('layouts.master')
@section('title','Byjob')
@section('content')
    <!-- Titlebar -->
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Register</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Register</li>
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
                        <h3>Create Your New Account!</h3>
                        <span>Don't Have an Account? <a href="{{route('login')}}">Log In!</a></span>
                    </div>
                    <div class="utf-account-type">
                        <div>
                            <input type="radio" name="utf-account-type-radio" id="freelancer-radio" class="utf-account-type-radio" checked/>
                            <label for="freelancer-radio" title="Employer" data-tippy-placement="top" class="utf-ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
                        </div>
                        <div>
                            <input type="radio" name="utf-account-type-radio" id="employer-radio" class="utf-account-type-radio"/>
                            <label for="employer-radio" title="Candidate" data-tippy-placement="top" class="utf-ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Candidate</label>
                        </div>
                    </div>

                    <form method="post" id="utf-register-account-form">
                        <div class="utf-no-border">
                            <input type="text" class="utf-with-border" name="name-register" id="name-register" placeholder="User Name" required/>
                        </div>
                        <div class="utf-no-border">
                            <input type="text" class="utf-with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
                        </div>
                        <div class="utf-no-border margin-bottom-18">
                            <select class="selectpicker utf-with-border" data-size="5" title="Select Jobs">
                                <option>Web Designer</option>
                                <option>Web Developer</option>
                                <option>Graphic Designer</option>
                                <option>Android Developer</option>
                                <option>IOS Developer</option>
                                <option>UI/UX Designer</option>
                                <option>Graphics Designer</option>
                            </select>
                        </div>
                        <div class="utf-no-border">
                            <input type="password" class="utf-with-border" name="password-register" id="password-register" placeholder="Password" required/>
                        </div>
                        <div class="utf-no-border">
                            <input type="password" class="utf-with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
                        </div>
                        <div class="checkbox margin-top-10">
                            <input type="checkbox" id="two-step0">
                            <label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="#">Terms &amp; Conditions</a></label>
                        </div>
                    </form>
                    <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit">Create An Account <i class="icon-feather-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>

@endsection
