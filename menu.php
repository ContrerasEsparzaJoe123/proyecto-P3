<?php
/*
if (null !==($_SESSION['loggedin'] = true));
{ 
    header("Location: index.html");
    die();
}
else {
    include 'check_login.php';
}*/
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
   <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div>
          <h1>Menu</h1>
         <!-- <ul>
              <li><a href="insertar.php"></a></li>
              <li><a href="administrar.php"></a></li>
              <li><a href="archivo.php"></a></li>
          </ul>-->
          <div class="wrapper">
            <a class="fourth before after" href="insertar.php">Insertar Contacto</a>
           </div>
           <div class="wrapper">
            <a class="fourth before after" href="administrar.php">Administrar Contacto</a>
           </div>
           <div class="wrapper">
            <a class="fourth before after" href="archivo.php">Insertar Archivo</a>
           </div>
       </div>
    </body>
</html>