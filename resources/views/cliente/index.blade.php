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
        <h4>Gestión de clientes</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('cliente.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                            <a href="{{route('cliente.create')}}" class="btn btn-success">Nuevo cliente</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>Id</th>
                                <th>Apellidos</th>
                                <th>Nombres</th>
                                <th>Documento</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>

                        <!--clientes de la vble del controller-->
                        @if (count($clientes)<=0)
                            <tr>
                                <td colspan="8">No hay resultados</td>
                            </tr>
                        @else
                        @foreach ($clientes as $cliente) 
                            <tr>
                                <td>
                                    <a href="{{route('cliente.edit', $cliente->id)}}" class="btn btn-warning btn-sm">Editar</a> 
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$cliente->id}}">
                                        Eliminar
                                    </button>
                                </td>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->apellidos}}</td>
                                <td>{{$cliente->nombres}}</td>
                                <td>{{$cliente->documento}}</td>
                                <td>{{$cliente->direccion}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td>{{$cliente->email}}</td>
                            </tr>
                            @include('cliente.delete')
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('footer')



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>