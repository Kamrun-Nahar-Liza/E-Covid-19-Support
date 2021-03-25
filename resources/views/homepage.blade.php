<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from demo.themeies.com/html/prolexe/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 10:22:30 GMT -->
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

        <!-- NICE SELECT -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/nice-select.css')}}">

        <!-- CORE NAVIGATION -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/coreNavigation-1.1.3.min.css')}}">

        <!-- FANCY-BOX -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/jquery.fancybox.min.css')}}">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/bootstrap.min.css')}}">

        <!-- PERSONAL STYLE -->
        <link rel="stylesheet" href="{{asset('HomePage/assets/scss/style.css')}}">
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('HomePage/assets/css/style.css')}}">
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
                    <li class="active">
                        <a href="{{ url('/') }}"><b>Home</b></a>
                        
                    </li>
                    <!-- <li><a href="./about.html">About</a></li> -->
                    
                            <li><a href="{{ route('service')}}">Service</a></li>
                            
                        
                            <li><a href="{{ route('doctorlist')}}">Doctors</a></li>
                            <li><a href="{{ route('donorlist')}}">Plasma Donors</a></li>
                    
                    <li><a href="{{ url('/') }}">Contact</a></li>
                </ul>

            </nav>
        </header>
        <!-- Header End -->

        <!-- BANNER START -->

        <div class="banner">
            <div class="slider-carousel owl-carousel">
                
                
                
                <div class="single-slide" style="background-image:url('{{asset('HomePage/assets/img/banner/2.jpg')}}');">
                    <div class="container">
                        <div class="slide-caption">
                            <h1>Protect You<br> & Your Family </h1>
                            <p>
                                Patients will get plasma donor from this website. Medical Doctors perform about covid-19 all kinds of symptoms, <br>
                                according to those symptoms they suggest about recovery instructions <br>to
                                patients & plasma donor.

                            </p>
                            <div class="banner-btn">
                                <a href="{{ url('/register') }}" class="btn btn-secondary-filled">Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide" style="background-image:url('{{asset('HomePage/assets/img/banner/1.jpg')}}');">
                    <div class="container">
                        <div class="slide-caption">
                            <h1>Best Covid-19<br> Instructions</h1>
                            <p>
                                Patients will get plasma donor from this website. Medical Doctors perform about covid-19 all kinds of symptoms, <br>
                                according to those symptoms they suggest about recovery instructions <br>to
                                patients & plasma donor. 

                            </p>
                            <div class="banner-btn ">
                                <a href="{{ url('/register') }}" class="btn btn-secondary-filled">Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide" style="background-image:url('{{asset('HomePage/assets/img/banner/3.jpg')}}');">
                    <div class="container">
                        <div class="slide-caption text-sm-right text-left">
                            <h1>We Care <br> For Your Health </h1>
                            <p>
                                Patients will get plasma donor from this website. Medical Doctors perform about covid-19 all kinds of symptoms, <br>
                                according to those symptoms they suggest about recovery instructions <br>to
                                patients & plasma donor.

                            </p>
                            <div class="banner-btn">
                                <a href="{{ url('/register') }}" class="btn btn-secondary-filled">Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider section end -->


        <!-- APPOINTMENT START -->

        <section class=" appointment-section" style="background-color: rgb(196, 203, 221)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="appointment-title text-center">
                            <h2>Welcome to the <span>E- <strong>Covid-19 </strong>Support</span></h2>
                            <p>
                                Patients will get plasma donor from this website. Medical Doctors perform about covid-19 all kinds of symptoms, <br>
                                according to those symptoms they suggest about recovery instructions <br>to
                                patients & plasma donor.<br> They can communicate with doctors through comments & get daily update of covid-19.
                            </p>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </section>

        <!-- APPOINTMENT END -->

        <!-- SERVICE START -->

        <section class="service-section" style="background-color: cadetblue">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Our Available <span>Services</span> </h2>
                            <p>
                                What kind ok the service you can get from us.
                            </p>
                            <div class="section-border">
                                <div class="icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 col-sm-6">
                        <div class="item-block-01 text-center">
                            <div class="item-content">
                                <div class="icon">
                                    <span class=" color-icon"><i class="far fa-clock"></i></span>
                                </div>
                                <h5><a href="#">24/7 Online Service</a></h5>
                                <p>
                                    This system will be avilable for 24/7 hours.<br>
                                    Users will get all updates.
                                </p>
                                <div class="item-btn">
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item-block-01 text-center">
                            <div class="item-content">
                                <div class="icon">
                                    <span class="xicon-monitor color-icon"></span>
                                </div>
                                <h5><a href="#">Emergency Care</a></h5>
                                <p>
                                    In emergency cases patient will get covid-19 instructions and plasma donors.
                                </p>
                                <div class="item-btn">
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item-block-01 text-center">
                            <div class="item-content">
                                <div class="icon">
                                    <span class="xicon-cardiogram color-icon"></span>
                                </div>
                                <h5><a href="#">Covid-19 Recovery Instruction</a></h5>
                                <p>
                                    Registered patient & plasma donor will get best doctor's instruction posts.
                                </p>
                                <div class="item-btn">
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item-block-01 text-center">
                            <div class="item-content">
                                <div class="icon">
                                    <span class="xicon-cardiogram color-icon"></span>
                                </div>
                                <h5><a href="#">Communicate With Doctor</a></h5>
                                <p>
                                    Patient can communicate with doctors though that doctor's recovery instructions.
                                </p>
                                <div class="item-btn">
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item-block-01 text-center">
                            <div class="item-content">
                                <div class="icon">
                                    <span class="xicon-blood color-icon"></span>
                                </div>
                                <h5><a href="#">Plasma Donor</a></h5>
                                <p>
                                    Patient will get plasma donor from this website. They can also see plasma donor's profile. 
                                </p>
                                <div class="item-btn">
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item-block-01 text-center">
                            <div class="item-content">
                                <div class="icon">
                                    <span class="xicon-hospital color-icon"></span>
                                </div>
                                <h5><a href="#">Covid-19 Update</a></h5>
                                <p>
                                    All Users will get daily covid update<br>
                                    from this website.
                                </p>
                                <div class="item-btn">
                                    <a href="#" class="btn btn-secondary">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE END -->

        <!-- ABOUT SECTION START -->

        <section class="about-section" style="background-color: rgb(196, 203, 221)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-2">
                            <h2>Why <span>Choose</span> Us? </h2>
                            <p>
                                What other said about our website.
                            </p>
                            <div class="section-border">
                                <div class="icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="item-block-06">
                            <div class="item-content d-flex text-right">
                                <div class="icon ">
                                    <span class="xicon-bag color-icon"></span>
                                </div>
                                <div class=" ">
                                    <h6><a href="#">Professional Doctors</a></h6>
                                    <p>
                                        Patient & plasma donor will get best<br>
                                        doctors recovery instruction of covid-19.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-block-06">
                            <div class="item-content d-flex text-right">
                                <div class="icon">
                                    <span class="xicon-heart-rate-monitor color-icon"></span>
                                </div>
                                <div class="">
                                    <h6><a href="#">Get Covid-19 Update</a></h6>
                                    <p>
                                        User will get daily update of<br>
                                        covid-19 from this website.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-block-06">
                            <div class="item-content d-flex text-right">
                                <div class="icon">
                                    <span class="xicon-health-report color-icon"></span>
                                </div>
                                <div class="">
                                    <h6><a href="#">Over a years of experience</a></h6>
                                    <p>
                                        This website is very useful and beneficial<br>
                                        for all of the users.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="item-block-06">
                            <div class="item-content d-flex text-left">
                                <div class="icon">
                                    <span class="xicon-blood color-icon"></span>
                                </div>
                                <div class="">
                                    <h6><a href="#">Plasma Donor</a></h6>
                                    <p>
                                        Patient will get plasma donor<br>
                                        from this website.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-block-06">
                            <div class="item-content d-flex text-left">
                                <div class="icon">
                                    <span class="xicon-ambulance1 color-icon"></span>
                                </div>
                                <div class="">
                                    <h6><a href="#">Emergency services</a></h6>
                                    <p>
                                        From this website patient and<br>
                                        plasma donor will get emergency service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-block-06">
                            <div class="item-content d-flex text-left">
                                <div class="icon">
                                    <span class="xicon-stethoscope1 color-icon"></span>
                                </div>
                                <div class="">
                                    <h6><a href="#">We have experienced Doctor's.</a></h6>
                                    <p>
                                        In this website we have so many<br>
                                        experience doctors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT SECTION END -->

        


        <!-- GALLERY SECTION START -->

        <section class="gallery-section" style="background-color: cadetblue">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-3">
                            <h2>Our <span>Gallery</span></h2>
                            <p>
                                What other said about website.
                            </p>
                            <div class="section-border">
                                <div class="icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item-block-02">
                            <a data-fancybox="gallery" href="{{asset('HomePage/assets/img/gallery/1.jpg')}}">
                                <img src="{{asset('HomePage/assets/img/gallery/1.jpg')}}" alt="1">
                                <div class="overlay">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item-block-02">
                            <a data-fancybox="gallery" href="{{asset('HomePage/assets/img/gallery/2.jpg')}}">
                                <img src="{{asset('HomePage/assets/img/gallery/2.jpg')}}" alt="2">
                                <div class="overlay">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item-block-02">
                            <a data-fancybox="gallery" href="{{asset('HomePage/assets/img/gallery/3.jpg')}}">
                                <img src="{{asset('HomePage/assets/img/gallery/3.jpg')}}" alt="3">
                                <div class="overlay">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item-block-02">
                            <a data-fancybox="gallery" href="{{asset('HomePage/assets/img/gallery/7.jpg')}}">
                                <img src="{{asset('HomePage/assets/img/gallery/7.jpg')}}" alt="4">
                                <div class="overlay">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- GALLERY SECTION END -->

        

        <!-- COUNTER SECTION  START-->

        <section class="counter-section">
            
            <div class="container">
                <h2 style="color: cornsilk; text-align:center"><b>Covid Update</b></h2>
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box-item text-center">
                            <div class="icon">
                                <span class="fas fa-user-plus"></span>
                            </div>
                            <span class="counter">{{ $totalinfect }}</span>
                            <h5>Total Infect</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box-item text-center">
                            <div class="icon">
                                <span class="fas fa-chart-pie"></span>
                            </div>
                            <span class="counter">{{ $totaldeath }}</span>
                            <h5>Total Death</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box-item text-center">
                            <div class="icon">
                                <span class="fas fa-chart-bar"></span>
                            </div>
                            <span class="counter">{{ $totalcure }}</span>
                            <h5>Total Cure</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box-item text-center">
                            <div class="icon">
                                <span class="fas fa-user-plus"></span>
                            </div>
                            <span class="counter">{{ $totaltest }}</span>
                            <h5>Total Tested</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
        </section>

        <!-- COUNTER SECTION  END-->

        <!-- DOCTOR SECTION START -->

        {{-- <section class=" doctor-section" style="background-color: rgb(196, 203, 221)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-3">
                            <h2>Qualified the <span>Doctor's</span></h2>
                            <p>
                                Who Is Behind The Best Medical Service In Our Clinic?.
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item-block-04">
                            <div class="item-pic">
                                <img src="{{asset('HomePage/assets/img/doctor/1.jpg')}}" alt="team">
                                <div class="item-overlay">
                                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#Daniel Marlen">Dr. Andrew Berton</a>
                                <span>Outpatient Surgery</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item-block-04">
                            <div class="item-pic">
                                <img src="{{asset('HomePage/assets/img/doctor/3.jpg')}}" alt="team">
                                <div class="item-overlay">
                                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#">Dr. Wahab Apple</a>
                                <span>Heart Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item-block-04">
                            <div class="item-pic">
                                <img src="{{asset('HomePage/assets/img/doctor/2.jpg')}}" alt="team">
                                <div class="item-overlay">
                                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#">Dr. Mackenize</a>
                                <span>Haematology</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item-block-04">
                            <div class="item-pic">
                                <img src="{{asset('HomePage/assets/img/doctor/4.jpg')}}" alt="team">
                                <div class="item-overlay">
                                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <a href="#">Dr. Mackenize</a>
                                <span>Haematology</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <!-- DOCTOR SECTION END -->


        <!-- TESTIMONIAL SECTION START -->

        <section class="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title testimonial-title text-center mb-3">
                            <h2><span>Advice About Covid-19</span></h2>
                            <p>
                                What other said about covid-19.
                            </p>
                            <div class="section-border">
                                <div class="icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel testimonial">
                            <div class="item">
                                <div class="client text-left">
                                    <div class="client-bg d-sm-flex d-block align-items-center">
                                        <img src="{{asset('HomePage/assets/img/testimonials/1.jpg')}}" alt="">
                                        <div class="client-inform">
                                            <p>The key point that needs to be emphasised here is that human to human transmission is not rare with these types of viruses."
                                            </p>
                                            <div class="client-name">
                                                <h6><a href="#">- Dr Clare Wenham</a></h6>
                                                {{-- <span>Outpatient Surgery</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client text-left">
                                    <div class="client-bg d-sm-flex d-block align-items-center">
                                        <img src="{{asset('HomePage/assets/img/testimonials/2.jpg')}}" alt="">
                                        <div class="client-inform">
                                            <p>"We also need to remember this is not the only global health emergency occurring now - Ebola continues across DRC, as does a significant Measles outbreak in that country."
                                            </p>
                                            <div class="client-name">
                                                <h6><a href="#">- Dr Stephen L. Roberts</a></h6>
                                                {{-- <span>Heart Specialist</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL SECTION END -->


        

        

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
                        
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="contact-title text-left">
                            <h5>Get <span>Update</span></h5>
                            <p>
                                We believe that this website will be very helpful for you in yhis pandemic situation.
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
        <script src="{{asset('HomePage/assets/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/jquery.countup.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/jquery.waypoints.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/coreNavigation-1.1.3.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('HomePage/assets/js/script.js')}}"></script>


    </body>


<!-- Mirrored from demo.themeies.com/html/prolexe/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 10:22:30 GMT -->
</html>