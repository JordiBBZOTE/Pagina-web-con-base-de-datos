<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca en Proyectos</title>
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

	<h1>BUSCA EN PROYECTO</h1>
	<form align="center" action="b_b_ProyectoA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar"  value="<?php echo $busqueda; ?>">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

  <table style="margin: 0 auto; margin-top: 30px; padding: 15px;">
        <tr>
            <th>NOMBREP</th>
            <th>NUMEROP</th>
            <th>LUGARP</th>
            <th>NUMD</th>
        </tr>
        <?php 
            $sql="SELECT * FROM proyecto WHERE 
            								 (NOMBREP LIKE '$busqueda' OR
            								 NUMEROP LIKE '$busqueda' OR
            								 LUGARP LIKE '$busqueda' OR
            								 NUMD LIKE '$busqueda')";

            									
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


</body>
</html>