<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifica departamento,</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="DELETE FROM lugares_deptos WHERE '$_POST[columna]' = '$_POST[IdentFila]' AND '$_POST[Columna2]' = '$_POST[IdentFila2]'";
       if(mysqli_query($conexion,$sql)){
        echo "  Eliminacion completa";
       }else
       {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
       }
    ?>

    <h1></h1>

</body>
</html>