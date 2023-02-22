<nav id="sidebar-admin-wraper">
    <div class="pro-my-account-wrap">
        Menu
    </div>
    <div class="admin-nav">
        <ul class="">
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i><span
                        class="admin-nav-text">Dashboard</span></a>
            </li>
            <li class="{{ request()->routeIs('project.index') ? 'active' : '' }}">
                <a href="{{ route('project.index') }}"><i class="fa fa-user"></i><span
                        class="admin-nav-text">Project</span></a>
        </ul>
    </div>
</nav>