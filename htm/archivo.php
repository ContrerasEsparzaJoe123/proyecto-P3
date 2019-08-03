<?php
include './conexion.php';
if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
      // creamos las variables para subir a la db
        $ruta = "../upload/"; 
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombrefinal= preg_replace('/[\\\]/', "", $nombrefinal);//Sustituye una expresión regular
        $upload= $ruta . $nombrefinal;  



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                    
          echo "<script>location.href='./ad_archivos.php'</script>";
                   /* echo "<b>Upload exitoso!. Datos:</b><br>";  
                    echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                    echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                    echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                    echo "<br><hr><br>"; */ 
                         


                   $nombre  = $_POST["nombre"]; 
                   $description  = $_POST["description"]; 


                   $query = "INSERT INTO archivos (name,description,ruta,tipo,size) 
    VALUES ('$nombre','$description','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 

       mysqli_query($con, $query) or die(mysqli_error()); 
       echo "El archivo '".$nombre."' se ha subido con éxito <br>";       
        }  
    }  
 } 
?> 
<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/archivos.css">
  <title>Subir Archivos</title>
</head>
            <body> 
              <div class="main">
              <p class="sign" align="center">Subir Archivos</p>
            <form class="form1" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                 
                
                <input class="un "name="nombre" type="text"  align="center" placeholder="Nombre del Archivo"> 
                <input class="pass" name="description" type="text" align="center" placeholder="Descripcion"> 
                
                <center><div class="file-input-wrapper">
                 <button class="btn-file-input">Upload File</button>
                    <input type="file" name="fichero" />
                  </div></center>
                <br>
             <center><input  name="submit" type="submit" value="SUBIR ARCHIVO"> </center>
             <br>
              <center><a href="./ad_archivos.php">Administración de Archivos</a></center>
            </form>  
            </div>
            </body>