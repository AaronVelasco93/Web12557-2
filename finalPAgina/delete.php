<?php
include ('conexion.php');
 $id=$_GET['id'];
 //echo $id;
 //id = 8
$eliminarUsuario = "DELETE FROM persona where numero = $id ";
 //DELETE FROM persona where numero = 8


if ($conexion->query($eliminarUsuario)===  true){
    header('Location: ./listar.php');
    exit();
}else{
    echo "Error". $conexion->error;
}


?>