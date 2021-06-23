<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>muestra proyecto</title>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>   
<form>
    <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NombreP</th>
            <th>NumeroP</th>
            <th>LugarP</th>
            <th>NumD</th>
        </tr>
        <?php 
            $sql="SELECT * FROM proyecto";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td class="letras"><?php echo $mostrar['NOMBREP']?></td>
            <td class="letras"><?php echo $mostrar['NUMEROP']?></td>
            <td class="letras"><?php echo $mostrar['LUGARP']?></td>
            <td class="letras"><?php echo $mostrar['NUMD']?></td>
        </tr>
    <?php 
    }
    ?>
    </table>
</form>
</body>
</html>