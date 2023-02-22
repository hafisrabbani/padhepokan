<header class="site-header header-style-1 mobile-sider-drawer-menu header-full-width">
    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">

            <div class="container clearfix">
                <!--Logo section start-->
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo.svg') }}" class="site-logo-has">
                            <img src="{{ asset('assets/images/logo.svg') }}" class="site-logo-sticky">
                        </a>
                    </div>
                </div>
                <!--Logo section End-->

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
                        <li class="has-child {{request()->routeIs('home') ? 'current-menu-item' : ''}}"><a
                                href="{{ route('home') }}">Home</a>

                        </li>

                        <li class="has-child {{request()->routeIs('about') ? 'current-menu-item' : ''}}">
                            <a href="{{ route('about') }}">Tentang Kami</a>

                        </li>

                        <li class="has-child {{ request()->routeIs('partners') ? 'current-menu-item' : '' }}"><a
                                href="{{ route('partners') }}">Partner Kami</a>

                        </li>

                        <li class="has-child {{ request()->routeIs('news') ? 'current-menu-item' : ''}}"><a
                                href="{{ route('news') }}">Berita & Artikel</a>

                        </li>

                        <li class="has-child {{ request()->routeIs('publications') ? 'current-menu-item' : ''}}"><a
                                href="{{ route('publications') }}">Publikasi</a>

                        </li>
                        <li class="has-child {{ request()->routeIs('business') ? 'current-menu-item' : ''}}"><a
                                href="{{ route('business') }}">Business Matching</a>

                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        <!--Login-->
                        <a class="site-button aon-btn-login" href="{{ route('login') }}">
                            <i class="fa fa-user"></i> Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>