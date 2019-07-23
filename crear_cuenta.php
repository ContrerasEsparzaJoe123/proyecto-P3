
        <?php
            include 'conexion.php';
            

            if (isset($_POST['submit']))
            {
            if (!$con){
                die("Conexión fallida: ". mysqli_connect_error());
            }

            {/* Verificar que el correo no exista */
                $checkEmail= "SELECT * FROM usuarios WHERE Email = '$_POST[email]' ";
            }
            {/* Mantener la conexión y la consulta */
                $resultado= $con-> query($checkEmail);
            }
                
            {/* Recibir el resultado de la consulta */
                $count= mysqli_num_rows($resultado);
            }
                /* Si $count == 1 significa que el email ya está registrado en la base de datos */ 
                if($count >= 1){
                    echo "Ese email ya se encuentra registrado, intenta con uno diferente.";
                }else{
                    /* Si el email no está registrado, se ingresa y se crea la cuenta */
                    $nombre= $_POST['nombre'];
                    $email= $_POST['email'];
                    $pass= $_POST['password'];
                    
                    /* Función password_hash (encriptación) */ 
                    $passHash= password_hash($pass, PASSWORD_DEFAULT);
                    
                    /*Instrucción para mandar la información a la base de datos */
                    $crear=$con->query("INSERT INTO usuarios VALUES (NULL,'$nombre','$email','$passHash')");
                    
                    /* Verificación de que el proceso fue exitoso */ 
                    if($crear){
                        echo "<h3>Su cuenta se creó exitosamente</h3>";
                    }
                }
            }
            mysqli_close($con);
        ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes,initial-scale=1, maximum-scale=3, minimum-scale=1">
    <title>Crear Cuenta</title>
</head>
<body>
   <h1>Crear nueva cuenta</h1>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <div>               
                <input type="text" name="nombre" placeholder="Escribe tu nombre" required>      
            </div>
          
            <div>               
                <input type="email" name="email" aria-describedby="emailHelp" placeholder="Escribe tu dirección de Correo" required>
            </div>
          
          <div>             
                <input type="password" name="password" placeholder="Ingresa tu nueva contraseña" required>

            </div>
            
          <input type="submit" name="submit" value="Enviar">
        </form>
      <br>

      <div>
          <a href="index.html">Iniciar Sesion</a>
      </div>
    </div>
</body>
</html>