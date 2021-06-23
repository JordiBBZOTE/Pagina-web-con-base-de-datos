<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inserta en empleado</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="
        INSERT INTO empleado 
            (NOMBREP, INIC, APELLIDO, NSS, FECHAN, DIRECCION, SEXO, SALARIO, NSSSUPER, ND) 
        VALUES 
            ('$_POST[Nombrep]','$_POST[Inic]','$_POST[Apellido]','$_POST[NSS]','$_POST[Fechan]'
            ,'$_POST[Direccion]','$_POST[Sexo]','$_POST[Salario]','$_POST[Nsssuper]','$_POST[ND]')";
            
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