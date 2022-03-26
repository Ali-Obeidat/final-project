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
    <title>Medenin login</title>
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/623f3e432abe5b455fc1c5c3/1fv3gmei0';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
</head>

<body>

    <header>
        <div class="banner--wrap">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.html"><img src="{{asset('images/275866911_502994061267138_1683770470022280059_n.png')}}" alt="#" /></a>
                                <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle
                                        navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="/" id="navbarDropdown"  aria-haspopup="true" aria-expanded="false"> Home </a>
                                  
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

                                      

                                    
                                        <li>
                                            <ul class="cart-seperate">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="fas fa-search fa-top-search"></i></a>
                                                </li>
                                              
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-outline-primary appointment-btn-top" href="/#appointment">Appointment</a>
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
        <div class="container container-custom">
           
            <div class="mx-auto app-login-box col-md-8">
                <div class="app-logo-inverse mx-auto mb-3"></div>
                <div class="modal-dialog w-100 mx-auto">
                    <div class="modal-content">
                        <div class="modal-body">
                        <form method="POST" action={{ route('login') }}>
                            <div class="h5 modal-title text-center">
                                <h4 class="mt-2">
                                    <div>Welcome back,</div>
                                    <span>Please sign in to your account below.</span>
                                </h4>
                            </div>
                            
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <input value="{{ old('email') }}" name="email" id="exampleEmail" placeholder="Email here..." type="email" required autocomplete="email" autofocus class="form-control  @error('email') is-invalid @enderror">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <input name="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                    <label for="exampleCheck" class="form-check-label">Keep me logged in</label>
                                </div>
                                <div class="divider"></div>
                                <h6 class="mb-0">No account? <a href="{{ route('register') }}" class="text-primary">Sign up now</a></h6>
                            
                            <div class="modal-footer clearfix">
                                <div class="float-left">
                                    <a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary btn-lg">{{ __('Login') }}</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>
            </div>
          
        </div>
    </section>


  

  


    <x-footer-master>
</x-footer-master>



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