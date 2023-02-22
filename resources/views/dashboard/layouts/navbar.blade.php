<header id="header-admin-wrap" class="header-admin-fixed">

    <!-- Header Start -->
    <div id="header-admin">
        <div class="container">

            <!-- Left Side Content -->
            <div class="header-left">

                <div class="my-account-logo">
                    <a href="index.html"><img src="images/logo-dark.png" alt=""></a>
                </div>

                <div class="header-widget aon-admin-search-box">
                    <div class="aon-admin-search ">
                        <input class="form-control sf-form-control" name="company_name" type="text"
                            placeholder="Search">
                        <button class="admin-search-btn"><i class="fs-input-icon feather-search"></i></button>
                    </div>
                </div>

            </div>
            <!-- Left Side Content End -->

            <!-- Right Side Content -->
            <div class="header-right">

                <div class="header-menu">
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                        class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">

                        <ul class=" nav navbar-nav">
                            <li class="has-child current-menu-item"><a href="javascript:;">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                </ul>
                            </li>

                            <li class="has-child">
                                <a href="javascript:;">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="javascript:;">Categories</a>
                                        <ul class="sub-menu">
                                            <li><a href="all-categories.html">All Categories</a></li>
                                            <li><a href="categories-detail.html">Categories Detail</a></li>
                                            <li><a href="categories-detail-2.html">Categories Detail 2</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="javascript:;">Search</a>
                                        <ul class="sub-menu">
                                            <li><a href="search-list.html">Search List</a></li>
                                            <li><a href="new-search-list-2.html">Search List 2</a></li>
                                            <li><a href="search-list-map.html">Search List Map</a></li>
                                            <li><a href="search-list-map2.html">Search List Map 2</a></li>
                                            <li><a href="search-grid.html">Search-grid</a></li>
                                            <li><a href="search-grids-map.html">Search-grid-map</a></li>
                                            <li><a href="search-grid-map2.html">Search-grid-map2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                </ul>
                            </li>

                            <li class="has-child"><a href="javascript:;">Profile</a>
                                <ul class="sub-menu">
                                    <li><a href="profile-full.html">Profile</a></li>
                                    <li><a href="profile-sidebar.html">Profile Sidebar</a></li>
                                </ul>
                            </li>

                            <li class="has-child"><a href="javascript:;">Jobs</a>
                                <ul class="sub-menu">
                                    <li><a href="job-listing.html">Job listing</a></li>
                                    <li><a href="job-grid.html">Job grid</a></li>
                                    <li><a href="job-detail.html">Job detail</a></li>
                                </ul>
                            </li>

                            <li class="has-child"><a href="javascript:;">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-list.html">Blog list</a></li>
                                    <li><a href="blog-list-2.html">Blog list 2</a></li>
                                    <li><a href="blog-list-3.html">Blog list 3</a></li>
                                    <li><a href="blog-list-4.html">Blog list 4</a></li>
                                    <li><a href="blog-detail.html">Blog detail</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact</a></li>

                        </ul>

                    </div>
                </div>

                <ul class="header-widget-wrap">
                    <li class="header-widget has-toltip">
                        <div class="aon-admin-notification sf-toogle-btn">
                            <i class="feather-bell"></i>
                            <span class="notification-animate">8</span>
                            <span class="header-toltip">Notification</span>
                        </div>

                        <div class="ws-toggle-popup popup-tabs-wrap-section popup-notifica-msg">
                            <div class="popup-tabs-wrap">

                                <div class="popup-tabs">

                                    <ul class="nav nav-tabs nav-justified">
                                        <!--1-->
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#accepted1">
                                                Accepted
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#rejected1">
                                                Rejected
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="accepted1" class="tab-pane active">
                                            <div class="ws-poptab-list-wrap">
                                                @yield('notification')
                                            </div>

                                            <div class="ws-poptab-all text-center">
                                                <a href="#" class="btn-link-type">View All</a>
                                            </div>

                                        </div>

                                        <div id="rejected1" class="tab-pane">
                                            <div class="ws-poptab-list-wrap">

                                            </div>
                                            <div class="ws-poptab-all text-center">
                                                <a href="#" class="btn-link-type">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-widget">
                        <div class="aon-admin-messange sf-toogle-btn">
                            <span class="feather-user-pic"><img src="images/user.jpg" alt="" /></span>
                        </div>
                        <div class="ws-toggle-popup popup-tabs-wrap-section user-welcome-area">
                            <ul class="user-welcome-list">
                                <li><strong>Welcome , <span class="site-text-primary">{{ Auth::user()->first_name
                                            }}</span></strong></li>
                                <li><a href="#"><i class="feather-sliders"></i> Dashboard</a></li>
                                <li><a href="#"><i class="feather-file"></i> Add Listing</a></li>
                                <li><a href="{{ route('profile.edit') }}"><i class="feather-settings"></i> Setting
                                        Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();"><i
                                                class="feather-log-out"></i> Logout</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Right Side Content End -->

        </div>
    </div>
    <!-- Header End -->

</header>