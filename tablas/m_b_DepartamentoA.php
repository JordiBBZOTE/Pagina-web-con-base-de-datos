<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifica departamento</title>
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
	<form align="center" action="_b_DepartamentoA.php" method="get" class="form_search">
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

    <br>
    <br>
    <br>
    <br>
    <h3 align="center" >Es importante buscar datos unicos si quiere MODIFICAR</h3>

    <form align="center" action="m_b_m_DepartamentoA.php" method="post">
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

    <form align="center" action="E_Departamento.php" method="post">
    	<input type="text" name="columna" placeholder="NombreD Buscado">
    	<input type="submit" name="ELIMINAR" value="Eliminar">
    </form>

</body>
</html>