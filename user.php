
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>menu user</title>
    <link rel="stylesheet" href="/login/css/estilos.css">
</head>

<body>

    <header>
        <br><a class="boton" href="logout.php" title="Cerrar sesion">Salir</a>
        <br><h1></h1>
        <h1 style="color: whitesmoke;"> MENU DE USUARIO </h1>
        <nav class="navegacion"> 
            <ul class="menu">
                 
                <li><a style="link" href="#"> DEPARTAMENTO </a>
                    <ul class="sub">
                        <li><a style="link" href="./tablas/t_departamento.php" target="cambia"> VER TABLA </a>
                        <li><a style="link" href="./tablas/b_DepartamentoA.php"> BUSCAR </a>    
                    </ul>
                </li>
                    
                <li><a style="link" href="#"> DEPENDIENTE </a>
                    <ul class="sub">
                        <li><a style="link" href="./tablas/t_dependiente.php" target="cambia"> VER TABLA </a>
                        <li><a style="link" href="./tablas/b_DependienteA.php"> BUSCAR </a>
                    </ul>
                </li>

                <li><a style="link" href="#"> EMPLEADO </a>
                    <ul class="sub">
                        <li><a style="link" href="./tablas/t_empleado.php" target="cambia"> VER TABLA </a>
                        <li><a style="link" href="./tablas/b_EmpleadoA.php"> BUSCAR </a>
                    </ul>
                </li>

                <li><a style="link" href="#"> LUGARES_DEPTOS </a>
                    <ul class="sub">
                        <li><a style="link" href="./tablas/t_lugaresdeptos.php" target="cambia"> VER TABLA </a>
                        <li><a style="link" href="./tablas/b_LugaresA.php"> BUSCAR </a>
                    </ul>
                </li>

                <li><a style="link" href="#"> PROYECTO </a>
                    <ul class="sub">
                        <li><a style="link" href="./tablas/t_proyecto.php" target="cambia"> VER TABLA </a>
                        <li><a style="link" href="./tablas/b_ProyectoA.php"> BUSCAR </a>
                    </ul>
                </li>

                <li><a style="link" href="#"> TRABAJA_EN </a>
                    <ul class="sub">
                        <li><a style="link" href="./tablas/t_trabajaen.php" target="cambia"> VER TABLA </a>
                        <li><a style="link" href="./tablas/b_TrabajaEnA.php"> BUSCAR </a>
                    </ul>
                </li>   
            </ul>
        </nav>

    </header>

    <p align="center"><iframe name="cambia" src="./tablas/logo.php" class="contenido" width="1450" height="750" !important frameborder="0" scrolling="no"></iframe></p>
    
    <embed src="./sonidos/song.mp3" autostarty = "true " loop="true" volume = "70" width="0" height="0">
</body>
</html>