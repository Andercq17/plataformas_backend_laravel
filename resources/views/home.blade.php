
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Photogenic - Photo Gallery Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
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
    <!--whatsapp buton-->
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

    <!-- banner section -->
    <div class="slider-container">
        <div class="left-slide">
            <div style="background-color: #242424">
                <h3 class="mt-5 mb-3">El mejor estudio de fotografía</h3>
                <h4>Con fotos de alta calidad en el mercado</h4>
                <p class="mt-4">Navega a través de este mundo inmenso y emergete en las profundidades de lo desconocido... la fotografía.</p>
                <a href="about.html" class="btn btn-style mt-5">Leer más</a>
            </div>
        </div>
        <div class="right-slide">
            <div class="bg-image1"></div>
        </div>
    </div>
    <!-- //banner section -->

    <!-- gallery section -->
    <section class="w3l-gallery py-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Galeria de fotos grandiosas</h3>
                <p class="lead mt-2">Fotos con modelos unicas que plasman lo más bello del cuerpo humano, la sonrisa.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class=" item">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set" data-title="Project 1"
                            class="zoom d-block">
                            <img class="card-img-bottom d-block" src="{{ URL::asset('images/g1.jpg'); }}" alt="Card image cap">
                            <span class="overlay__hover"></span>
                            <span class="hover-content">
                                <span class="title">Fotografía tipo retrato</span>
                                <span class="content">Hasta la más bella mirada puede expresar lo más profundo del ser.</span>
                            </span>
                        </a>
                    </div>
                    <div class="item mt-4">
                        <a href="assets/images/g2.jpg" data-lightbox="example-set" data-title="Project 2"
                            class="zoom d-block">
                            <img class="card-img-bottom d-block" src="{{ URL::asset('images/g2.jpg'); }}" alt="Card image cap">
                            <span class="overlay__hover"></span>
                            <span class="hover-content">
                                <span class="title">Fotografía de boda</span>
                                <span class="content">El amor es un sentimiento unico en el mundo, que aunque es facil de 
                                    tener para unos y lo desechan, para otros es una gran dicha manifestarlo.</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class="item">
                        <a href="assets/images/g3.jpg" data-lightbox="example-set" data-title="Project 3"
                            class="zoom d-block">
                            <img class="card-img-bottom d-block" src="{{ URL::asset('images/g3.jpg'); }}" alt="Card image cap">
                            <span class="overlay__hover"></span>
                            <span class="hover-content">
                                <span class="title">Fotografía de modas</span>
                                <span class="content">Siempre hay que mantener el estilo a pesar de las circunstancias.</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 item">
                            <a href="assets/images/g5.jpg" data-lightbox="example-set" data-title="Project 4"
                                class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ URL::asset('images/g5.jpg'); }}" alt="Card image cap">
                                <span class="overlay__hover"></span>
                                <span class="hover-content">
                                    <span class="title">Fotografía de modelo</span>
                                    <span class="content">Poses no naturales pero naturales al mismo tiempo.</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-12 col-sm-6 item mt-lg-4 mt-sm-0 mt-4">
                            <a href="assets/images/g4.jpg" data-lightbox="example-set" data-title="Project 5"
                                class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ URL::asset('images/g4.jpg'); }}" alt="Card image cap">
                                <span class="overlay__hover"></span>
                                <span class="hover-content">
                                    <span class="title">fotoperiodismo</span>
                                    <span class="content">Aquellos que se arriesgan por el bien de los demás, captando cada momento, son extremadamente serviciales.</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //gallery section -->

    <!-- stats -->
    <section class="w3-stats pb-5" id="stats">
        <div class="container pb-md-5 pb-4">
            <div class="row text-center pt-lg-4">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <i class="far fa-smile-beam"></i>
                        <div class="timer count-title count-number mt-3" data-to="16300" data-speed="1500"></div>
                        <p class="count-text">Clientes satisfechos</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <i class="fas fa-photo-video"></i>
                        <div class="timer count-title count-number mt-3" data-to="36076" data-speed="1500"></div>
                        <p class="count-text">Fotos tomadas</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <i class="fas fa-camera-retro"></i>
                        <div class="timer count-title count-number mt-3" data-to="25" data-speed="1500"></div>
                        <p class="count-text">Años de experiencia</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <i class="fas fa-medal"></i>
                        <div class="timer count-title count-number mt-3" data-to="7630" data-speed="1500"></div>
                        <p class="count-text">Premios ganados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- progress & faq section -->
    <section class="w3l-progress py-5" id="progress">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Preguntas frecuentes</h3>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 w3l-faq">
                    <div class="faq-page">
                        <ul>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>¿Cómo describirías tu fotografía?</h2>
                                <p>Son extremadamente geniales, y cada una de ellas plasman lo bello de cada momento.</p>
                            </li>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>¿Qué tipo de equipamiento usas para la fotografía?</h2>
                                <p>Uso el mejor equipo del mundo!.</p>
                            </li>
                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>¿Eres un fotografo satisfecho?</h2>
                                <p>Estoy seguro de que, casi
                                     en cualquier medida, la mayoría de la gente me consideraría un exitoso fotografo. </p>
                            </li>

                            <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>¿Cuánto cobras?</h2>
                                <p>Todos mis precios están en linea.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Fotografía <span class="">80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-1" role="progressbar"
                                style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Creatividad <span class="">95%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-2" role="progressbar"
                                style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Retoques <span class="">60%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-3" role="progressbar"
                                style="width: 60%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info4 mb-0">
                        <h6 class="progress-tittle">Nuevas fotos <span class="">85%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped gradient-4" role="progressbar"
                                style="width: 85%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //progress & faq section -->

    <!-- testimonial section -->
    <section id="testimonial-area" class="pt-5">
        <div class="container pt-md-5 pt-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Testimonios</h3>
                <p class="lead mt-2">Algunos testimonios de nuestros clientes</p>
            </div>
            <div class="testi-wrap">
                <div class="client-single active position-1" data-position="position-1">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi4.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Theo Hall</h3>
                        <p>Lo mejor de mi vida</p>
                    </div>
                    <div class="client-comment">
                        <h3>Gran labor y limpieza al momento de realizar cada bella foto. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-2" data-position="position-2">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi2.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Olive Yew</h3>
                        <p>Estupendo</p>
                    </div>
                    <div class="client-comment">
                        <h3>Nada que decir, simplemente épico. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-3" data-position="position-3">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi1.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Maya Didas</h3>
                        <p>Berraco</p>
                    </div>
                    <div class="client-comment">
                        <h3>Me sorprende todo el equipo que es usado en cada estilo de fotografía. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-4" data-position="position-4">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi3.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Brock Lee</h3>
                        <p>Grande mi compadre</p>
                    </div>
                    <div class="client-comment">
                        <h3>Gran labor la que hace este sujeto, en mi boda se lució totalmente, 100% recomendado. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-5" data-position="position-5">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi5.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Shona Leer</h3>
                        <p>sin palabras</p>
                    </div>
                    <div class="client-comment">
                        <h3>Me gustó toda la sesión de fotos que me hizo, se merece más apoyo este tipo. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-6" data-position="position-6">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi6.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Dennis Lson</h3>
                        <p>alv</p>
                    </div>
                    <div class="client-comment">
                        <h3>Sinceramente pensé que seria decepcionante, pero al contrario, quedó de locos todo. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

                <div class="client-single inactive position-7" data-position="position-7">
                    <div class="client-img">
                        <img src="{{ URL::asset('images/testi7.jpg'); }}" alt="" />
                    </div>
                    <div class="client-info">
                        <h3>Jenna John</h3>
                        <p>Decepcionante</p>
                    </div>
                    <div class="client-comment">
                        <h3>Naaa se crean, este hombre me ha salvado la vida cuando más lo necesitaba, ahora tengo un hermoso recuerdo en mis albums. </h3>
                        <img src="{{ URL::asset('images/quote.png'); }}" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //testimonial section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6 text-center py-5">
        <div class="container py-md-4 py-3">
            <div class="d-md-flex align-items-center justify-content-center">
                <h3 class="title-big">¿Buscando <span>fotografías de alta calidad?</span></h3>
                <a href="contact.html" class="btn btn-style ml-md-3 mt-md-0 mt-4">Contáctanos</a>
            </div>
        </div>
    </section>
    <!-- //call section -->

    <!-- rotador de banner -->
    <section class="pt-5">
        <div class="misección">
			<ul>
				<li>
                    <img src="{{ URL::asset('images/f5.jpg'); }}" alt="">
                </li>
				<li>
                    <img src="{{ URL::asset('images/f9.jpg'); }}" alt="">
                </li>
				<li>
                    <img src="{{ URL::asset('images/f8.jpg'); }}" alt="">
                </li>
				<li>
                    <img src="{{ URL::asset('images/f7.jpg'); }}" alt="">
                </li>
			</ul>
		</div>
    </section>
    <!-- //rotador de banner -->
    <!-- blog section -->
    <section class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Ultimos blogs publicados</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="{{ URL::asset('images/blog1.jpg'); }}" alt="" /></a>
                            <div class="blog-info">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="{{ URL::asset('images/testi2.jpg'); }}" alt="admin"
                                            style="max-width:40px"> <span class="small ml-2">Eetey Cruis</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt mr-1"></i>Abril 06, 2022</p>
                                </div>
                                <h5 class="color-1"><a href="#blog">Fotografía</a></h5>
                                <h4><a href="#blog">Deberías enamorarte de la fotografía</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="{{ URL::asset('images/blog2.jpg'); }}" alt="" /></a>
                            <div class="blog-info">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="{{ URL::asset('images/testi1.jpg'); }}" alt="admin"
                                            style="max-width:40px"> <span class="small ml-2">Molive Joe</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt mr-1"></i>Abril 13, 2022</p>
                                </div>
                                <h5 class="color-2"><a href="#blog">Camara</a></h5>
                                <h4><a href="#blog">Tu retrato manual de fotografía</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="{{ URL::asset('images/blog3.jpg'); }}" alt="" /></a>
                            <div class="blog-info">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="{{ URL::asset('images/testi3.jpg'); }}" alt="admin"
                                            style="max-width:40px"> <span class="small ml-2">Turne Leo
                                        </span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt mr-1"></i>Abril 12, 2022</p>
                                </div>
                                <h5 class="color-3"><a href="#blog">Galería de fotos</a></h5>
                                <h4><a href="#blog">Las mejores fotos de viajes</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog section -->

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

    <!-- libhtbox -->
    <script src="{{ URL::asset('js/lightbox-plus-jquery.min.js'); }}"></script>
    <!-- libhtbox -->

    <!-- counter for stats -->
    <script src="{{ URL::asset('js/counter.js'); }}"></script>
    <!-- //counter for stats -->

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