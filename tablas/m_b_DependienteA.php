<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifica dependiente</title>
	<link rel="stylesheet" href="/login/css/tablas.css">
</head>
<body>


	<?php 

		$busqueda = strtolower($_REQUEST['busqueda']);
		if(empty($busqueda))
		{
			header("location: admin.php");
		}

	?>

	<form align="center" action="m_b_DependienteA.php" method="get" class="form_search">
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
 <br>
    <br>
    <br>
    <br>
    <h3 align="center" >Es importante buscar datos unicos si quiere MODIFICAR</h3>

    <form align="center" action="m_b_m_DependienteA.php" method="post">
        <input type="text" name="ColumnaR" placeholder="Referencia">
        <input type="text" name="IdentFila" placeholder="Identificador">
        <input type="text" name="Columna" placeholder="Columna">
        <input type="text" name="nuevo" placeholder="Nuevo valor">
        <input type="submit" name="Modificar" value="Modificar">
    </form>
    <br>
    <br>
    <br>
    <br>
    <h3 align="center" >Es importante buscar datos unicos si quiere ELIMINAR</h3>

    <form align="center" action="E_Dependiente.php" method="post">
        <input type="text" name="columna" placeholder="FechaN Buscado">
        <input type="submit" name="ELIMINAR" value="Eliminar">
    </form>

</body>
</html>