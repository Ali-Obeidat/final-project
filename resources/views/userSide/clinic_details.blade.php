<!doctype html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:24 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="{{asset('../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="{{asset('css/main.d810cf0ae7f39f28f336.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Doctors</title>
</head>

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

                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <section class="space sub-header">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-header_content">


                        <span><i> <a href="/" style="color: inherit;"> Home</a> / Clinic Detail</i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sub-header_main">
                        <h2>Clinic Detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="" style="padding-top: 40px;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-pre-next col-md-12">
                        <img class="col-sm-12" src="{{asset('images/doctors-img1.jpg')}}" class="img-fluid" alt="#">
                        <div class="blog-pre-next_content col-md-12">
                            <h4>{{$clinic->name}}</h4>
                            <p style=""> {{$clinic->professional_background}} </p>
                            <i class="fas fa-map-marker-alt"></i> {{$clinic->location}}
                            <br>
                            <span style="">Waiting time: 10 - 20</span>
                            <ul>
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


                    <hr>


                </div>
                <div class="col-md-4">
                    <div style="text-align: center;">
                        <span>Choose Inclinic Appointment Time</span> <br>
                        <span style="color: blue;">Book online using your mobile, without registering!</span>
                    </div>
                    <div style="height: 350px; overflow: overlay;">
                        <div class="blog-sidebar">
                            <table class="mb-0 table table-hover">
                                <thead>
                                    <tr>
                                        @foreach($days as $day => $date)
                                        <th>{{$day}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($days as $day => $date)
                                    <td style="vertical-align: 0;">
                                        @foreach( $date[0] as $hour)
                                        <li style="list-style-type: none;    padding: 5px;">
                                            <form action="{{route('booking.show',$clinic->id)}}" method="post">
                                                @csrf
                                                @method('GET')
                                                <input hidden type="text" name="time" value="{{$hour}}">
                                                <input hidden type="text" name="day" value="{{$day}}">
                                                <button @foreach($booking as $book) @if($book->day == $day && $book->time ==$hour)
                                                    disabled
                                                    @endif
                                                    @endforeach
                                                    @if($day < $now) disabled @endif
                                                    @if($day == $now && $time > explode(' ',$hour)[0] ) disabled @endif
                                                    style=" width: 84px;" class="btn-pill btn-transition btn btn-outline-info" type="submit">{{$hour}}</button>

                                            </form>
                                        </li>
                                        @endforeach

                                    </td>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <h3>Professional Background</h3>
                        <p> Dr. Samar Hammoudah is a Consultant of Obstetric and Gynecology Laparoscopic Surgery. IVF .She got the Jordanian Board Certificate and Part(1) Arab Board .Certificate. She is a member of the Jordanian Society of Obstetricians and Gynecologist. She is specialized in treating different Obstetric and Gynecology cases. Dr. Samar is working currently in her private clinic.</p>
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
                        <img src="images/counter1.png" alt="#">
                        <div class="counter-text">
                            <h2>60+</h2>
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="images/counter2.png" alt="#">
                        <div class="counter-text">
                            <h2>1000+</h2>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="images/counter3.png" alt="#">
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
                        <a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection#bdd4d3dbd2fdd0d8d9d8d9d4d393ded2d0">
                            <h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="e58c8b838aa588808180818c8bcb868a88">[email&#160;protected]</span></h4>
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

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:25 GMT -->

</html>