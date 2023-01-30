@extends('layouts.master')
@section('title','Byjob.az - Əsas səhifə')
@section('content')

    <!-- Intro Banner  -->
    <div class="intro-banner" data-background-image="images/home-background-01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf-banner-headline-text-part">
                        <h3>Find Nearby Jobs <span class="typed-words"></span></h3>
                        <span>It is a Long Established Fact That a Reader Will be Distracted by The Readable.</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="utf-intro-banner-search-form-block margin-top-40">
                        <div class="utf-intro-search-field-item">
                            <i class="icon-feather-search"></i>
                            <input id="intro-keywords" type="text" placeholder="Search Jobs Keywords...">
                        </div>
                        <div class="utf-intro-search-field-item">
                            <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Location">
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                                <option>Brazil</option>
                                <option>Burundi</option>
                                <option>Bulgaria</option>
                                <option>Germany</option>
                                <option>Grenada</option>
                                <option>Guatemala</option>
                                <option>Iceland</option>
                            </select>
                        </div>
                        <div class="utf-intro-search-field-item">
                            <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="All Categories">
                                <option>Customer Service</option>
                                <option>Data Analytics</option>
                                <option>Web Designing</option>
                                <option>Software Developing</option>
                                <option>Networking</option>
                                <option>Sales & Marketing</option>
                            </select>
                        </div>
                        <div class="utf-intro-search-button">
                            <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-leftside.html'"><i class="icon-material-outline-search"></i> Search Jobs</button>
                        </div>
                    </div>
                    <p class="utf-trending-silver-item"><span class="utf-trending-black-item">Trending Jobs Keywords:</span> <a href="#">Web Designer</a>  <a href="#">Web Developer</a>  <a href="#">Graphic Designer</a>  <a href="#">PHP Developer</a>  <a href="#">IOS Developer</a>  <a href="#">Android Developer</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li><i class="icon-material-outline-business-center"></i> <sub class="counter_item"><strong class="counter">18,955</strong> <span>Live Jobs Posted</span></sub> </li>
                        <li><i class="icon-material-outline-assignment"></i> <sub class="counter_item"><strong class="counter">11,088</strong> <span>Jobs Candidate</span></sub> </li>
                        <li><i class="icon-material-outline-library-books"></i> <sub class="counter_item"><strong class="counter">10,758</strong> <span>Companies Jobs</span></sub> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Jobs Category Boxes -->
    <div class="section margin-top-60 margin-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                        <span>Jobs Categories</span>
                        <h3>Top Trending Categories</h3>
                        <div class="utf-headline-display-inner-item">Jobs Categories</div>
                        <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                    </div>
                    <div class="utf-categories-container-block">
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">10 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-bullhorn"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Design, Art & Multimedia</h3>
                            </div>
                            <div class="utf-category-box-counter-item">8,188 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">15 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-graduation-cap"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Education & Training</h3>
                            </div>
                            <div class="utf-category-box-counter-item">5,244 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">12 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-line-chart"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Accounting / Finance</h3>
                            </div>
                            <div class="utf-category-box-counter-item">6,258 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">20 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-users"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Human Resource</h3>
                            </div>
                            <div class="utf-category-box-counter-item">1,224 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">25 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-feather-phone-call"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Telecommunications</h3>
                            </div>
                            <div class="utf-category-box-counter-item">3,258 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">18 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-cutlery"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Restaurant / Food Service</h3>
                            </div>
                            <div class="utf-category-box-counter-item">5,138 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">38 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-building"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Construction / Facilities</h3>
                            </div>
                            <div class="utf-category-box-counter-item">2,580 Jobs</div>
                        </a>
                        <a href="jobs-list-layout-leftside.html" class="utf-category-box">
                            <div class="utf-opening-position-counter-item">23 Openings</div>
                            <div class="utf-category-box-icon-item"> <i class="icon-line-awesome-user-md"></i> </div>
                            <div class="utf-category-box-content">
                                <h3>Health</h3>
                            </div>
                            <div class="utf-category-box-counter-item">2,360 Jobs</div>
                        </a>
                    </div>
                    <div class="utf-centered-button margin-top-10">
                        <a href="jobs-categorie-one.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-20">View All Categories <i class="icon-feather-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs Category Boxes / End -->

    <!-- Latest Jobs -->
    <div class="section gray padding-top-60 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                        <span>Latest Jobs Post</span>
                        <h3>Jobs You May Be Interested</h3>
                        <div class="utf-headline-display-inner-item">Latest Jobs Post</div>
                        <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                    </div>
                    <div class="utf-listings-container-part compact-list-layout margin-top-35">
                        <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
                            <div class="utf-job-listing-details">
                                <div class="utf-job-listing-company-logo"> <img src="images/company_logo_1.png" alt=""> </div>
                                <div class="utf-job-listing-description">
                                    <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Full Time</span>
                                    <h3 class="utf-job-listing-title">Web Designer, Graphic Designer, UI/UX Designer & Art</h3>
                                    <div class="utf-job-listing-footer">
                                        <ul>
                                            <li><i class="icon-feather-briefcase"></i> Graphic Designer</li>
                                            <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                            <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                                            <li><i class="icon-material-outline-access-time"></i> 15 Minute Ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
                            </div>
                        </a>
                        <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
                            <div class="utf-job-listing-details">
                                <div class="utf-job-listing-company-logo"> <img src="images/company_logo_2.png" alt=""> </div>
                                <div class="utf-job-listing-description">
                                    <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Full Time</span>
                                    <h3 class="utf-job-listing-title">PHP Developer, Team of PHP & IT Co <span class="utf-verified-badge" title="Verified" data-tippy-placement="top"></span></h3>
                                    <div class="utf-job-listing-footer">
                                        <ul>
                                            <li><i class="icon-feather-briefcase"></i> UI/UX Designer</li>
                                            <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                            <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                                            <li><i class="icon-material-outline-access-time"></i> 25 Minute Ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
                            </div>
                        </a>
                        <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
                            <div class="utf-job-listing-details">
                                <div class="utf-job-listing-company-logo"> <img src="images/company_logo_3.png" alt=""> </div>
                                <div class="utf-job-listing-description">
                                    <span class="dashboard-status-button utf-job-status-item yellow"><i class="icon-material-outline-business-center"></i> Part Time</span>
                                    <h3 class="utf-job-listing-title">Website Developer & Software Developer</h3>
                                    <div class="utf-job-listing-footer">
                                        <ul>
                                            <li><i class="icon-feather-briefcase"></i> Software Developer</li>
                                            <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                            <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                                            <li><i class="icon-material-outline-access-time"></i> 38 Minute Ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
                            </div>
                        </a>
                        <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
                            <div class="utf-job-listing-details">
                                <div class="utf-job-listing-company-logo"> <img src="images/company_logo_4.png" alt=""> </div>
                                <div class="utf-job-listing-description">
                                    <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Full Time</span>
                                    <h3 class="utf-job-listing-title">Application Developer & Web Designer <span class="utf-verified-badge" title="Verified" data-tippy-placement="top"></span></h3>
                                    <div class="utf-job-listing-footer">
                                        <ul>
                                            <li><i class="icon-feather-briefcase"></i> Web Developer</li>
                                            <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                            <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                                            <li><i class="icon-material-outline-access-time"></i> 55 Minute Ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
                            </div>
                        </a>
                        <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
                            <div class="utf-job-listing-details">
                                <div class="utf-job-listing-company-logo"> <img src="images/company_logo_5.png" alt=""> </div>
                                <div class="utf-job-listing-description">
                                    <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Full Time</span>
                                    <h3 class="utf-job-listing-title">IT Department Manager & Blogger-Entrepenour</h3>
                                    <div class="utf-job-listing-footer">
                                        <ul>
                                            <li><i class="icon-feather-briefcase"></i> Android Developer</li>
                                            <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                            <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                                            <li><i class="icon-material-outline-access-time"></i> 1 Days Ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
                            </div>
                        </a>
                        <a href="single-job-page.html" class="utf-job-listing utf-apply-button-item">
                            <div class="utf-job-listing-details">
                                <div class="utf-job-listing-company-logo"> <img src="images/company_logo_6.png" alt=""> </div>
                                <div class="utf-job-listing-description">
                                    <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Full Time</span>
                                    <h3 class="utf-job-listing-title">Frontend/Backendd Developer</h3>
                                    <div class="utf-job-listing-footer">
                                        <ul>
                                            <li><i class="icon-feather-briefcase"></i> IOS Developer</li>
                                            <li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
                                            <li><i class="icon-material-outline-location-on"></i> Drive Potsdam, NY 676</li>
                                            <li><i class="icon-material-outline-access-time"></i> 1 Days Ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="utf-centered-button margin-top-10">
                        <a href="jobs-list-layout-leftside.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-20">Browse All Jobs <i class="icon-feather-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Jobs / End -->


{{--    <!-- Testimonials -->--}}
{{--    <div class="section gray padding-top-65 padding-bottom-65">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="utf-section-headline-item centered margin-top-0 margin-bottom-30">--}}
{{--                        <span>Clients Say About Us</span>--}}
{{--                        <h3>Candidates Testimonials</h3>--}}
{{--                        <div class="utf-headline-display-inner-item">Clients Say About Us</div>--}}
{{--                        <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Categories Carousel -->--}}
{{--        <div class="utf-carousel-container-block">--}}
{{--            <div class="utf-testimonial-carousel-block testimonials">--}}
{{--                <div class="utf-carousel-review-item">--}}
{{--                    <div class="utf-testimonial-box">--}}
{{--                        <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_1.jpg" alt=""> </div>--}}
{{--                        <div class="utf-testimonial-author-utf-detail-item">--}}
{{--                            <h4>John Williams</h4>--}}
{{--                            <span>Graphics Designer</span>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="utf-carousel-review-item">--}}
{{--                    <div class="utf-testimonial-box">--}}
{{--                        <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_2.jpg" alt=""> </div>--}}
{{--                        <div class="utf-testimonial-author-utf-detail-item">--}}
{{--                            <h4>John Williams</h4>--}}
{{--                            <span>IOS Developer</span>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="utf-carousel-review-item">--}}
{{--                    <div class="utf-testimonial-box">--}}
{{--                        <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_3.jpg" alt=""> </div>--}}
{{--                        <div class="utf-testimonial-author-utf-detail-item">--}}
{{--                            <h4>John Williams</h4>--}}
{{--                            <span>Android Developer</span>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="utf-carousel-review-item">--}}
{{--                    <div class="utf-testimonial-box">--}}
{{--                        <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_1.jpg" alt=""> </div>--}}
{{--                        <div class="utf-testimonial-author-utf-detail-item">--}}
{{--                            <h4>John Williams</h4>--}}
{{--                            <span>Web Developer</span>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="utf-carousel-review-item">--}}
{{--                    <div class="utf-testimonial-box">--}}
{{--                        <div class="utf-testimonial-avatar-photo"> <img src="images/user_small_2.jpg" alt=""> </div>--}}
{{--                        <div class="utf-testimonial-author-utf-detail-item">--}}
{{--                            <h4>John Williams</h4>--}}
{{--                            <span>UI/UX Designer</span>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Testimonials / End -->--}}

    <!-- Start Section Callout -->
    <div class="jbm-section-callout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-xs-12 callout-bg-1 callout-section-left pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-right">
                        <div class="jbm-section-title margin-top-80 margin-bottom-80">
                            <h2>Find Your Browse Companies</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="browse-companies.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Browse Companies <i class="icon-feather-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-xs-12 callout-bg-2 callout-section-right pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>Find Your Browse Jobs</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="jobs-list-layout-leftside.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Browse Jobs <i class="icon-feather-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Callout -->

    <!-- Start Need Any Help -->
    <section class="section padding-top-65 padding-bottom-75">
        <div class="container">
            <div class="col-xl-12">
                <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                    <span>Business Help Service</span>
                    <h3>Need Any Help?</h3>
                    <div class="utf-headline-display-inner-item">Business Help Service</div>
                    <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="row need-help-area justify-content-center">
                <div class="col-xl-4">
                    <div class="info-box-1">
                        <div class="utf-icon-box-circle">
                            <div class="utf-icon-box-circle-inner"> <i class="icon-brand-rocketchat"></i></div>
                        </div>
                        <h4>Chat to Us Online</h4>
                        <p>Chat to us online if you have any question.</p>
                        <a href="javascript:void(0);" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Click Here to Chat <i class="icon-feather-chevrons-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="info-box-1">
                        <div class="utf-icon-box-circle">
                            <div class="utf-icon-box-circle-inner"> <i class="icon-feather-phone"></i></div>
                        </div>
                        <h4>Our Support Agent</h4>
                        <p>Our support agent will work with you to meet your lending needs.</p>
                        <a href="contact.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Contact Us <i class="icon-feather-chevrons-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="info-box-1">
                        <div class="utf-icon-box-circle">
                            <div class="utf-icon-box-circle-inner"> <i class="icon-brand-bimobject"></i></div>
                        </div>
                        <h4>Read Latest Blog Post</h4>
                        <p>Visit our Blog page and know more about news and career tips</p>
                        <a href="blog-right-sidebar.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Read Blog Post <i class="icon-feather-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Need Any Help -->

    <!-- Counters -->
    <div class="section gradient_item_area padding-top-70 padding-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
                        <span>Success Business Award</span>
                        <h3>Our Success & Award</h3>
                        <div class="utf-headline-display-inner-item">Success Business Award</div>
                        <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                    </div>
                </div>
                <div class="col-xl-12 counter_inner_block">
                    <div class="utf-counters-container-aera">
                        <div class="col-xl-3">
                            <div class="utf-single-counter"> <i class="icon-feather-briefcase"></i>
                                <div class="utf-counter-inner-item">
                                    <h3><span class="counter">12,376</span></h3>
                                    <span class="utf-counter-title">Live Jobs</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="utf-single-counter"> <i class="icon-feather-users"></i>
                                <div class="utf-counter-inner-item">
                                    <h3><span class="counter">89,562</span></h3>
                                    <span class="utf-counter-title">Jobs Candidate</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="utf-single-counter"> <i class="icon-material-outline-textsms"></i>
                                <div class="utf-counter-inner-item">
                                    <h3><span class="counter">28,166</span></h3>
                                    <span class="utf-counter-title">Active Resume</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="utf-single-counter"> <i class="icon-material-outline-location-city"></i>
                                <div class="utf-counter-inner-item">
                                    <h3><span class="counter">8,966</span></h3>
                                    <span class="utf-counter-title">Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters / End -->
@endsection
