<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('recursos/head-style.php');
    ?> 
    <title>Soporte Técnico CDB - Chatarra</title>
</head>
<body id="body-pd">

<?php
$pag = "Chatarra"; //Se inicializa la var $pag para determinar en que sección del menu se encuentra para dar estilo de enfoque
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">Administración de </span> <span style="color: #4d227c;"> Chatarra</span></h1>
<br>

    <br><br>
    <div class="grid md:grid-cols-3 md:gap-6" id="items2">
    
    </div>

</div>
    
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="controlador/chatarra.js"></script>
</body>
</html>