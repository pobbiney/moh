<!doctype html>
<html lang="en" class="theme-fs-sm" data-bs-theme="light" data-bs-theme-color="default" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting=" " data-rightJoin="Sign Up">Sign Up</title>
    <meta name="description"
        content="HR-Health Training Institutions">
    <meta name="keywords"
        content="HR-Health Training Institutions">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="XRay ">
    <!-- Config Options -->
    <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;XRay&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;XRay&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-sm&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-color&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[&quot;sidebar-hover&quot;,&quot;sidebar-mini&quot;]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;sidebar-default navs-pill-all&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/login/assets/images/favicon.ico')}}" />
    
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/core/libs.min.css')}}" />
    
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/flaticon/css/flaticon.css')}}" />
    
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/font-awesome/css/font-awesome.min.css')}}" />
    
    
    <!-- Xray Design System Css -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/xray.min%EF%B9%96v=1.2.0.css')}}" />
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/custom.min%EF%B9%96v=1.2.0.css')}}" />
    
    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/rtl.min%EF%B9%96v=1.2.0.css')}}" />
    
    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/css/customizer.min%EF%B9%96v=1.2.0.css')}}" />
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/dripicons/webfont/webfont.css')}}" />
    
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/ionicons/css/ionicons.min.css')}}" />
    
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/line-awesome/css/line-awesome.min.css')}}" />
    
    <!-- Phosphor icons  -->
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/phosphor-icons/Fonts/regular/style.css')}}">
    </link>
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/phosphor-icons/Fonts/duotone/style.css')}}">
    </link>
    <link rel="stylesheet" href="{{ asset('frontend/login/assets/vendor/phosphor-icons/Fonts/fill/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    </link> </head>

<body class="  sidebar-main-menu">
    <span class="screen-darken"></span>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                {{-- <img src="{{ asset('frontend/login/assets/images/loading.png')}}" alt="loader" class="light-loader img-fluid " width="200"> --}}
            </div>
        </div>    </div>
    <!-- loader END -->
    <div class="content-bg">
      @if (session('message'))
        <div class="alert alert-left alert-success alert-dismissible fade show mb-3 d-flex gap-2" role="alert">
          <i class="ri-thumb-up-line"></i>
          <span> {{session('message')}}</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session('message_error'))
        <div class="alert alert-left alert-danger alert-dismissible fade show mb-3 d-flex gap-2" role="alert">
          <i class="ri-thumb-down-line"></i>
          <span> {{session('message_error')}}</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
<section class="sign-in-page custom-auth-height d-md-flex align-items-center">
  
  <div class="container sign-in-page-bg mt-5 mb-md-5 mb-0 p-0">
    <div class="row">
      <div class="col-md-6 text-center z-2">
        <div class="sign-in-detail text-white">
          
            <img class="logo" src="{{asset('frontend/assets/media/image/logo/logo-black.png')}}" width="300" alt="logo" style="margin-top: -50px;margin-left:150px"><br>
            <!-- <img src="https://templates.iqonic.design/xray-dist/html/assets/images/logo-white.png" class="img-fluid" alt="" /> -->
          
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                 <img src="{{ asset('frontend/login/assets/images/login4x.png')}}" class="d-block w-100" alt="..." />
                 
              </div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 position-relative z-2">
        
        <h1 class="mb-0" style="margin-top: 25px;color:white">Sign Up</h1>
        <div class="sign-in-from d-flex flex-column justify-content-center">
          
          <form class="mt-4" action="{{ route('register-user-process')}}" method="POST">
            @csrf
            <p>Enter your details to register .</p>
            <div class="row">
                <div class="col-md-6 position-relative z-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input   type="text" class="form-control" name="lastname"
                        value="" autocomplete="last_name" autofocus
                        placeholder="Enter Last name">
                          @error('lastname') <small style="color:red"> {{ $message}}</small> @enderror
                    </div>
                </div>
              <div class="col-md-6 position-relative z-2">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input  type="text" class="form-control" name="firstname"
                  value="" autocomplete="first_name" autofocus
                  placeholder="Enter First name">
                  @error('firstname') <small style="color:red"> {{ $message}}</small> @enderror
                </div>
              </div>
            </div>
            <div class="row">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email"/>
                  @error('email') <small style="color:red"> {{ $message}}</small> @enderror
              </div>
            </div>
            <div class="row">
              
                <div class="col-md-6 position-relative z-2">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Staff ID</label>
                    <input   type="number" class="form-control" name="staff_id"
                      value="" autocomplete="email" placeholder="Enter Your Staff ID">
                      @error('staff_id') <small style="color:red"> {{ $message}}</small> @enderror
                  </div>
              </div>
              <div class="col-md-6 position-relative z-2">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input   type="number" class="form-control" name="phone"
                  value="" autocomplete="email" placeholder="Enter Your Phone No">
                  @error('phone') <small style="color:red"> {{ $message}}</small> @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
             <input class="form-control" type="password" name="password" placeholder="Enter Password">
               @error('password') <small style="color:red"> {{ $message}}</small> @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input   type="password" class="form-control"
                name="confirm_password"
              autocomplete="new-password" placeholder="Enter Confirm Password">
               @error('confirm_password') <small style="color:red"> {{ $message}}</small> @enderror
            </div>
            <div class="d-flex w-100 justify-content-between align-items-center w-100 mt-3">
              
              <button type="submit" class="btn btn-primary-subtle float-end">Sign
                Up</button>
                <span class="dark-color d-inline-block line-height-2">I Already have an Account
                  <a href="{{url('userAuth/login')}}"><b>LogIn</b></a></span>
            </div>
            <div class="sign-info d-flex justify-content-between flex-column flex-lg-row align-items-center">
              
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


        </main>

    </div>
   
    
    <!-- Library Bundle Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->
    
    
    <!-- Slider-tab Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/plugins/slider-tabs.js"></script>
    
    
    <!-- fslightbox Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/plugins/fslightbox.js" defer></script>
    
    
    <!-- am-chart Script -->
    
    <script src="https://templates.iqonic.design/xray-dist/html/assets/vendor/amcharts/core.js"></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/vendor/amcharts/charts.js"></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/vendor/amcharts/themes/animated.js"></script>
    
    
    
    
    <!-- Lodash Utility -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/iqonic-script/utility.min.js"></script>
    <!-- Settings Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/iqonic-script/setting.min.js"></script>
    <!-- Settings Init Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/iqonic-script/setting-init.js"></script>
    <!-- External Library Bundle Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/core/external.min.js"></script>
    
    <!-- Dashboard Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/charts/dashboard.js?v=1.2.0" defer></script>
    <!-- Hopeui Script -->
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/xray.js?v=1.2.0" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/xray-advance.js?v=1.2.0" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/sidebar.js?v=1.2.0" defer></script>
    
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/dashboard/doctor-dashboard.js?v=1.2.0" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/dashboard/dashboard-1.js?v=1.2.0" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/dashboard/dashboard-2.js?v=1.2.0" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/dashboard/patient-dashboard.js?v=1.2.0" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/dashboard/covid19-dashboard.js?v=1.2.0" defer></script>
    
    
    <!-- All charts script -->
    
    
    
    
    
    
    
    <!-- e-chart script -->
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/Setting/enchanter.js" defer></script>
    <script src="https://templates.iqonic.design/xray-dist/html/assets/js/plugins/countdown.js"></script></body>

</html>