<?php
include ('./conexion.php');
 
$nombre_usuario = $_GET['nombreUsuario'];// estto viene del html del archivo create.html
$usuario_carrera = $_GET['usuarioCarrera'];// estto viene del html del archivo create.html
$no_cuenta = $_GET['no_cuenta'];// estto viene del html del archivo create.html
$direccion_usuario = $_GET['direccion'];// estto viene del html del archivo create.html
$telefono_usuario = $_GET['telefono'];// estto viene del html del archivo create.html
$correo_usuario = $_GET['correo'];// estto viene del html del archivo create.html
$contraseña_usuario = $_GET['contraseña'];// estto viene del html del archivo create.html


$insertarConsulta = "INSERT INTO persona (
nombre_usuario, 
carrera,
no_cuenta, 
direccion,
telefono, 
email, 
password)VALUES (
'$nombre_usuario',
'$usuario_carrera',
'$no_cuenta',
'$direccion_usuario',
'$telefono_usuario',
'$correo_usuario',
'$contraseña_usuario '
)";

;
if ($conexion -> query($insertarConsulta) ===  true){
    header('Location: ./create.html');
    exit();
}else{
    echo "Error". $conexion->error;
} 


?>