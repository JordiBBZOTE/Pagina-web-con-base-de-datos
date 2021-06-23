<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inserta en proyectos,</title>
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <?php 
        $sql="INSERT INTO proyecto (NOMBREP, NUMEROP, LUGARP, NUMD) VALUES 
        ('$_POST[NombreP]','$_POST[NumeroP]','$_POST[LugarP]','$_POST[NumD]')";
            
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