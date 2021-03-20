{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from demo.themeies.com/html/prolexe/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 10:22:30 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E-Covid-19 Support</title>
        <link rel="shortcut icon" href="{{asset('HomePage/assets/img/logo/favicon.png')}}">

        <!-- FONT_AWESOME -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/fontawesome.min.css')}}">

        <!-- THEMIFY ICON -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/themify-icons.css')}}">

        <!-- X-ICON -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/xicon.css')}}">

        <!-- OWL CAROUSEL -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/owl.carousel.min.css')}}">

        <!-- CORE NAVIGATION -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/coreNavigation-1.1.3.min.css')}}">

        <!-- NICE SELECT -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/nice-select.css')}}">


        <!-- FANCY-BOX -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/jquery.fancybox.min.css')}}">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/bootstrap.min.css')}}">

        <!-- PERSONAL STYLE -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/scss/style.css')}}">
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/responsive.css')}}">
    </head>

    <body>

        <!-- Preloader -->

        <div id="preloader">
            <div id="status">
                <img src="{{asset('HomePage/assets/img/logo/favicon.png')}}" alt="perloader">
            </div>
        </div>

        <!-- Header Top Bar Start -->

        <div class="header-top-bar d-md-block d-none">
            <div class="container">
                <div class="head-content d-md-flex d-block align-items-center">
                    <div class="logo d-none d-lg-block">
                        
                        <a href="home.html"><img src="{{asset('HomePage/assets/img/logo/favicon.png')}}" alt=""></a>
                        
                        
                    </div>
                    <div style="margin-left: 10px"><h3 style="color: rgb(52, 52, 109)"> E-Covid-19 Support</h3></div>
                    <div class="ml-auto content">
                        <i class="ti-time"></i>
                        <b>24/7 Hours</b> <br>
                        
                    </div>
                    <div class=" content">
                        <i class="ti-mobile"></i>
                        <div class="">
                            <a href="tel:321125152"><b>(+001) 321-125-152</b></a>
                            <br>
                            <a href="mailto:contact@Prolexe.com"><b>e_covidsupport@gmail.com</b></a>
                        </div>
                    </div>
                    <div class="content">
                        <i class="ti-location-pin"></i>
                        <b>www.ecovidsupport.com</b>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Start -->

        <header class="header" style="background-color: rgb(198, 201, 209)">
            <nav class="">
                <!-- Mobile -->
                <div class="nav-header right">
                    <a href="home.html" class="brand d-lg-none d-block">
                        <img src="{{asset('HomePage/assets/img/logo/logo.png')}}" alt="">
                    </a>
                    <button class="toggle-bar"><span class="fa fa-bars"></span></button>
                </div>
                <div class="header-btn">
                    <a href="{{ url('/register') }}" class="btn btn-secondary">
                        <i class="fas fa-user-lock"></i><span><b>Registration</b></span></a>
                    <a href="{{ url('/login') }}" class="btn btn-secondary">
                        <i class="fas fa-lock"></i><span><b>Login</b></span></a>
                        
                </div>
                
                <!-- Mobile -->
                <ul class="menu">
                    <li class="active dropdown">
                        <a href="home.html">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="home.html">Home-01</a></li>
                            <li><a href="home-02.html">Home-02</a></li>
                            <li><a href="home-03.html">Home-03</a></li>
                            <li><a href="home-04.html">Home-04</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="./about.html">About</a></li> -->
                    <li class="dropdown">
                        <a href="#">Service</a>
                        <ul class="dropdown-menu">
                            <li><a href="service-01.html">Service-01</a></li>
                            <li><a href="service-02.html">Service-02</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#">Department</a>
                                <ul class="dropdown-menu left-auto">
                                    <li><a href="department-01.html">Department-01</a></li>
                                    <li><a href="department-02.html">Department-02</a> </li>
                                    <li><a href="department-03.html">Department-03</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Doctor</a>
                                <ul class="dropdown-menu left-auto">
                                    <li><a href="doctor-01.html">Doctor-01</a></li>
                                    <li><a href="doctor-02.html">Doctor-02</a> </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="coming-soon.html">Coming-Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#">Blog-page</a>
                                <ul class="dropdown-menu left-auto">
                                    <li><a href="blog-01.html">Blog-01</a></li>
                                    <li><a href="blog-02.html">Blog-02</a> </li>
                                    <li><a href="blog-03.html">Blog-03</a></li>
                                    <li><a href="blog-04.html">Blog-04</a> </li>
                                    <li><a href="blog-05.html">Blog-05</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog-Single</a>
                                <ul class="dropdown-menu left-auto">
                                    <li><a href="blog_single-01.html">Blog-Single-01</a></li>
                                    <li><a href="blog_single-02.html">Blog-Single-02</a> </li>
                                    <li><a href="blog_single-03.html">Blog-Single-03</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Gallery</a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery-01.html">Gallery-01</a></li>
                            <li><a href="gallery-02.html">Gallery-02</a></li>
                            <li><a href="gallery-03.html">Gallery-03</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Shop</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-single.html">Shop-Single</a></li>
                            <li><a href="shop-left-side.html">Shop-left-Side</a></li>
                            <li><a href="shop-right-side.html">Shop-Right-Side</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </nav>
        </header>

        <!-- Header End -->


        <!-- Shop PAGE BANNER -->

        {{-- <div class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-banner-content">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h6 class="text-left text-capitalized">Login Page</h6>
                                    <h2>Login Now</h2>
                                </div>
                                <div class="link text-sm-right text-left">
                                    <a href="home.html">Home <i class="ti-angle-double-right"></i></a>
                                    Login
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Shop PAGE BANNER  END-->

        <!-- SIGN UP FORM START -->

        <section class="sign-up-section" style="background-color: white)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="sign-up-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="sign-up-title">
                                            <h3 style="text-align: center">Login Account</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                                 placeholder="Email"  style="border-color: cadetblue">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>

        

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input id="password"  type="password" 
                                                placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                                style="border-color: cadetblue">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>

                        

                                    <div class="col-lg-6 col-sm-6 form-condition">
                                        <div class="agree-label">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="border-color: cadetblue">
                                            Remember Me
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-secondary" >
                                            Sign In Now
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif

                                    </div>



                                    <div class="col-12">
                                        <p class="account-desc">
                                            Don’t have an account?
                                            <a href="{{ route('register') }}">Sign Up</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="image">
                            <img src="{{asset('HomePage/assets/img/register/11.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SIGN UP PAGE START -->


        <!-- CONTACT SECTION START -->

        <section class="contact-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="contact-title text-left">
                            <h5>E- <span>Covid-19</span> Support</h5>

                            <p>
                                We believe that this website will be very helpful for you.
                            </p>
                            <div class="sub-title mt-4">
                                <h6 class="mb-4">E- <span>Covid-19</span> Support</h6>
                                <p>Online Service
                                    
                                </p>
                            </div>
                            <div class="contact-link">
                                <h6>Phone: <a href="#"> (123 4567 890)</a></h6>
                                <h6>Fax: <a href="#"> (123 4567 890)</a></h6>
                                <h6>Email: <a href="#"> www.ecovidsupport.com</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="contact-title text-left">
                            <h5>Our <span>Service</span></h5>
                            <div class="contact-link-post">
                                <li>
                                    <a href="#"> <i class="ti-angle-right"></i>24/7 Service </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ti-angle-right"></i>Doctor Instructions</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="ti-angle-right"></i>Plasma Post</a>
                                </li>
                                
                                <li>
                                    <a href="#"> <i class="ti-angle-right"></i> Emergency Care</a>
                                </li>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="contact-title text-left">
                            <h5>Opening <span>Hours</span></h5>
                            <p>
                                If you need a treatment instruction about covid-19 and plasma then this website is for you.
                            </p>
                            <p>
                                24 Hours 
                            </p>
                            <p>
                                7 Days
                            </p>
                        </div>
                        {{-- <div class="day-time">
                            <div class="d-flex justify-content-between mb-3">
                                Saturday
                                <a href="#">9.30 - 15.30</a>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                Sunday
                                <a href="#">9.30 - 15.30</a>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                Monday
                                <a href="#">9.30 - 15.30</a>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                Tuesday
                                <a href="#">9.30 - 17.00</a>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                Wednesday
                                <a href="#">9.30 - 17.00</a>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                Thursday
                                <a href="#">24-Hour Shift</a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="contact-title text-left">
                            <h5>Get <span>Update</span></h5>
                            <p>
                                We believe that this website will be very helpful for you in this pandemic situation.
                            </p>
                        </div>
                        
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- CONTACT SECTION END -->

        <!-- FOOTER START -->

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content d-md-flex justify-content-between align-items-center text-center">
                            <p>Copyright © 2021 <a href="">E-Covid-19 Support</a> All rights
                                reserved.
                            </p>
                            <div class="footer-link d-md-flex text-center">
                                <a href="#">Terms & Condition</a>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- FOOTER END -->


        <script src="{{asset('HomePage/assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/coreNavigation-1.1.3.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/script.js')}}"></script>


    </body>


<!-- Mirrored from demo.themeies.com/html/prolexe/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 10:22:35 GMT -->
</html>

