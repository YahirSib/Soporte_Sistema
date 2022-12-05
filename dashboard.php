<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('recursos/head-style.php');
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: loginPersonal.php");
    }
    ?> 
    <title>Soporte Técnico CDB - Dashboard</title>
</head>
<body id="body-pd">

<?php
$pag = "Dashboard"; 
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">¡Bienvenido(a) de</span> <span style="color: #4d227c;"> nuevo!</span></h1>
<br>



<img class="mx-auto max-w-full h-auto" src="media/logo.png" width="350px"alt="image description">


</body>
</html>