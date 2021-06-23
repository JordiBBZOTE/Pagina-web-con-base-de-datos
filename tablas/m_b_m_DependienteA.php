<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifica dependiente,</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="UPDATE dependiente SET $_POST[Columna] = '$_POST[nuevo]'
            WHERE $_POST[ColumnaR]='$_POST[IdentFila]'";
       if(mysqli_query($conexion,$sql)){
        echo "Actualizacion completa";
       }else
       {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
       }
    ?>
    <h1></h1>
</body>
</html>