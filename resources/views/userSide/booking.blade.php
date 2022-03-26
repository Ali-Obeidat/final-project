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
    <title>booking</title>
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
                                            <h4><a href = "mailto: ali.hus.obeidat@gmail.com" class="__cf_email__" data-cfemail="c7aea9a1a887aaa2a3a2a9aea9">ali.hus.obeidat@gmail.com</a></h4>
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
                                <li class="nav-item cart-seperate">
                                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart fa-top-search"></i> <span>2</span></a>
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




    <section class="" style="padding-top: 40px;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div id="smartwizard">
                                <ul class="forms-wizard">

                                    <li>
                                        <a href="#step-2">
                                            <em>1</em>
                                            <p>Enter your info</p>
                                        </a>
                                    </li>

                                </ul>
                                <div class="form-wizard-content">
                                    <form action="{{route('booking.store')}}" method="post">
                                        @csrf
                                    <div id="step-2">
                                        <div id="accordion" class="accordion-wrapper mb-3">
                                            <div class="card">
                                                <div id="headingOne" class="card-header">
                                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                        <span class="form-heading">Patient Information<p>Enter Patient Information below</p></span>
                                                    </button>
                                                </div>
                                                <input hidden type="text" name="clinic_id" value="{{$clinic->id}}">
                                                <input hidden type="text" name="time" value="{{$time}}">
                                                <input hidden type="text" name="day" value="{{$day}}">
                                                <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
                                                    <div class="card-body">
                                                    @if(!Auth::user())  
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail2">First Name</label>
                                                                    <input name="First_Name"  id="exampleEmail2" placeholder="First Name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group">
                                                                    <label for="examplePassword">Last Name</label>
                                                                    <input name="Last_Name" id="examplePassword" placeholder="Last Name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleEmail2">First Name</label>
                                                                    <input  name="user_name"  value="{{Auth::user()->name}}" id="exampleEmail2" placeholder="First Name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                         
                                                        </div>
                                                        @endif
                                                        
                                                        <div class="position-relative form-group">
                                                            <label for="exampleAddress">Phone Number</label>
                                                            <input name="phone" @if(Auth::user()) value="{{Auth::user()->phone}}"  @endif  id="exampleAddress" placeholder="Phone Number" type="text" class="form-control">
                                                        </div>
                                                        
                                                        <div class="position-relative form-group">
                                                            <label for="exampleAddress2">How is the patient?</label>
                                                            <select name="the_patient" class="mb-2 form-control">
                                                                <option value="0">How is the patient?</option>
                                                                <option value="My Self">My Self</option>
                                                                <option value="Parent">Parent</option>
                                                                <option value="Child">Child</option>
                                                                <option value="Spouse">Spouse</option>
                                                                <option value="Sibling">Sibling</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="exampleAddress2">Select Insurance</label>
                                                            <select name="insurance" class="mb-2 form-control">
                                                                <option value="0">Select Insurance</option>
                                                                @foreach($clinic->insurance as $value)
                                                                <option value="{{$value}}">{{$value}}</option>
                                                                
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <button type="submit" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Book Appointment</button>
                                        </div>
                                    </div>
                                    </form>
                                    @include('sweetalert::alert')
                                </div>
                            </div>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Appointment</div>
                        <ul class="todo-list-wrapper list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="todo-indicator bg-warning"></div>
                                <div class="widget-content p-0">
                                    <img style="border-radius: 50%;" src="{{asset('images/clock.png')}}" alt=""> {{$day}} - {{$time}}
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-focus"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <img width="100px" height="100px" src="{{$clinic->img}}" alt="">
                                        <h6>Doctor <strong>{{$clinic->doctor_name}}</strong> </h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-primary"></div>
                                <div class="widget-content p-0">
                                    <div style="display: flex;">
                                        <h5>location: </h5>
                                    </div>
                                    <div class="widget-content-wrapper">
                                        <img width="24px" height="24px" src="{{asset('images/pin.png')}}"> <span> {{$clinic->location}}</span>


                                    </div>
                                </div>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <x-footer-master>
</x-footer-master>



    <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('main.d810cf0ae7f39f28f336.js')}}"></script>

    <script src="{{asset('js/script.js')}}"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Mar 2022 12:34:25 GMT -->

</html>