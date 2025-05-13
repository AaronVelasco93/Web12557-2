<?php
include ('conexion.php');
 $id=$_GET['id'];
 //echo $id;
$eliminarUsuario = "DELETE FROM persona where numero = $id ";
 


if ($conecta->query($eliminarUsuario)===  true){
    header('Location: ./listar.php');
    exit();
}else{
    echo "Error". $conecta->error;
}


?>