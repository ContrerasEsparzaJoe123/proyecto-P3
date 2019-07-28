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
<html>
<head>
<title>Nuevo Contacto</title>
    <link rel="stylesheet" type="text/css" href="crear_c.css">
<body><div class="login-box">
  <h1>Nuevo Contacto</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="nombre"placeholder="Ingrese el nombre ">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="text" name="apellidos"placeholder="Ingrese los apellidos">
  </div>

  <input type="submit" name="submit" class="btn" value="Guardar"><br>
  
   <!-- <div class="loginbox">
    <img src="user.ico" class="avatar">
        <h1>Nuevo Contacto</h1>
        <form action="" method="post">
            <p>Nombre</p>
            <input type="text" name="nombre" placeholder="Ingrese el nombre">
            <p>Apellidos</p>
            <input type="text" name="apellidos" placeholder="Ingrese los apellidos">
            <input type="submit" name="submit" value="Guardar">
            <center><a href="./menu.php">Menu Principal</a><br></center>
-->
        </form>
        
    </div>

</body>
</head>
</html>