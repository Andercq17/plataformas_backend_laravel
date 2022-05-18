<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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


<br><br><br><br><br>











    <div class="container">
        <h4>Editor de clientes</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('cliente.update', $cliente->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" required maxlength="50" value="{{$cliente->apellidos}}">
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombres" required maxlength="50" value="{{$cliente->nombres}}">
                    </div>
                    <div class="form-group">
                        <label for="documento">Documento</label>
                        <input type="text" class="form-control" name="documento" required maxlength="20" value="{{$cliente->documento}}">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" required maxlength="150" value="{{$cliente->direccion}}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" required maxlength="20" value="{{$cliente->telefono}}">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" required maxlength="50" value="{{$cliente->email}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary"  value="Guardar">
                        <input type="reset" class="btn btn-default"  value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('footer')






</body>
</html>