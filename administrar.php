
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    </head>
    <body>
       <div>
           <h1>.:: Administrar Contáctos ::.</h1>
           <table border="2">
               <th>No.</th>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th colspan="2">Acciones</th>
               <?php 
                include 'conexion.php';
                $sel=$con -> query("select * from dos");
                while ($fila=$sel->fetch_assoc())
                {
                  ?>
                  <tr>
                      <td><?php echo $fila['id']?></td>
                      <td><?php echo $fila['nombre']?></td>
                      <td><?php echo $fila['apellidos']?></td>
                      <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
                      <td><a href="eliminar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
                  </tr>      
           <?php
                } ?>
           </table>
           <a href="menu.php">Menú Principal</a>
       </div>
    </body>
</html>