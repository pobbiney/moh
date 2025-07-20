@php

    $staff_query = DB::select('SELECT * FROM staff WHERE staff_id = :id', ['id' => auth()->user()->staff_id]);

    $userCat = auth()->user()->user_cat;
    $links = DB::select('SELECT user_links.link_id, user_links.page_id,user_links.page_id_sub, user_links.link_url, user_links.link_name, user_links.link_image, user_links.link_parent FROM user_cat_links INNER JOIN user_links ON user_cat_links.link_id = user_links.link_id WHERE user_cat_links.cat_id = :id ORDER BY user_links.link_name ASC',['id' => $userCat]);
    $parents = array();
    $child = array();
    foreach ($links as $row_links) {
        if ($row_links->link_parent == 0) {
            $parents[] = $row_links;
        } else {
            $child[] = $row_links;
        }
    }
@endphp
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from phplaravel-1384472-5380003.cloudwaysapps.com/project_dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jul 2025 09:48:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- All meta and title start-->
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template"
      name="description">
<meta content="admin template, ki-admin admin template, dashboard template, flat admin template, responsive admin template, web app"
      name="keywords">
<meta content="la-themes" name="author">

<link rel="icon" href="{{ asset('assets/images/logo/favicon.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png')}}" type="image/x-icon">

<title>Project Dashboard | ki-admin - Premium Admin Template</title>
<!-- meta and title end-->

<!-- css start !-->
<!-- Animation css -->
<link rel="stylesheet" href="{{ asset('assets/vendor/animation/animate.min.css')}}" >

<!-- Fonts -->
<link href="https://fonts.googleapis.com/" rel="preconnect">
<link crossorigin href="https://fonts.gstatic.com/" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
      rel="stylesheet">

<!--Flag Icon css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flag-icons-master/flag-icon.css')}}">

<!-- Tabler icons-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tabler-icons/tabler-icons.css')}}">

<!-- Prism css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/prism/prism.min.css')}}">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css')}}">

<!-- Simplebar css-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/simplebar/simplebar.css')}}">
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/apexcharts.css')}}">

     <!--font-awesome-css-->
    <link href="{{ asset('assets/vendor/fontawesome/css/all.css')}}" rel="stylesheet">

 <!-- App css-->
 <link href="{{ asset('assets/css/style.css" rel="stylesheet')}}" type="text/css">
   <!-- Responsive css-->
   <link href="{{ asset('assets/css/responsive.css" rel="stylesheet')}}" type="text/css">
    <!-- Data Table css-->
    <link href="{{ asset('assets/vendor/datatable/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">

    <!-- slick css -->
    <link href="{{ asset('assets/vendor/slick/slick.css" rel="stylesheet')}}">
    <link href="{{ asset('assets/vendor/slick/slick-theme.css" rel="stylesheet')}}">
<link rel="preload" as="style" href="{{ asset('build/assets/style-Cuxwy5N_.css')}}" /><link rel="stylesheet" href="{{ asset('build/assets/style-Cuxwy5N_.css')}}" /><!-- css end !-->
</head>
<body>
<!-- Loader start-->
<div class="app-wrapper">
    <!-- Loader start-->
    <div class="loader-wrapper">
        <div class="loader_24"></div>
    </div>
    <!-- Loader end-->

    <!-- Menu Navigation start -->
     <!-- Menu Navigation starts -->
        <nav>
            <div class="app-logo">
                <a class="logo d-inline-block" href="index.html">
                    <img alt="#" src="{{ asset('assets/images/logo/1.png')}}">
                </a>

                <span class="bg-light-primary toggle-semi-nav d-flex-center">
                        <i class="ti ti-chevron-right"></i>
                    </span>

                <div class="d-flex align-items-center nav-profile p-3">
                        <span class="h-45 w-45 d-flex-center b-r-10 position-relative bg-danger m-auto">
                            <img alt="avatar" class="img-fluid b-r-10" src="{{ asset('assets/images/avatar/woman.jpg')}}">
                            <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                        </span>
                    <div class="flex-grow-1 ps-2">
                        <h6 class="text-primary mb-0"> {{auth()->user()->name}}</h6>
                        <p class="text-muted f-s-12 mb-0">Web Developer</p>
                    </div>


                    <div class="dropdown profile-menu-dropdown">
                        <a aria-expanded="false" data-bs-auto-close="true" data-bs-placement="top" data-bs-toggle="dropdown"
                        role="button">
                            <i class="ti ti-settings fs-5"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a class="f-w-500" href="profile.html" target="_blank">
                                    <i class="ph-duotone  ph-user-circle pe-1 f-s-20"></i> Profile Details
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="f-w-500" href="setting.html" target="_blank">
                                    <i class="ph-duotone  ph-gear pe-1 f-s-20"></i> Settings
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <a class="f-w-500" href="#">
                                            <i class="ph-duotone  ph-detective pe-1 f-s-20"></i> Incognito
                                        </a>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input form-check-primary" id="incognitoSwitch"
                                                type="checkbox">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <a class="mb-0 text-secondary f-w-500" href="sign_up.html" target="_blank">
                                    <i class="ph-bold  ph-plus pe-1 f-s-20"></i> Add account
                                </a>
                            </li>

                            <li class="app-divider-v dotted py-1"></li>
                            <form action="{{ route('logout-authentication-process') }}" method="POST">
							@csrf

                            <li class="dropdown-item">
                                <button class="btn btn-xs btn-danger"  >
                                    <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                                </button>
                            </li>
                            </form>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="app-nav" id="app-simple-bar">
                <ul class="main-nav p-0 mt-2">
                    <li class="menu-title">
                        <span>Menu</span>
                    </li>
                    <li class="@if ($pageName == "dashboard") active  @endif">
                        <a aria-expanded="false"  href="{{ route('dashboard') }}">
                            <svg stroke="currentColor" stroke-width="1.5">
                                <use xlink:href="{{ asset('assets/svg/_sprite.svg#home')}}"></use>
                            </svg>
                            dashboard
                        </a>
                        
                    </li>
                    @foreach ($parents as $parent)
                    <li>
                        <a aria-expanded="false" data-bs-toggle="collapse" href="#{{$parent->link_id}}">
                            <svg stroke="currentColor" stroke-width="1.5">
                                <use xlink:href="{{asset($parent->link_image)}}"></use>
                            </svg>
                            {{$parent->link_name}}
                        </a>
                        <ul class="collapse" id="{{$parent->link_id}}">
                            @foreach ($child as $sub)
									   @if ($parent->link_id == $sub->link_parent)
                            <li><i class="{{ $sub->link_image}}"></i> <a href="{{route($sub->link_url)}}">{{ $sub->link_name}}</a></li>
                            @endif
									@endforeach
                            
                        </ul>
                   </li>
                   @endforeach
                   
                </ul>
            </div>
        </nav>
         <div class="app-content">
        <!-- Header Section start -->
    <!-- Header Section starts -->
    <header class="header-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 col-sm-6 d-flex align-items-center header-left p-0">
                               <span class="header-toggle ">
                                 <i class="ph ph-squares-four"></i>
                               </span>

                    <div class="header-searchbar w-100">
                        <form action="#" class="mx-sm-3 app-form app-icon-form ">
                            <div class="position-relative">
                                <input aria-label="Search" class="form-control" placeholder="Search..."
                                       type="search">
                                <i class="ti ti-search text-dark"></i>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-4 col-sm-6 d-flex align-items-center justify-content-end header-right p-0">

                    <ul class="d-flex align-items-center">

                        <li class="header-language">
                            <div class="flex-shrink-0 dropdown" id="lang_selector">
                                <a aria-expanded="false" class="d-block head-icon ps-0"
                                   data-bs-toggle="dropdown"
                                   href="#">
                                    <div class="lang-flag lang-en ">
                                                    <span class="flag rounded-circle overflow-hidden">
                                                        <i class=""></i>
                                                    </span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu language-dropdown header-card border-0">
                                    <li class="lang lang-en selected dropdown-item p-2" data-bs-placement="top"
                                        data-bs-toggle="tooltip" title="US">
                                                    <span class="d-flex align-items-center">
                                                        <i class="flag-icon flag-icon-gha flag-icon-squared rounded-circle f-s-20"></i>
                                                        <span class="ps-2">GH</span>
                                                    </span>
                                    </li>
                                   
                                    
                                </ul>
                            </div>

                        </li>

                        <li class="header-apps">
                            <a aria-controls="appscanvasRights"
                               class="d-block head-icon bg-light-dark rounded-circle f-s-22 p-2"
                               data-bs-target="#appscanvasRights" data-bs-toggle="offcanvas"
                               href="#" role="button">
                                <i class="ph ph-bounding-box"></i>

                            </a>

                            <div aria-labelledby="appscanvasRightsLabel"
                                 class="offcanvas offcanvas-end header-apps-canvas"
                                 id="appscanvasRights"
                                 tabindex="-1">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="appscanvasRightsLabel">Shortcut</h5>
                                    <div class="app-dropdown flex-shrink-0">
                                        <a aria-expanded="false" class=" p-1" data-bs-auto-close="outside"
                                           data-bs-toggle="dropdown"
                                           href="#"
                                           role="button">
                                            <i class="ph-bold  ph-faders-horizontal f-s-20"></i>


                                        </a>
                                        <ul class="dropdown-menu mb-3">
                                            <li class="dropdown-item">
                                                <a href="setting.html" target="_blank">
                                                    Privacy Settings
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="setting.html" target="_blank">
                                                    Account Settings
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="setting.html" target="_blank">
                                                    Accessibility
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item border-0">
                                                <a aria-expanded="false" data-bs-toggle="dropdown" href="#"
                                                   role="button">
                                                    More Settings
                                                </a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li class="dropdown-item">
                                                        <a href="setting.html" target="_blank">
                                                            Backup and Restore
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="setting.html" target="_blank">
                                                            <span>Data Usage</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="setting.html" target="_blank">
                                                            <span>Theme</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item d-flex align-items-center justify-content-between">
                                                        <a href="#">
                                                            <p class="mb-0">Notification</p>
                                                        </a>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input  form-check-primary"
                                                                       id="notificationSwitch"
                                                                       type="checkbox">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="offcanvas-body app-scroll">
                                    <div class="row row-cols-3 g-2">
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-primary w-100 rounded-3 py-3 px-2 "
                                               href="product.html"
                                               target="_blank">
                                                              <span>
                                                                <i class="ph-light  ph-shopping-bag-open  f-s-30"></i>
                                                              </span>
                                                <p class="mb-0 f-w-500 text-dark">E-shop</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-danger w-100 rounded-3 py-3 px-2 "
                                               href="email.html"
                                               target="_blank">
                                                             <span>
                                                               <i class="ph-light  ph-envelope  f-s-30"></i>
                                                             </span>
                                                <p class="mb-0 f-w-500 text-dark">Email</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-success w-100 rounded-3 py-3 px-2 "
                                               href="chat.html"
                                               target="_blank">
                                                             <span>
                                                               <i class="ph-light  ph-chat-circle-text  f-s-30"></i>
                                                             </span>
                                                <p class="mb-0 f-w-500 text-dark">Chat</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-warning w-100 rounded-3 py-3 px-2 "
                                               href="project_app.html"
                                               target="_blank">
                                                             <span>
                                                               <i class="ph-light  ph-projector-screen-chart  f-s-30"></i>
                                                             </span>
                                                <p class="mb-0 f-w-500 text-dark">Project</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-info w-100 rounded-3 py-3 px-2 "
                                               href="invoice.html"
                                               target="_blank">
                                                             <span>
                                                               <i class="ph-light  ph-scroll f-s-30"></i>
                                                             </span>
                                                <p class="mb-0 f-w-500 text-dark">Invoice</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-dark w-100 rounded-3 py-3 px-2 "
                                               href="blog.html"
                                               target="_blank">
                                                             <span>
                                                               <i class="ph-light  ph-notebook f-s-30"></i>
                                                             </span>
                                                <p class="mb-0 f-w-500 text-dark">Blog</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-danger w-100 rounded-3 py-3 px-2 "
                                               href="calendar.html"
                                               target="_blank">
                                                             <span>
                                                               <i class="ph-light  ph-calendar f-s-30"></i>
                                                             </span>
                                                <p class="mb-0 f-w-500 text-dark">Calender</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-warning w-100 rounded-3 py-3 px-2 "
                                               href="file_manager.html"
                                               target="_blank">
                                                            <span>
                                                              <i class="ph-light  ph-folder-open f-s-30"></i>
                                                            </span>
                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">File
                                                    Manager</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-primary w-100 rounded-3 py-3 px-2 "
                                               href="gallery.html"
                                               target="_blank">
                                                            <span>
                                                              <i class="ph-light  ph-google-photos-logo f-s-30"></i>
                                                            </span>
                                                <p class="mb-0 f-w-500 text-dark">Gallery</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-success w-100 rounded-3 py-3 px-2 "
                                               href="profile.html"
                                               target="_blank">
                                                            <span>
                                                              <i class="ph-light  ph-users-three f-s-30"></i>
                                                            </span>
                                                <p class="mb-0 f-w-500 text-dark">Profile</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="text-light-secondary w-100 rounded-3 py-3 px-2 "
                                               href="kanban_board.html"
                                               target="_blank">
                                                            <span>
                                                              <i class="ph-light  ph-selection-foreground f-s-30"></i>
                                                            </span>
                                                <p class="mb-0 f-w-500 text-dark">Task Board</p>
                                            </a>
                                        </div>
                                        <div class="d-flex-center text-center">
                                            <a class="d-flex-center text-light-secondary w-100 h-100 rounded-3 p-2 dashed-1-secondary"
                                               href="kanban_board.html"
                                               target="_blank">
                                                            <span>
                                                              <i class="ph-light  ph-plus f-s-30"></i>
                                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="header-cart">
                            <a aria-controls="cartcanvasRight"
                               class="d-block head-icon position-relative bg-light-dark rounded-circle f-s-22 p-2"
                               data-bs-target="#cartcanvasRight"
                               data-bs-toggle="offcanvas"
                               href="#" role="button">
                                <i class="ph ph-shopping-cart-simple"></i>
                                <span
                                    class="position-absolute translate-middle badge rounded-pill bg-danger badge-notification">4</span>
                            </a>
                            <div aria-labelledby="cartcanvasRightLabel"
                                 class="offcanvas offcanvas-end header-cart-canvas"
                                 id="cartcanvasRight"
                                 tabindex="-1">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="cartcanvasRightLabel">Cart</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas"
                                            type="button"></button>
                                </div>
                                <div class="offcanvas-body app-scroll p-0">
                                    <div class="head-container">
                                        <div class="head-box">
                                                      <span class="b-1-light bg-light-primary h-45 w-45 d-flex-center b-r-6">
                                                          <img alt="cart" class="img-fluid p-1"
                                                               src="assets/images/header/cart/01.png">
                                                      </span>

                                            <div class="flex-grow-1 ms-2">
                                                <a class="mb-0 f-w-600 f-s-16" href="product_details.html"
                                                   target="_blank"> Backpacks (3<i
                                                        class="ti ti-star-filled text-warning f-s-12"></i>)
                                                </a>
                                                <div>
                                                                <span class="text-dark"><span
                                                                        class="text-secondary f-w-400">size</span> : M</span>
                                                    <span class="text-dark ms-2"><span
                                                            class="text-secondary f-w-400">color</span> :Pink</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <p class="text-muted f-w-500 mb-0">$600.50 x 1</p>
                                            </div>
                                        </div>
                                        <div class="head-box">
                                                        <span class="b-1-light bg-light-primary h-45 w-45 d-flex-center b-r-6">
                                                          <img alt="cart" class="img-fluid p-1"
                                                               src="assets/images/header/cart/05.png">
                                                      </span>
                                            <div class="flex-grow-1 ms-2">
                                                <a class="mb-0 f-w-600 f-s-16" href="product_details.html"
                                                   target="_blank"> Women's Watch (4<i
                                                        class="ti ti-star-filled text-warning f-s-12"></i>)</a>
                                                <div>
                                                                <span class="text-dark"><span
                                                                        class="text-secondary f-w-400">size</span> : S</span>
                                                    <span class="text-dark ms-2"><span
                                                            class="text-secondary f-w-400">color</span> :Rose Gold</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <p class="text-muted f-w-500 mb-0">$519.10 x 2</p>
                                            </div>
                                        </div>
                                        <div class="head-box">
                                                        <span class="b-1-light bg-light-primary h-45 w-45 d-flex-center b-r-6">
                                                          <img alt="cart" class="img-fluid p-1"
                                                               src="assets/images/header/cart/04.png">
                                                      </span>
                                            <div class="flex-grow-1 ms-2">
                                                <a class="mb-0 f-w-600 f-s-16" href="product_details.html"
                                                   target="_blank">Sandals (5 <i
                                                        class="ti ti-star-filled text-warning f-s-12"></i>)</a>
                                                <div>
                                                                <span class="text-dark"><span
                                                                        class="text-secondary f-w-400">size</span> : 8</span>
                                                    <span class="text-dark ms-2"><span
                                                            class="text-secondary f-w-400">color</span> :White</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <p class="text-muted f-w-500 mb-0">$390 x 2</p>
                                            </div>
                                        </div>
                                        <div class="head-box ">
                                                        <span class="b-1-light bg-light-primary h-45 w-45 d-flex-center b-r-6">
                                                          <img alt="cart" class="img-fluid p-1"
                                                               src="assets/images/header/cart/03.png">
                                                      </span>
                                            <div class="flex-grow-1 ms-2">
                                                <a class="mb-0 f-w-600 f-s-16" href="product_details.html"
                                                   target="_blank"> Jackets (3<i
                                                        class="ti ti-star-filled text-warning f-s-12"></i>)</a>
                                                <div>
                                                                <span class="text-dark"><span
                                                                        class="text-secondary f-w-400">size</span> : XL</span>
                                                    <span class="text-dark ms-2"><span
                                                            class="text-secondary f-w-400">color</span> :Blue</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <p class="text-muted f-w-500 mb-0">$300.00 x 2</p>
                                            </div>
                                        </div>
                                        <div class="head-box ">
                                                        <span class="b-1-light bg-light-primary h-45 w-45 d-flex-center b-r-6">
                                                          <img alt="cart" class="img-fluid p-1"
                                                               src="assets/images/header/cart/02.png">
                                                      </span>
                                            <div class="flex-grow-1 ms-2">
                                                <a class="mb-0 f-w-600 f-s-16" href="product_details.html"
                                                   target="_blank"> Shoes (3<i
                                                        class="ti ti-star-filled text-warning f-s-12"></i>)</a>
                                                <div>
                                                                <span class="text-dark"><span
                                                                        class="text-secondary f-w-400">size</span> : 9</span>
                                                    <span class="text-dark ms-2"><span
                                                            class="text-secondary f-w-400">color</span> :White</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <p class="text-muted f-w-500 mb-0">$450.00 x 1</p>
                                            </div>
                                        </div>
                                        <div class="hidden-massage py-4 px-3">

                                            <div>
                                                <i class="ph-duotone  ph-shopping-bag-open f-s-50 text-primary"></i>
                                                <h6 class="mb-0">Your Cart is Empty</h6>
                                                <p class="text-secondary mb-0">Add some items :)</p>
                                                <a class="btn btn-light-primary btn-xs mt-2"
                                                   href="product_details.html">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offcanvas-footer">
                                    <div class="head-box-footer p-3">
                                        <div class="mb-4">
                                            <h6 class="text-muted f-w-600">Total <span
                                                    class="float-end text-primary">$3,468.00</span></h6>
                                        </div>
                                        <div class="header-cart-btn">
                                            <a class="btn btn-primary" href="cart.html" role="button"
                                               target="_blank">
                                                <i class="ti ti-eye"></i> View Cart</a>
                                            <a class="btn btn-success" href="checkout.html" role="button"
                                               target="_blank">
                                                Checkout <i class="ti ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="header-dark">
                            <div class="sun-logo head-icon bg-light-dark rounded-circle f-s-22 p-2">
                                <i class="ph ph-moon-stars"></i>
                            </div>
                            <div class="moon-logo head-icon bg-light-dark rounded-circle f-s-22 p-2">
                                <i class="ph ph-sun-dim"></i>
                            </div>
                        </li>

                        <li class="header-notification">
                            <a aria-controls="notificationcanvasRight"
                               class="d-block head-icon position-relative bg-light-dark rounded-circle f-s-22 p-2"
                               data-bs-target="#notificationcanvasRight"
                               data-bs-toggle="offcanvas"
                               href="#"
                               role="button">
                                <i class="ph ph-bell"></i>
                                <span
                                    class="position-absolute translate-middle p-1 bg-primary border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower"></span>
                            </a>
                            <div aria-labelledby="notificationcanvasRightLabel"
                                 class="offcanvas offcanvas-end header-notification-canvas"
                                 id="notificationcanvasRight" tabindex="-1">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="notificationcanvasRightLabel">
                                        Notification</h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas"
                                            type="button"></button>
                                </div>
                                <div class="offcanvas-body app-scroll p-0">
                                    <div class="head-container">
                                        <div class="notification-message head-box">

                                            <div class="message-content-box flex-grow-1 pe-2">

                                                <a class="f-s-15 text-dark mb-0"
                                                   href="read_email.html"><span
                                                        class="f-w-500 text-dark">Gene Hart</span> wants to
                                                    edit <span
                                                        class="f-w-500 text-dark">Report.doc</span></a>
                                                <div>
                                                    <a class="d-inline-block f-w-500 text-success me-1"
                                                       href="#">Approve</a>
                                                    <a class="d-inline-block f-w-500 text-danger"
                                                       href="#">Deny</a>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <div>
                                                    <span class="badge text-light-primary"> sep 23 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-message head-box">

                                            <div class="message-content-box flex-grow-1 pe-2">
                                                <a class="f-s-15 text-dark mb-0" href="read_email.html">Hey
                                                    <span
                                                        class="f-w-500 text-dark">Emery McKenzie</span>,
                                                    get ready: Your order from <span
                                                        class="f-w-500 text-dark">@Shopper.com</span></a>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <div>
                                                    <span class="badge text-light-primary"> sep 23 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-message head-box">
                                            <div class="message-content-box flex-grow-1 pe-2">
                                                <a class="f-s-15 text-dark mb-0"
                                                   href="read_email.html"><span
                                                        class="f-w-500 text-dark">Simon Young</span> shared
                                                    a file called <span
                                                        class="f-w-500 text-dark">Dropdown.pdf</span></a>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <div>
                                                    <span class="badge text-light-primary"> 30 min</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-message head-box">
                                            <div class="message-content-box flex-grow-1 pe-2">
                                                <a class="f-s-15 text-dark mb-0"
                                                   href="read_email.html"><span
                                                        class="f-w-500 text-dark">Becky G. Hayes</span> has
                                                    added a comment to <span
                                                        class="f-w-500 text-dark">Final_Report.pdf</span></a>
                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <div>
                                                    <span class="badge text-light-primary"> 45 min</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-message head-box">
                                            <div class="message-content-box  flex-grow-1 pe-2">
                                                <a class="f-s-15 text-dark mb-0 "
                                                   href="read_email.html"><span
                                                        class="f-w-600 text-dark">@Romaine</span>
                                                    invited you to a meeting
                                                </a>
                                                <div>
                                                    <a class="d-inline-block f-w-500 text-success me-1"
                                                       href="#">Join</a>
                                                    <a class="d-inline-block f-w-500 text-danger" href="#">Decline</a>
                                                </div>

                                            </div>
                                            <div class="text-end">
                                                <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                                                <div>
                                                    <span class="badge text-light-primary"> 1 hour ago </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hidden-massage py-4 px-3">
                                            <div>
                                                <i class="ph-duotone  ph-bell-ringing f-s-50 text-primary"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Notification Not Found</h6>
                                                <p class="text-dark">When you have any notifications added
                                                    here,will
                                                    appear here.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
          <!-- Main Section start -->
        <main>
            
            @yield('content')
        </main>
        <!-- Main Section end -->
    </div>

    <!-- tap on top -->
    <div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
    </div>

    <!-- Footer Section start -->
     <!-- Footer Section starts-->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-12">
                <p class="footer-text f-w-600 mb-0">Developed By Speedlines Technology</p>
            </div>
            <div class="col-md-3">
                <div class="footer-text text-end">
                    <a class="f-w-500 text-primary" href="mailto:teqlathemes@gmail.com"> Need Help <i
                            class="ti ti-help"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
     

<!--customizer-->
<div id="customizer"></div>

<!-- scripts start-->

<!-- alert js-->
<script src="{{ asset('assets/js/alert.js')}}"></script>
<!-- latest jquery-->
<script src="{{ asset('assets/js/jquery-3.6.3.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- Simple bar js-->
<script src="{{ asset('assets/vendor/simplebar/simplebar.js')}}"></script>

<!-- phosphor js -->
<script src="{{ asset('assets/vendor/phosphor/phosphor.js')}}"></script>

<!-- Customizer js-->
<script src="{{ asset('assets/js/customizer.js')}}"></script>

<!-- prism js-->
<script src="{{ asset('assets/vendor/prism/prism.min.js')}}"></script>

<!-- App js-->
<script src="{{ asset('assets/js/script.js')}}"></script>


<!-- slick-file -->
<script src="{{ asset('assets/vendor/slick/slick.min.js')}}"></script>


<!-- apexcharts js-->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- Project js-->
<script src="{{ asset('assets/js/project_dashboard.js')}}"></script>

<!-- data table js -->
<script src="{{ asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>
<!-- js-->
<script src="{{ asset('assets/js/data_table.js')}}"></script>
<!-- Tooltip js  -->
<script src="{{ asset('assets/js/tooltips_popovers.js')}}"></script>

      @yield('scripts')

</body>
</html>