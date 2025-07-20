<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from phplaravel-1384472-5380003.cloudwaysapps.com/sign_in_1 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jul 2025 09:54:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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

<title>Sign In Bg </title>

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

    <!-- slick css -->
    <link href="{{ asset('assets/vendor/slick/slick.css" rel="stylesheet')}}">
    <link href="{{ asset('assets/vendor/slick/slick-theme.css" rel="stylesheet')}}">
<link rel="preload" as="style" href="{{ asset('build/assets/style-Cuxwy5N_.css')}}" /><link rel="stylesheet" href="{{ asset('build/assets/style-Cuxwy5N_.css')}}" /><!-- css end !-->
<body>
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <!-- Login to your Account start -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo" href="index.html">
                                    <img alt="#" src="assets/images/logo/3.png" class="">
                                </a>
                            </div>
                            <div class="form_container">

                                <form class="app-form" action="{{ route('authentication-process') }}" method="POST">
                                    <div class="mb-3 text-center">
                                        <h3>Login to your Account</h3>
                                        <p class="f-s-12 text-secondary">Get started with our app, just create an
                                            account and enjoy the experience.</p>
                                    </div>
                                    @if (session('login_error_message'))
                                     <p class="alert alert-danger" align="center">{{session('login_error_message')}}</p>
                                    @endif
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="emailId">Email address</label>
                                        <input class="form-control" type="email" name="email">
                                         @error('email')
                                         <small style="color:red;">{{$message}}</small>
                                         @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" type="password" name="password">
                                        @error('password')
                                         <small style="color:red;">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" id="formCheck1" type="checkbox">
                                        <label class="form-check-label" for="formCheck1">remember me</label>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary w-100" href="index.html" role="button">Sing In</button>
                                    </div>
                                   
                                   <br>
                                    <div class="text-center">
                                        <a class="text-secondary text-decoration-underline"
                                           href="terms_condition.html">Terms of use &amp;
                                            Conditions</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login to your Account end -->
        </main>
        <!-- Body main section ends -->
    </div>
</div>


    <!-- Bootstrap js-->
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>


</body>

<!-- Mirrored from phplaravel-1384472-5380003.cloudwaysapps.com/sign_in_1 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jul 2025 09:54:33 GMT -->
</html>

