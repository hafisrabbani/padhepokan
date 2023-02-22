@include('dashboard.layouts.header')
<div class="page-wraper">

    @include('dashboard.layouts.navbar')

    <!-- Sidebar Holder -->
    @include('dashboard.layouts.sidebar')

    <!-- Page Content Holder -->
    <div id="content">

        @yield('content')

    </div>

</div>


@include('dashboard.layouts.footer')
@stack('scripts')
</body>

</html>