<?php   
$conexion=mysqli_connect("localhost","root","","compañia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifica Proyectos</title>

</head>
<body>

	<form align="center" action="m_b_ProyectoA.php" method="get" class="form_search">
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
        <input type="submit" name="Buscar" class="btn_search">
    </form>

    <p align="center"><iframe name="cambia" src="t_proyecto.php" class="contenido" width="1450" height="750" !important frameborder="0" scrolling="no"></iframe></p>


</body>
</html>