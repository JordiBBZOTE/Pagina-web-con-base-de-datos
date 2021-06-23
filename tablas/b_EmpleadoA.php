<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca en Empleados</title>
	<link rel="stylesheet" href="/login/css/estilos.css">
</head>
<body>

    <br><a class="boton" href="javascript:history.back(-1);" title="Volver">Regresar</a>
	<br>

	<h1>BUSCA EN EMPLEADOS</h1>
	<form align="center" action="b_b_EmpleadoA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

    <p align="center"><iframe name="cambia" src="t_empleado.php" class="contenido" width="1450" height="750" !important frameborder="0" scrolling="no"></iframe></p>


</body>
</html>