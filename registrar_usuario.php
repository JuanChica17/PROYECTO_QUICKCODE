<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre_usuario         = $_REQUEST['nombre_usuario'];
    $correo       = $_REQUEST['correo'];
    $contraseña          = $_REQUEST['contraseña'];
    $tipo_usuario   = $_REQUEST['tipo_usuario'];

    $user = 'root';
    $pass = '';
    $nombrebd = 'proyecto_quickcode';

    try{


    $bd = new PDO(
        $dsn = "mysql:host=localhost;dbname=".$nombrebd,$user,$pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

    $sentencia = $bd->prepare("INSERT INTO login_usuarios(nombre_usuario,correo,contraseña,tipo_usuario) VALUES (?,?,?,?);");
        $resultado = $sentencia->execute([$nombre_usuario,$correo,$contraseña,$tipo_usuario]);

      if($resultado === TRUE){
        echo "<div class='alert alert-success'>Usuario registrado correctamente</div>";
        echo "<div class='alert alert-warning'><a href='form.php'>Regresar</a></div>";
      }else{
        echo "<div class='alert alert-danger'>Error</div>";
            echo "<div class='alert alert-warning'><a href='form.php'>Regresar</a></div>";
      }

    }catch(PDOException $e){
      echo "Error".$e->getMessage();
    }
  
?>

</body>
</html>