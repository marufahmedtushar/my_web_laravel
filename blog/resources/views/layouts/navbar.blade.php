<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="index.html" class="logo">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                                <img src="/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-magnify font-20 mr-1"></i>
                            <div class="ml-1 d-none d-sm-block">
                                <span>Search</span>
                            </div>
                        </div>
                    </a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>

<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ 'dashboard' == request()->path() ? 'active' : '' }}" href="/dashboard" aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ 'users' == request()->path() ? 'active' : '' }}" href="/users" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ 'projects' == request()->path() ? 'active' : '' }}" href="/projects" aria-expanded="false">
                        <i class="mdi mdi-animation"></i>
                        <span class="hide-menu">Projects</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ 'skills' == request()->path() ? 'active' : '' }}" href="/skills" aria-expanded="false">
                        <i class="mdi mdi-animation"></i>
                        <span class="hide-menu">Skills</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html" aria-expanded="false">
                        <i class="mdi mdi-arrange-bring-forward"></i>
                        <span class="hide-menu">Form Basic</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false">
                        <i class="mdi mdi-border-none"></i>
                        <span class="hide-menu">Table</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="icon-material.html" aria-expanded="false">
                        <i class="mdi mdi-face"></i>
                        <span class="hide-menu">Icon</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="starter-kit.html" aria-expanded="false">
                        <i class="mdi mdi-file"></i>
                        <span class="hide-menu">Blank</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="error-404.html" aria-expanded="false">
                        <i class="mdi mdi-alert-outline"></i>
                        <span class="hide-menu">404</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
