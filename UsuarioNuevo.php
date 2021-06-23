<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <title></title>
</head>
<body>

</body>
</html>

<?php
error_reporting(0);
$nombre=$_POST['Nombre'];
$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$usuario; 

$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT*FROM usuario";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['usuario']==$usuario || empty($usuario) || empty($contraseña) || empty($nombre)){ //comparacion
    ?>
    <h1 class="bad">CASILLA VACIA O USUARIO EXISTENTE</h1>
    <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a>
<?php
}else{
	$registro="INSERT INTO usuario (nombre, usuario, contraseña, id_cargo) values ('$nombre', '$usuario', '$contraseña','2')";
	header("location:index.php");
}
if(mysqli_query($conexion, $registro)){
    
}else{
    echo "1";
}
mysqli_close($conexion);
?>




