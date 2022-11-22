<?php
session_start();
try{
$nombre_usuario = $_POST['nombre_usuario'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$tipo_usuario = $_POST['tipo_usuario'];

$user = 'root';
$pass = '';
$nombrebd = 'proyecto_quickcode';

$bd = new PDO(
    $dsn = "mysql:host=localhost;dbname=".$nombrebd,$user,$pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

if($tipo_usuario == 'natural'){
$sql = "SELECT * FROM login_usuarios WHERE correo = ? AND contraseña = ?";
}if($tipo_usuario == 'juridica'){
$sql = "SELECT * FROM login_usuarios WHERE correo = ? AND contraseña = ?";
}

$stm = $bd->prepare($sql);
$stm->execute(array($correo,$contraseña));

if($stm->rowCount() >= 0){
$row = $stm->fetch(PDO::FETCH_OBJ);
$_SESSION['nombre_usuario'] = $row->nombre_usuario;
$_SESSION['correo'] = $row->correo;
$_SESSION['contraseña'] = $row->contraseña;
$_SESSION['tipo_usuario'] = $row->tipo_usuario;
$_SESSION['id'] = $row->id;
header('location: home.php');
}else{
header('location: form.php');
}

}catch(PDOException $e){
	echo "Error".$e->getMessage();
}
?>