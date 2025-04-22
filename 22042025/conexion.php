<?php
    $host ='127.0.0.1:3308';
    $user ='root';
    $contraseñaDB='123456';
    $dbName= 'test_php';
    
    $conexion = new mysqli($host,$user,$contraseñaDB,$dbName);

    if($conexion -> connect_error ){
        die('Error en la conexion'.$conexion->connect_error);

    }

?>