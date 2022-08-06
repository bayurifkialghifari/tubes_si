@php
use App\Core\Request;

$request = new Request();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIM SEKOLAH | {{ isset($title) ? $title : 'Home' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600'
        rel='stylesheet'>

    <link type="text/css" href="{{ base_url }}assets/template/assets/fonts/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="{{ base_url }}assets/template/assets/fonts/themify-icons/themify-icons.css"
        rel="stylesheet"> <!-- Themify Icons -->
    <link type="text/css" href="{{ base_url }}assets/template/assets/css/styles.css" rel="stylesheet">
    <!-- Core CSS with all styles -->
    <!--[if lt IE 10]>
        <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/respond.min.js"></script>
        <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link type="text/css" href="{{ base_url }}assets/template/assets/plugins/datatables/dataTables.bootstrap.css"
        rel="stylesheet">
    <link type="text/css" href="{{ base_url }}assets/template/assets/plugins/datatables/dataTables.themify.css"
        rel="stylesheet">

</head>

<body class="animated-content">

    <header id="topnav" class="navbar navbar-fixed-top navbar-midnightblue" role="banner">

        <div class="logo-area">
            <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
                <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                    <span class="icon-bg">
                        <i class="ti ti-menu"></i>
                    </span>
                </a>
            </span>
        </div><!-- logo-area -->

        <ul class="nav navbar-nav toolbar pull-right">

            <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
                <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i
                            class="ti ti-fullscreen"></i></span></i></a>
            </li>

            <li class="dropdown toolbar-icon-bg">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                    <img class="img-circle" src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
                </a>
                <ul class="dropdown-menu userinfo arrow">
                    {{-- <li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><span
                                class="badge badge-info pull-right">80%</span></a></li>
                    <li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
                    <li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
                    <li><a href="#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
                    <li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
                    <li class="divider"></li> --}}
                    <li><a href="{{ base_url }}logout"><i class="ti ti-shift-right"></i><span>Sign Out</span></a>
                    </li>
                </ul>
            </li>

        </ul>

    </header>

    <div id="wrapper">
        <div id="layout-static">
            <div class="static-sidebar-wrapper sidebar-default">
                <div class="static-sidebar">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="userinfo">
                                    <div class="avatar">
                                        <img src="https://www.w3schools.com/howto/img_avatar.png"
                                            class="img-responsive img-circle">
                                    </div>
                                    <div class="info">
                                        <span class="username">{{ $request->sess('name') }}</span>
                                        <span class="useremail">{{ $request->sess('email') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget stay-on-collapse" id="widget-sidebar">
                            @include('layouts.sidebar')
                        </div>
                    </div>
                </div>
            </div>
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        @yield('content')
                    </div> <!-- #page-content -->
                </div>
                <footer role="contentinfo">
                    <div class="clearfix">
                        <ul class="list-unstyled list-inline pull-left">
                            <li>
                                <h6 style="margin: 0;">&copy; 2022 Sistem Informasi</h6>
                            </li>
                        </ul>
                        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                                class="ti ti-arrow-up"></i></button>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <!-- Load site level scripts -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/jqueryui-1.10.3.min.js"></script> <!-- Load jQueryUI -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/enquire.min.js"></script> <!-- Load Enquire -->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/velocityjs/velocity.min.js">
    </script> <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/velocityjs/velocity.ui.min.js">
    </script>

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/wijets/wijets.js"></script> <!-- Wijet -->

    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button -->

    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop -->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/iCheck/icheck.min.js"></script> <!-- iCheck -->

    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/application.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <!-- End loading site level scripts -->

    <!-- Load page level scripts-->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/datatables/jquery.dataTables.js">
    </script>
    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/demo/demo-datatables.js"></script>

    <!-- End loading page level scripts-->
    @stack('scripts')


</body>

</html>
