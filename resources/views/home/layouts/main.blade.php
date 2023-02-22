@include('home.layouts.header')
<div class="page-wraper">

    <!-- HEADER START -->
    @include('home.layouts.navbar')
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">
        @yield('content')
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    @include('home.layouts.footer')
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>



<!-- Login Sign Up Modal -->
<div class="modal fade" id="login-signup-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-body">

                <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">

                    <!--Tabs-->
                    <ul class="nav nav-tabs nav-table-cell">
                        <li><a data-toggle="tab" href="#Upcoming" class="active">Login</a></li>
                        <li><a data-toggle="tab" href="#Past">Sign up</a></li>
                    </ul>
                    <!--Tabs Content-->
                    <div class="tab-content">

                        <!--Login Form-->
                        <div id="Upcoming" class="tab-pane active">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="username"
                                                        type="text" placeholder="Username / Email" id="username">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="password"
                                                        type="password" placeholder="Password" id="password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-flex aon-login-option justify-content-between">
                                                <div class="aon-login-opleft">
                                                    <div class="checkbox sf-radio-checkbox">
                                                        <input id="td2_2" name="abc" value="five" type="checkbox">
                                                        <label for="td2_2">Keep me logged</label>
                                                    </div>
                                                </div>
                                                <div class="aon-login-opright">
                                                    <a href="#">Forget Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="site-button w-90" type="s">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Sign up Form-->
                        <div id="Past" class="tab-pane">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="username"
                                                        type="text" placeholder="Username / Email" id="username">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="password"
                                                        type="password" placeholder="Password" id="password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-flex aon-login-option justify-content-between">
                                                <div class="aon-login-opright">
                                                    <a href="#">Forget Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="site-button w-90" type="s">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Login Sign Up Modal -->


@include('home.layouts.scripts')
<script>

</script>
</body>

</html>