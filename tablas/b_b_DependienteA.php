<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca en dependiente</title>
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

	<h1>BUSCA EN DEPENDIENTE</h1>
	<form align="center" action="b_b_DependienteA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

<table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NSSE</th>
            <th>NOMBRE_DEPENDIENTE</th>
            <th>SEXO</th>
            <th>FECHAN</th>
            <th>PARENTESCO</th>
        </tr>
        <?php 
            $sql="SELECT * FROM dependiente WHERE 
            								 (NSSE LIKE '$busqueda' OR
            								 NOMBRE_DEPENDIENTE LIKE '$busqueda' OR
            								 SEXO LIKE '$busqueda' OR
            								 FECHAN LIKE '$busqueda' OR
            								 PARENTESCO LIKE '$busqueda')";

            									
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


</body>
</html>