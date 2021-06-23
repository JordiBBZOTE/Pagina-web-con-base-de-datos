<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca en Empleados</title>
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

	<h1>BUSCA EN EMPLEADOS</h1>
	<form align="center" action="b_b_EmpleadoA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

   <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NOMBREP</th>
            <th>INIC</th>
            <th>APELLIDO</th>
            <th>NSS</th>
            <th>FECHAN</th>
            <th>DIRECCION</th>
            <th>SEXO</th>
            <th>SALARIO</th>
            <th>NSSSUPER</th>
            <th>ND</th>
        </tr>
        <?php 
            $sql="SELECT * FROM empleado WHERE 
            								 (NOMBREP LIKE '$busqueda' OR
            								 INIC LIKE '$busqueda' OR
            								 APELLIDO LIKE '$busqueda' OR
            								 NSS LIKE '$busqueda' OR
            								 FECHAN LIKE '$busqueda' OR
            								 DIRECCION LIKE '$busqueda' OR
            								 SEXO LIKE '$busqueda' OR
            								 SALARIO LIKE '$busqueda' OR
            								 NSSSUPER LIKE '$busqueda' OR
            								 ND LIKE '$busqueda')";

            									
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


</body>
</html>