<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registro usuario</title>
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
	<form action="UsuarioNuevo.php" method="post">
		<h1 class="animate__animated animate__backInLeft">Registro de Usuario</h1>
		<p><input type="text" placeholder="Ingrese su nombre" name="Nombre"></p>
		<p><input type="text" placeholder="Ingrese su nombre de usuario" name="Usuario"></p>
		<p><input type="text" placeholder="Ingrese su contraseña" name="Contraseña"></p>

		<input type="submit" value="Registrar">

		<a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a>

	</form>
	<bgsound src="Song.mp3" loop="1">
</body>
</html>