<!-- Header Container -->
<header id="utf-header-container-block">
    <div id="header">
        <div class="container">
            <div class="utf-left-side">
                <div id="logo"> <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""></a> </div>
                <nav id="navigation">
                    <ul id="responsive">
                        <li><a href="#" class="current">Home</a>
                            <ul class="dropdown-nav">
                                <li class="active"><a href="#"><i class="icon-feather-chevron-right"></i> Home Version One</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Home Version Two</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Home Version Three</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Home Version Four</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Find Jobs</a>
                            <ul class="dropdown-nav">
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Browse Jobs</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Jobs List Left Sidebar</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Jobs List Right Sidebar</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Jobs List With Map</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Browse Companies</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Jobs Detail Page</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Company Profile Detail</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Tasks</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Bidding Task</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer User List</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Task Detail</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Profile Detail</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">User Panel</a>
                            <ul class="dropdown-nav">
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Dashboard</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Manage Jobs Post</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Manage Jobs</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Manage Resume</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Bookmarks Jobs</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Tasks</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Manage Tasks</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Manage Bidders</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Active Bids</a></li>
                                        <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Post Bids</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Reviews</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> My Profile</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown-nav">
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> About Us</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Login</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Sign Up</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Order Checkout</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Order Confirmation</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Invoice Template</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> User Elements</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Icons Cheatsheet</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> FAQ Page</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> 404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="dropdown-nav">
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Blog List Right Sidebar</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Blog List Left Sidebar</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Blog Detail Right Sidebar</a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> Blog Detail Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>

            <div class="utf-right-side">
                <div class="utf-header-widget-item"> <a href="{{route('login')}}" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Sign In</span></a> </div>
                <div class="utf-header-widget-item">
                    <div class="utf-header-notifications user-menu">
                        <div class="utf-header-notifications-trigger user-profile-title">
                            <a href="#">
                                <div class="user-avatar status-online"><img src="{{asset('assets/images/user_small_1.jpg')}}" alt=""> </div>
                                <div class="user-name">Hi, John!</div>
                            </a>
                        </div>
                        <div class="utf-header-notifications-dropdown-block">
                            <ul class="utf-user-menu-dropdown-nav">
                                <li><a href="#"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                <li><a href="#"><i class="icon-line-awesome-user-secret"></i> Manage Jobs Post</a></li>
                                <li><a href="#"><i class="icon-material-outline-group"></i> Manage Jobs</a></li>
                                <li><a href="#"><i class="icon-material-outline-star-border"></i> Bookmarks Jobs</a></li>
                                <li><a href="#"><i class="icon-feather-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span class="mmenu-trigger">
			<button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </button>
          </span>
            </div>
        </div>
    </div>
</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
