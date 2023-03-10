<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre         = $_REQUEST['nombre'];
    $correo       = $_REQUEST['correo'];
    $telefono          = $_REQUEST['telefono'];
    $mensaje   = $_REQUEST['mensaje'];

    $user = 'root';
    $pass = '';
    $nombrebd = 'proyecto_quickcode';

    try{


    $bd = new PDO(
        $dsn = "mysql:host=localhost;dbname=".$nombrebd,$user,$pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

    $sentencia = $bd->prepare("INSERT INTO contactos(nombre,correo,telefono,mensaje) VALUES (?,?,?,?);");
        $resultado = $sentencia->execute([$nombre,$correo,$telefono,$mensaje]);

      if($resultado === TRUE){
        echo "<div class='alert alert-success'>Contacto Enviado correctamente</div>";
        echo "<div class='alert alert-warning'><a href='contact.html'>Regresar</a></div>";
      }else{
        echo "<div class='alert alert-danger'>Error</div>";
            echo "<div class='alert alert-warning'><a href='contact.html'>Regresar</a></div>";
      }

    }catch(PDOException $e){
      echo "Error".$e->getMessage();
    }
  
?>

</body>
</html>