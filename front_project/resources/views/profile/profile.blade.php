@extends('layouts.master')
@section('title','Byjob')
@section('content')
    <!-- Dashboard Container -->
    <div class="utf-dashboard-container-aera">
        <!-- Dashboard Sidebar -->
        <div class="utf-dashboard-sidebar-item">
            <div class="utf-dashboard-sidebar-item-inner" data-simplebar>
                <div class="utf-dashboard-nav-container">
                    <!-- Responsive Navigation Trigger -->
                    <a href="#" class="utf-dashboard-responsive-trigger-item"> <span class="hamburger utf-hamburger-collapse-item" > <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </span> <span class="trigger-title">Dashboard Navigation Menu</span> </a>
                    <!-- Navigation -->
                    <div class="utf-dashboard-nav">
                        <div class="utf-dashboard-nav-inner">
                            <div class="dashboard-profile-box">
				  <span class="avatar-img">
					<img alt="" src="images/user-avatar-placeholder.png" class="photo">
				  </span>
                                <div class="user-profile-text">
                                    <span class="fullname">John Williams</span>
                                    <span class="user-role">Software Engineer</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ul>
                                <li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li><a href="dashboard-jobs-post.html"><i class="icon-line-awesome-user-secret"></i> Manage Jobs Post</a></li>
                                <li><a href="dashboard-manage-jobs.html"><i class="icon-material-outline-group"></i> Manage Jobs <span class="nav-tag">5</span></a></li>
                                <li><a href="dashboard-manage-resume.html"><i class="icon-material-outline-supervisor-account"></i> Manage Resume</a></li>
                                <li><a href="dashboard-bookmarks.html"><i class="icon-feather-heart"></i> Bookmarks Jobs</a></li>
                                <li><a href="#"><i class="icon-line-awesome-file-text"></i> Freelancer Tasks</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="dashboard-freelancer-manage-tasks-list.html"><i class="icon-feather-chevron-right"></i> Freelancer Manage Tasks</a></li>
                                        <li><a href="dashboard-manage-bidders-list.html"><i class="icon-feather-chevron-right"></i> Freelancer Manage Bidders</a></li>
                                        <li><a href="dashboard-freelancer-active-bids.html"><i class="icon-feather-chevron-right"></i> Freelancer Active Bids</a></li>
                                        <li><a href="dashboard-freelancer-add-post-bids.html"><i class="icon-feather-chevron-right"></i> Freelancer Post Bids</a></li>
                                    </ul>
                                </li>
                                <li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
                                <li><a href="dashboard-my-profile.html"><i class="icon-feather-user"></i> My Profile</a></li>
                                <li><a href="{{route('logout')}}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dashboard Sidebar / End -->

        <!-- Dashboard Content -->
        <div class="utf-dashboard-content-container-aera" data-simplebar>
            <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
                <div class="row">
                    <div class="col-xl-12">
                        <h3>Dashboard</h3>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index-1.html">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="utf-dashboard-content-inner-aera">
                <div class="notification success closeable">
                    @include('layouts.messages')
                </div>
                <div class="utf-funfacts-container-aera">
                    <div class="fun-fact" data-fun-fact-color="#2a41e8">
                        <div class="fun-fact-icon"><i class="icon-feather-home"></i></div>
                        <div class="fun-fact-text">
                            <h4>1502</h4>
                            <span>{{Auth::user()->name}}</span>
                        </div>
                    </div>
                    <div class="fun-fact" data-fun-fact-color="#36bd78">
                        <div class="fun-fact-icon"><i class="icon-feather-briefcase"></i></div>
                        <div class="fun-fact-text">
                            <h4>152</h4>
                            <span>Applied Jobs</span>
                        </div>
                    </div>
                    <div class="fun-fact" data-fun-fact-color="#efa80f">
                        <div class="fun-fact-icon"><i class="icon-feather-heart"></i></div>
                        <div class="fun-fact-text">
                            <h4>549</h4>
                            <span>Favourite Jobs</span>
                        </div>
                    </div>
                    <div class="fun-fact" data-fun-fact-color="#0fc5bf">
                        <div class="fun-fact-icon"><i class="icon-brand-telegram-plane"></i></div>
                        <div class="fun-fact-text">
                            <h4>120</h4>
                            <span>Subscribe Plan</span>
                        </div>
                    </div>
                    <div class="fun-fact" data-fun-fact-color="#f02727">
                        <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                        <div class="fun-fact-text">
                            <h4>2250</h4>
                            <span>Month Views</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="dashboard-box main-box-in-row">
                            <div class="headline">
                                <h3>User Statistics</h3>
                                <div class="sort-by">
                                    <select class="selectpicker hide-tick">
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>Last 6 Months</option>
                                        <option>This Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content">
                                <div class="chart">
                                    <canvas id="canvas" width="80" height="38"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="dashboard-box main-box-in-row">
                            <div class="headline">
                                <h3>User Notes Activities</h3>
                            </div>
                            <div class="content">
                                <div class="utf-header-notifications-content">
                                    <div class="utf-header-notifications-scroll" data-simplebar>
                                        <ul class="utf-dashboard-box-list">
                                            <li>
                                                <span class="notification-icon"><i class="icon-material-outline-group"></i></span> <span class="notification-text"><strong>Lorem Ipsum</strong> is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text.</span>
                                                <div class="utf-buttons-to-right">
                                                    <a href="#" class="button green ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                                    <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="notification-icon"><i class="icon-feather-briefcase"></i></span> <span class="notification-text"><strong>Lorem Ipsum</strong> is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text.</span>
                                                <div class="utf-buttons-to-right">
                                                    <a href="#" class="button green ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                                    <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="notification-icon"><i class="icon-feather-briefcase"></i></span> <span class="notification-text"><strong>Lorem Ipsum</strong> is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text.</span>
                                                <div class="utf-buttons-to-right">
                                                    <a href="#" class="button green ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                                    <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="notification-icon"><i class="icon-material-outline-group"></i></span> <span class="notification-text"><strong>Lorem Ipsum</strong> is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text.</span>
                                                <div class="utf-buttons-to-right">
                                                    <a href="#" class="button green ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                                    <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#small-dialog" class="popup-with-zoom-anim utf-header-notifications-button ripple-effect utf-button-sliding-icon">User Add Notes <i class="icon-feather-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="dashboard-box">
                            <div class="headline">
                                <h3>Recent Jobs Activities</h3>
                            </div>
                            <div class="content">
                                <ul class="utf-dashboard-box-list">
                                    <li>
                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span> <span class="notification-text"> <strong>John Williams</strong> <a href="#">iOS Developers</a> Someone Downloaded Your Resume.</span>
                                        <div class="utf-buttons-to-right">
                                            <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="notification-icon"><i class="icon-feather-briefcase"></i></span> <span class="notification-text"> <strong>John Williams</strong> <a href="#">iOS Developers</a> Someone Downloaded Your Resume.</span>
                                        <div class="utf-buttons-to-right">
                                            <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="notification-icon"><i class="icon-feather-briefcase"></i></span> <span class="notification-text"> <strong>John Williams</strong> <a href="#">Software Engineer</a> Someone Downloaded Your Resume.</span>
                                        <div class="utf-buttons-to-right">
                                            <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span> <span class="notification-text"> <strong>John Williams</strong> <a href="#">Logo Designer</a> Someone Downloaded Your Resume.</span>
                                        <div class="utf-buttons-to-right">
                                            <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="notification-icon"><i class="icon-material-outline-group"></i></span> <span class="notification-text"> <strong>John Williams</strong> <a href="#">Logo Designer</a> Someone Downloaded Your Resume.</span>
                                        <div class="utf-buttons-to-right">
                                            <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="notification-icon"><i class="icon-feather-briefcase"></i></span> <span class="notification-text"> <strong>John Williams</strong> <a href="#">Web Designer</a> Someone Downloaded Your Resume.</span>
                                        <div class="utf-buttons-to-right">
                                            <a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="utf-pagination-container-aera margin-top-10 margin-bottom-50">
                            <nav class="pagination">
                                <ul>
                                    <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page ripple-effect">1</a></li>
                                    <li><a href="#" class="ripple-effect">2</a></li>
                                    <li><a href="#" class="ripple-effect">3</a></li>
                                    <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="dashboard-box">
                            <div class="headline">
                                <h3>All Order Invoices</h3>
                                <div class="sort-by">
                                    <select class="selectpicker hide-tick">
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>Last 6 Months</option>
                                        <option>This Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="utf-dashboard-box-list">
                                    <li>
                                        <div class="utf-invoice-list-item">
                                            <div class="utf-invoice-user-city">Afghanistan <img class="flag" src="images/flags/af.svg" alt="" data-tippy-placement="top" title="Afghanistan" data-tippy=""></div>
                                            <strong>John Williams <span class="paid">Paid Plan</span> </strong>
                                            <ul>
                                                <li><span>Order ID:</span> 004312641</li>
                                                <li><span>Package:</span> Standard</li>
                                                <li><span>Date:</span> 12 Jan, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="utf-buttons-to-right"> <a href="invoice-template.html" class="button gray" title="Invoice" data-tippy-placement="top"><i class="icon-feather-printer"></i> Invoice</a> </div>
                                    </li>
                                    <li>
                                        <div class="utf-invoice-list-item">
                                            <div class="utf-invoice-user-city">United States <img class="flag" src="images/flags/us.svg" alt="" data-tippy-placement="top" title="United States" data-tippy=""></div>
                                            <strong>John Williams <span class="paid">Paid Plan</span></strong>
                                            <ul>
                                                <li><span>Order ID:</span> 004312641</li>
                                                <li><span>Package:</span> Extended</li>
                                                <li><span>Date:</span> 18 Jan, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="utf-buttons-to-right"> <a href="invoice-template.html" class="button gray" title="Invoice" data-tippy-placement="top"><i class="icon-feather-printer"></i> Invoice</a> </div>
                                    </li>
                                    <li>
                                        <div class="utf-invoice-list-item">
                                            <div class="utf-invoice-user-city">Australia <img class="flag" src="images/flags/au.svg" alt="" data-tippy-placement="top" title="Australia" data-tippy=""></div>
                                            <strong>John Williams <span class="unpaid">Unpaid Plan</span></strong>
                                            <ul>
                                                <li><span>Order ID:</span> 004312641</li>
                                                <li><span>Package:</span> Basic</li>
                                                <li><span>Date:</span> 06 Jan, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="utf-buttons-to-right"> <a href="invoice-template.html" class="button red" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i> Remove</a> </div>
                                    </li>
                                    <li>
                                        <div class="utf-invoice-list-item">
                                            <div class="utf-invoice-user-city">Brazil <img class="flag" src="images/flags/br.svg" alt="" data-tippy-placement="top" title="Brazil" data-tippy=""></div>
                                            <strong>John Williams <span class="paid">Paid Plan</span></strong>
                                            <ul>
                                                <li><span>Order ID:</span> 004312641</li>
                                                <li><span>Package:</span> Standard</li>
                                                <li><span>Date:</span> 25 Jan, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="utf-buttons-to-right"> <a href="invoice-template.html" class="button gray" title="Invoice" data-tippy-placement="top"><i class="icon-feather-printer"></i> Invoice</a> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="utf-pagination-container-aera margin-top-10 margin-bottom-50">
                            <nav class="pagination">
                                <ul>
                                    <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page ripple-effect">1</a></li>
                                    <li><a href="#" class="ripple-effect">2</a></li>
                                    <li><a href="#" class="ripple-effect">3</a></li>
                                    <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="utf_dashboard_list_box table-responsive recent_booking dashboard-box">
                            <div class="headline">
                                <h3>Booking Packages</h3>
                                <div class="sort-by">
                                    <select class="selectpicker hide-tick">
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>Last 6 Months</option>
                                        <option>This Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="dashboard-list-box table-responsive invoices with-icons">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Profile</th>
                                        <th>Plan Package</th>
                                        <th>Expiry Plan</th>
                                        <th>Payment Type</th>
                                        <th>Status</th>
                                        <th>View Booking</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>0431261</td>
                                        <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50" data-tippy-placement="top" title="John Williams" data-tippy=""></td>
                                        <td>Standard Plan</td>
                                        <td>12 Dec 2021</td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-pill badge-primary text-uppercase">Approved</span></td>
                                        <td><a href="#" class="button gray"><i class="icon-feather-eye"></i> View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>0431262</td>
                                        <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50" data-tippy-placement="top" title="John Williams" data-tippy=""></td>
                                        <td>Extended Plan</td>
                                        <td>12 Dec 2021</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge badge-pill badge-primary text-uppercase">Approved</span></td>
                                        <td><a href="#" class="button gray"><i class="icon-feather-eye"></i> View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>0431263</td>
                                        <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50" data-tippy-placement="top" title="John Williams" data-tippy=""></td>
                                        <td>Standard Plan</td>
                                        <td>12 Dec 2021</td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
                                        <td><a href="#" class="button gray"><i class="icon-feather-eye"></i> View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>0431264</td>
                                        <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50" data-tippy-placement="top" title="John Williams" data-tippy=""></td>
                                        <td>Basic Plan</td>
                                        <td>12 Dec 2021</td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
                                        <td><a href="#" class="button gray"><i class="icon-feather-eye"></i> View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>0431265</td>
                                        <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50" data-tippy-placement="top" title="John Williams" data-tippy=""></td>
                                        <td>Extended Plan</td>
                                        <td>12 Dec 2021</td>
                                        <td>Paywith Stripe</td>
                                        <td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
                                        <td><a href="#" class="button gray"><i class="icon-feather-eye"></i> View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>0431266</td>
                                        <td><img alt="" class="img-fluid rounded-circle shadow-lg" src="images/thumb-1.jpg" width="50" height="50" data-tippy-placement="top" title="John Williams" data-tippy=""></td>
                                        <td>Basic Plan</td>
                                        <td>12 Dec 2021</td>
                                        <td>Paypal</td>
                                        <td><span class="badge badge-pill badge-canceled text-uppercase">Canceled</span></td>
                                        <td><a href="#" class="button gray"><i class="icon-feather-eye"></i> View Detail</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="utf-dashboard-footer-spacer-aera"></div>
                <div class="utf-small-footer margin-top-15">
                    <div class="utf-small-footer-copyrights">Copyright &copy; 2021 All Rights Reserved.</div>
                </div>
            </div>
        </div>
        <!-- Dashboard Content End -->
    </div>
    </div>
    <!-- Wrapper / End -->

    <!-- Leave a Review for Freelancer Popup -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
        <div class="utf-signin-form-part">
            <ul class="utf-popup-tabs-nav-item">
                <li class="modal-title">User Add Notes</li>
            </ul>
            <div class="utf-popup-container-part-tabs">
                <div class="utf-popup-tab-content-item" id="tab2">
                    <form method="post" id="leave-review-form">
                        <textarea class="utf-with-border" placeholder="Add Notes" name="message2" id="message2" cols="7" required></textarea>
                    </form>
                    <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="leave-review-form">Submit Your Note <i class="icon-feather-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Leave a Review Popup / End -->

@endsection
