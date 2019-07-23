<?php 
  include 'conexion.php';

  $id=$_REQUEST['id'];

  //echo 'Valor de ID: '.$id;
  
  $sel=$con->query("select * from dos where id='$id'");

  if ($fila=$sel->fetch_assoc())
  {
      
  }
  if (isset($_POST['submit'])){
   $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];

  {
  $up=$con->query("UPDATE dos SET nombre='$nombre', apellidos='$apellidos' WHERE id='$id'");
  }
  if ($up)
      echo '.:: Registro Actualizado con Exito ::.';
  else
      echo '.:: Registro NO Actualizado ::.';
  

 //echo "<script>location.href='administrar.php'</script>";

    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    </head>
    <body>
       <div>
          <h1>.:: Actualizar Contácto ::.</h1>
           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
               <div>
                   <label for="nombre">Nombre: </label>
                   <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre'] ?>">
               </div>
               <div>
                   <label for="apellidos">Apellidos: </label>
                   <input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $fila['apellidos'] ?>">
               </div>
               <div>
                  <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
                  <input type="submit" name="submit" value="Guardar">
                  
               </div>
           </form>
           
           <a href="administrar.php">Administrar Contactos</a>
       </div>
    </body>
</html>