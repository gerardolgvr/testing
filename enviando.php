<?php

if(!$_POST){
    header('Location: alumnos_formulario.php#escuelas');    
} 

//recogiendo datos
$claveFormulario = $_POST['claveFormulario'];
$id_escuela = $_POST['idEscuela'];
$numcontrato = $_POST['numcontrato'];
$generacion = $_POST['generacion'];
$id_carrera = $_POST['carrera'];
$nombre = $_POST['nombre'];
$aPaterno = $_POST['apellidopaterno'];
$aMaterno = $_POST['apellidomaterno'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];
$tamanotoga = $_POST['tamanotoga'];
$nombre_paquete = substr($_POST['paquete'], 0, -3);
if($base = $_POST['base'] != null){
    $base = $_POST['base'];
} else {
    $base = 'Prepa';
}
$color_base = $_POST['colorbase'];
$comentarios = $_POST['comentarios'];

//insertando datos de cliente
try {
    //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17', array(PDO::ATTR_PERSISTENT => true));


} catch (PDOException $e){
    echo "Error " . $e->getMessage();
}

try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->beginTransaction(); //comenzamos transaccion

    $conexion->exec("set names utf8");    
    //mysql_query("set names 'utf8'"); 
    //insertando cliente  
    $statement = $conexion->prepare('INSERT INTO clientes  VALUES (null, :nombreC, :apPaterno, :apMaterno, :tel, :correo, :genero, :id_escuela, :id_carrera, :generacion, :tamToga)');
    $statement->execute(array(':nombreC' => $nombre, ':apPaterno' => $aPaterno, ':apMaterno' => $aMaterno, ':tel' => $telefono, ':correo' => $correo, ':genero' => $sexo, ':id_escuela' => $id_escuela, ':id_carrera' => $id_carrera, ':generacion' => $generacion, ':tamToga' => $tamanotoga));

    //guardando el id del cliente en base a la clave del formulario
    $id_cliente = $conexion->lastInsertId();

    //caso que cualquier otro tipo de paquete
    if(isset($_POST['piezas'])){
        //guardando el id del paquete en base a la clave del formulario
        $statement = $conexion -> prepare('SELECT id_paquete FROM paquetes WHERE nombre_paquete = :paquete');
        $statement -> execute(array(':paquete' => $nombre_paquete));
        $resultado = $statement->fetch();
        //recuperamos el valor   recuperado
        $id_paquete = $resultado['id_paquete'];

    } else { //caso que sea un paquete testimonial
        //verificamos que nivel de testimonial es (superior o medio-superior)
        $statement = $conexion -> prepare('SELECT nivel FROM escuelas WHERE id_escuela = :id_escuela');
        $statement -> execute(array(':id_escuela' => $id_escuela));
        $resultado = $statement->fetch();
        //recuperamos el valor   recuperado
        $nivel = $resultado['nivel'];

        //determinamos el id del paquete testimonial segun el nivel
        $id_paquete = ($nivel == 'Superior') ? 1 : 17;      
    }    

    //creando la fecha
    $fecha = date('Y-m-d');

    //insertando en la tabla paquetes_contratados
    $statement = $conexion -> prepare('UPDATE paquetes_contratados SET numero_contrato = :numero_contrato, id_cliente = :id_cliente, id_paquete = :id_paquete, fecha = :fecha, base = :base, color_base = :color_base, estado_formulario = 1, pagado = "false", entregado = "false", cancelado = "false", comentarios = :comentarios WHERE clave_formulario = :clave_formulario');
    $statement -> execute(array(':numero_contrato' => $numcontrato, ':id_cliente' => $id_cliente, ':id_paquete' => $id_paquete, ':fecha' => $fecha, ':base' => $base, ':color_base' => $color_base, ':comentarios' => $comentarios, ':clave_formulario' => $claveFormulario));    
    
    if(isset($_POST['piezas'])){
        //recogemos las piezas seleccionadas
        $piezas = $_POST['piezas'];

        //recorremos las piezas seleccionadas para insertarlas
        for($i = 0; $i < count($piezas); $i++){
            if($piezas[$i] == 'agradecimiento' || $piezas[$i] == 'libroagradecimiento'){ //caso de piezas que requieren frases de agradecimientos
                //recogemos campos cuando se escoge algun tipo de agradecimiento
                $frase = $_POST['frases'];
                $dedicado = ($_POST['dedicado'] == 'customDirigido') ? $_POST['dirigido'] : $_POST['dedicado'];

                //verificamos si selecciono una frase ya hecha
                if($frase != 'custom'){
                    //obteniendo id del agradecimiento seleccionado
                    $statement = $conexion->prepare('SELECT id_agradecimiento FROM frases_agradecimientos WHERE agradecimiento = :agradecimiento');
                    $statement->execute(array(':agradecimiento' => $frase));
                    $resultado = $statement->fetch();
                    //recuperamos el valor   recuperado
                    $id_agradecimiento = $resultado['id_agradecimiento'];

                } else { //caso de frase personalizada
                    //insertando la nueva frase de tipo personalizada
                    $statement = $conexion->prepare('INSERT INTO frases_agradecimientos VALUES (null, "Personalizado", :agradecimiento)');
                    $statement->execute(array(':agradecimiento' => $_POST['frase']));
                    //recupetamos el id de la nueva frase personalizada
                    $id_agradecimiento = $conexion->lastInsertId();
                }

                //insertamos pieza con la frase escogida y a quien va dedicado
                $statement = $conexion->prepare('INSERT INTO paquetes_comprados_piezas_detalles  VALUES (null, :numero_contrato, :nombre_pieza, :id_agradecimiento, :dirigido, :id_cliente)');
                $statement->execute(array(':numero_contrato' => $numcontrato, ':nombre_pieza' => $piezas[$i], ':id_agradecimiento' => $id_agradecimiento, ':dirigido' => $dedicado, ':id_cliente' => $id_cliente));
            } else {
                //insertamos piezas que no requieren textos de agradecimientos
                $statement = $conexion->prepare('INSERT INTO paquetes_comprados_piezas_detalles  VALUES (null, :numero_contrato, :nombre_pieza, null, null, :id_cliente)');
                $statement->execute(array(':numero_contrato' => $numcontrato, ':nombre_pieza' => $piezas[$i], ':id_cliente' => $id_cliente));
            }            
        }  

    } else { //insercion en la tabla piezas cuando se trata de un paquete testimonial
        $statement = $conexion->prepare('INSERT INTO paquetes_comprados_piezas_detalles  VALUES (null, :numero_contrato, "Testimonial", null, null, :id_cliente)');
        $statement->execute(array(':numero_contrato' => $numcontrato, ':id_cliente' => $id_cliente));        
    }      
    
    if(isset($_POST['regalo'])){
        //recogemos campos cuando se escogen regalos
        $regalos = $_POST['regalo'];

        //insertamos en la tabla paquetes_comprados_regalos_detalle
        for($i = 0; $i < count($regalos); $i++){
            $statement = $conexion->prepare('INSERT INTO paquetes_comprados_regalos_detalles  VALUES (null, :numero_contrato, :nombre_regalo, :id_cliente)');
            $statement->execute(array(':numero_contrato' => $numcontrato, ':nombre_regalo' => $regalos[$i], ':id_cliente' => $id_cliente));
        }
    }

    //se ha enviado correctamente
    if($conexion->commit()){
        header('Location: alumnos_formulario.php?mensaje="ok"#err');
    }

    
} catch(Exception $e){
    //print_r($e);
    $conexion->rollBack(); //fallo
}
?>