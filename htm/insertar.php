<?php
include './conexion.php';


   
if (isset($_POST['submit']))
{
   $nom=$_POST['nombre'];
   $ape=$_POST['apellidos'];

   {
$ins=$con->query("INSERT INTO dos  VALUES (NULL, '$nom', '$ape')");
}
  echo "<script>location.href='./administrar.php'</script>";

}

?>
<html>
<head>
<title>Nuevo Contacto</title>
    <link rel="stylesheet" type="text/css" href="../css/crear_c.css">
<body><div class="login-box">
  <h1>Nuevo Contacto</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="nombre"placeholder="Ingrese el nombre ">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" name="apellidos"placeholder="Ingrese los apellidos">
  </div>

  <input type="submit" name="submit" class="btn" value="Guardar"><br>
  
 
        </form>
        
    </div>

</body>
</head>
</html>