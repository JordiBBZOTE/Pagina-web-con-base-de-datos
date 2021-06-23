<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca en Trabaja en</title>
	<link rel="stylesheet" href="/login/css/estilos.css">
	<link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>

    <br><a class="boton" href="javascript:history.back(-1);" title="Volver">Regresar</a>
	<br>

<?php 

		$busqueda = strtolower($_REQUEST['busqueda']);
		if(empty($busqueda))
		{
			header("location: user.php");
		}

	?>

	<h1>BUSCA EN TRABAJA EN</h1>
	<form align="center" action="b_b_TrabajaEnA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

    <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NSSE</th>
            <th>NUMP</th>
            <th>HORAS</th>
        </tr>
        <?php 
            $sql="SELECT * FROM trabaja_en WHERE 
            								 (NSSE LIKE '$busqueda' OR
            								 NUMP LIKE '$busqueda' OR
            								 HORAS LIKE '$busqueda')";

            									
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


</body>
</html>