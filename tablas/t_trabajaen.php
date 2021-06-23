<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
    <title>muestra trabaja en</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/login/css/tablas.css">
</head>

    <body>   
        <form>
            <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
                <tr>
                    <th>Nsse</th>
                    <th>NumP</th>
                    <th>Horas</th>
                </tr>
                <?php 
                    $sql="SELECT * FROM trabaja_en";
                    $result=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['NSSE']?></td>
                    <td><?php echo $mostrar['NUMP']?></td>
                    <td><?php echo $mostrar['HORAS']?></td>
                </tr>
            <?php 
            }
            ?>
            </table>
        </form>
    </body>

</html>