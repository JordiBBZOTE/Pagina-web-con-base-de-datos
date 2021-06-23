<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inserta en departamento,</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="INSERT INTO departamento (NOMBRED, NUMEROD, NSSGTE, FECHAINIGTE) VALUES 
        ('$_POST[NombreD]','$_POST[NumeroD]','$_POST[Nssgte]','$_POST[Fechainigte]')";
            
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