<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inserta en lugares deptos,</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="INSERT INTO lugares_deptos (NUMEROD, LUGARD) VALUES 
        ('$_POST[NumeroD]','$_POST[LugarD]')";
            
       if(mysqli_query($conexion,$sql)){
        echo "Registro completo";
       }else
       {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
       }
    ?>


    <h1></h1>

</body>
</html>