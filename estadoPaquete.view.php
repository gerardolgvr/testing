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
  <title>Studio 17 MX</title>
  

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
</head>

<body>

  <!-- Top Navigation -->
  <nav class="navbar navbar-toggleable-md mb-4 top-bar navbar-static-top sps sps--abv d-print-none">
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
          <li class="nav-item active"><a class="nav-link btn" href="alumnos.html#alumnos">Alumnos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Swiper Silder
    ================================================== -->
  <!-- Slider main container -->
  <div class="swiper-container main-slider d-print-none" id="myCarousel">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide1.jpg')" data-hash="slide1">
          <h2>¡Felicidades!<small>Por cumplir un nuevo logro!</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide2.jpg')" data-hash="slide2">
          <h2>¡Recuerda tu logro! <small>Con un paquete de graduación.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide3.jpg')" data-hash="slide2">
          <h2>Cobertura en graduación <small>Completamente gratis.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide4.jpg')" data-hash="slide2">
          <h2>¡Arma tu paquete! <small>Completamente personalizable.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide5.jpg')" data-hash="slide2">
          <h2>Anillos incluidos <small>Gran variedad en plata y oro.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide6.jpg')" data-hash="slide2">
          <h2>¡Sesión de relajo! <small>Incluida en todos los paquetes.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide7.jpg')" data-hash="slide2">
          <h2>¡Felicidades C. P. ! <small>Mucho éxito.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position d-print-none" style="background:url('img/slide8.jpg')" data-hash="slide2">
          <h2>Paquetes de Pre-Fiesta <small>Barra libre incluida.</small></h2>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination d-print-none"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev d-print-none"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next d-print-none"><i class="fa fa-chevron-right"></i></div>
  </div>

  <!-- Productos y servicios
    ================================================== -->
  <section class="products-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading text-md-center text-xs-center">
            <h2>Estado de mi paquete</h2>
            <hr>
          </div>
        </div>    
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <!-- Datos personales -->
          <div class="card mb-3">
              <div class="card-header">
                  <h5 class="font-weight-bold">Datos Personales</h5>
              </div>
              <?php
                
                $conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
                //$conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17');
                $conexion->exec("set names utf8");
                
                // mysqli_query("set names 'utf8'");
                $statement = $conexion->prepare('SELECT * FROM paquetes_contratados WHERE clave_formulario = :clave LIMIT 1');
                $statement->execute(array(':clave' => $clave));

                                
                $resultados = $statement->fetch(); //resultados paquetes contratados   

                //echo ''.$resultados['nombre'];
                //print_r($resultados);


                //datos cliente
                $statementCliente = $conexion->prepare('SELECT * FROM clientes WHERE id_cliente = :id_cliente LIMIT 1');
                $statementCliente->execute(array(':id_cliente' => $resultados['id_cliente']));
                $resultadosCliente = $statementCliente->fetch();
                //print_r($resultadosCliente);

                //carrera cliente
                $statementClienteCarrera = $conexion->prepare('SELECT * FROM carreras WHERE id_carrera = :id_carrera LIMIT 1');
                $statementClienteCarrera->execute(array(':id_carrera' => $resultadosCliente['id_carrera']));
                $resultadosClienteCarrera = $statementClienteCarrera->fetch();
                //print_r($resultadosClienteCarrera);

                //escuela cliente
                $statementClienteEscuela = $conexion->prepare('SELECT * FROM escuelas WHERE id_escuela = :id_escuela LIMIT 1');
                $statementClienteEscuela->execute(array(':id_escuela' => $resultadosCliente['id_escuela']));
                $resultadosClienteEscuela = $statementClienteEscuela->fetch();
                //print_r($resultadosClienteEscuela);

                //paquete cliente
                $statementClientePaquete = $conexion->prepare('SELECT * FROM paquetes WHERE id_paquete = :id_paquete LIMIT 1');
                $statementClientePaquete->execute(array(':id_paquete' => $resultados['id_paquete']));
                $resultadosClientePaquete = $statementClientePaquete->fetch();
                //print_r($resultadosClientePaquete);

                //piezas cliente
                $statementClientePiezas = $conexion->prepare('SELECT * FROM paquetes_comprados_piezas_detalles WHERE id_cliente = :id_cliente');
                $statementClientePiezas->execute(array(':id_cliente' => $resultados['id_cliente']));
                $resultadosClientePiezas = $statementClientePiezas->fetchAll();
                //print_r($resultadosClientePiezas);

                //regalos cliente
                $statementClienteRegalos = $conexion->prepare('SELECT * FROM paquetes_comprados_regalos_detalles WHERE id_cliente = :id_cliente');
                $statementClienteRegalos->execute(array(':id_cliente' => $resultados['id_cliente']));
                $resultadosClienteRegalos = $statementClienteRegalos->fetchAll();
                //print_r($resultadosClienteRegalos);

                //abonos cliente
                $statementClienteAbonos = $conexion->prepare('SELECT * FROM abonos WHERE id_cliente = :id_cliente');
                $statementClienteAbonos->execute(array(':id_cliente' => $resultados['id_cliente']));
                $resultadosClienteAbonos = $statementClienteAbonos->fetchAll();
                //print_r($resultadosClienteAbonos);
                    
                
            ?>
              <div class="card-block">
                  <div class="card-text">
                      <div class="form-group row justify-content-between">
                          <div class="col-md-5 col-lg-4 mb-3">
                              <label for="numcontrato" class="font-weight-bold">Número de contrato:</label>
                              <p><?php echo ''.$resultados['numero_contrato'] ?></p>
                          </div>     
                          <div class="col-md-5 col-lg-6 mb-3">
                              <label for="generacion" class="font-weight-bold">Generación:</label>
                              <p><?php echo ''.$resultadosCliente['generacion'] ?></p>
                          </div>               
                      </div>
                      <div class="form-group row justify-content-between">
                          <div class="col-md-6 mb-3">
                              <label for="carrera" class="font-weight-bold">Carrera:</label>
                              <p><?php echo ''. strtoupper($resultadosClienteCarrera['nombre_carrera']) ?></p>                              
                          </div>     
                          <div class="col-md-6 mb-3">
                              <label for="carrera" class="font-weight-bold">Escuela:</label>
                              <p><?php echo ''. strtoupper($resultadosClienteEscuela['nombre']) ?></p>                              
                          </div>                    
                      </div>
                      <div class="form-group row justify-content-between">
                          <div class="col-md-12 col-lg-4 mb-3">
                              <label for="nombre" class="font-weight-bold">Nombre(s):</label>
                              <p><?php echo ''. strtoupper($resultadosCliente['nombre_cliente']) ?></p>
                          </div>
                          <div class="col-md-6 col-lg-4 mb-3">
                              <label for="apellidopaterno" class="font-weight-bold">Apellido paterno:</label>
                              <p><?php echo ''. strtoupper($resultadosCliente['apellido_paterno']) ?></p>
                          </div>
                          <div class="col-md-6 col-lg-4 mb-3">
                              <label for="apellidomaterno" class="font-weight-bold">Apellido materno:</label>
                              <p><?php echo ''. strtoupper($resultadosCliente['apellido_materno']) ?></p>
                          </div>                        
                      </div>
                      <div class="form-group row justify-content-between">
                          <div class="col-md-12 col-lg-5 mb-3">
                              <label for="telefono" class="font-weight-bold">Teléfono:</label>
                              <p><?php echo ''. $resultadosCliente['telefono'] ?></p>
                          </div>
                          <div class="col-md-6 col-lg-6 mb-3">
                              <label for="correo" class="font-weight-bold">Correo:</label>
                              <p><?php echo ''. $resultadosCliente['correo'] ?></p>
                          </div>                       
                      </div>
                      <div class="form-group row justify-content-between inline">
                          <div class="col-md-6 mb-3">
                              <label for="hombre" class="font-weight-bold">Género:</label>
                              <p><?php echo ''. strtoupper($resultadosCliente['genero']) ?></p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label for="toga" class="font-weight-bold">Tamaño de toga: </label>
                              <p><?php echo ''. strtoupper($resultadosCliente['tamano_toga']) ?></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Detalles de paquete -->
          <div class="card mb-3">
            <div class="card-header">
                <h5 class="font-weight-bold">Detalles del paquete</h5>
            </div>
            <div class="card-block">
                <div class="card-text">
                    <div class="form-group row">     
                        <div class="col-12 mb-3">
                            <label for="paquete" class="font-weight-bold">Paquete seleccionado</label>
                            <p><?php echo ''. strtoupper($resultadosClientePaquete['nombre_paquete']) . ' - ' . strtoupper($resultados['base'])  ?></p>                        
                            <small class="form-text text-muted">Todos los paquetes incluyen complementos*</small>
                            <small class="form-text text-muted">*Complementos: Toga, sesion fotos relajo, relajo impresa, fotos documentación, fotos de graduación, archivo digital</small>                                             
                        </div>                       
                    </div>
                    <div class="form-group row">                        
                        <div class="col-md-6 mb-3" id="piezas">
                            <label class="font-weight-bold">Piezas seleccionadas (sí aplica):</label>     
                            <ul>
                                <?php                                
                                foreach($resultadosClientePiezas as $fila){
                                    echo'<li>'.strtoupper($fila['nombre_pieza']).'</li>';
                                }
                                ?>                           
                            </ul>
                            
                        </div>                           
                        <div class="col-md-6 mb-3" id="colorBase">
                            <label class="font-weight-bold">Color de base:</label>
                            <p><?php echo ''. strtoupper($resultados['color_base']) ?></p>
                        </div>
                    </div>
                    <?php

                    ?>

                    <?php                                
                    foreach($resultadosClientePiezas as $fila){
                        if(isset($fila['id_agradecimiento'])){

                            
                            $frase;

                            $statementFrase = $conexion->prepare('SELECT * FROM frases_agradecimientos WHERE id_agradecimiento = :id_agradecimiento LIMIT 1');
                            $statementFrase->execute(array(':id_agradecimiento' => $fila['id_agradecimiento']));
                            $resultadosFrase = $statementFrase->fetch();                            

                            if($resultadosFrase[tipo_agradecimiento] == 'Personalizado'){
                                echo'
                                <div class="form-group row">
                                    <div class="col-12 col-lg-12 mb-3">
                                        <label for="frases" class="font-weight-bold">Frase de agradecimiento seleccionada:</label>
                                        <p><strong>Personalizada</strong></p>
                                        <p>'.$resultadosFrase['agradecimiento'].'</p>
                                        
                                    </div>                                                            
                                </div>                            
                                ';

                            } else {
                                echo'
                                <div class="form-group row">
                                    <div class="col-12 col-lg-12 mb-3">
                                        <label for="frases" class="font-weight-bold">Frase de agradecimiento seleccionada:</label>
                                        <p><strong>Pre-hecho '.$resultadosFrase['id_agradecimiento'].'</strong></p>
                                        <p>'.$resultadosFrase['agradecimiento'].'</p>
                                        
                                    </div>                                                            
                                </div>                            
                                ';
                            }                           

                            echo '
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="dirigido" class="font-weight-bold">Agradecimiento dedicado a:</label>
                                    <p>'.strtoupper($fila['dirigido']).'</p>
                                </div>
                            </div>                            
                            ';
                            
                        } 
                        
                    }
                    ?>
                    
                    <div class="form-group row">
                        <div class="col mb-3" id="regalos">
                            <label class="font-weight-bold">Regalos seleccionados (sí aplica): <span id="regalosTotales" class="text-muted" style="display:none;">0</span><span id="regalosRestantes" class="text-muted" style="display:none;">0</span><span id="textoRegalo" class="text-muted"></span></label>
                            <ul>
                                <?php                                
                                foreach($resultadosClienteRegalos as $fila){
                                    echo'<li>'.strtoupper($fila['nombre_regalo']).'</li>';
                                }
                                ?>                                
                            </ul>                            
                        </div>
                    </div>    
                    <div class="form-group row">
                        <div class="col mb-3">
                            <label class="font-weight-bold">Comentarios u observaciones: <span id="regalosTotales" class="text-muted" style="display:none;">0</span><span id="regalosRestantes" class="text-muted" style="display:none;">0</span><span id="textoRegalo" class="text-muted"></span></label>
                            <p> <?php echo '' . strtoupper($resultados['comentarios']); ?></p>                           
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- Abonos -->
          <div class="card mb-3">
              <div class="card-header">
                  <h5 class="font-weight-bold">Abonos</h5>
              </div>
              <div class="card-block">
                  <div class="card-text">
                      <div class="form-group row">     
                          <div class="col-12 mb-3">
                              <label for="paquete" class="font-weight-bold">Abonos realizados</label>
                              <ul>
                                <?php                                
                                foreach($resultadosClienteAbonos as $fila){
                                    echo'<li> $'.$fila['monto']. ' - '.$fila['fecha_abono'] .'</li>';
                                }
                                ?> 

                              </ul>
                                           
                          </div>                       
                      </div>
                      
                      
                      
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="row">        
      <div class="alert alert-success" role="alert">
        <p>Recuerda que puedes personalizar tu paquete con lo que quieras.</p>
        <p class="mb-0">Para más información.</p>
        <p class="mb-0">¡Contáctanos!</p>
      </div>
    </div>
      <!-- /.row -->
    </div>

  </section>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4">
          <ul>
            <li><a href="index.html#myCarousel">Inicio</a></li>
            <li><a href="#gallery">Galería</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <ul>
            <li><a href="index.html#products">Productos</a></li>
            <li><a href="index.html#about">Acerca de</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <ul>
            <li><a href="index.html#contact">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-12">
          <h2>Sucursal Chetumal</h2>
          <p>Av.  San Salvador entre Av. Andrés Q. Roo y Francisco May.</p>
          <p>Abierto de 10 am - 3 pm y 5 pm - 8 pm L-V y Sábados de 12 pm -  4 pm.</p>
          <p>cotacto@studio17mx.com.</p>
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

