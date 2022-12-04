<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5"><img src="{{ asset('assets/images/logo/logo2.png') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini"><img src="{{ asset('assets/images/logo/logo2.png') }}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="{{url('admin/assets/strict/images/faces/dummy-user-img.png')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{url('')}}">
                <i class="ti-settings text-primary"></i>
                    View Website
                </a>
                <a class="dropdown-item logoutBtn" href="javascript:void(0);">
                <i class="ti-power-off text-primary"></i>
                    Logout
                </a>
            </div>
            </li>
            <!-- <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
                <i class="ti-more"></i>
            </a>
            </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="ti-layout-grid2"></span>
        </button>
        </div>
</nav>  