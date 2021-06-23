<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>muestra dependiente</title>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>   
<form>
    <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>Nsse</th>
            <th>Nombre_Dependiente</th>
            <th>Sexo</th>
            <th>FechaN</th>
            <th>Parentesco</th>
        </tr>
        <?php 
            $sql="SELECT * FROM dependiente";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['NSSE']?></td>
            <td><?php echo $mostrar['NOMBRE_DEPENDIENTE']?></td>
            <td><?php echo $mostrar['SEXO']?></td>
            <td><?php echo $mostrar['FECHAN']?></td>
            <td><?php echo $mostrar['PARENTESCO']?></td>
        </tr>
    <?php 
    }
    ?>
    </table>
</form>
</body>
</html>