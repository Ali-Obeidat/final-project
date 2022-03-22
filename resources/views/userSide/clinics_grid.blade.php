<!doctype html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:23 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Doctors</title>
</head>
<style>
    @media screen and (max-width: 480px) {
        #search {
            display: none;
        }
    }
</style>

<body>


  
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="#"></a>
                            </div>
                            <div class="col-md-9 d-flex align-items-end">
                                <ul class="ml-auto">
                                    <li>
                                        <img src="{{asset('images/mail-icon.png')}}" alt="#">
                                        <div>
                                            <span>Mail us</span>
                                            <h4><a href="mailto: ali.hus.obeidat@gmail.com" class="__cf_email__" data-cfemail="c7aea9a1a887aaa2a3a2a9aea9">ali.hus.obeidat@gmail.com</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('images/call-icon.png')}}" alt="#">
                                        <div>
                                            <span>Toll Free</span>
                                            <h4>0799161600</h4>
                                        </div>
                                    </li>
                                    <li class="appointment-btn">
                                        <a href="appointment.html" class="btn btn-primary">Make Appointment</a>
                                        <i class="fas fa-search"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="light nav-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto nav-sub">
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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



                            </ul>
                            <ul class="nav-icon-wrap">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-bars"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <section class="space sub-header" style="height: 180px;
    display: flex;
    justify-content: center;
    align-items: center;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-2">
                    <div class="sub-header_content">

                        <span><i>Home / Blog List</i></span>
                    </div>
                </div>
                <div class="row" id="search">
                    <div class="col-md-12">
                        <form action="{{route('search')}}" method="get">
                            <div class="booking-form row " style="background: none !important;">

                                <div class="col-md-3 col-sm-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Category</h5>
                                        <select name="category_id" class="multiselect-dropdown form-control">
                                            <option value="0">Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12" style="    display: flex;
                            align-items: center;
                            margin-top: 30px;">
                                    <input style="" name="location" type="text" class="form-control" placeholder="Search by Location" />
                                </div>
                                <div class="col-md-3 col-sm-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Select insurance</h5>
                                        <select name="INSURANCE" class="multiselect-dropdown form-control">
                                            <option value="0">Select Category</option>
                                            <option value="asda">asda</option>
                                            <option value="">$category->name</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-3 col-sm-12" style="    display: flex;
                                align-items: center;
                                margin-top: 30px;">
                                    <input name="doctor_name" type="text" class="form-control" placeholder="Search by doctor name" />
                                    <button style="    margin-left: 5px;
    background-color: #5CC198;" type="submit" class="btn"><img src="{{asset('images/magnifier.png')}}" alt=""></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="space">
        <div class="" style="margin-left: 55px;
    margin-right: 55px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span><i>---- Clinics ----</i></span>
                        <h3>Book a visit with Best Doctors in Jordan in a click.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <!-- <div class="blog-sidebar_heading">
                            <h4>Search</h4>
                        </div> -->
                        <!-- <div class="blog-sidebar_wrap">
                            <div class="blog-sidebar_content blog-sidebar_search">
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search here">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                    <div class="blog-sidebar">
                        <!-- <div class="blog-sidebar_heading">
                            <h4>Popular Posts</h4>
                        </div>
                        <div class="blog-sidebar_wrap">
                            <div class="blog-sidebar_content">
                                <a href="#" class="thumbnail-wrap">
                                    <img src="images/thambnail-1.jpg" alt="#">
                                    <div class="thumbnail-hover">
                                        <i class="fas fa-external-link-alt"></i>
                                    </div>
                                </a>
                                <div class="thumbnail-text_wrap">
                                    <p>Lorem ipsum dolor sit amet,<br> consectetur..
                                    </p>
                                    <span>June 25, 2019</span>
                                </div>
                            </div>
                            <div class="blog-sidebar_content">
                                <a href="#" class="thumbnail-wrap">
                                    <img src="images/thambnail-2.jpg" alt="#">
                                    <div class="thumbnail-hover">
                                        <i class="fas fa-external-link-alt"></i>
                                    </div>
                                </a>
                                <div class="thumbnail-text_wrap">
                                    <p>Lorem ipsum dolor sit amet,<br> consectetur..
                                    </p>
                                    <span>June 25, 2019</span>
                                </div>
                            </div>
                            <div class="blog-sidebar_content">
                                <a href="#" class="thumbnail-wrap">
                                    <img src="images/thambnail-3.jpg" alt="#">
                                    <div class="thumbnail-hover">
                                        <i class="fas fa-external-link-alt"></i>
                                    </div>
                                </a>
                                <div class="thumbnail-text_wrap">
                                    <p>Lorem ipsum dolor sit amet,<br> consectetur..
                                    </p>
                                    <span>June 25, 2019</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="blog-sidebar">
                        <!-- <div class="blog-sidebar_heading">
                            <h4>Categories</h4>
                        </div>
                        <div class="blog-sidebar_wrap">
                            <ul class="blog-sidebar_category">
                                <li><a href="#">Dental Care</a> <span>15</span></li>
                                <li><a href="#">Eye Care</a> <span>11</span></li>
                                <li><a href="#">Allergic Issue</a> <span>6</span></li>
                                <li><a href="#">Cardiology</a> <span>9</span></li>
                                <li><a href="#">Neurology Sargery</a> <span>8</span></li>
                                <li><a href="#">Allergic Issue</a> <span>1</span></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="blog-sidebar">
                        <!-- <div class="blog-sidebar_heading">
                            <h4>Tags</h4>
                        </div>
                        <div class="blog-sidebar_wrap">
                            <ul class="blog-sidebar_tags">
                                <li><a href="#">Medical</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Doctor</a></li>
                                <li><a href="#">Health Lifestyle</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Eye Care</a></li>
                                <li><a href="#">Allergic</a></li>
                                <li><a href="#">Diagnosis</a></li>
                                <li><a href="#">Rehabitation</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="blog-sidebar">
                        <div class="blog-sidebar_heading">
                            <h4>Follow Us</h4>
                        </div>
                        <div class="blog-sidebar_wrap">
                            <ul class="blog-sidebar_social">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-join_us">
                        <div class="blog-join_us-content">
                            <h6>AD BANNER</h6>
                            <h3>JOIN US</h3>
                            <p>Lorem ipsum dolor sit amet conse</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="blog-wrap">
                        @foreach($data as $value)
                        <div class="blog-row-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-img">
                                        <img src="http://127.0.0.1:8000/storage/{{$value->img}}" class="img-fluid" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="blog-content">
                                        <span style="font-size: x-large;">{{$value->name}}</span>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i> {{$value->location}} <br />
                                            {{$value->professional_background}}
                                        </p>
                                        <span>Waiting time: 10 - 20</span>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    <div class="blog-read-more">
                                        <p>
                                            <i class="far fa-star"></i>4

                                        </p>
                                        <a href="{{route('clinicDetail',$value->id)}}" class="btn btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        {{ $data->appends(request()->except('page'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter">
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter1.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>60+</h2>
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter2.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>1000+</h2>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter3.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>150+</h2>
                            <p>Award Winner</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="counter-btn_block">
                        <a href="#" class="btn btn-success">BOOK NOW</a>
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
                            <h4><i class="fas fa-phone"></i>3123 456 7890</h4>
                        </a>
                        <a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#bbd2d5ddd4fbd6dedfdedfd2d595d8d4d6">
                            <h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="b3daddd5dcf3ded6d7d6d7dadd9dd0dcde">[email&#160;protected]</span></h4>
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
                        <p>© Medenin 2020 Allright Reserved</p>
                        <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/script.js')}}"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:23 GMT -->

</html>