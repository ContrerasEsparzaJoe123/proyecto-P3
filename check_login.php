<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes,initial-scale=1, maximum-scale=3, minimum-scale=1">
    <title>Mi página web</title>
</head>
<body>
    <div>
        <?php
            include 'conexion.php';
            
            /* Terminación del proceso si la conexión falla */
			if (!$con) {
				die("Conexión fallida, contacte al administrador: " . mysqli_connect_error());
			}
             if (isset($_POST['submit'])) 
            {
            /* Recepción de variables por el método POST */
            {$email=$_POST['email'];
            $password=$_POST['password'];
            }
            /* Valores de la consulta guardados en $result */
            $result = mysqli_query($con, "SELECT email, password, nombre FROM usuarios WHERE email = '$email'");
            
            /* Convierte $row en un array asociativo con los resultados de $result */
            $row = mysqli_fetch_assoc($result);
        
            /* Guarda en $hash la fila password */
            $hash = $row['password'];
        
            /* Función para verificar la contraseña */ 
            if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				echo "<div role='alert'><strong>Bienvenido(a)!</strong> $row[nombre]</div>
                <div><a href='menu.php'>Menú principal</a></div>";	
			} else {
				echo "<div role='alert'>El correo o la contraseña son incorrectos, intenta de nuevo.
				<p><a href='index.html'><strong>Por favor, intenta de nuevo.</strong></a></p></div>";			
			}	
        }
        else if (isset($_POST['crear'])) 
        header('Location: ./crear_cuenta.php')
        ?>
    </div>
    <div>
    </div>
</body>
</html>