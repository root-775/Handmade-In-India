<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ asset('admin/assets/img/find_user.png') }}" class="user-image img-responsive" />
            </li>

            <li>
                <a class="{{ activeMenu('admin/dashboard', 'active-menu') }}" href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard fa-3x"></i>Dashboard </a>
            </li>
            <li class="{{ activeMenu('admin/product*') }}">
                <a href="#" ><i class="fa fa-shopping-cart fa-3x"></i> Product <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li >
                        <a class="{{ activeMenu('admin/product/create', 'active-menu') }}" href="{{ route('admin.product.create') }}">Adding</a>
                    </li>
                    <li>
                        <a class="{{ activeMenu('admin/product', 'active-menu') }}" href="{{ route('admin.product.index') }}">View</a>
                    </li>
                    <li class="{{ activeMenu('admin/product-category*') }}">
                        <a href="#">Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a class="{{ activeMenu('admin/product-category/create', 'active-menu') }}" href="{{ route('admin.product-category.create') }}">Adding</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ activeMenu('admin/product-tag*') }}">
                        <a href="#">Tags<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a class="{{ activeMenu('admin/product-tag/create', 'active-menu') }}" href="{{ route('admin.product-tag.create') }}">Adding</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-outdent fa-3x"></i> Blog <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Adding</a>
                    </li>
                    <li>
                        <a href="#">View</a>
                    </li>
                    <li>
                        <a href="#">Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Adding</a>
                            </li>
                            <li>
                                <a href="#">View</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Tags<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Adding</a>
                            </li>
                            <li>
                                <a href="#">View</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- /. NAV SIDE  -->
