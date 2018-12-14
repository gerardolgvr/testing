<?php

if(!$_POST){
    header('Location: alumnos.php');    
} 

$clave = $_POST['numFolio'];

//PDO.php
try {
    //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
    $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'root', 'gerardo123', array(PDO::ATTR_PERSISTENT => true));
    //echo "Conexion exitosa";
    //$conexion = new PDO('mysql:host=instance.c2u0nkrhn8of.us-west-2.rds.amazonaws.com;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17', array(PDO::ATTR_PERSISTENT => true));
    
    $statement = $conexion->prepare('SELECT * FROM paquetes_contratados WHERE clave_formulario = :clave LIMIT 1');
    $statement->execute(array(':clave' => $clave));
    $resultado = $statement->fetch();

    //verificamos si el formulario ya fue llenado 
    //existe la clave
    if(!$resultado || $resultado['estado_formulario'] == 'NULL'){
        header('Location: alumnos.php?err="claveInvalida#err"');
    }     

} catch (PDOException $e){
    echo "Error " . $e->getMessage();
}


require_once 'estadoPaquete.view.php';


?>