<div class="admin-top-area d-flex flex-wrap justify-content-between m-b30 align-items-center">
    <div class="admin-left-area">
        <a class="nav-btn-admin d-flex justify-content-between align-items-center" id="sidebarCollapse">
            <span class="nav-btn-text">Dashboard Menu</span>
            <span class="fa fa-reorder"></span>
        </a>
    </div>

    <div class="admin-right-area">
        <div class="pro-pic-info-wrap d-flex">
            <div class="pro-pic-box">
                <img src="images/user.jpg" alt="" />
            </div>
            <div class="pro-pic-info pt-2">
                <strong>
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </strong>
            </div>
        </div>
    </div>
</div>