<nav class="pcoded-navbar">
    <div class="sidebar_toggle">
        <a href="#">
            <i class="icon-close icons"></i>
        </a>
    </div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-40 img-radius" src="/assets/images/avatar-4.jpg" alt="User-Profile-Image">
                <div class="user-details">
                    <h5>{{Auth::user()->name}}</h5>
{{--                    <a id="more-details">xem website<i class="ti-new-window"></i></a>--}}
                </div>
            </div>

{{--            <div class="main-menu-content">--}}
{{--                <ul>--}}
{{--                    <li class="more-details">--}}
{{--                        <a href="#!"><i class="ti-settings"></i>Cài đặt</a>--}}
{{--                        <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Đăng xuất</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
{{--        <div class="pcoded-search">--}}
{{--            <span class="searchbar-toggle">  </span>--}}
{{--            <div class="pcoded-search-box ">--}}
{{--                <input type="text" placeholder="Search">--}}
{{--                <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>--}}
{{--            </div>--}}
{{--        </div>--}}
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ request()->is('admin') ? 'active' : '' }}">
                <a href="{{route('dashboard')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext" >Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        @if(\Illuminate\Support\Facades\Auth::user()->is_admin)
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Cài đặt</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ request()->is('admin/generals') ? 'active' : '' }}">
                <a href="{{route('generals.index')}}">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>D</b></span>
                    <span class="pcoded-mtext" >Cài đặt hệ thống</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('admin/slides') ? 'active' : '' }}">
                <a href="{{route('slides.index')}}">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
                    <span class="pcoded-mtext" >Slide</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ request()->is('admin/menus') ? 'active' : '' }}">
                <a href="{{route('menus.index')}}">
                    <span class="pcoded-micon"><i class="ti-menu-alt"></i><b>D</b></span>
                    <span class="pcoded-mtext" >Menu</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active pcoded-trigger' : '' }} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Danh mục</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ request()->is('admin/categories') ? 'active' : '' }}">
                        <a href="{{route('categories.index')}}">
                            <span class="pcoded-micon"><i class="ti-harddrives"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Danh sách</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/categories/create') ? 'active' : '' }}">
                        <a href="{{route('categories.create')}}">
                            <span class="pcoded-micon"><i class="ti-harddrives"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Thêm mới</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('categories.sort')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sắp xếp</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        @endif
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Sản phẩm</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="form-elements-component.html">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="bs-basic-table.html">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Basic Table</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Tin tức & Sự kiện</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="chart.html">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Chart</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="map-google.html">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pages</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="auth-normal-sign-in.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="auth-sign-up.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="sample-page.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample Page</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Khách hàng</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
