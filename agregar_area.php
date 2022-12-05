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
    <title>Soporte Técnico CDB - Nuevo artículo</title>
</head>
<body id="body-pd">

<?php
$pag = "Articulos"; //Se inicializa la var $pag para determinar en que sección del menu se encuentra para dar estilo de enfoque
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">Añadir nueva</span> <span style="color: #4d227c;"> área</span></h1>
<br>

<form id="enviar">
<div class="mb-6">
    <label style="font-size: 20px" for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre del Área: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
</div>
<div class="mb-6">
    <label style="font-size: 20px" for="coordinador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Coordinador: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="coordinador" name="coordinador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
</div>
<div class="mb-6">
    <label style="font-size: 20px" for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Correo: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="correo" name="correo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
</div>

<button style="font-size: 20px" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar<i class='bx bx-save' ></i></button>
<a style="font-size: 20px" href="vista_areas.php" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Regresar  <i class='bx bx-buildings'></i> </a>
</form>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="controlador/agregar_area.js"></script>



</body>
</html>

