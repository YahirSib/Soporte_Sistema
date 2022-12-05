<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('recursos/head-style.php');
    ?> 
    <title>Soporte Técnico CDB - Información del artículo</title>
</head>
<body id="body-pd">

<?php
$pag = "Articulos"; //Se inicializa la var $pag para determinar en que sección del menu se encuentra para dar estilo de enfoque
include('recursos/menu.php');
?>

<!-- Contenido del sitio web-->
<h1 class="text-5xl font-extrabold dark:text-white" style="margin-top: 8vw;" ><span style="color: #2a3891;">Información del</span> <span style="color: #4d227c;"> artículo</span></h1>
<br>

<form id="fmrAgregar">
<div class="mb-6">
<div class="form-input">
    <div class="preview">
        <img id="file-preview" src="media/">
    </div>
    <label for="imagen">Subir imagen de artículo <i class='bx bx-image-add' style='color:#ffffff'  ></i></label>
    <input type="file" id="imagen" name="imagen" accept="image/*" onchange="showPreview(event);">
    <div id="errorImg">
    </div>  
</div>
</div>
<div class="mb-6">
    <label style="font-size: 20px" for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="txtNombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
    <div id="errorNombre"></div>
</div>
<div class="grid md:grid-cols-4 md:gap-6">
  <div class="mb-6">
    <label style="font-size: 20px" for="marca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Marca: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="txtMarca" name="marca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
    <div id="errorMarca"></div>
  </div>
  <div class="mb-6">
    <label style="font-size: 20px" for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Modelo: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="txtModelo" name="modelo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
    <div id="errorModelo"></div>
  </div>
  <div class="mb-6">
    <label style="font-size: 20px" for="serie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Serie: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="txtSerie" name="serie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
    <div id="errorSerie"></div>
  </div>
  <div class="mb-6">
    <label style="font-size: 20px" for="codigo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Código: <span style="color: red">*</span></label>
    <input style="font-size: 20px" type="text" id="txtCodigo" name="codigo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required>
    <div id="errorCodigo"></div>
  </div>
</div>

<div class="grid md:grid-cols-2 md:gap-6">
  <div class="mb-6">
    <label style="font-size: 20px" for="ubicacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubicación: <span style="color: red">*</span></label>
    <select  style="font-size: 20px" id="slcUbicacion" name="ubicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
             
    </select>
    <div id="errorUbicacion"></div>
  </div>
  <div class="mb-6">
  <label style="font-size: 20px" for="contable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Marcar artículo como: <span style="color: red">*</span></label>
    <select  style="font-size: 20px" id="slcTipoA" name="contable" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="show_input_num();">
      <option selected>--- Seleccionar ---</option>
      <option value="T">Contable</option>
      <option value="F">No contable</option>         
    </select>
    <div id="errorTipoA"></div>
  </div>
</div>

<div class="grid md:grid-cols-2 md:gap-6">
<div class="mb-6" id="tipo" style="display: none;">
    <label style="font-size: 20px" for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipo: <span style="color: red">*</span></label>
      <select  style="font-size: 20px" id="slcTipo" name="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="Monitor">Monitor</option>
        <option value="CPU">CPU</option>
        <option value="UPS">UPS</option>
        <option value="Impresora">Impresora</option>          
      </select>
      <div id="errorTipo"></div>
    </div>

<div class="mb-6" id="here">
  <label style="font-size: 20px" for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cantidad: <span style="color: red">*</span></label> 
  <input style="font-size: 20px" type="number" id="cantidad" name="cantidad" min="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí..." required="false">
</div>
</div>

<button style="font-size: 20px" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar<i class='bx bx-save' ></i></button>
<a style="font-size: 20px" href="articulos.php" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Regresar<i class='bx bxs-devices'></i> </a>
</form>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="controlador/editarArticulo.js"></script>
</body>
</html>

<!--Función de JS para habilitar input number según si el artículo se marca como contable o no-->
<script>
function show_input_num(){
  var contable = document.getElementById("slcTipoA").value;
  if(contable == "T"){
    document.getElementById("here").style.display = "block"
    document.getElementById("tipo").style.display = "none";
  }
  else if(contable == "F"){
    document.getElementById("tipo").style.display = "block";
    document.getElementById("here").style.display = "none";
  }
  else{
    document.getElementById("tipo").style.display = "none";
    document.getElementById("here").style.display = "none";
  }

}
//Función de JS para ver preview de la imagen seleccionada
function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>

<!--Esilo para el apartado de subir imagen-->
<style>
.form-input {
  width:300px;
}
.form-input img {
  width:100%;
  margin-bottom:30px;
}

.form-input input{
  display: none;
}

.form-input label {
  display:block;
  line-height:45px;
  text-align:center;
  background:#2a3891;
  color:#fff;
  font-size:20px;
  border-radius:10px;
  cursor:pointer;
}
</style>
</body>
</html>