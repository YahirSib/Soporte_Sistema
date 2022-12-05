<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();
    include('recursos/head-style.php');
    ?> 
    <title>Soporte Técnico CDB - Tickets</title>
</head>
<body id="body-pd">
<?php
$pag = "Tickets"; //Se inicializa la var $pag para determinar en que sección del menu se encuentra para dar estilo de enfoque
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">Información del </span> <span style="color: #4d227c;"> Ticket</span></h1>
<br>

<form>

<div class="mb-6">
    <label style="font-size: 20px" for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="La info va aquí..." required readonly>
</div>
<div class="mb-6">
    <label style="font-size: 20px" for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripción: <span style="color: red">*</span></label>
    <textarea style="font-size: 20px" id="descripcion" name="descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="La info va aquí..." required readonly></textarea>
</div>

<div class="grid md:grid-cols-2 md:gap-6">
    <div class="mb-6">
        <label style="font-size: 20px" for="marca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enviado por: <span style="color: red">*</span></label>
        <input style="font-size: 20px" type="text" id="marca" name="marca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="La info va aquí..." required readonly>
    </div>
    <div class="mb-6">
        <label style="font-size: 20px" for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado: <span style="color: red">*</span></label>
        <input style="font-size: 20px" type="text" id="estado" name="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="La info va aquí..." required readonly>         
 </div>
</div>

<div class="mb-6">
<label style="font-size: 20px" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Progreso actual:</label>
<?php
$progress = 0; //Ejemplo para poder implementar la barra de progreso con php
?>
<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
    <div class="text-xs font-medium text-center p-0.5 leading-none rounded-full" style="width: <?php echo $progress?>%; background-color: #4d227c; color: white; font-size: 20px"><?php echo $progress?>%</div></div>
</div>
</div>

<button style="font-size: 20px" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Aceptar <i class='bx bx-check-circle' style='color:#ffffff'></i></button>
<button style="font-size: 20px" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Rechazar <i class='bx bx-x-circle' style='color:#ffffff'></i></button>
<button style="font-size: 20px" type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Cancelar ticket <i class='bx bx-minus-circle' style='color:#ffffff'></i></button>
<a style="font-size: 20px" href="tickets.php" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Regresar </a>

</form>

</body>
</html>