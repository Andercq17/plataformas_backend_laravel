<!--
Author:W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <!--script src="js/main.js"></script>
    <script src="js/md5.min.js"></script>
    <script src="js/login.js"></script-->
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
                    </div>

                    <div class="forms ml-auto">
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu"></ul>
                    </nav>
                    <!-- //nav -->
                    <div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="#" method="post" class="newsletter">
                                <input class="search" type="search" placeholder="Search here..." required="">
                                <button class="form-control btn" value=""><span class="fa fa-search"></span></button>

                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->

    </div>

    <div id="ventana" class="ligthbox hidden">
        <div class="contenido-ventana">
            <span></span>
            <h1></h1>
            <p></p>
            <button type="button" id="btn_cerrar_modal"></button>
        </div>
    </div>

    <!-- //banner-->
    <!--/login -->
    <section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-unlock-alt"></span>
                </div>
                <div class="content-bottom">
                    

                <x-auth-card>

                    <!-- Logo -->

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">
                                {{ __('Remember me') }}
                                </span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            @if (Route::has('register'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                    {{ __('Register with us!') }}
                                </a>
                            @endif
                            <x-button class="ml-3">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>


                </div>
            </div>
        </div>
    </section>
    <!-- /login -->
    <!--/shipping-->
    <section class="shipping-wthree">
        <div class="shiopping-grids d-lg-flex">
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"><span class="fa fa-truck" aria-hidden="true"></span>
                </div>
                <div class="icon-gd-info">
                    <h3>FREE SHIPPING</h3>
                    <p>On all order over $2000</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd sec text-center">
                <div class="icon-gd"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>FREE RETURN</h3>
                    <p>On 1st exchange in 30 days</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"> <span class="fa fa-gift" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>MEMBER DISCOUNT</h3>
                    <p>Register &amp; save up to $29%</p>
                </div>

            </div>
        </div>

    </section>
    <!--//shipping-->
    <!-- footer -->
    <div class="footer_agileinfo_topf py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-3 footer_wthree_gridf mt-lg-5">
                    <h2><a href="index.html"><span>B</span>aggage
                        </a> </h2>
                    <label class="sub-des2">Online Store</label>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-4">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="index.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Home</a>
                        </li>
                        <li>
                            <a href="about.html"><span class="fa fa-angle-right" aria-hidden="true"></span> About</a>
                        </li>
                        <li>
                            <a href="shop.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Shop</a>
                        </li>
                        <li>
                            <a href="shop.html"><span class="fa fa-angle-right" aria-hidden="true"></span>Collections</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="single.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Extra Page</a>
                        </li>

                        <li>
                            <a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span> Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="single.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Shop Single</a>
                        </li>
                        <li>
                            <a href="contact.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="login.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Login </a>
                        </li>

                        <li>
                            <a href="register.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Registro</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span>Privacy & Policy</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="w3ls-fsocial-grid hidden">
                <h3 class="sub-w3ls-headf">Follow Us</h3>
                <div class="social-ficons">
                    <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li><a href="#"><span class="fa fa-google"></span>Google</a></li>
                    </ul>
                </div>
            </div>

            <div class="move-top text-center mt-lg-4 mt-3">
                <a href="#home"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p>© 2019 Baggage. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>

    </div>
    <!-- //copyright -->

</body>

</html>