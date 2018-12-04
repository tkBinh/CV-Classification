<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('admin-title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('source/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('source/css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('source/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet"
          href="{{ asset('source/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('source/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('source/css/custom.css') }}">

</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="{{ Session::get('login')->avatar }}"
                                                               alt="person"
                                                               class="img-fluid rounded-circle">
                <h2 style="text-transform: none; word-break: break-word;">{{ Session::get('login')->name }}</h2><span
                        style="color:
                greenyellow">
                    @if(Session::get('login')->role == 0)
                        Administrator
                    @else
                        Human Resource
                    @endif
                </span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="{{ route('admin.dashboard') }}" class="brand-small text-center">
                    <strong>T</strong><strong class="text-primary">B</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Menu</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="{{ route('admin.dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
                <li><a href=""> <i class="fas fa-clipboard-check"></i> CV Evaluation </a></li>
                <li><a href=""><i class="fas fa-tasks"></i>Training & Evaluation </a></li>
                @if(Session::get('login')->role == 0)
                <li><a href="{{ route('admin.manage') }}"> <i class="fas fa-cog"></i>Manage </a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i
                                    class="icon-bars"> </i></a><a href="{{route('admin.dashboard')}}"
                                                                  class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><strong style="text-transform:
                            none">VietIS CV
                                    Classification</strong></div>
                        </a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Notifications dropdown-->
                        <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false" class="nav-link"><i
                                        class="fa fa-bell"></i><span class="badge badge-warning">000</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-envelope"></i>You have 6
                                                new messages
                                            </div>
                                            <div class="notification-time">
                                                <small>4 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have 2
                                                followers
                                            </div>
                                            <div class="notification-time">
                                                <small>4 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-upload"></i>Server
                                                Rebooted
                                            </div>
                                            <div class="notification-time">
                                                <small>4 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification d-flex justify-content-between">
                                            <div class="notification-content"><i class="fa fa-twitter"></i>You have 2
                                                followers
                                            </div>
                                            <div class="notification-time">
                                                <small>10 minutes ago</small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                        <strong> <i class="fa fa-bell"></i>view all notifications </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages dropdown-->
                        <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false" class="nav-link"><i
                                        class="fa fa-envelope"></i><span class="badge badge-info">000</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img src="{{ asset('source/img/avatar-1.jpg') }}"
                                                                      alt="..."
                                                                      class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span>
                                            <small>3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img src="{{ asset('source/img/avatar-2.jpg') }}"
                                                                      alt="..."
                                                                      class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span>
                                            <small>3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"><img src="{{ asset('source/img/avatar-3.jpg') }}"
                                                                      alt="..."
                                                                      class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span>
                                            <small>3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                        <strong> <i class="fa fa-envelope"></i>Read all messages </strong></a></li>
                            </ul>
                        </li>
                        <!-- Log out-->
                        <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link logout"> <span
                                        class="d-none d-sm-inline-block">Sign Out</span><i class="fas
                                        fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Counts Section -->
    @yield('admin-content')

    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>VietIS &copy; 2019</p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Design by <a href="https://vietis.com.vn" class="external">VietIS</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- JavaScript files-->
<script src="{{ asset('source/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('source/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('source/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('source/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
<script src="{{ asset('source/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('source/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('source/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('source/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('source/js/charts-home.js') }}"></script>
<!-- Main File-->
<script src="{{ asset('source/js/front.js') }}"></script>
</body>
</html>
