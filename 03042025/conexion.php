<?php
$host= '127.0.0.1:3308';
$user= 'root';
$password ='1234';
$dbName='crud_php';
$conn = new mysqli($host,$user,$password,$dbName);

if($conn -> connect_error){
    die('Error en la conexion'.$conn->connect_error);
}

?>