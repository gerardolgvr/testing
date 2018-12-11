<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Paquetes de graduación, sesiones de fotos y viajes generacionales">
  <meta name="author" content="Studio 17 mx">
  <link rel="shortcut icon" href="https://s3-us-west-2.amazonaws.com/info17/favicon.png" type="image/x-icon">
  <link rel="icon" href="https://s3-us-west-2.amazonaws.com/info17/favicon.png" type="image/x-icon">
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
  <!-- <div class="loader loader-bg">
    <div class="loader-inner ball-clip-rotate-pulse">
      <div></div>
      <div></div>
    </div>
  </div> -->

  <!-- Top Navigation -->
  <nav class="navbar navbar-toggleable-md mb-4 top-bar navbar-static-top sps sps--abv">
    <div class="container">
      <a class="navbar-brand" href="index.html">
      <img src="https://s3-us-west-2.amazonaws.com/info17/logo.png" width="120" height="50" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> ☰ </button>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link btn" href="index.html#myCarousel">Inicio <span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link btn" href="index.html#products">Productos</a> </li>
          <li class="nav-item"> <a class="nav-link btn" href="index.html#about">Acerca de</a> </li>
          <li class="nav-item"> <a class="nav-link btn" href="index.html#contact">Contacto</a> </li>
          <li class="nav-item active"><a class="nav-link btn" href="alumnos.php#alumnos">Alumnos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Swiper Silder
    ================================================== -->
  <!-- Slider main container -->
  <div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('https://s3-us-west-2.amazonaws.com/info17/s1.jpg')" data-hash="slide1">
          <h2>¡Todo en el mismo lugar!<small>¡Paquetes fotográficos, eventos y viajes!</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position" style="background:url('https://s3-us-west-2.amazonaws.com/info17/s2.jpg')" data-hash="slide2">
          <h2>¡A festejar! <small>Un logro así merece ser celebrado.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position" style="background:url('https://s3-us-west-2.amazonaws.com/info17/s3.jpg')" data-hash="slide2">
          <h2>Experiencias <small>Studio 17 MX</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position" style="background:url('https://s3-us-west-2.amazonaws.com/info17/s4.jpg')" data-hash="slide2">
          <h2>¡Arma tu paquete! <small>Completamente personalizable.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position" style="background:url('https://s3-us-west-2.amazonaws.com/info17/s5.jpg')" data-hash="slide2">
          <h2>¡Momentos únicos! <small>Más que una típica ceremonia.</small></h2>
        </div>
        <div class="swiper-slide slider-bg-position" style="background:url('https://s3-us-west-2.amazonaws.com/info17/s7.jpg')" data-hash="slide2">
          <h2>Paquetes de Pre-Fiesta <small>Barra libre incluida.</small></h2>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
  </div>

  <!-- Productos y servicios
    ================================================== -->
  <?php
  if(isset($_GET) && isset($_GET['err'])){
    echo "<div id='err' class='alert alert-danger container mt-3 col-10' role='alert'>
    <strong>Ha ocurrido un error.</strong> No se puede mostrar información de un formulario que no se ha llenado.
    </div>";     
  }
  ?>
  <section class="products-services" id="alumnos">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading text-md-center text-xs-center">
            <h2>Alumnos</h2>
            <hr>
            <p>El lugar indicado para todos nuestros clientes accedan desde la comodidad de su
              hogar y realice todo tipo de personalización en su paquete.</p>
          </div>
        </div>        
        <div class="col-md-4 products-services-box">
          <h3 class="blog-title"><a href="alumnos_formulario.php#escuelas">Llenar formulario</a></h3>
          <p class="blog-content">Elige tu paquete, piezas, colores ¡COMPLETAMENTE PERSONALIZADO!</p>
          <div class="products-services-image-block"> <img style="width: 80%;" src="https://s3-us-west-2.amazonaws.com/info17/formulario_al.jpg" alt="" class="img-fluid"> </div>
          <p class="blog-content">Recuerda tener a la mano la copia de tu contrato para llenar el formulario.</p>
          <a href="alumnos_formulario.php#escuelas" class="btn btn-outline-warning" >Continuar</a>
        </div>
        <div class="col-md-4 products-services-box">
          <h3 class="blog-title"><a href="estadoPaquete.html">Estado de mi paquete</a></h3>
          <p class="blog-content">Consulta tus piezas, abonos y fechas destacadas donde quiera que estés.</p>
          <div class="products-services-image-block"> <img style="width: 80%;" src="https://s3-us-west-2.amazonaws.com/info17/paquete_al.jpg" alt="" class="img-fluid"> </div>
          <p class="blog-content">Recuerda que puedes realizar tus abonos vía deposito.</p>
          <button type="button" class="btn btn-outline-warning"  data-toggle="collapse" data-target="#consulta" aria-expanded="false" aria-controls="consulta">Continuar</button>
          <div class="row collapse" id="consulta">
            <form action="estadoPaquete.php" method="post">
              <div class="col-12">
                  <input class="form-control mt-4" id="numFolio" name="numFolio" type="text" placeholder="Clave de formulario (13 dígitos)" maxlength="13" required>                 
              </div>
              <div class="col-12">
                  <button class="btn btn-outline-warning btn-block mt-2">Consultar</button>
              </div>
            </form>            
        </div>
        </div>
        <div class="col-md-4 products-services-box">
          <h3 class="blog-title"><a href="#">Votación de anillos</a></h3>
          <p class="blog-content">¡Vota por tu favorito! Tenemos una selección de anillos que te encantará.</p>
          <div class="products-services-image-block"> <img style="width: 80%;" src="https://s3-us-west-2.amazonaws.com/info17/anillos_al.jpg" alt="" class="img-fluid"> </div>
          <p class="blog-content">Recuerda que la votación es anónima, rápida y sencilla.</p>
          <button type="button" class="btn btn-outline-warning">Continuar</button>
        </div>
        
        
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-md-4 products-services-box">
          <h3 class="blog-title"><a href="docs/agradecimientos_studio17mx.pdf" target="_blank">Frases de Agradecimientos</a></h3>
          <p class="blog-content">¡Tenemos una selección de frases que te encantarán!</p>
          <div class="products-services-image-block"> <img style="width: 80%;" src="https://s3-us-west-2.amazonaws.com/info17/agras.jpg" alt="" class="img-fluid"> </div>
          <p class="blog-content">Recuerda que también puedes crear la tuya si así lo deseas.</p>
          <a href="docs/agradecimientos_studio17mx.pdf" target="_blank" class="btn btn-outline-warning" >Ver frases</a>
        </div>
                
        <div class="alert alert-success aviso" role="alert">
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
          <p>Av. San Salvador entre Av. Andrés Q. Roo y Francisco May.</p>
          <p>Abierto de 10 am - 3 pm y 5 pm - 8 pm L-V y Sábados de 12 pm - 4 pm.</p>
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

