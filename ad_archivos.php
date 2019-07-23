<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    </head>
    <body>
       <div>
           <h1>.:: Administrador de Archivos ::.</h1>
           <table border="2">
               <th>No.</th>
               <th>Nombre</th>
               <th>Descripción</th>
               <th>Ruta</th>
               <?php 
                include 'conexion.php';
                $sel=$con -> query("select * from archivos");
                while ($fila=$sel->fetch_assoc())
                {
                  ?>
                  <tr>
                      <td><?php echo $fila['id']?></td>
                      <td><?php echo $fila['name']?></td>
                      <td><?php echo $fila['description']?></td>
                      <td><?php echo $fila['ruta']?></td>
                      >
                  </tr>      
           <?php
                } ?>
           </table>
           <a href="menu.php">Menú Principal</a>
       </div>
    </body>
</html>