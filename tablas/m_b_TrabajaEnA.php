<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifica Trabaja en</title>
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

	<form align="center" action="m_b_TrabajaEnA.php" method="get" class="form_search">
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
 <br>
    <br>
    <br>
    <br>
    <h3 align="center" >Es importante buscar datos unicos si quiere MODIFICAR</h3>

    <form align="center" action="m_b_m_TrabajaEnA.php" method="post">
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

    <form align="center" action="E_TrabajaEn.php" method="post">
        <input type="text" name="columna" placeholder="Columna 1">
        <input type="text" name="IdentFila" placeholder="Ident Columna 1">
        <input type="text" name="Columna2" placeholder="Columna 2">
        <input type="text" name="IdentFila2" placeholder="Ident Columna 2">
        <input type="submit" name="ELIMINAR" value="Eliminar">
    </form>

</body>
</html>