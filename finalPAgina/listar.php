<?php
    include ("./conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar datos</title>
</head>
<body>
    <table border="2";>
        <tr>
            <th>Numero</th>
            <th>Nombre Usuario</th>
            <th>Carrera</th>
            <th>Acciones</th>

        </tr>
<?php 
    //Iniciamo codigo en PHP
    //Generar la consulta base a la tabla persona
        $consulta = "SELECT * FROM persona";
    //enviar la consulta con ayuda de la conexion
           $resultado = $conexion->query($consulta);
            //$resultado guarda la consulta
      /*
            if($resultado == true){
            echo "bien";
        }else{
            echo "mal";
        }
    */
     while ($row = $resultado->fetch_assoc()){
    /*    
     echo "<tr>"; 
            echo "<td>".$row['numero']."</td>";
            echo "<td>".$row['nombre_usuario']."</td>";
            echo "<td>".$row['carrera']."</td>";
     echo "</tr>";
    */
    ?>
        <tr> 
            <td><?php echo $row['numero']; ?> </td>
            <td><?php echo $row['nombre_usuario']; ?></td>
            <td><?php echo $row['carrera']; ?></td>
            <td>
                <a href="./update.php?id=<?php echo $row['numero']; ?>">Editar</a>
                <a href="./delete.php?id= <?php echo $row['numero'];?>">Eliminar</a>
            </td>
        </tr>

    <?php
    }   
    ?>
    </table>
      

</body>
</html>