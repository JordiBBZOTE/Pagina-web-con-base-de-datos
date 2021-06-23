<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="css/login.css">
   <title></title>
</head>
<body>

</body>
</html>

<?php
$oficial = 123456789;
      error_reporting(0);
      $clave = $_POST['clave'];
      if($clave == $oficial){
         header("location:registroA.php");
      }else{
         ?>
         <h1 class="bad">CLAVE INVALIDA VUELVE A INTENTARLO</h1>
         <a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a>
         <embed src="./sonidos/fallo.mp3" autostarty = "true " loop="true" volume = "70" width="0" height="0">
            <?php
      }
   ?>