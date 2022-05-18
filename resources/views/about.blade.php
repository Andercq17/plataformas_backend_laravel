
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Photogenic - Photo Gallery Category Bootstrap Responsive Website Template - About Us : W3Layouts</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ URL::asset('css/style-starter.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/btn_wpp.css'); }}">
</head>

<body>
    <a href="https://wa.me/+573217475876" target="_blank">
        <img src="https://icons.iconarchive.com/icons/martz90/circle/256/whatsapp-icon.png" id="btn_whatsapp" alt="">
    </a>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="home">
                        Phot<i class="fas fa-camera"></i>genic
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                @include('menu')
                <!-- search button -->
                <div class="search-right ml-lg-3">
                    <div class="search-container">
                        <form action="/search" method="get">
                            <input class="search expandright" id="searchright" type="search" name="q"
                                placeholder="Search">
                            <label class="button searchbutton" for="searchright"><i class="fas fa-search"></i></label>
                        </form>
                    </div>
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-sm-5 pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-5">Sobre nosotros</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="home.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="w3l-about py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-lg-5">
                    <h3 class="title-style mb-sm-3 mb-2">Algunas palabras sobre nosotros!</h3>
                    <p>Somos un equipo de personas que trabajan arduamente para satisfacer a cada cliente sin importar qué, tenemos todo tipo de material y estamos preparados para lo que se nos venga.</p>
                    <ul class="list-about-2 mt-sm-4 mt-3">
                        <li class="py-1"><i class="far fa-check-square mr-2"></i>Calidad</li>
                        <li class="py-2"><i class="far fa-check-square mr-2"></i>Motivación laboral</li>
                        <li class="py-1"><i class="far fa-check-square mr-2"></i>Comodidad</li>
                    </ul>
                    <a class="btn btn-style btn-style-primary-2 mt-lg-5 mt-4" href="services.html">Mira nuestros servicios</a>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <img src="{{ URL::asset('images/about.jpg'); }}" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="row mt-5 pt-lg-5 pt-sm-2">
                <div class="col-lg-4 col-md-6">
                    <div class="about-single p-md-3 d-flex justify-content-between">
                        <div class="about-icon mr-4">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3">Fotografías de alta calidad</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="about-single p-md-3 d-flex justify-content-between">
                        <div class="about-icon mr-4">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3">Equipo moderno</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="about-single p-md-3 d-flex justify-content-between">
                        <div class="about-icon mr-4">
                            <i class="fas fa-icons"></i>
                        </div>
                        <div class="about-content">
                            <h5 class="mb-3">Lentes de la mejor calidad</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- team section -->
    <div class="team-area py-5" id="team">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Fotografos grandiosos</h3>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="{{ URL::asset('images/team1.jpg'); }}" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4>Daniel Roberto</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 mt-sm-0 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="{{ URL::asset('images/team3.jpg'); }}" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4>Richard Elison</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 mt-lg-0 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="{{ URL::asset('images/team2.jpg'); }}" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4>Elizabeth</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 mt-lg-0 mt-5">
                    <div class="single-team">
                        <div class="img-area">
                            <img src="{{ URL::asset('images/team4.jpg'); }}" class="img-fluid radius-image" alt="">
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#url"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#url"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="img-text">
                            <h4>Robert Branson</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team section -->

    <!-- content with bg -->
    <section class="w3l-content-bg">
        <div class="container py-md-5 py-4">
            <div class="row py-5">
                <div class="col-md-7">
                    <div class="left-content-bg">
                        <p class="text-tag">Fotografías grandiosas</p>
                        <h4 class="text-head-content">Creado para que los creativos muestren su portafolio ¡Hermoso!
                            !</h4>
                        <a class="btn btn-style mt-4" href="contact.html">Aprende más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //content with bg -->

    <!-- footer -->
    
    @include('footer')

    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js'); }}"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="{{ URL::asset('js/theme-change.js'); }}"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- testimonial script -->
    <script>
        $(document).ready(function () {

            $('.client-single').on('click', function (event) {
                event.preventDefault();

                var active = $(this).hasClass('active');

                var parent = $(this).parents('.testi-wrap');

                if (!active) {
                    var activeBlock = parent.find('.client-single.active');

                    var currentPos = $(this).attr('data-position');

                    var newPos = activeBlock.attr('data-position');

                    activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
                        currentPos);
                    activeBlock.attr('data-position', currentPos);

                    $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
                        newPos);
                    $(this).attr('data-position', newPos);

                }
            });

        }(jQuery));
    </script>
    <!-- //testimonial script -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ URL::asset('js/bootstrap.min.js'); }}"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>