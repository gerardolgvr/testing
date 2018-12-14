<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Formulario</title>

    <style>
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-9">
                <div class="card mb-3">
                    <h3 class="card-header">Formulario - <span class="badge badge-default">
                    <?php
                        try {
                            //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
                            $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'gerardo123', array(PDO::ATTR_PERSISTENT => true));
                            //$conexion = new PDO('mysql:host=instance.c2u0nkrhn8of.us-west-2.rds.amazonaws.com;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17', array(PDO::ATTR_PERSISTENT => true));
                            $conexion->exec("set names utf8");
                            
                            // mysqli_query("set names 'utf8'");
                            $statement = $conexion->prepare('SELECT * FROM escuelas WHERE id_escuela = :idEscuela LIMIT 1');
                            $statement->execute(array(':idEscuela' => $escuela));
                            
                            $resultados = $statement->fetch();
                            echo ''.$resultados['nombre'];
                            
                        } catch (PDOException $e){
                            echo "Error " . $e->getMessage();
                        }
                    ?> 
                    </span></h3>
                    <div class="card-block"> 
                        <h4 class="card-title">Recomendaciones:</h4>
                        <ul>
                            <li>Asegúrate de tener conexión a internet.</li>
                            <li>Ten tu pre-contrato a la mano.</li>
                            <li>Revisa nuestra galería para escoger correctamente tu paquete. <a href="paquetes_fotograficos.html#gallery" target="_blank">Galería</a></li>
                            <li>Te recomendamos llenar el formulario en una computadora.</li>
                            <li>Haz uso de la caja de comentarios u observaciones para especificar detalles específicos de tu paquete. Ejemplo: "Quiero que mi moldura sea rupestre", etc..</li>
                        </ul>
                        <p class="card-text"><span class="badge badge-default">Nota: </span> Solo se puede llenar una vez el formulario.</p>                        
                        <p class="card-text"><span class="badge badge-default">Nota: </span> Sí necesitas ayuda o tienes problemas al llenar el formulario no dudes en contactarnos.</p>
                        <p class="card-text"><span class="badge badge-warning">Tel: 983-186-5294</span></p>
                        <p class="card-text"><span class="badge badge-warning">Correo: contacto@studio17mx.com</span></p>                        
                    </div>
                </div>
                <form action="enviando.php" method="POST" id="form">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5>Datos Personales</h5>
                        </div>
                        <div class="card-block">
                            <div class="card-text">
                                <div class="form-group row justify-content-between">
                                    <div class="col-md-5 col-lg-4 mb-3">
                                        <label for="numcontrato">Número de contrato:</label>
                                        <input class="form-control mt-4" id="claveFormulario" name="claveFormulario" type="text" value="<?php echo $clave ?>" hidden> 
                                        <input class="form-control mt-4" id="idEscuela" name="idEscuela" type="text" value="<?php echo $escuela ?>" hidden> 
                                        <input class="form-control" type="text" name="numcontrato" id="numcontrato" placeholder="Ej. 0001" maxlength="4" required>
                                        <small class="form-text text-muted">4 Dígitos incluyendo ceros.</small>
                                    </div>     
                                    <div class="col-md-5 col-lg-6 mb-3">
                                        <label for="generacion">Generación:</label>
                                        <input class="form-control" type="text" name="generacion" id="generacion" placeholder="Ej. 2014-2018" maxlength="9" required>
                                        <small class="form-text text-muted">9 Dígitos. Ej. 2014-2018</small>
                                    </div>               
                                </div>
                                <div class="form-group row justify-content-between">
                                    <div class="col-12 mb-3">
                                        <label for="carrera">Carrera:</label>
                                        <select class="form-control" name="carrera" id="carrera" required>
                                            <?php
                                            try {
                                                //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
                                                $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'gerardo123', array(PDO::ATTR_PERSISTENT => true));
                                                //$conexion = new PDO('mysql:host=instance.c2u0nkrhn8of.us-west-2.rds.amazonaws.com;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17', array(PDO::ATTR_PERSISTENT => true));
                                                $conexion->exec("set names utf8");
                                                
                                                //mysqli_query("set names 'utf8'"); 
                                                $statement = $conexion->prepare('SELECT * FROM carreras WHERE id_escuela = :idEscuela');
                                                $statement->execute(array(':idEscuela' => $escuela));
                                                
                                                $resultados = $statement->fetchAll();
                                                foreach($resultados as $fila){
                                                    echo'<OPTION VALUE="'.$fila['id_carrera'].'">'.$fila['nombre_carrera'].'</OPTION>';
                                                }
                                                
                                            } catch (PDOException $e){
                                                echo "Error " . $e->getMessage();
                                            }
                                            ?>   
                                        </select>
                                    </div>                        
                                </div>
                                <div class="form-group row justify-content-between">
                                    <div class="col-md-12 col-lg-4 mb-3">
                                        <label for="nombre">Nombre(s):</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ej. Juan Manuel" required>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <label for="apellidopaterno">Apellido paterno:</label>
                                        <input class="form-control" type="text" name="apellidopaterno" id="apellidopaterno" placeholder="Ej. Pérez" required>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <label for="apellidomaterno">Apellido materno:</label>
                                        <input class="form-control" type="text" name="apellidomaterno" id="apellidomaterno" placeholder="Ej. Pérez">
                                    </div>                        
                                </div>
                                <div class="form-group row justify-content-between">
                                    <div class="col-lg-5 mb-3">
                                        <label for="telefono">Teléfono:</label>
                                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="Ej. 9831230000" maxlength="10" required>
                                        <small class="form-text text-muted">10 Dígitos.</small>
                                    </div>
                                    <div class="col-md-12 col-lg-6 mb-3">
                                        <label for="correo">Correo:</label>
                                        <input class="form-control" type="email" name="correo" id="correo" placeholder="Ej. ejemplo@ejemplo.com" required>
                                    </div>                       
                                </div>
                                <div class="form-group row justify-content-between inline">
                                    <div class="col-md-6 mb-3">
                                        <label for="hombre">Género:</label>
                                        <div class="form-check">                        
                                            <label class="form-check-label">
                                                <input type="radio" name="sexo" id="hombre" value="hombre" checked> Hombre
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="sexo" id="mujer" value="mujer"> Mujer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Selecciona tamaño de toga: </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="tamanotoga" id="chico" value="chica" class="form-check-input mr-2" checked>Chica
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="tamanotoga" id="mediano" value="mediana" class="form-check-input mr-2">Mediana
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="tamanotoga" id="grande" value="grande" class="form-check-input mr-2">Grande
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5>Detalles del paquete</h5>
                        </div>
                        <div class="card-block">
                            <div class="card-text">
                                <div class="form-group row">     
                                    <div class="col-12 mb-3">
                                        <label for="paquete">Selecciona tu paquete:</label>
                                        <select class="form-control" name="paquete" id="paquete" onChange="selectPaquete(this.form)" required>
                                            <option value="null" selected>Seleccionar paquete</option>
                                            <?php
                                        try {
                                            //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
                                            $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'gerardo123', array(PDO::ATTR_PERSISTENT => true));
                                            //$conexion = new PDO('mysql:host=instance.c2u0nkrhn8of.us-west-2.rds.amazonaws.com;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17', array(PDO::ATTR_PERSISTENT => true));
                                            $conexion->exec("set names utf8");
                                            
                                            //mysqli_query("set names 'utf8'"); 

                                            $statement = $conexion->prepare('SELECT * FROM escuelas WHERE id_escuela = :idEscuela LIMIT 1');
                                            $statement->execute(array(':idEscuela' => $escuela));
                                            $nivel = $statement->fetch(); //recuperamos el nivel de institucion

                                            $statement = $conexion->prepare('SELECT * FROM paquetes WHERE nivel = :nivelPaquetes ORDER BY id_paquete');
                                            $statement->execute(array(':nivelPaquetes' => $nivel['nivel']));
                                            $paquetes = $statement->fetchAll(); //recuperamos todos los paquetes de acuerdo al nivel de la institucion
                                                                                        
                                            foreach($paquetes as $fila){
                                                echo'<OPTION VALUE="'.$fila['nombre_paquete'].'.'.$fila['material'].'.'.$fila['nomenclatura'].'">'.$fila['nombre_paquete'].'</OPTION>';
                                            }
                                            
                                        } catch (PDOException $e){
                                            echo "Error " . $e->getMessage();
                                        }
                                        ?> 
                                        </select>                 
                                    </div>  
                                    <?php
                                    if($nivel['nivel'] == 'Superior'){?>
                                        <div class="col-12 mb-3">
                                            <label for="base">Selecciona tu base:</label>
                                            <select class="form-control" name="base" id="base" onChange="selectBase(this.form)" required>
                                                <option value="null" selected>Seleccionar base</option>                                            
                                            </select>
                                            <small class="form-text text-muted">Todos los paquetes incluyen complementos*</small>
                                            <small class="form-text text-muted">*Complementos: Toga, sesion fotos relajo, relajo impresa, fotos documentación, fotos de graduación, archivo digital</small>
                                            <small class="form-text text-muted"><a href="paquetes_fotograficos.html#gallery" target="_blank">Ver galería</a> de paquetes</small>                    
                                        </div>
                                    <?php
                                    }                            
                                    ?>

                                                          
                                </div>
                                <div class="form-group row">      
                                    <div class="col-12">
                                        <small class="form-text text-muted">Haz clic para ver los tipos de piezas <a href="paquetes_fotograficos.html#gallery" target="_blank">Ver piezas</a>. Luego haz click en tu nivel educativo y posteriormente haz click en piezas para verlas.</small>                    
                                    </div>                  
                                    <div class="col-md-6 mb-3 mt-3" id="piezas">
                                        <label>Selecciona las piezas: <span id="piezasTotales" class="text-muted" style="display:none;">0</span><span id="piezasRestantes" class="text-muted">0</span><span class="text-muted"> Máx</span></label>                                        
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="panoramica" value="panoramica" disabled> Panorámica
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="diploma" value="diploma" disabled> Diploma
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="agradecimiento" value="agradecimiento" disabled> Agradecimiento
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="libroagradecimiento" value="libroagradecimiento" disabled> Libro Agradecimiento
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="individual" value="individual" disabled> Foto Individual
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="familiar" value="familiar" disabled> Foto Familiar
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="piezas[]" id="amigos" value="amigos" disabled> Foto Amigos
                                            </label>
                                        </div>
                                    </div>                           
                                    <div class="col-md-6 mb-3 mt-3" id="colorBase">
                                        <label>Color de base:</label>                                        
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorbase" id="negro" value="negro" class="form-check-input mr-2" disabled checked>Negro
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorbase" id="chocolate" value="chocolate" class="form-check-input mr-2" disabled>Chocolate
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorbase" id="caoba" value="caoba" class="form-check-input mr-2" disabled>Caoba
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorbase" id="nogal" value="nogal" class="form-check-input mr-2" disabled>Nogal
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorbase" id="vino" value="vino" class="form-check-input mr-2" disabled>Vino
                                            </label>
                                        </div>   
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="tabaco" value="tabaco" class="form-check-input mr-2" disabled>Tabaco
                                            </label>
                                        </div>                                                                            
                                    </div>
                                    <div class="col-md-6 mb-3 mt-3" id="colorFondo">
                                        <label>Color de fondo:</label>     
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="vainilla" value="vainilla" class="form-check-input mr-2" disabled checked>Vainilla
                                            </label>
                                        </div>                                   
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="negro" value="negro" class="form-check-input mr-2" disabled>Negro
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="chocolate" value="chocolate" class="form-check-input mr-2" disabled>Chocolate
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="caoba" value="caoba" class="form-check-input mr-2" disabled>Caoba
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="nogal" value="nogal" class="form-check-input mr-2" disabled>Nogal
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="vino" value="vino" class="form-check-input mr-2" disabled>Vino
                                            </label>
                                        </div>    
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" name="colorfondo" id="tabaco" value="tabaco" class="form-check-input mr-2" disabled>Tabaco
                                            </label>
                                        </div>                                                                            
                                    </div>
                                    <div class="col-12">
                                        <small class="form-text text-muted">Nota: Puedes repetir todas las piezas que quieras (de acuerdo a las piezas de tu paquete) a excepción de la panoramica. Ejemplo, puedes escoger  2 familiares y 1 panoramica. Otro Ejemplo: 2 libros de agradecimiento y 1 familiar. En caso de repetir alguna pieza favor de anotarlo en la caja final de comentarios y observaciones.</small>
                                        <small class="form-text text-muted">En caso de repetir algun agradecimiento sigue las instrucciones en este <a href="docs/agradecimientos_studio17mx.pdf" target="_blank">documento</a> para enviarnos la frase faltante de la otra pieza</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col mb-3" id="regalos">
                                        <label>Selecciona el(los) regalo(s): <span id="regalosTotales" class="text-muted" style="display:none;">0</span><span id="regalosRestantes" class="text-muted" style="display:none;">0</span><span id="textoRegalo" class="text-muted"></span></label>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="regalo[]" id="taza" value="taza" disabled> Taza
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="regalo[]" id="gorra" value="gorra" disabled> Gorra
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="regalo[]" id="playera" value="playera" disabled> Playera
                                            </label>
                                        </div>
                                        <?php
                                        if($nivel['nivel'] == 'Superior'){?>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="regalo[]" id="personalizador" value="personalizador" disabled> Personalizador
                                            </label>
                                        </div>
                                        <?php
                                        } ?>
                                        <div class="form-check disabled" id="bloqueAnillo">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="regalo[]" id="anillo" value="anillo" disabled> Anillo
                                            </label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="frases">Selecciona frase de agradecimiento:</label>
                                        <select class="form-control" name="frases" id="frases" onChange="selectFrase(this.form)" disabled>
                                            <option value="Selecciona una frase" selected>Seleccionar frase</option>
                                            <?php
                                            try {
                                                //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
                                                $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'gerardo123', array(PDO::ATTR_PERSISTENT => true));
                                                //$conexion = new PDO('mysql:host=instance.c2u0nkrhn8of.us-west-2.rds.amazonaws.com;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17', array(PDO::ATTR_PERSISTENT => true));
                                                $conexion->exec("set names utf8");
                                                
                                                //mysqli_query("set names 'utf8'"); 
                                                $statement = $conexion->prepare('SELECT * FROM frases_agradecimientos LIMIT 17');
                                                $statement->execute();
                                                
                                                $resultados = $statement->fetchAll();
                                                foreach($resultados as $fila){
                                                    echo'<OPTION VALUE="'.$fila['agradecimiento'].'"> Frase '.$fila['id_agradecimiento'].'</OPTION>';
                                                }                                                
                                            } catch (PDOException $e){
                                                echo "Error " . $e->getMessage();
                                            }
                                            ?>  
                                            <option value="custom">Personalizado</option>';
                                        </select>
                                        <small class="form-text text-muted">Selecciona una frase de base</small>
                                    </div> 
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="dedicado">Selecciona a quien va dedicado:</label>
                                        <select class="form-control" name="dedicado" id="dedicado" onChange="selectDirigido(this.form)" disabled>
                                            <option value="Selecciona a quien va dirigido" selected>Seleccionar</option>
                                            <option value="A mis padres">A mis padres</option>
                                            <option value="A mi familia">A mi familia</option>
                                            <option value="A mi madre">A mi madre</option>
                                            <option value="A mi padre">A mi padre</option>
                                            <option value="A mi esposo">A mi esposo</option>
                                            <option value="A mi esposa">A mi esposa</option>
                                            <option value="A mis hijos">A mis hijos</option>
                                            <option value="customDirigido">Personalizado</option>
                                        </select>
                                        <small class="form-text text-muted">Selecciona a quien va dedicado</small>
                                    </div>                                                            
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="dirigido">Agradecimiento dedicado a:</label>
                                        <input class="form-control" type="text" name="dirigido" id="dirigido" placeholder="Ej. Mis padres" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 mb-3">
                                        <label for="frase">Personaliza la frase a tu gusto o simplemente selecciónala:</label>
                                        <textarea name="frase" id="frase" class="form-control" rows="5" placeholder="Selecciona una frase de base o escribe una propia" disabled></textarea>
                                        <small class="form-text text-muted">Mientras más larga sea la frase más pequeña será en la placa</small>
                                    </div>                        
                                </div>
                                   
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col mb-3">
                            <label for="contrato">Cláusulas de contrato:</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="contrato" id="contrato" value="aceptado" required> He leído y acepto las <a href="docs/clausulas.pdf" target="_blank">cláusulas de contrato</a>
                                </label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="comentarios">Comentarios u observaciones:</label>
                            <textarea name="comentarios" id="comentarios" class="form-control mb-3" rows="5" placeholder="Comentarios u observaciones"></textarea>
                            <div class="row justify-content-center">
                                    <div class="col-12 col-sm-9 col-md-4">
                                        <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                                    </div>
                                </div>
                        </div>                        
                    </div>                    
                </form>
            </div>
        </div>
    </div>    
    


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/jquery.validate.min.js"></script>  

    <script>
        $(document).ready(function(){
		$("#colorFondo").hide();
	});
        $("#form").validate();
    </script>
    <script>
        // Evento que se ejecuta al pulsar en un checkbox
        // Evento que se ejecuta al pulsar en un checkbox
	    $("input[type=checkbox]").change(function(){ 
            // Cogemos el elemento actual
            var elemento=this;
            var contador=0;
            // Recorremos todos los checkbox para contar los que estan seleccionados
            $("#piezas :checkbox").each(function(){
                if($(this).is(":checked"))
                    contador++;
            });
            if(($(this).is(':checked') && $(this).val() == 'agradecimiento') || ($(this).is(':checked') && $(this).val() == 'libroagradecimiento')){
                $('#frases').removeAttr('disabled'); //activamos el select
                $('#dedicado').removeAttr('disabled'); //activamos para que pueda seleccionar a quien va dirigido
                //$('#frases').val('null');// seleccionar el primer item del select                
                //$('#frase').val(''); //borrar el texto del text input
                //$('#frase').removeAttr('disabled');
            } else if((!$(this).is(':checked') && $(this).val() == 'agradecimiento') || (!$(this).is(':checked') && $(this).val() == 'libroagradecimiento')){
                if($('#agradecimiento').is(':checked') || $('#libroagradecimiento').is(':checked')){ 
                                     
                } else {
                    $('#frases').attr('disabled', 'true');
                    $('#frases').val('Selecciona una frase');// seleccionar el primer item del select                
                    $('#frase').val(''); //borrar el texto del text input

                    $('#dedicado').attr('disabled', 'true');
                    $('#dedicado').val('Selecciona a quien va dirigido');// seleccionar el primer item del select                
                    $('#dirigido').val(''); //borrar el texto del text input
                }
                
            }
            // if(! $(this).is(':checked') ) {
            //     valor = parseInt(document.getElementById('piezasRestantes').innerHTML);
            //     valor += 2;
            //     document.getElementById('piezasRestantes').innerHTML = valor;
            //     console.log(valor);
            // }
            var cantidadMaxima= parseInt(document.getElementById('piezasTotales').innerHTML);
            // Comprovamos si supera la cantidad máxima indicada
            if(contador>cantidadMaxima){
                alert("Máximo de piezas alcanzado");
                // Desmarcamos el ultimo elemento
                $(elemento).prop('checked', false);
                contador--;
            }
            // if(document.getElementById('piezasRestantes').innerHTML == 0){
            //     document.getElementById('piezasRestantes').innerHTML = 0;
            // } else {
            //     document.getElementById('piezasRestantes').innerHTML -= 1;
            // }
        });    


        $("input[type=checkbox]").change(function(){ 
            // Cogemos el elemento actual
            var elemento=this;
            var contador=0;
            // Recorremos todos los checkbox para contar los que estan seleccionados
            $("#regalos :checkbox").each(function(){
                if($(this).is(":checked"))
                    contador++;
            });
            if($(this).is(':checked') && $(this).val() == 'anillo'){
                
                if(document.getElementById('regalosRestantes').innerHTML == 1){
                    alert("Debes de deseleccionar el otro regalo para escoger el anillo.");
                    $(elemento).prop('checked', false);
                    contador--;
                    document.getElementById('regalosRestantes').innerHTML = 1;
                    return;
                } else {
                    document.getElementById('regalosRestantes').innerHTML = 0;
                    document.getElementById('regalosTotales').innerHTML = 1;
                }
            } else if(!$(this).is(':checked') && $(this).val() == 'anillo'){
                document.getElementById('regalosRestantes').innerHTML = 3;
                document.getElementById('regalosTotales').innerHTML = 2;
            }
            else if(! $(this).is(':checked')){
                valor = parseInt(document.getElementById('regalosRestantes').innerHTML);
                valor += 2;
                document.getElementById('regalosRestantes').innerHTML = valor;
            }
            
            var cantidadMaxima= parseInt(document.getElementById('regalosTotales').innerHTML);
            // Comprovamos si supera la cantidad máxima indicada
            if(contador>cantidadMaxima){
                alert("Máximo de regalos alcanzado");
                // Desmarcamos el ultimo elemento
                $(elemento).prop('checked', false);
                contador--;
            }
            if(document.getElementById('regalosRestantes').innerHTML == 0){
                document.getElementById('regalosRestantes').innerHTML = 0;
            } else {
                document.getElementById('regalosRestantes').innerHTML -= 1;
            }
        }); 

        function desahabilitarChecksPiezas(){
            $(document).ready(function(){
                $('#piezas').find("div").addClass('disabled');
                $('#piezas').find(':checkbox').attr('disabled', 'true');
            });               
        }
        function habilitarChecksPiezas(){
            $(document).ready(function(){
                $('#piezas').find("div").removeClass('disabled');
                $('#piezas').find(':checkbox').removeAttr('disabled');
            });            
        }
        function limpiarChecksPiezas(){
            $(document).ready(function(){
                $('#piezas').find(':checkbox').removeAttr('checked');
            });   
        }
        function desahabilitarRadioColor(){
            $(document).ready(function(){
                $('#colorBase').find("div").addClass('disabled');
                $('#colorBase').find(':radio').attr('disabled', 'true');
            });               
        }
        function desahabilitarRadioColorFondo(){
            $(document).ready(function(){
                $('#colorFondo').find("div").addClass('disabled');
                $('#colorFondo').find(':radio').attr('disabled', 'true');
            });               
        }
        function habilitarRadioColor(){
            $(document).ready(function(){
                $('#colorBase').find("div").removeClass('disabled');
                $('#colorBase').find(':radio').removeAttr('disabled');
            });            
        }
        function habilitarRadioColorFondo(){
            $(document).ready(function(){
                $('#colorFondo').find("div").removeClass('disabled');
                $('#colorFondo').find(':radio').removeAttr('disabled');
            });            
        }
        function desahabilitarChecksRegalos(){
            $(document).ready(function(){
                $('#regalos').find("div").addClass('disabled');
                $('#regalos').find(':checkbox').attr('disabled', 'true');
            });               
        }
        function habilitarChecksRegalos(){
            $(document).ready(function(){
                $('#regalos').find("div").removeClass('disabled');
                $('#regalos').find(':checkbox').removeAttr('disabled');
            });            
        }
        function limpiarChecksRegalos(){
            $(document).ready(function(){
                $('#regalos').find(':checkbox').removeAttr('checked');
            });   
        }
        function activaDesahabilita(nombre){
            $('#'+nombre+'').addClass('disabled');
            $('#regalos :last-child').find(':checkbox').attr('disabled', 'true');
        }
        


        var piezas;
        var regalos;
        var anillos;

        
        function selectDirigido(form){
            var selec = form.dedicado.options;
            var val;
            for(i=0; i < selec.length; i++){
                if(selec[i].selected == true){
                    val = selec[i].value;
                    //console.log(selec[i].value);
                    break;
                }
            }
            if(val != 'customDirigido'){
                $('#dirigido').attr('disabled', 'true'); //bloqueamos para que no pueda escribir el usuario
                document.getElementById('dirigido').value = val;
            } else {
                $('#dirigido').removeAttr('disabled'); //activamos el text area para que escriba el usuario
                document.getElementById('dirigido').value = '';
            }
        }

        function selectFrase(form){
            var selec = form.frases.options;
            var val;
            for(i=0; i < selec.length; i++){
                if(selec[i].selected == true){
                    val = selec[i].value;
                    //console.log(selec[i].value);
                    break;
                }
            }
            if(val != 'custom'){
                $('#frase').attr('disabled', 'true'); //bloqueamos para que no pueda escribir el usuario
                document.getElementById('frase').value = val;
            } else {
                $('#frase').removeAttr('disabled'); //activamos el text area para que escriba el usuario
                document.getElementById('frase').value = '';
            }
            
        }

        function vaciarBases(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //borramos todos los elementos
                while (baseSelect.firstChild) {
                    baseSelect.removeChild(baseSelect.firstChild);
                }
                //agregamos el primer elemento base
                var item = document.createElement('option');
                item.value = "null";
                item.innerText = "Seleccionar base";
                baseSelect.appendChild(item);
            }            
            
        }

        function cargarBasesMdf(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las 3 bases generales
                //agregamos base lineas
                var item = document.createElement('option');
                item.value = "lineas";
                item.innerText = "Lineas";
                baseSelect.appendChild(item);
                //agregamos base cruzado
                var item = document.createElement('option');
                item.value = "cruzado";
                item.innerText = "Cruzado";
                baseSelect.appendChild(item);
                //agregamos base cubico
                var item = document.createElement('option');
                item.value = "cubico";
                item.innerText = "Cúbico (Rolex)";
                baseSelect.appendChild(item);
            }
        }

        function cargarBasesMdfPlus(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las 3 bases generales
                //agregamos base lineas
                var item = document.createElement('option');
                item.value = "lineas";
                item.innerText = "Lineas";
                baseSelect.appendChild(item);
                //agregamos base cruzado
                var item = document.createElement('option');
                item.value = "cruzado";
                item.innerText = "Cruzado";
                baseSelect.appendChild(item);
                //agregamos base cubico
                var item = document.createElement('option');
                item.value = "cubico";
                item.innerText = "Cúbico (Rolex)";
                baseSelect.appendChild(item);
                //agregamos base galla
                var item = document.createElement('option');
                item.value = "galla";
                item.innerText = "Galla";
                baseSelect.appendChild(item);
            }
        }

        function cargarBasesMadera(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las bases de molduras
                //agregamos base caracol
                var item = document.createElement('option');
                item.value = "caracol";
                item.innerText = "Caracol";
                baseSelect.appendChild(item);
                 //agregamos base olas
                 var item = document.createElement('option');
                item.value = "olas";
                item.innerText = "Olas";
                baseSelect.appendChild(item);
                //agregamos base cuadricular
                var item = document.createElement('option');
                item.value = "cuadricular";
                item.innerText = "Cuadricular";
                baseSelect.appendChild(item);
                //agregamos base florencia
                var item = document.createElement('option');
                item.value = "florencia";
                item.innerText = "Florencia";
                baseSelect.appendChild(item);
                //agregamos base francia
                var item = document.createElement('option');
                item.value = "francia";
                item.innerText = "Francia";
                baseSelect.appendChild(item);
                //agregamos base rupestre
                var item = document.createElement('option');
                item.value = "rupestre";
                item.innerText = "Rupestre";
                baseSelect.appendChild(item);
                //agregamos base vainilla
                var item = document.createElement('option');
                item.value = "vainilla";
                item.innerText = "Vainilla";
                baseSelect.appendChild(item);
                //agregamos base italia
                var item = document.createElement('option');
                item.value = "italia";
                item.innerText = "Italia";
                baseSelect.appendChild(item);
                //agregamos base cocodrilo
                var item = document.createElement('option');
                item.value = "cocodrilo";
                item.innerText = "Cocodrilo";
                baseSelect.appendChild(item);
                //agregamos base piscis
                var item = document.createElement('option');
                item.value = "piscis";
                item.innerText = "Piscis";
                baseSelect.appendChild(item);
                //agregamos base cuadrato
                var item = document.createElement('option');
                item.value = "cuadrato";
                item.innerText = "Cuadrato";
                baseSelect.appendChild(item);
            }
            
        }

        function cargarBasesMaderasPuras(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las bases de molduras
                //agregamos base caracol
                var item = document.createElement('option');
                item.value = "caracol";
                item.innerText = "Caracol";
                baseSelect.appendChild(item);
                //agregamos base olas
                var item = document.createElement('option');
                item.value = "olas";
                item.innerText = "Olas";
                baseSelect.appendChild(item);
                //agregamos base cuadricular
                var item = document.createElement('option');
                item.value = "cuadricular";
                item.innerText = "Cuadricular";
                baseSelect.appendChild(item);
                //agregamos base florencia
                var item = document.createElement('option');
                item.value = "florencia";
                item.innerText = "Florencia";
                baseSelect.appendChild(item);
                //agregamos base francia
                var item = document.createElement('option');
                item.value = "francia";
                item.innerText = "Francia";
                baseSelect.appendChild(item);
                //agregamos base rupestre
                var item = document.createElement('option');
                item.value = "rupestre";
                item.innerText = "Rupestre";
                baseSelect.appendChild(item);
                //agregamos base vainilla
                var item = document.createElement('option');
                item.value = "vainilla";
                item.innerText = "Vainilla";
                baseSelect.appendChild(item);
                //agregamos base italia
                var item = document.createElement('option');
                item.value = "italia";
                item.innerText = "Italia";
                baseSelect.appendChild(item);
                //agregamos base cocodrilo
                var item = document.createElement('option');
                item.value = "cocodrilo";
                item.innerText = "Cocodrilo";
                baseSelect.appendChild(item);                
            }
        }

        function cargarBasesEstrella(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las bases de estrella
                //agregamos base cometa cristal
                var item = document.createElement('option');
                item.value = "cometa cristal";
                item.innerText = "Cometa Cristal";
                baseSelect.appendChild(item);
                //agregamos base cometa normal
                var item = document.createElement('option');
                item.value = "cometa normal";
                item.innerText = "Cometa Normal";
                baseSelect.appendChild(item);
                //agregamos base cometa orion
                var item = document.createElement('option');
                item.value = "orion";
                item.innerText = "Orión";
                baseSelect.appendChild(item);
                //agregamos base cometa hadi deluxe
                var item = document.createElement('option');
                item.value = "hadi deluxe";
                item.innerText = "Hadi Deluxe";
                baseSelect.appendChild(item);
                //agregamos base cometa corona
                var item = document.createElement('option');
                item.value = "corona";
                item.innerText = "Corona";
                baseSelect.appendChild(item);
            }
            
        }

        function cargarBasesDiamante(){
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las bases de madera
                //agregamos base doble madera
                var item = document.createElement('option');
                item.value = "vip doble";
                item.innerText = "VIP Doble";
                baseSelect.appendChild(item);
                //agregamos base triple madera
                var item = document.createElement('option');
                item.value = "vip triple";
                item.innerText = "VIP Triple";
                baseSelect.appendChild(item);
                //agregamos base doble cristal
                var item = document.createElement('option');
                item.value = "cristal vip doble";
                item.innerText = "Cristal VIP Doble";
                baseSelect.appendChild(item);
                //agregamos base triple cristal
                var item = document.createElement('option');
                item.value = "cristal vip triple";
                item.innerText = "Cristal VIP Triple";
                baseSelect.appendChild(item);                            
            }          
        }

        function cargarBasesDiamantePrepas(){
            //obtenemos el select
            var baseSelect = document.getElementById('base');
            if(baseSelect != null){
                //agregamos las bases diamante
                //agregamos base cometa
                var item = document.createElement('option');
                item.value = "cometa";
                item.innerText = "Cometa";
                baseSelect.appendChild(item);
            }
            
        }

        function selectBase(form){
            //recogemos informacion de la base
            var selec = form.base.options;
            var base;
            for(i=0; i < selec.length; i++){
                if(selec[i].selected == true){                    
                    base = selec[i].value;
                    break;
                }
            }
            
            //habilitamos y deshabilitamos colores de fondo según la base
            if(base == 'null' || base == 'lineas' || base == 'cruzado' || base == 'cubico' || base == 'piscis' || base == 'cuadrato' || base == 'cometa cristal' || base == 'orion'){
                $('#colorFondo').hide();
                desahabilitarRadioColorFondo();
            } else {
                $('#colorFondo').show();
                habilitarRadioColorFondo();
            }

        }

        function selectPaquete(form){
            var selec = form.paquete.options;
            var val;
            var paquete;
            for(i=0; i < selec.length; i++){
                if(selec[i].selected == true){
                    paquete = selec[i].innerHTML; 
                    val = selec[i].value;
                    break;
                }
            }

            //creamos una lista a partir del string [0] - nombre paquete [1] - material [2]-nomenclatura
            dataList = val.split('.');            
            var nomenclatura = dataList[2];      
            let material = dataList[1];

            if(material == 'mdf'){
                vaciarBases();
                if(paquete.substring(0, 13) == 'Línea Clásica'){
                    cargarBasesMdfPlus();
                } else {
                    cargarBasesMdf();
                }                
            } else if(material == 'madera'){
                vaciarBases();
                if(paquete == 'Insignia S17'){
                    cargarBasesMaderasPuras();
                } else if(paquete.substring(0, 14) == 'Línea Diamante'){
                    cargarBasesDiamante();
                }
                else {
                    cargarBasesMadera();
                }                
            } else if(material == 'estrella'){
                vaciarBases();
                cargarBasesEstrella();
            }  

            //limpiamos contadores de piezas y regalos
            var pRestantes = document.getElementById('piezasRestantes');
            var pTotales = document.getElementById('piezasTotales');
            pRestantes.innerHTML = 0;  
            pTotales.innerHTML = 0;
            var rRestantes = document.getElementById('regalosRestantes');
            var rTotales = document.getElementById('regalosTotales');
            rRestantes.innerHTML = 0;  
            rTotales.innerHTML = 0; 

            //reseteamos los colores de fondo
            $('#colorFondo').hide();
            desahabilitarRadioColorFondo();
            //verificamos las opciones que escogio el usuario            
            if(nomenclatura == 'ull'){ //caso que no haya escogido nada aún (primer opcion)
                //deshabilitando opciones de seleccion
                desahabilitarChecksPiezas();
                desahabilitarRadioColor();
                limpiarChecksPiezas();
                desahabilitarChecksRegalos(); 
            } else if(nomenclatura.charAt(0) == '1'){ //testimonial                
                desahabilitarChecksPiezas();   
                habilitarRadioColor();
                limpiarChecksPiezas();
                desahabilitarChecksRegalos();   
            } else { 
                habilitarChecksPiezas();
                habilitarRadioColor();
                limpiarChecksPiezas();                
                
                //caso para cada tipo de paquete
                if(nomenclatura.charAt(1) == '0' && nomenclatura.charAt(2) == '0'){ //linea standard                    
                    piezas = nomenclatura.charAt(0);
                    var pRestantes = document.getElementById('piezasRestantes');
                    var pTotales = document.getElementById('piezasTotales');
                    pRestantes.innerHTML = piezas;
                    pTotales.innerHTML = piezas;
                    limpiarChecksRegalos();
                    desahabilitarChecksRegalos();                    
                } else if(nomenclatura.charAt(0) != '0' && nomenclatura.charAt(1) != '0' && nomenclatura.charAt(2) == '0'){                    
                    //alert("clasica, plata, oro, diamante");
                    piezas = nomenclatura.charAt(0);
                    regalos = nomenclatura.charAt(1);
                    var pRestantes = document.getElementById('piezasRestantes');
                    var pTotales = document.getElementById('piezasTotales');
                    pRestantes.innerHTML = piezas;
                    pTotales.innerHTML = piezas;

                    //parte de regalos
                    limpiarChecksRegalos();
                    habilitarChecksRegalos();
                    $('#anillo').attr('disabled', 'true');
                    $('#bloqueAnillo').addClass('disabled'); 

                    var rRestantes = document.getElementById('regalosRestantes');
                    var rTotales = document.getElementById('regalosTotales');
                    rRestantes.innerHTML = regalos;
                    rTotales.innerHTML = regalos;

                    
                } else /*if(val.length == 3)*/{
                    piezas = nomenclatura.charAt(0);
                    regalos = nomenclatura.charAt(1);
                    anillos = nomenclatura.charAt(2);
                    //alert(anillos);
                    //console.log('linea estrella y diamante piezas: '+piezas+" regalos: "+regalos+" anillos: "+anillos);
                    var pRestantes = document.getElementById('piezasRestantes');
                    var pTotales = document.getElementById('piezasTotales');
                    pRestantes.innerHTML = piezas;
                    pTotales.innerHTML = piezas;

                    //parte de regalos
                    limpiarChecksRegalos();
                    habilitarChecksRegalos();
                    var rRestantes = document.getElementById('regalosRestantes');
                    var rTotales = document.getElementById('regalosTotales');
                    rRestantes.innerHTML = regalos;
                    rTotales.innerHTML = parseInt(regalos) + 1;
                    
                    //caso que sea molduras 2 o anillo
                    if(anillos != 'x'){                        
                        $('#anillo').attr('disabled', 'true');
                        $("#anillo").prop('checked', true);
                        $('#bloqueAnillo').addClass('disabled'); 
                    } else {
                        rTotales.innerHTML = parseInt(regalos);
                        $('#anillo').removeAttr('disabled');
                        $('#bloqueAnillo').removeClass('disabled'); 
                    }
                                      


                }
            }
        }
    </script>
</body>
</html>