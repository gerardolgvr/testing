<?php

//print_r($_POST);

if(!$_POST){
    header('Location: alumnos_formulario.php#escuelas');    
} 

$clave = $_POST['numFolio'];
$escuela = $_POST['escuela'];


//PDO.php
try {
    //$conexion = new PDO('mysql:host=localhost;dbname=studio17mx', 'root', '');
    $conexion = new PDO('mysql:host=localhost;dbname=studiom3_studio17mx', 'studiom3_User17', 'Sistemas17');
    //echo "Conexion exitosa";
    
    $statement = $conexion->prepare('SELECT * FROM paquetes_contratados WHERE clave_formulario = :clave LIMIT 1');
    $statement->execute(array(':clave' => $clave));
    $resultado = $statement->fetch();

    //verificamos si el formulario ya fue llenado 
    //existe la clave
    if(!$resultado || $resultado['estado_formulario'] == '1'){
        header('Location: alumnos_formulario.php?err="claveInvalida#err"');
    }     

} catch (PDOException $e){
    echo "Error " . $e->getMessage();
}


require_once 'formulario.view.php';

?>