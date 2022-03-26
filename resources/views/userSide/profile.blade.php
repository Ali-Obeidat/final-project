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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
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

    <section class="space sub-header" style="height: 213px;
    display: flex;
    align-items: center;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-header_content">


                        <span><i> <a href="/" style="color: inherit;"> Home</a> / User profile</i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sub-header_main">
                        <h2>User profile</h2>
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
                        <img class="col-sm-12" src="{{asset('images/istockphoto-1223671392-612x612.jpg')}}" class="img-fluid" alt="#">
                        <div class="blog-pre-next_content col-md-12">
                            <h4>Name: {{Auth::user()->name}}</h4>
                            <p style="">Email: {{Auth::user()->email}} </p>
                            <i class="fas fa-map-phone-alt"></i> {{Auth::user()->phone}}
                            <br>
                            
                        </div>
                    </div>


                    <hr>


                </div>
                
            </div>
        </div>
    </section>
    <section class="">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3>Appointments</h3>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                            @if(Session('massage'))
                <div class="alert alert-danger"> 
                    {{Session('massage')}}
                </div>
                    @elseif (Session('admin_create_massage'))
                    <div class="alert alert-success"> 
                    {{Session('admin_create_massage')}}
                </div>
                    @elseif (Session('admin_update_massage'))
                    <div class="alert alert-success"> 
                    {{Session('admin_update_massage')}}
                </div>
                    
                @endif
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Clinic Image</th>
                                        <th>clinic Name</th>
                                        <th>location</th>
                                        <th>Doctor Name</th>
                                        <th>Gender</th>
                                        <th>The Patient</th>
                                        <th>Date</th>
                                        <th></th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Appointments as $Appointment)
                                        
                                    <tr>
                                        <td>{{$Appointment->id}}</td>
                                        <td><img width="100" src="{{$Appointment->clinic->img}}" alt=""> </td>
                                        <td>{{$Appointment->clinic->name}}</td>
                                        <td>{{$Appointment->clinic->location}}</td>
                                        <td>{{$Appointment->clinic->doctor_name}}</td>
                                        <td>{{$Appointment->clinic->gender}}</td>
                                        <td>{{$Appointment->the_patient}}</td>
                                        <td>{{$Appointment->day}}: {{$Appointment->time}} </td>
                                        <td><form method="post" action="{{route('userBooking.destroy',$Appointment->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            @if($day ==$Appointment->day && $hour < explode(' ',$Appointment->time)[0] || $day < $Appointment->day  )
                                    <button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-danger">Cancel</button>
                                   @else
                                   <button type="submit" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-danger">Delete</button>

                                    @endif
                                </form> </td>
                            
                                    </tr>
                                    @endforeach
                               
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    <th>#Id</th>
                                    <th>Clinic Image</th>
                                        <th>clinic Name</th>
                                        <th>Category</th>
                                        <th>location</th>
                                        <th>Doctor Name</th>
                                        <th>Gender</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                    @include('sweetalert::alert')


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
    <script type="text/javascript" src="{{asset('main.d810cf0ae7f39f28f336.js')}}"></script>

</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:25 GMT -->

</html>