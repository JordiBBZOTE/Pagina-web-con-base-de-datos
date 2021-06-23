<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Muestra departamento</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>   
<form>
    <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NombreD</th>
            <th>NumeroD</th>
            <th>Nssgte</th>
            <th>Fechainigte</th>
        </tr>
        <?php 
            $sql="SELECT * FROM departamento";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['NOMBRED']?></td>
            <td><?php echo $mostrar['NUMEROD']?></td>
            <td><?php echo $mostrar['NSSGTE']?></td>
            <td><?php echo $mostrar['FECHAINIGTE']?></td>
        </tr>
    <?php 
    }
    ?>
    </table>
</form>
</body>
</html>