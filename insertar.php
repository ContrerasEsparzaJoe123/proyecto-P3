 <?php
  include 'conexion.php';
  

     
  if (isset($_POST['submit']))
{
     $nom=$_POST['nombre'];
     $ape=$_POST['apellidos'];

     {
 $ins=$con->query("INSERT INTO dos  VALUES (NULL, '$nom', '$ape')");
}
    echo "<script>location.href='administrar.php'</script>";
  
}

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
       <div>
          <h1>.:: Nuevo Contácto ::.</h1>
           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
               <div>
                   <label for="nombre">Nombre: </label>
                   <input type="text" name="nombre" placeholder="Nombre">
               </div>
               <div>
                   <label for="apellidos">Apellidos: </label>
                   <input type="text" name="apellidos" placeholder="Apellidos">
               </div>
               <div>
                  <input type="submit" name="submit" value="Enviar">
                  <input type="reset" name="borrar" value="Borrar">
               </div>
           </form>
           <a href="menu.php">Menú Principal</a>
       </div>
    </body>
</html>

