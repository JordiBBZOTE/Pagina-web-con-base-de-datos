
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>menu admin</title>
    <link rel="stylesheet" href="/login/css/estilos.css">
    
</head>

<body>

    <header>
        <br><a class="boton" href="logout.php" title="Cerrar sesion">Salir</a>
        <br><h1></h1>
        <h1 style="color: whitesmoke; "> MENU DE ADMINISTRADOR </h1>
        <nav class="navegacion"> 
            <ul class="menu">
                 
                <li><a style="link" href="#"> DEPARTAMENTO </a>
                    <ul class="sub">
                        <li><a style="text-align: center; link" href="./tablas/t_departamento.php" target="cambia"> VER TABLA </a>
                        <li><a style="text-align: center; link" href="./tablas/m_DepartamentoA.php"target="cambia"> MODIFICAR TABLA </a>
                        <li><a style="text-align: center; link" href="./AE/AgregaDepartamento.php"target="cambia"> AÑADIR </a>    
                    </ul>
                </li>
                    
                <li><a style="link" href="#"> DEPENDIENTE </a>
                    <ul class="sub">
                        <li><a style="text-align: center; link" href="./tablas/t_dependiente.php" target="cambia"> VER TABLA </a>
                        <li><a style="text-align: center; link" href="./tablas/m_DependienteA.php"target="cambia"> MODIFICAR TABLA </a>
                        <li><a style="text-align: center; link" href="./AE/AgregaDependiente.php"target="cambia"> AÑADIR </a> 
                    </ul>
                </li>

                <li><a style="link" href="#"> EMPLEADO </a>
                    <ul class="sub">
                        <li><a style="text-align: center; link" href="./tablas/t_empleado.php" target="cambia"> VER TABLA </a>
                        <li><a style="text-align: center; link" href="./tablas/m_EmpleadoA.php"target="cambia"> MODIFICAR TABLA </a>
                        <li><a style="text-align: center; link" href="./AE/AgregaEmpleado.php"target="cambia"> AÑADIR </a> 
                    </ul>
                </li>

                <li><a style="link" href="#"> LUGARES_DEPTOS </a>
                    <ul class="sub">
                        <li><a style="text-align: center; link" href="./tablas/t_lugaresdeptos.php" target="cambia"> VER TABLA </a>
                        <li><a style="text-align: center; link" href="./tablas/m_LugaresA.php"target="cambia"> MODIFICAR TABLA </a>
                        <li><a style="text-align: center; link" href="./AE/AgregaLugares.php"target="cambia"> AÑADIR </a> 
                    </ul>
                </li>

                <li><a style="link" href="#"> PROYECTO </a>
                    <ul class="sub">
                        <li><a style="text-align: center; link" href="./tablas/t_proyecto.php" target="cambia"> VER TABLA </a>
                        <li><a style="text-align: center; link" href="./tablas/m_ProyectoA.php"target="cambia"> MODIFICAR TABLA </a>
                        <li><a style="text-align: center; link" href="./AE/AgregaProyecto.php"target="cambia"> AÑADIR </a> 
                    </ul>
                </li>

                <li><a style="link" href="#"> TRABAJA_EN </a>
                    <ul class="sub">
                        <li><a style="text-align: center; link" href="./tablas/t_trabajaen.php" target="cambia"> VER TABLA </a>
                        <li><a style="text-align: center; link" href="./tablas/m_TrabajaEnA.php"target="cambia"> MODIFICAR TABLA </a>
                        <li><a style="text-align: center; link" href="./AE/AgregaTrabajaEn.php"target="cambia"> AÑADIR </a> 
                    </ul>
                </li>   
            </ul>
        </nav>

    </header>

    <p align="center"><iframe name="cambia" src="./tablas/logo.php" class="contenido" width="1450" height="750" !important frameborder="0" scrolling="no"></iframe></p>
    
    <embed src="./sonidos/acceso.mp3" autostarty = "true " loop="true" volume = "70" width="0" height="0">
</body>
</html>