<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin.index') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Z</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Z</b>Shop</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- Notifications: style can be found in dropdown.less -->
                <!-- Tasks: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <form action="{{ route('admin.logout') }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" id="logout-btn" class="hidden" ></button>
                    </form>
                    <a href="#"><i class="fa fa-sign-out"></i>Log out</a>
                </li>
            </ul>
        </div>
    </nav>
</header>