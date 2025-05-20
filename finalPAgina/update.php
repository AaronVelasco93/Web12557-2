<?php
include ('conexion.php');

$id=$_GET['id'];

$sql="SELECT * FROM persona WHERE numero=$id";

$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $nombre_usuario = $_POST['usuario'];
    $carrera = $_POST['carrera'];

    $sql = "UPDATE persona SET nombre_usuario ='$nombre_usuario', carrera= '$carrera' WHERE numero= $id";

    if( $conexion->query($sql) === TRUE ){
        header('Location: ./listar.php');
        exit();
    }else{
        echo "Error del Update".$sql."<br>".$conexion->error;
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
        <h1>Editar usuario <?php echo $id; ?></h1>
        <form action="./update.php?id=<?php echo $id;?>" method="post">
          <label for="name">Nombre Usuario</label>
            <input type="text" name="usuario" id="" value="<?php echo $row['nombre_usuario']?>" >
            <br><br>
        <label for="NoCuenta">Carrera</label>
            <input type="text" name="carrera" id="" value= "<?php echo $row['carrera'] ?>" >
            <br><br>
            <button type="submit">Modificar</button>  
        </form>
</body>
</html>

