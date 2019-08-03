<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    <link rel="stylesheet" href="../css/tabla.css">
    </head>
    <body>
       <div class="main">
           <h1>Administrador de Archivos</h1>
           <table class="content-table">
               <thead>
                   <tr>
               <th>No.</th>
               <th>Nombre</th>
               <th>Descripción</th>
               <th>Ruta</th>
               </tr>
               </thead>
               <?php 
                include './conexion.php';
                $sel=$con->query("select * from archivos");
                while ($fila=$sel->fetch_assoc())
                {
                  ?>
                  <tbody>
                  <tr>
                      <td><?php echo $fila['id']?></td>
                      <td><?php echo $fila['name']?></td>
                      <td><?php echo $fila['description']?></td>
                      <td><?php echo $fila['ruta']?></td>
                      
                  </tr>      
           <?php
                } ?>
                </tbody>
           </table>
       </div>
    </body>
    <footer>
    <center> <a class="link" href="./menu.php">Menú Principal</a></center>
    </footer>
</html>