<?php 
  include './conexion.php';
   
  $id=$_REQUEST['id'];
  
  
  $up=$con->query("DELETE FROM dos WHERE id='$id'");

  if ($up)
      echo '.:: Registro Eliminado con Exito ::.';
  else
      echo '.:: Registro NO Eliminado ::.';
  

 echo "<script>location.href='./administrar.php'</script>";


?>