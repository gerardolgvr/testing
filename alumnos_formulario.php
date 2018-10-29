<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Paquetes de graduación, sesiones de fotos y viajes generacionales">
    <meta name="author" content="Studio 17 mx">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Studio 17 MX - Mi Formulario</title>
    
    
    <!-- Bootstrap core CSS -->
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    
    
    <!-- Helper Styles -->
    <link href="css/loaders.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <!-- Font Awesome Style -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        .shadow {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<head>
<body>
    <!-- <div class="loader loader-bg">
        <div class="loader-inner ball-clip-rotate-pulse">
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- Top Navigation -->
    <nav class="navbar navbar-toggleable-md mb-4 top-bar navbar-static-top sps sps--abv">
        <div class="container">
        <!-- <a class="navbar-brand" href="#">Gra<span>freez</span></a> -->
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" width="120" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> ☰ </button>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a class="nav-link btn" href="index.html#myCarousel">Inicio <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link btn" href="index.html#products">Productos</a> </li>
            <li class="nav-item"> <a class="nav-link btn" href="index.html#about">Acerca de</a> </li>
            <li class="nav-item"> <a class="nav-link btn" href="index.html#contact">Contacto</a> </li>
            <li class="nav-item active"><a class="nav-link btn" href="alumnos.php">Alumnos</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Swiper Silder
    ================================================== -->
    <!-- Slider main container -->
    <div class="swiper-container main-slider" id="myCarousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide1.jpg')" data-hash="slide1">
                <h2>¡Felicidades!<small>Por cumplir un nuevo logro!</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide2.jpg')" data-hash="slide2">
                <h2>¡Recuerda tu logro! <small>Con un paquete de graduación.</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide3.jpg')" data-hash="slide2">
                <h2>Cobertura en graduación <small>Completamente gratis.</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide4.jpg')" data-hash="slide2">
                <h2>¡Arma tu paquete! <small>Completamente personalizable.</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide5.jpg')" data-hash="slide2">
                <h2>Anillos incluidos <small>Gran variedad en plata y oro.</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide6.jpg')" data-hash="slide2">
                <h2>¡Sesión de relajo! <small>Incluida en todos los paquetes.</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide7.jpg')" data-hash="slide2">
                <h2>¡Felicidades C. P. ! <small>Mucho éxito.</small></h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('img/slide8.jpg')" data-hash="slide2">
                <h2>Paquetes de Pre-Fiesta <small>Barra libre incluida.</small></h2>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </div>

    <?php
    if(isset($_GET) && isset($_GET['err'])){
        echo "<div id='err' class='alert alert-danger container mt-3 col-10' role='alert'>
        <strong>Ha ocurrido un error.</strong> Clave de formulario invalida o el formulario al que estás intentanto acceder ya fue llenado.
        </div>";     
    }
    if(isset($_GET) && isset($_GET['mensaje'])){
        echo "<div id='err' class='alert alert-success container mt-3 col-10' role='alert'>
        <strong>¡Bien hecho!</strong> Hemos recibido tu formulario correctamente.
        </div>";     
    }
    ?>
    <div class="container products-services" id="escuelas">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-12">
                <div class="row mt-3">
                    <div class="col  heading text-md-center text-xs-center">
                        <h2>Universidades</h2>
                        <hr>                        
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                            <img class="card-img-top img-fluid"  src="img/itche.jpg" alt="Card image cap">
                                            <div class="card-block">
                                                <h5 class="card-title">ITCH <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                                <p class="card-text">Instituto Tecnológico de Chetumal.</p>
                                                <div class="row">
                                                    <div class="col-12">                                                
                                                        <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#itch" aria-expanded="false" aria-controls="itch">
                                                            Llenar Formulario
                                                        </button>
                                                    </div>                                            
                                                </div>                                        
                                                <div class="row collapse" id="itch">
                                                    <div class="col-12">
                                                        <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                        <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="itchetumal" hidden> 
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </form>                                                               
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/uqroo.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UQROO <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Universidad de Quintana Roo.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#uqroo" aria-expanded="false" aria-controls="uqroo">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="uqroo">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="uqroochetumal" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>                                                                             
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/cren.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CREN Bacalar <small><span class="badge badge-pill badge-warning">Bacalar</span></small></h5>
                                            <p class="card-text">Centro de Educación Regional Normal.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#cren" aria-expanded="false" aria-controls="cren">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="cren">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="cren" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div> 
                                        </div>
                                    </div> 
                                </form>
                                                               
                            </div>   
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/upb.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UPB <small><span class="badge badge-pill badge-warning">Bacalar</span></small></h5>
                                            <p class="card-text">Universidad Politécnica de Bacalar.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#upb" aria-expanded="false" aria-controls="upb">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="upb">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="upb" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>  
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/ut.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UT <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Universidad Tecnológica de Chetumal.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#utchetumal" aria-expanded="false" aria-controls="utchetumal">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="utchetumal">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="utchetumal" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </form>
                                                               
                            </div> 
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/vizcaya.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">Universidad Vizcaya <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Universidad Vizcaya de las Américas.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#vizcaya" aria-expanded="false" aria-controls="vizcaya">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="vizcaya">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="vizcaya" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div> 
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/uninova.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UNINOVA <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Universidad UNINOVA.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#uninova" aria-expanded="false" aria-controls="uninova">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="uninova">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="uninova" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </form>                                                               
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/modelo.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">Modelo <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Universidad Modelo.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#modelo" aria-expanded="false" aria-controls="modelo">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="modelo">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="modelo" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/unid.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UNID <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">UNID Campus Chetumal.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#unidchetumal" aria-expanded="false" aria-controls="unidchetumal">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="unidchetumal">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="unidchetumal" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                                                
                            </div>    
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/upn.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UPN U. 231 <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Universidad Pedagógica Nacional.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#upn" aria-expanded="false" aria-controls="upn">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="upn">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="upn" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </form>                                                               
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/itzm.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">ITZM <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Instituto Tecnológico de la Zona Maya.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#itzm" aria-expanded="false" aria-controls="itzm">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="itzm">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="itzm" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                                                
                            </div>    
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/itcarrillo.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">ITS FCP <small><span class="badge badge-pill badge-warning">FCP</span></small></h5>
                                            <p class="card-text">Instituto Tecnológico Superior de FCP.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#itsfcp" aria-expanded="false" aria-controls="itsfcp">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="itsfcp">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="itsfcp" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>  
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/upp.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">UPP FCP <small><span class="badge badge-pill badge-warning">FCP</span></small></h5>
                                            <p class="card-text">Universidad Privada de la Península de FCP.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#uppcarrillo" aria-expanded="false" aria-controls="uppcarrillo">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="uppcarrillo">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="uppcarrillo" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col heading text-md-center text-xs-center">
                        <h2>Preparatorias y Bachilleratos</h2>
                        <hr>
                        <!--<div class="container mt-3">
                          <p class="alert alert-danger"><strong>Función Llenar Formulario para preparatorias está desabilitada</strong> Lamentamos las molestias, nos encontramos en mantenimiendo. Hasta el miércoles 11 del presente mes se reanudan los registros vía internet. Los que necesiten personalizar su paquete favor de pasar a nuestra sucursal.</p>
                      </div> -->
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/253.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CBTis #253 <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">CBTIS "Miguel Hidalgo y Costilla".</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#cbtis253" aria-expanded="false" aria-controls="cbtis253">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="cbtis253">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="cbtis253" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </form>                                                               
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/214.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CBTis #214 <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">CBTIS "Ignacio Allende"</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#cbtis214" aria-expanded="false" aria-controls="cbtis214">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="cbtis214">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="cbtis214" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/cetmar.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CETMAR <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">CETMAR # 10.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#cetmar" aria-expanded="false" aria-controls="cetmar">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="cetmar">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="cetmar" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/cbta.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CBTA <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">CBTA # 11.</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#cbta" aria-expanded="false" aria-controls="cbta">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="cbta">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="cbta" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/conalep.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CONALEP <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">CONALEP</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#conalep" aria-expanded="false" aria-controls="conalep">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="conalep">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="conalep" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/bachilleres.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">Bachilleres <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Plantel 1 y 2</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#bachilleres" aria-expanded="false" aria-controls="bachilleres">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="bachilleres">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="bachilleres" hidden>  
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </form>                                                               
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/eva.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">Eva Samano <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">Eva Samano</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#evasamano" aria-expanded="false" aria-controls="evasamano">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="evasamano">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="evasamano" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                <form action="formulario.php" method="post">
                                    <div class="card shadow">
                                        <img class="card-img-top img-fluid"  src="img/cetecChetumal.png" alt="Card image cap">
                                        <div class="card-block">
                                            <h5 class="card-title">CETEC <small><span class="badge badge-pill badge-warning">Chetumal</span></small></h5>
                                            <p class="card-text">CETEC Chetumal</p>
                                            <div class="row">
                                                <div class="col-12">                                                
                                                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#cetec" aria-expanded="false" aria-controls="cetec">
                                                        Llenar Formulario
                                                    </button>
                                                </div>                                            
                                            </div>                                        
                                            <div class="row collapse" id="cetec">
                                                <div class="col-12">
                                                    <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 o 6 dígitos)" maxlength="13" required> 
                                                    <input class="form-control mt-4" id="escuela" name="escuela" type="text" value="cetec" hidden> 
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block mt-2">Continuar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                                
                            </div>
                        </div>
                    </div>                    
                </div>
                
            </div>
            
        </div>
    </div>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-4">
              <ul>
                <li><a href="#myCarousel">Inicio</a></li>
                <li><a href="#gallery">Galería</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-4">
              <ul>
                <li><a href="#products">Productos</a></li>
                <li><a href="#about">Acerca de</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-4">
              <ul>
                <li><a href="#contact">Contacto</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <h2>Sucursal Chetumal</h2>
              <p>Av.  Sicilia entre Justo Sierra y Bugambilias # 439.</p>
              <p>Abierto de 12 pm - 6 pm L-V y Sábados de 12 pm -  4 pm.</p>
              <p>contacto@studio17mx.com.</p>
            </div>
          </div>
          <div class="row copy-footer">
            <div class="col-sm-6 col-md-3"> &copy;
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> Studio17mx.com </div>
            <div class="col-sm-6 col-md-3 pull-right text-xs-right">Created with <i class="fa fa-heart"></i></div>
          </div>
        </div>
    </footer>
    
    <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollPosStyler.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/core.js"></script>

    <script type="text/javascript">
    $(function() {
        $(window).scroll(function() {
        var scrollval = $(window).scrollTop();
        if (scrollval >= 200) {
            $(".download-pop").show();
        }
        });
    });
    </script>
</body>
</html>