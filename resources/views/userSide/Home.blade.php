<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:33:41 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />

    <script src="../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/all.css" />

    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link href="{{asset('css/main.d810cf0ae7f39f28f336.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Medenin</title>
    <style>
       @media (max-width: 450px) { 
            #location{
                width: 234px;
            }
            #doctor_name{
                width: 180px;
            }

        }

    </style>
</head>

<body>

    <header>
        <div class="banner--wrap">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="#" /></a>
                                <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                                        navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="/" id="navbarDropdown" aria-haspopup="true" aria-expanded="false"> Home </a>

                                        </li>
                                        @guest
                                        @if (Route::has('login'))
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{ route('login') }}" id="navbarDropdown1" aria-haspopup="true" aria-expanded="false">Login</a>

                                        </li>
                                        @endif
                                        @if (Route::has('register'))
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{ route('register') }}" id="navbarDropdown1" aria-haspopup="true" aria-expanded="false">Sign Up</a>

                                        </li>
                                        @endif

                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('profile',Auth::user()->id) }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest




                                        <li>
                                            <ul class="cart-seperate">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="fas fa-search fa-top-search"></i></a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-outline-primary appointment-btn-top" href="appointment.html">Appointment</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="banner-slider">
                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">

                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd" d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z" fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd" clip-rule="evenodd" d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z" fill="#4D72D0" />
                                    </svg>
                                    <img src="images/hero-doctor-1.png" class="img-fluid animated-hero" alt="hero" />
                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">

                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd" d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z" fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd" clip-rule="evenodd" d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z" fill="#4D72D0" />
                                    </svg>
                                    <img src="images/pricing-img-removebg-preview.png" class="img-fluid animated-hero" alt="hero" />
                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">

                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd" d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z" fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd" clip-rule="evenodd" d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z" fill="#4D72D0" />
                                    </svg>
                                    <img src="images/play-img.png" class="img-fluid animated-hero" alt="hero" />
                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </header>
    @include('sweetalert::alert')

    <section class="about-section" style="margin-top: 25px;">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('search')}}" method="get">
                    <h3 style="text-align: center; padding: 10px;">Find your clinic</h3>

                        <div class="booking-form row ">

                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="card-body">
                                    <h5 class="card-title">specialty</h5>
                                    <select name="category_id" class="multiselect-dropdown form-control">
                                        <option value="0">Search by specialty</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-sm-12" style="    display: flex;
                            align-items: center;
                            margin-top: 30px;
                            justify-content: center;">
                                <input  id="location" name="location" type="text" class="form-control" placeholder="Search by Location" />
                            </div>
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="card-body">
                                    <h5 class="card-title">Select insurance</h5>
                                    <select name="INSURANCE" class="multiselect-dropdown form-control">
                                        <option value="0">Select Insurance</option>
                                        <option value="ACI - Nat Health">ACI - Nat Health</option>
                                        <option value="ACT - Nat Health">ACT - Nat Health</option>
                                        <option value="AJIG - Nat Health">AJIG - Nat Health</option>
                                        <option value="Al Aqsa Insurance Services Est">Al Aqsa Insurance Services Est</option>
                                        <option value="Al Fakher Tobacco - Nat Health">Al Fakher Tobacco - Nat Health</option>
                                        <option value="Al Hussein bin Tala University - Nat Health">Al Hussein bin Tala University - Nat Health</option>
                                        <option value="Al Ittihad Schools insurance">Al Ittihad Schools insurance</option>
                                        <option value="Al Khalidi Hospital Insurance">Al Khalidi Hospital Insurance</option>
                                        <option value="Al Manara Insurance Co">Al Manara Insurance Co</option>
                                        <option value="Al Nisr Al Arabi Insurance">Al Nisr Al Arabi Insurance</option>
                                        <option value="Al Yaqeen Association - Nat Health">Al Yaqeen Association - Nat Health</option>
                                        <option value="Al-Israa University">Al-Israa University</option>
                                        <option value="Allianz - Nat Health">Allianz - Nat Health</option>
                                        <option value="AlRai News - Nat Health">AlRai News - Nat Health</option>
                                        <option value="Applied Sciences University">Applied Sciences University</option>
                                        <option value="Aqaba Logistics Village - Nat Health">Aqaba Logistics Village - Nat Health</option>
                                        <option value="Aqaba Water - Nat Health">Aqaba Water - Nat Health</option>
                                        <option value="Arab Bank">Arab Bank</option>
                                        <option value="Arab Company for White Cement">Arab Company for White Cement</option>
                                        <option value="Arab Insurance Company">Arab Insurance Company</option>
                                        <option value="Arab Insurance Group">Arab Insurance Group</option>
                                        <option value="Arab Jordan Investment Bank">Arab Jordan Investment Bank</option>
                                        <option value="Arab Orient Insurance">Arab Orient Insurance</option>
                                        <option value="Axa - Nat Health">Axa - Nat Health</option>
                                        <option value="Balqa Applied University">Balqa Applied University</option>
                                        <option value="Bupa international">Bupa international</option>
                                        <option value="Central Bank of Jordan">Central Bank of Jordan</option>
                                        <option value="Delta Insurance Co">Delta Insurance Co</option>
                                        <option value="Eico - Nat Health">Eico - Nat Health</option>
                                        <option value="Emirates Jordan Insurance Scoop">Emirates Jordan Insurance Scoop</option>
                                        <option value="Euro Arab Insurance Group">Euro Arab Insurance Group</option>
                                        <option value="First Finance Co">First Finance Co</option>
                                        <option value="First Finance Co">First Insurance co</option>
                                        <option value="General Electricity Generation">General Electricity Generation</option>
                                        <option value="Geo Blue Health Insurance">Geo Blue Health Insurance</option>
                                        <option value="Geo Blue Health Insurance">Globe Med</option>
                                        <option value="Housing Ban">Housing Bank</option>
                                        <option value="Ibn Al Haytham Hospital Insurance">Ibn Al Haytham Hospital Insurance</option>
                                        <option value="International Consultancy For Health Insurance">International Consultancy For Health Insurance</option>
                                        <option value="Irbid Electricity">Irbid Electricity</option>
                                        <option value="Iris Guard - Nat Health">Iris Guard - Nat Health</option>
                                        <option value="Islamic Center Association - Nat Health">Islamic Center Association - Nat Health</option>
                                        <option value="JERCO - Nat Health">JERCO - Nat Health</option>
                                        <option value="JMRC - Nat Health">JMRC - Nat Health</option>
                                        <option value="JERCO - Nat Health">JERCO - Nat Health</option>
                                        <option value="NTD - Nat Health">NTD - Nat Health</option>
                                        <option value="Yarmouk Insurance Co">Yarmouk Insurance Co</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-3 col-sm-12" style="    display: flex;
                                align-items: center;
                                margin-top: 30px;
                                justify-content: center;">
                                <input  id="doctor_name" name="doctor_name" type="text" class="form-control" placeholder="Search by doctor name" />
                                <button style="  margin-left: 5px;
    background-color: #5CC198;" type="submit" class="btn"><img src="{{asset('images/magnifier.png')}}" alt=""></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="container ">
            <div class="row space">

                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="images/service-thumbnail01.png" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Specialised Service</h4>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="images/service-thumbnail02.png" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>24/7 Advanced Care</h4>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-thumbnail border-0 d-flex flex-fill">
                        <img src="images/service-thumbnail03.png" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Get Result Online</h4>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            
        </div>
    </section>


    <section class="space light">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-style1">
                        <span>Our Services</span>
                        <h2>High Quality Services for You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider">
                        <div class="service-block yellow">
                            <img src="images/service-icon1.png" alt="#">
                            <h3>Dental Care</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg1.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block green">
                            <img src="images/service-icon2.png" alt="#" />
                            <h3>Eye Care</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore</p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg2.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block blue">
                            <img src="images/service-icon3.png" alt="#" />
                            <h3>Allergic Issue</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore
                            </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg3.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block green">
                            <img src="images/service-icon3.png" alt="#" />
                            <h3>Allergic Issue</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore
                            </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg4.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center service-help_link">
                        Contact us for better help and services.
                        <a href="#">Let’s get started</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="space why-choose-block">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <h2>
                        Why Choose<br /> Mededin Care?
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Advanced Care</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Online Medicine</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Medical & Surgical</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Lab Tests</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-dark" tabindex="0">MAKE APPOINTMENT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 offset-lg-1">
                    <div class="why-choose_right">
                        <h2>
                            Emergency?<br /> Contact Us.
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br /> sed do eius mod tempor
                            incididunt ut labore et dolore<br /> magna aliqua. Ut enim ad minim veniam
                        </p>
                        <div class="why-choose_list">
                            <div class="choose-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="why-choose_list-content">
                                <span>Call us now</span>
                                <h3>0799161600</h3>
                            </div>
                        </div>
                        <div class="why-choose_list">
                            <div class="choose-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="why-choose_list-content">
                                <span>Mail us</span>
                                <h3><a style="color: inherit;" href="mailto: ali.hus.obeidat@gmail.com" class="__cf_email__" data-cfemail="89e0e7efe6c9e4ecedece7e0e7a7eae6e4">ali.hus.obeidat@gmail.com</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="our-team">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span>---- Our Team ----</span>
                        <h2>Our Dedicated Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="doctors-slider">
                        <div class="team-img_block yellow">
                            <div class="team-img-socila-block">
                                <img src="images/team1.jpg" class="img-fluid" alt="#" />
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <h4>Dr. Mary Joe</h4>
                            <p>Cardiologist Specialist</p>
                        </div>
                        <div class="team-img_block green">
                            <div class="team-img-socila-block">
                                <img src="images/team2.jpg" class="img-fluid" alt="#" />
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <h4>Thomas Jack</h4>
                            <p>Neurology Specialist</p>
                        </div>
                        <div class="team-img_block blue">
                            <div class="team-img-socila-block">
                                <img src="images/team3.jpg" class="img-fluid" alt="#" />
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <h4>Dr. Mary Joe</h4>
                            <p>Cardiologist Specialist</p>
                        </div>
                        <div class="team-img_block yellow">
                            <div class="team-img-socila-block">
                                <img src="images/team4.jpg" class="img-fluid" alt="#" />
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <h4>Dr. Hessy Hanna</h4>
                            <p>Radiology Specialist</p>
                        </div>
                        <div class="team-img_block blue">
                            <div class="team-img-socila-block">
                                <img src="images/team5.jpg" class="img-fluid" alt="#" />
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <h4>Dr. Mary Joe</h4>
                            <p>Cardiologist Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="testimonial pb-0">
        <div class="container container-custom">
            <div class="col-md-12">
                <div class="heading-style1">
                    <span>Testimonials</span>
                    <h2>What Our Clients Say</h2>
                </div>
                <div class="testi-slider">
                    <div class="testimonial-wrap">
                        <img src="images/testi-img1.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="images/testi-img2.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <img src="images/testi-img1.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="images/testi-img2.jpg" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer>
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="foot-contact-block">
                        <img src="images/foot-logo.png" class="img-fluid" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet, consect <br /> etur adipisicing elit, sed do eius mod <br />
                            tempor incididunt ut labore et dolore<br /> magna aliqua. Ut enim ad minim
                        </p>
                        <a href="tel:31234567890">
                            <h4><i class="fas fa-phone"></i>0799161600</h4>
                        </a>
                        <a href="mailto: ali.hus.obeidat@gmail.com">
                            <h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="137a7d757c537e767776777a7d3d707c7e">ali.hus.obeidat@gmail.com</span></h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>About Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Mission</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Blogs & News</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Faq</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="foot-link-box">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Pediatrics</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Dermatology</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Cardiology</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Psychological</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Surgery</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Family Medicine</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box footlink-box_btn">
                        <a href="#" class="btn btn-outline-success">Find a Doctor</a>
                        <a href="#" class="btn btn-outline-success">Career</a>
                        <a href="#" class="btn btn-outline-success">Newsletter</a>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© Tebco 2020 Allright Reserved</p>
                        <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/slick.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/script.js"></script>
    <script type="text/javascript" src="{{asset('main.d810cf0ae7f39f28f336.js')}}"></script>

</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:33:57 GMT -->

</html>