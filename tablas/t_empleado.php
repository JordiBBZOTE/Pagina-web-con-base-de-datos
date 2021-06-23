<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>muestra empleado</title>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>   
<form>
    <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>Nombrep</th>
            <th>Inic</th>
            <th>Apellido</th>
            <th>NSS</th>
            <th>Fechan</th>
            <th>Direccion</th>
            <th>Sexo</th>
            <th>Salario</th>
            <th>Nsssuper</th>
            <th>ND</th>
        </tr>
        <?php 
            $sql="SELECT * FROM empleado";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['NOMBREP']?></td>
            <td><?php echo $mostrar['INIC']?></td>
            <td><?php echo $mostrar['APELLIDO']?></td>
            <td><?php echo $mostrar['NSS']?></td>
            <td><?php echo $mostrar['FECHAN']?></td>
            <td><?php echo $mostrar['DIRECCION']?></td>
            <td><?php echo $mostrar['SEXO']?></td>
            <td><?php echo $mostrar['SALARIO']?></td>
            <td><?php echo $mostrar['NSSSUPER']?></td>
            <td><?php echo $mostrar['ND']?></td>
        </tr>
    <?php 
    }
    ?>
    </table>
</form>
</body>
</html>