<?php
    $host ='127.0.0.1:3308';
    $user ='root';
    $contraseñaDB='123456';
    $dbName= 'test_php';
    
/*
    $dbName: if0_38704731_ico;
    $hostDB: sql311.infinityfree.com;
    $userDB:if0_38704731
    $passDB: VFzanQv2ZyxZOWa
*/

    $conexion = new mysqli($host,$user,$contraseñaDB,$dbName);

    if($conexion -> connect_error ){
        die('Error en la conexion'.$conexion->connect_error);

    }

?>