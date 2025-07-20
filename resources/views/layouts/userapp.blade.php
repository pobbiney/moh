<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/bundle.css')}}" type="text/css">

    <!-- Google font -->
    <link href="{{ asset('frontend/css2?family=Fira+Sans:wght@400;500;600&display=swap')}}" rel="stylesheet">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/datepicker/daterangepicker.css')}}" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.min.css')}}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

 
<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="header-search-form">
                            <h3>Health Training Institutions</h3>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <ul class="navbar-nav">
                    <li class="nav-item btn-mobile-search">
                        <a href="#" title="Search" class="nav-link">
                            <i data-feather="search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown d-sm-inline d-none">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
 

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                Hi! <strong>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong>
                            </span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ asset('frontend/assets/media/image/user/free-user-icon-3297-thumb.png')}}" class="rounded-circle" alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4" data-background-image="../../assets/media/image/image1.jpg">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="{{ asset('frontend/assets/media/image/user/free-user-icon-3297-thumb.png')}}" class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="mb-0">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h5>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="{{route('MyProfile')}}" class="list-group-item">Profile</a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                <form action="{{ route('logout-authentication-process') }}" method="POST">
                                  @csrf
                                <button class="list-group-item text-danger">Sign Out!</button>
                                </form>
                            </div>
                           
                        </div>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <!-- Logo -->
            <div class="navigation-header">
                <a class="navigation-logo" href="#">
                    <img class="logo" src="{{asset('frontend/assets/media/image/logo/logo-black.png')}}" alt="logo">
                    <img class="dark-logo" src="{{asset('frontend/assets/media/image/logo/logo-black.png')}}" alt="dark logo">
                    <img class="small-logo" src="{{asset('frontend/assets/media/image/logo/logo-black.png')}}" alt="small logo">
                    <img class="small-dark-logo" src="{{asset('frontend/assets/media/image/logo/logo-black.png')}}" alt="small dark logo">
                </a>
                <a href="#" class="small-navigation-toggler"></a>
                <a href="#" class="btn btn-danger mobile-navigation-toggler">
                    <i data-feather="x"></i>
                </a>
            </div>
            <!-- ./ Logo -->

            <!-- Menu wrapper -->
            <div class="navigation-menu-wrapper">
                <!-- Menu tab -->
                <div class="navigation-menu-tab">
                    <ul>
                        <li>
                            <a href="#" data-menu-target="#dashboards">
                                <span class="menu-tab-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#apps">
                                <span class="menu-tab-icon">
                                    <i data-feather="file"></i>
                                </span>
                                <span>My Application</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#components">
                                <span class="menu-tab-icon">
                                    <i data-feather="users"></i>
                                </span>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#forms">
                                <span class="menu-tab-icon">
                                    <i data-feather="clipboard"></i>
                                </span>
                                <span>Result</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- ./ Menu tab -->

                <!-- Menu body -->
                <div class="navigation-menu-body">
                    <ul id="dashboards">
                        <li class="navigation-divider">Dashboards</li>
                      
                         
                        <li>
                            <a class="active" href="{{ route('userDashboard.dashboard') }}">
                                <span class="nav-link-icon" data-feather="life-buoy"></span>
                                <span>My Dashboard</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                    <ul id="apps">
                        <li class="navigation-divider">My Application</li>
                        <li>
                            <a href="chat.html">
                                <span class="nav-link-icon" data-feather="file"></span>
                                <span>New Application</span>
                                
                            </a>
                        </li>
                      
                       
                        <li>
                            <a href="file-manager.html">
                                <span class="nav-link-icon" data-feather="refresh-ccw"></span>
                                <span>Application Status </span>
                            </a>
                        </li>
                         
                        
                        <li>
                            <a href="invoice.html">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Interview Date</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="components">
                        <li class="navigation-divider">My Profile</li>
                        <li>
                            <a href="{{route('MyProfile')}}">
                                <span class="nav-link-icon">
                                    <i data-feather="users"></i>
                                </span>
                                <span>My Profile</span>
                            </a>
                           
                        </li>
                        <li>
                            <a href="{{route('MyProfile')}}">
                                <span class="nav-link-icon">
                                    <i data-feather="lock"></i>
                                </span>
                                <span>Change Password</span>
                            </a>
                             
                        </li>
                   
                     
                    </ul>
                    <ul id="forms">
                        <li class="navigation-divider">My Results</li>
                        <li>
                            <a href="basic-forms.html">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>View Results</span>
                            </a>
                        </li>
                       
                    </ul>
                     
                    
                </div>
                <!-- ./ Menu body -->
            </div>
            <!-- ./ Menu wrapper -->
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                
              @yield('content')

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2025 Developed By - <a href="#" target="_blank">Speedlines Technology</a></div>
                <div>
                   
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ asset('frontend/vendors/bundle.js')}}"></script>

<!-- Daterangepicker -->
<script src="{{ asset('frontend/vendors/datepicker/daterangepicker.js')}}"></script>

<!-- Apex chart -->
<script src="{{ asset('frontend/vendors/charts/apex/apexcharts.js')}}"></script>

<!-- Circle progress -->
<script src="{{ asset('frontend/vendors/circle-progress/circle-progress.min.js')}}"></script>

<!-- Dashboard scripts -->
<script src="{{ asset('frontend/assets/js/examples/pages/helpdesk-dashboard.js')}}"></script>

<!-- App scripts -->
<script src="{{ asset('frontend/assets/js/app.min.js')}}"></script>
@yield('scripts')
</body>
</html>
