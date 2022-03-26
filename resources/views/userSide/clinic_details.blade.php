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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Doctors</title>
    <style>
    @media screen and (max-width: 480px) {
        #search {
            display: none;
        }
    }
</style>
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

    <section class="space sub-header" style="height: 180px;
    display: flex;
    justify-content: center;
    align-items: center;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-2">
                    <div class="sub-header_content">

                        <span><i>Home /Clinic Detail</i></span>
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


    <section class="" style="padding-top: 40px;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-pre-next col-md-12">
                        <img class="col-sm-12" src="{{$clinic->img}}" class="img-fluid" alt="#">
                        <div class="blog-pre-next_content col-md-12">
                            <h4>{{$clinic->name}}</h4>
                            <p style=""> {{$clinic->description}} </p>
                            <i class="fas fa-map-marker-alt"></i> {{$clinic->location}}
                            <br>
                            <span style="font-weight: bold;">Waiting time: 10 - 20</span>
                           
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
                                    @if($date[0] != null)
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
                                        @endif
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
                        <p>{{$clinic->professional_background}} </p>
                    </div>
                    <hr>
                    <div>
                        <h3>Education</h3>
                        <p> {{$clinic->education}}</p>
                    </div>
                    <hr>
                    <div>
                        <h3>Insurance</h3>
                        <ul>
                            @foreach($clinic->insurance as $value)
                            <li>{{$value}}</li>
                            @endforeach
                        </ul>
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
                        <img src="{{asset('images/foot-logo.png')}}" class="img-fluid" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet, consect <br /> etur adipisicing elit, sed do eius mod <br />
                            tempor incididunt ut labore et dolore<br /> magna aliqua. Ut enim ad minim
                        </p>
                        <a href="tel:31234567890">
                            <h4><i class="fas fa-phone"></i>0799161600</h4>
                        </a>
                        <a href="mailto: ali.hus.obeidat@gmail.com">
                            <h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="137a7d757c537e767776777a7d3d707c7e">ali.hus.obeidat@gmail</span></h4>
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



    <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('main.d810cf0ae7f39f28f336.js')}}"></script>

    <script src="{{asset('js/script.js')}}"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:25 GMT -->

</html>