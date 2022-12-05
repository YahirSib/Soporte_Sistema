<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();
    $id = $_SESSION["id"];
    include('recursos/head-style.php');
    ?> 
    <title>Soporte Técnico CDB - Tickets</title>
</head>
<body id="body-pd" data_personal ="<?php echo $id;?>">
<?php
$pag = "Tickets"; //Se inicializa la var $pag para determinar en que sección del menu se encuentra para dar estilo de enfoque
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="md:pt-12 text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">Sistema de </span> <span style="color: #4d227c;"> Tickets</span></h1>
<br>

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <!--Links para cada categoria-->
    <ul style="font-size: 20px "class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="cat1-tab" data-tabs-target="#cat1" type="button" role="tab" aria-controls="cat1" aria-selected="true">En espera</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cat2-tab" data-tabs-target="#cat2" type="button" role="tab" aria-controls="cat2" aria-selected="false">En proceso</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cat3-tab" data-tabs-target="#cat3" type="button" role="tab" aria-controls="cat3" aria-selected="false">Solucionados</button>
        </li>
    </ul>
</div>

<!--Contenidos por categoría-->
<div style="font-size: 20px" id="myTabContent">

<!--Categoria 1-->
    <div style="font-size: 20px" class="p-4" id="cat1" role="tabpanel" aria-labelledby="cat1-tab">
    <form id="frmBuscarEspera">
        <div class="grid md:grid-cols-2 md:gap-6"> 
            <div class="mb-6">
                <div class="flex">
                    <span  style="font-size: 20px" class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">Ticket en Espera:</span>
                    <input  style="font-size: 20px" type="text" id="txtBuscarEspera" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Id del ticket...">
                </div>
            </div>
            <div class="mb-6">
                <button  style="font-size: 20px" type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"><i class='bx bx-search' style='color:#ffffff' ></i></button>
            </div>
        </div>
    </form>
    <!--CURD-->
<div id="espera" class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->


</div>
    </div>

    <!--Categoria 2-->
    <div class="p-4"  id="cat2" role="tabpanel" aria-labelledby="cat2-tab">
    <form id="frmBuscarProceso">
        <div class="grid md:grid-cols-2 md:gap-6"> 
            <div class="mb-6">
                <div class="flex">
                    <span  style="font-size: 20px" class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">Ticket en Proceso:</span>
                    <input  style="font-size: 20px" type="text" id="txtBuscarProceso" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Id del ticket...">
                </div>
            </div>
            <div class="mb-6">
                <button  style="font-size: 20px" type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"><i class='bx bx-search' style='color:#ffffff' ></i></button>
            </div>
        </div>
    </form>
        <!--CURD-->
<div id="proceso" class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->


</div>
    </div>

    <!--Categoria 3-->
    <div class="p-4"  id="cat3" role="tabpanel" aria-labelledby="cat3-tab">
    <form id="frmBuscarSolucionado">
        <div class="grid md:grid-cols-2 md:gap-6"> 
            <div class="mb-6">
                <div class="flex">
                    <span  style="font-size: 20px" class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">Ticket en Solucionados:</span>
                    <input  style="font-size: 20px" type="text" id="txtBuscarSolucionado" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Id del ticket...">
                </div>
            </div>
            <div class="mb-6">
                <button  style="font-size: 20px" type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"><i class='bx bx-search' style='color:#ffffff' ></i></button>
                <button data_id="<?php echo $id; ?>" style="font-size: 20px" type="button" class="pdf focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-red-900"><i class="bx bxs-file-pdf" style="color:#ffffff"></i></button>
            </div>
        </div>
    </form>
        <!--CURD-->
<div id="solucionado" class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->


</div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="controlador/ticketsTrabajadores.js"></script>
<script src="js/package/jquery.redirect.js"></script>
<script src="controlador/cambiarContra.js"></script>

</body>
</html>