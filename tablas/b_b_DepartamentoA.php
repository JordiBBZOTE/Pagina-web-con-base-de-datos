<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca en departamento</title>
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

	<h1>BUSCAR EN DEPARTAMENTO</h1>
	<form align="center" action="b_b_DepartamentoA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

   	<table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NombreD</th>
            <th>NumeroD</th>
            <th>Nssgte</th>
            <th>Fechainigte</th>
        </tr>
        <?php 
            $sql="SELECT * FROM departamento WHERE 
            								 (NOMBRED LIKE '$busqueda' OR
            								 NUMEROD LIKE '$busqueda' OR
            								 NSSGTE LIKE '$busqueda' OR
            								 FECHAINIGTE LIKE '$busqueda')";

            									
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


</body>
</html>