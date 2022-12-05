<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('recursos/head-style.php');
    ?> 
    <title>Soporte Técnico CDB - Tickets</title>
</head>
<body id="body-pd">
<?php
$pag = "Chatarra"; //Se inicializa la var $pag para determinar en que sección del menu se encuentra para dar estilo de enfoque
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">Artículos </span> <span style="color: #4d227c;"> Chatarra</span></h1>
<br>

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <!--Links para cada categoria-->
    <ul style="font-size: 20px "class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" id="cat1-tab" data-tabs-target="#cat1" type="button" role="tab" aria-controls="cat1" aria-selected="true">Categoría 1</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cat2-tab" data-tabs-target="#cat2" type="button" role="tab" aria-controls="cat2" aria-selected="false">Categoría 2</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cat3-tab" data-tabs-target="#cat3" type="button" role="tab" aria-controls="cat3" aria-selected="false">Categoría 3</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700" id="cat4-tab" data-tabs-target="#cat4" type="button" role="tab" aria-controls="cat4" aria-selected="false">Categoría 4</button>
        </li>
    </ul>
</div>

<!--Contenidos por categoría-->
<div style="font-size: 20px" id="myTabContent">

<!--Categoria 1-->
    <div style="font-size: 20px" class="p-4" id="cat1" role="tabpanel" aria-labelledby="cat1-tab">
    <!--CURD-->
<div class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->
<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 3vw;">
    <img class="rounded-t-lg" src="https://www.grupobortex.com/wp-content/uploads/2022/01/Monitor-HP-M22f-FHD.jpg" alt="articulo" style="height: 350px" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Monitor HP M22F FHD </h5>
        <a  style="font-size: 20px" href="#" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Ver más información <i class='bx bx-link' style='color:#5f91f6'  ></i></a>
        <p  style="font-size: 20px" class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Artículo:</b> Contable</p>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class='bx bx-edit-alt' style='color:#ffffff'></i></a>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class='bx bx-trash'></i></a>
    </div>
</div>

</div>
    </div>

    <!--Categoria 2-->
    <div class="p-4"  id="cat2" role="tabpanel" aria-labelledby="cat2-tab">
        <!--CURD-->
<div class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->

<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 3vw;">
    <img class="rounded-t-lg" src="https://fichashppervasive.blob.core.windows.net/imagenes/Mouse_HP_100_Wired_4_6VY96AA.png" alt="articulo" style="height: 350px"/>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mouse HP</h5>
        <a  style="font-size: 20px" href="#" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Ver más información <i class='bx bx-link' style='color:#5f91f6'  ></i></a>
        <p  style="font-size: 20px" class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Artículo:</b> No contable</p>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class='bx bx-edit-alt' style='color:#ffffff'></i></a>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class='bx bx-trash'></i></a>
    </div>
</div>

</div>
    </div>

    <!--Categoria 3-->
    <div class="p-4"  id="cat3" role="tabpanel" aria-labelledby="cat3-tab">
        <!--CURD-->
<div class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->

<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 3vw;">
    <img class="rounded-t-lg" src="https://www.itactivo.com/wp-content/uploads/2019/04/hpprodesk1.jpg" alt="articulo" style="height: 350px;"/>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">HP Prodesk 600 G1</h5>
        <a  style="font-size: 20px" href="#" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Ver más información <i class='bx bx-link' style='color:#5f91f6'  ></i></a>
        <p  style="font-size: 20px" class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Artículo:</b> Contable</p>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class='bx bx-edit-alt' style='color:#ffffff'></i></a>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class='bx bx-trash'></i></a>
    </div>
</div>

</div>
    </div>

    <!--Categoria 4-->
    <div class="p-4"  id="cat4" role="tabpanel" aria-labelledby="cat4-tab">
        <!--CURD-->
<div class="grid md:grid-cols-3 md:gap-6">
<!--Cada <div/> respresenta un artículo-->
<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 3vw;">
    <img class="rounded-t-lg" src="https://www.grupobortex.com/wp-content/uploads/2022/01/Monitor-HP-M22f-FHD.jpg" alt="articulo" style="height: 350px" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Monitor HP M22F FHD </h5>
        <a  style="font-size: 20px" href="#" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Ver más información <i class='bx bx-link' style='color:#5f91f6'  ></i></a>
        <p  style="font-size: 20px" class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Artículo:</b> Contable</p>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class='bx bx-edit-alt' style='color:#ffffff'></i></a>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class='bx bx-trash'></i></a>
    </div>
</div>

<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" style="margin-bottom: 3vw;">
    <img class="rounded-t-lg" src="https://fichashppervasive.blob.core.windows.net/imagenes/Mouse_HP_100_Wired_4_6VY96AA.png" alt="articulo" style="height: 350px"/>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mouse HP</h5>
        <a  style="font-size: 20px" href="#" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Ver más información <i class='bx bx-link' style='color:#5f91f6'  ></i></a>
        <p  style="font-size: 20px" class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Artículo:</b> No contable</p>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class='bx bx-edit-alt' style='color:#ffffff'></i></a>
        <a  style="font-size: 20px" href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class='bx bx-trash'></i></a>
    </div>
</div>

</div>
    </div>

</div>

</body>
</html>