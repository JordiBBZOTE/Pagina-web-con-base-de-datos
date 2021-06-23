<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>muestra lugares deptos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>   
<form>
   <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NumeroD</th>
            <th>LugarD</th>
        </tr>
        <?php 
            $sql="SELECT * FROM lugares_deptos";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['NUMEROD']?></td>
            <td><?php echo $mostrar['LUGARD']?></td>
        </tr>
    <?php 
    }
    ?>
    </table>
</form>
</body>
</html>