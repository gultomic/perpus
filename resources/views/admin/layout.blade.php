<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skins/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    <style>
    h3.navbar-text {
        text-transform:uppercase;
        font-weight: bold;
        margin-left: 0;
        margin-top: 16px;
    }
</style>
</head>
<body class="nav-md">
    <div id="app" class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a onClick="location.href='{{url('/')}}'" class="site_title"><i class="fa fa-moon-o"></i> <span>Pustaka Digital</span></a>
                    </div>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="clearfix"></div>
                        <br />
                        <div class="menu_section">
                            <h3>Aktifitas Utama</h3>
                            <ul class="nav side-menu">
                                <li {{ Request::is('dashboard') ? 'class=active' : null }}>
                                    <a onClick="location.href='{{route('dashboard')}}'"><i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li {{ Request::is('rent*') ? 'class=active' : null }}>
                                    <a><i class="fa fa-shopping-bag"></i> Perpustakaan<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" {{ Request::is('rent*') ? 'style=display:block' : null }}>
                                        <li {{ Request::is('rent') ? 'class=active' : null }}>
                                            <a onClick="location.href='{{route('rent.index')}}'">Data Transaksi</a>
                                        </li>
                                        <li><a>Data Booking</a></li>
                                        <li {{ Request::is('rent/create') ? 'class=active' : null }}>
                                            <a onClick="location.href='{{route('rent.create')}}'">Peminjaman</a>
                                        </li>
                                        <li {{ Request::is('rent/return') ? 'class=active' : null }}>
                                            <a onClick="location.href='{{route('rent.return')}}'">Pengembalian</a>
                                        </li>
                                        <li><a>Daftar Telat</a></li>
                                        <li><a>Import Data</a></li>
                                        <li><a>Profil Perpustakaan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Manajemen Buku <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a>Daftar Buku</a></li>
                                        <li><a>Tambah Buku</a></li>
                                        <li><a>Lokasi Buku</a></li>
                                        <li><a>Tambah Lokasi</a></li>
                                        <li><a>Kategori Buku</a></li>
                                        <li><a>Tambah Kategori</a></li>
                                        <li><a>Buku Rusak / Hilang</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user-circle-o"></i> Member <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a>Daftar Member</a></li>
                                        <li><a>Tambah Member</a></li>
                                        <li><a>Reset Password</a></li>
                                        {{--  <li><a href="typography.html">Typography</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="glyphicons.html">Glyphicons</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                        <li><a href="invoice.html">Invoice</a></li>
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="calendar.html">Calendar</a></li>  --}}
                                    </ul>
                                </li>
                                {{--  <li><a><i class="fa fa-table"></i> Buku Elektronik <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                    </ul>
                                </li>  --}}
                                {{--  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                    </ul>
                                </li>  --}}
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Data Digital</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-desktop"></i> Buku Elektronik <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="e_commerce.html">E-commerce</a></li>
                                        <li><a href="projects.html">Projects</a></li>
                                        <li><a href="project_detail.html">Project Detail</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="profile.html">Profile</a></li>
                                        <li><a>Kategori Ebook</a></li>
                                        <li><a>Tambah Kategori</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-video-camera"></i> Pustaka Video <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="page_403.html">403 Error</a></li>
                                        <li><a href="page_404.html">404 Error</a></li>
                                        <li><a href="page_500.html">500 Error</a></li>
                                        <li><a href="plain_page.html">Plain Page</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                        <li><a>Kategori Video</a></li>
                                        <li><a>Tambah Kategori</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-volume-up"></i> Pustaka Audio <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a>Kategori Audio</a></li>
                                        <li><a>Tambah Kategori</a></li>
                                        {{--  <li><a href="#level1_1">Level One</a>  --}}
                                            {{--  <li><a>Level One<span class="fa fa-chevron-down"></span></a>  --}}
                                    {{--  <ul class="nav child_menu">
                                        <li class="sub_menu"><a href="level2.html">Level Two</a>
                                        </li>
                                        <li><a href="#level2_1">Level Two</a>
                                        </li>
                                        <li><a href="#level2_2">Level Two</a>
                                        </li>
                                    </ul>  --}}
                                    {{--  </li>
                                    <li><a href="#level1_2">Level One</a>
                                    </li>  --}}
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Materi Interaktif <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a>Kategori Materi</a></li>
                                    <li><a>Tambah Kategori</a></li>
                                    <li><a href="page_403.html">403 Error</a></li>
                                    <li><a href="page_404.html">404 Error</a></li>
                                    <li><a href="page_500.html">500 Error</a></li>
                                    <li><a href="plain_page.html">Plain Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-image"></i> Pustaka Gambar <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a>Kategori Gambar</a></li>
                                    <li><a>Tambah Kategori</a></li>
                                    <li><a href="#level1_1">Level One</a>
                                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="level2.html">Level Two</a>
                                                </li>
                                                <li><a href="#level2_1">Level Two</a>
                                                </li>
                                                <li><a href="#level2_2">Level Two</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#level1_2">Level One</a>
                                        </li>
                                    </ul>
                                </li>                  
                            {{--  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>  --}}
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" 
                    data-placement="top" 
                    title="Logout" 
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <div class="nav navbar-nav">
                    <h3 class="navbar-text" style="">@yield('title')</h3>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            {{--  <img src="images/img.jpg" alt="">John Doe  --}}
                            {{ Auth::user()->name }}
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a onClick="location.href='{{url('/home')}}'"> Profile</a></li>
                            <li>
                            {{--  <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>  --}}
                        </li>
                        {{--  <li><a href="javascript:;">Help</a></li>  --}}
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out pull-right"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>

                        {{--  <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                            </li>
                            <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                            </li>
                            <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                            </li>
                            <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                                <span>John Smith</span>
                                <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                            </li>
                            <li>
                            <div class="text-center">
                                <a>
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            </li>
                        </ul>
                    </li>  --}}
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <!-- intro tiles -->
            <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
                <a onClick="location.href='{{route('rent.create')}}'">
                    <span class="count_top"><i class="fa fa-users"></i> Total Member</span>
                    <div class="count blue">255.356.119</div>
                    <span class="count_bottom"><i class="fa fa-hand-o-right green"></i> klik untuk melihat..!</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <a onClick="location.href='{{route('rent.create')}}'">
                    <span class="count_top"><i class="fa fa-street-view"></i> Pengunjung Bulan ini</span>
                    <div class="count">23.992</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>  Dari bulan lalu</span>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
                <a onClick="location.href='{{route('rent.create')}}'">
                    <span class="count_top"><i class="fa fa-book"></i> Total Buku Perpustakaan</span>
                    <div class="count green">1.500.120.234</div>
                    <span class="count_bottom"><i class="fa fa-hand-o-right green"></i> klik untuk melihat..!</span>
                </a>
            </div>
            <!-- action tiles -->
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <a onClick="location.href='{{route('rent.create')}}'">
                    <span class="count_top"><i class="fa fa-shopping-bag"></i> Peminjaman Bulan ini</span>
                    <div class="count">70,325</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>  Dari bulan lalu</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <a onClick="location.href='{{route('rent.return')}}'">
                    <span class="count_top"><i class="fa fa-hand-o-down"></i> Pengembalian Hari ini</span>
                    <div class="count">0</div>
                    <span class="count_bottom"><i class="fa fa-hand-o-right green"></i> klik untuk transaksi..!</span>
                </a>
            </div>
        </div>
        <!-- /top tiles -->
        @yield('content')
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            {{--  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  --}}
            Perpustakaan Digital Untuk SMA - DIGILIB v1.0
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
</div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- <script src="js/nprogress.js"></script> -->
<script src="{{ asset('js/gauge.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('js/jquery.flot.time.js') }}"></script>
<script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('js/curvedLines.js') }}"></script>
<script src="{{ asset('js/icheck.min.js') }}"></script>
<script src="{{ asset('js/skycons.js') }}"></script>
{{--  <script src="js/date.js"></script>  --}}
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
@stack('scripts')
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
