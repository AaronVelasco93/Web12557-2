<?php
//    $nombreUsuario=$_GET['nombreUsuario'];
  //  $carreraUsuario=$_GET['usuarioCarrera'];

    $nombreUsuario=$_POST['nombreUsuario'];
    $carreraUsuario=$_POST['usuarioCarrera'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color: red;
    }
</style>
<body>
    <section>
        <div>
            <h1>Hola como estas <?php echo $nombreUsuario;?> </h1>
        </div>
    </section>
    
</body>
</html>