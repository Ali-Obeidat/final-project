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

    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link href="{{asset('css/main.d810cf0ae7f39f28f336.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css" />
    <title>Medenin HTML Template</title>
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

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Patients <i class="fas fa-plus"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Services <i class="fas fa-plus"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu1">
                                                        <li><a class="dropdown-item" href="services.html">Services
                                                                One</a></li>
                                                        <li><a class="dropdown-item" href="services-2.html">Services
                                                                Two</a></li>
                                                        <li><a class="dropdown-item" href="services-3.html">Services
                                                                Three</a></li>
                                                        <li><a class="dropdown-item" href="services-detail.html">Service
                                                                Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="appointment.html">Appointment</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Our Doctors <i class="fas fa-plus"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu1">
                                                        <li><a class="dropdown-item" href="doctors.html">Doctors One</a></li>
                                                        <li><a class="dropdown-item" href="doctors-2.html">Doctors Two</a></li>
                                                        <li><a class="dropdown-item" href="doctors-3.html">Doctors Three</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="pricing.html">Pricing</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blog <i class="fas fa-plus"></i> </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="blog-standard.html">Blog Stadared</a>
                                                <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                <a class="dropdown-item" href="blog-grid-2.html">Blog Grid-2</a>
                                                <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> pages <i class="fas fa-plus"></i> </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="about.html">About</a>
                                                <a class="dropdown-item" href="contact-us.html">Contact One</a>
                                                <a class="dropdown-item" href="contact-us-2.html">Contact Two</a>
                                                <a class="dropdown-item" href="error.html">Error 404</a>
                                            </div>
                                        </li>
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


        </div>

    </header>


    <section class="about-section">


        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div class="app-logo"></div>
                                <h4>
                                    <div>Welcome,</div>
                                    <span>It only takes a <span class="text-success">few seconds</span> to create your account</span>
                                </h4>
                                <div>
                                    <form method="POST" action={{ route('register') }}>
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleName" class="">{{ __('Name') }}</label>
                                                    <input name="name" placeholder="Name here..." type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail" class=""><span class="text-danger">*</span>{{ __('E-Mail Address') }}</label>
                                                    <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class=""><span class="text-danger">*</span>Phone Number</label>
                                                    <input name="phone" placeholder="Phone Number..." type="number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label class=""><span class="text-danger">*</span>Gender</label>
                                                    <select name="gender" class="mb-2 form-control">
                                                        <option >Select Your Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword" class=""><span class="text-danger">*</span> {{ __('Password') }}</label>
                                                    <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="examplePasswordRep" class=""><span class="text-danger">*</span> Repeat Password</label>
                                                    <input name="password_confirmation" id="password-confirm" placeholder="Repeat Password here..." type="password" class="form-control" required autocomplete="new-password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 position-relative form-check">
                                            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                            <label for="exampleCheck" class="form-check-label">Accept our <a href="javascript:void(0);">Terms and Conditions</a>.</label>
                                        </div>
                                        <div class="mt-4 d-flex align-items-center">
                                            <h5 class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign in</a></h5>
                                            <div class="ml-auto">
                                                <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create Account </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex d-xs-none col-lg-5">
                            <div class="slider-light">
                                <div class="slick-slider slick-initialized">
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                            <div class="slider-content">
                                                <h3>Scalable, Modular, Consistent</h3>
                                                <p>Easily exclude the components you don't require. Lightweight, consistent
                                                    Bootstrap based styles across all elements and components
                                                </p>
                                            </div>
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
                        <a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#056c6b636a4568606160616c6b2b666a68">
                            <h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="137a7d757c537e767776777a7d3d707c7e">[email&#160;protected]</span></h4>
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



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/slick.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/script.js"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:33:57 GMT -->

</html>