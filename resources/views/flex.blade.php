

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Photogenic - Photo Gallery Category Bootstrap Responsive Website Template - Contact Us : W3Layouts</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ URL::asset('css/style-starter.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/btn_wpp.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/api_rick.css'); }}">
    
</head>

<body>
    

    <a href="https://wa.me/+573217475876" target="_blank">
        <img src="https://icons.iconarchive.com/icons/martz90/circle/256/whatsapp-icon.png" id="btn_whatsapp" alt="">
    </a>
    <a onclick="javascript:location.href='home.html'" target="_blank">
        <img src="https://icons.iconarchive.com/icons/martz90/circle/64/camera-icon.png" id="btn_home" alt="">
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
    </header><br><br><br>
    <!--//header-->

    <div>
        <div id="contenedor_principal">
            <div class="">
              <img src="https://www.gustore.cl/temp/img/estampados/834/834_400x400.png" alt="">
              <p>
                Ejemplo que consume el api de Rick y Morty para llenar la información de la tarjeta que esta en la parte derecha, seleccione el código del personaje y luego presione el boton consultar.
              </p>
              <select name="" id="codigo" class="item_formulario"></select>
              <input type="button" class="item_formulario" id="btnConsultar" value="Consultar">
            </div>
            <div class="contenedor_tarjeta">
                <h1>Tarjeta de personaje</h1>
               <div class="contenedor_s">
                    <div class="contenedor_image">
                        <div class="fondo_circular" id="fotoPerfil"></div>
                        <p id="codigo_personaje">id</p>
                    </div>
                    <div class="contenedor_descripcion">
                        <h3>Nombre</h3>
                        <span id="nombre_personaje">Nombre</span>
                        <br><br>
                        <h3>Estado</h3>
                        <span id="estado_personaje">Nombre</span>
                        <br><br>
                        <h3>Genero</h3>
                        <span id="genero_personaje">Nombre</span>
                    </div>
                </div>
                <div></div>
            </div>  
        </div>
    </div>

    @include('footer')


    <script src="{{ URL::asset('js/rick.js'); }}"></script>

</body>

</html>