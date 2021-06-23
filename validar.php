<?php
error_reporting(0);
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario; 

$conexion=mysqli_connect("localhost","root","","rol");

if (!$conexion) {
  die("Connection failed: " . mysqli_connect_error());
}

$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //usuario
header("location:user.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <embed src="./sonidos/fallo.mp3" autostarty = "true " loop="true" volume = "70" width="0" height="0">
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);