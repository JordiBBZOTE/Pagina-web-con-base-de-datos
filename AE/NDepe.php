<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inserta en dependiente</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="INSERT INTO dependiente (NSSE, NOMBRE_DEPENDIENTE, SEXO, FECHAN, PARENTESCO) VALUES 
        ('$_POST[Nsse]','$_POST[Nombre_Dependiente]','$_POST[Sexo]','$_POST[FechaN]','$_POST[Parentesco]')";
            
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