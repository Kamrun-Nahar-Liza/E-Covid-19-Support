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
                    @auth
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-secondary">Sign out</a>
 
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                              </form>
                    @else     
                    <a href="{{ url('/register') }}" class="btn btn-secondary">
                        <i class="fas fa-user-lock"></i><span><b>Registration</b></span></a>
                    <a href="{{ url('/login') }}" class="btn btn-secondary">
                        <i class="fas fa-lock"></i><span><b>Login</b></span></a>
                    @endauth
                    
                        
                </div>
                
                <!-- Mobile -->
                <ul class="menu">
                    <li >
                        <a href="{{ url('/') }}"><b>Home</b></a>
                        
                    </li>
                    <!-- <li><a href="./about.html">About</a></li> -->
                    
                            <li ><a href="{{ route('service')}}">Service</a></li>
                            
                        
                            <li ><a href="{{ route('doctorlist')}}">Doctors</a></li>
                            <li class="active"><a href="{{ route('donorlist')}}">Plasma Donors</a></li>
                    
                    <li><a href="{{ url('/') }}">Contact</a></li>
                </ul>

            </nav>
        </header>

        <!-- Header End -->


        <!-- DOCTOR SECTION START -->

        <section class=" doctor-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-3">
                            <h2>Plasma Donors</span></h2>
                            <p>
                                You can request them for donating plasma
                            </p>
                            <div class=" section-border">
                                <div class="icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    @foreach($plasmaprofiles as $profile)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item-block-07">
                            <div class="item-pic">
                                <img src="{{ asset('uploads/plasmadonor/' . $profile->profile_pic) }}" alt="team">
                                <div class="item-overlay">
                                    <div class="icon">
                                        <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#">{{ $profile->first_name }}{{ $profile->last_name }}</a>
                                <span>{{ $profile->country }}</span>
                                <span>{{ $profile->blood_group }}</span>
                            </div>
             
                                
                            
                            <div style="text-align: center"><a href="{{ route('plasmarequests.show', $profile->id)}}" class="btn btn-success">
                                <i class="fa fa-external-link-square">  Send Request</i>
                            </a></div>
                            
                        </div>
                    </div>
                    @endforeach
                </div>
                
                
            </div>
        </section>
        <!-- DOCTOR SECTION END -->




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
