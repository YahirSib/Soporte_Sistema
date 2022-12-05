$(document).ready(function () {

    function mostrarPersonal(){
        let action = "mostrar";
        $.ajax({
            url: 'modelo/class.personal.php',
            type: 'POST',
            data: {
                action: action,
            },
            success: function (respuesta) {
                var resultado = "";
                var personal = JSON.parse(respuesta);
                if (personal.status == false) {
                    resultado = personal.msg;
                } else {
                    personal.data.forEach(usuario => {
                        resultado += `
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ${usuario.Id_personal}
                            </th>
                            <td class="py-4 px-6">
                                ${usuario.Nombre} ${usuario.Apellido}
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.Usuario}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.Tipo}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <b>${usuario.Area}</b> 
                            </td>
                            <td class="py-4 px-6">
                                <a  data_id="${usuario.Id_personal}" style="font-size: 20px" class="editar font-medium text-green-600 underline dark:text-green-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-edit'></i></a>
                                <a  data_id="${usuario.Id_personal}" style="font-size: 20px;  margin-left: 10px" class="eliminar font-medium text-red-600 underline dark:text-red-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-trash'></i></a>
                                <a  data_id="${usuario.Id_personal}" style="font-size: 20px;  margin-left: 10px" class="contra font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline cursor-pointer" type="button" data-modal-toggle="question"><i class='bx bx-reset'></i></a>
                            </td>
                        </tr>        
                        `
                    });
                }
                $('#items').html(resultado);
            },
            error: function (error) {
                console.log(error);
            }
        });
    };
    
    if ($("#items").length) {
        mostrarPersonal();
    }

    function llenarSelect(){
        let action = "mostrar";
        $.ajax({
            url: 'modelo/class.area.php',
            type: 'POST',
            data: {
                action: action,
            },
            success: function (respuesta) {
                var resultado = "";
                var areas = JSON.parse(respuesta);
                if (areas.status == false) {
                    resultado = areas.msg;
                } else {
                    areas.data.forEach(area => {
                        if(area.Nombre != "Bodega"){
                            resultado += `<option value="${area.Id_area}">${area.Nombre}</option> `;
                        }
                    });
                }
                $('#area').html(resultado);
            },
            error: function (error) {
                console.log(error);
            }
        });
    };

    function selectedOp($val){
        let action = "mostrar";
        $.ajax({
            url: 'modelo/class.area.php',
            type: 'POST',
            data: {
                action: action,
            },
            success: function (respuesta) {
                var resultado = "";
                var areas = JSON.parse(respuesta);
                if (areas.status == false) {
                    resultado = areas.msg;
                } else {
                    areas.data.forEach(area => {
                        if(area.Nombre != "Bodega"){
                            if(area.Nombre == $val){
                                resultado += `<option selected value="${area.Id_area}">${area.Nombre}</option> `;
                            }else{
                                resultado += `<option value="${area.Id_area}">${area.Nombre}</option> `;
                            }
                        }
                    });
                }
                $('#area').html(resultado);
            },
            error: function (error) {
                console.log(error);
            }
        });
    };

    $(document).on('click', '.agregar', function () {
        var resultado = "";
        resultado += `
                    <div z-50 id='fondoM' modal-backdrop='' class='fondo bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-50'></div>
                        <div id="agg" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h1 class="text-5xl font-extrabold dark:text-white"><span style="color: #2a3891;">Nuevo</span> <span style="color: #4d227c;"> personal</span></h1>
                                    </div>

                                    <!--Fomrulario-->
                                    <div class="p-6 space-y-6">
                                        <form id="fmrAgregar">
                                            <div class="grid md:grid-cols-2 md:gap-6">
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre: <span style="color: red">*</span></label>
                                                    <input style="font-size: 20px" type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                                                </div>
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apellido: <span style="color: red">*</span></label>
                                                    <input style="font-size: 20px" type="text" id="apellido" name="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                </div>
                                            </div>
                                            <div class="grid md:grid-cols-2 md:gap-6">
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usuario: <span style="color: red">*</span></label>
                                                    <input style="font-size: 20px" type="text" id="usuario" name="usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                                                </div>
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contraseña: <span style="color: red">*</span></label>
                                                    <input style="font-size: 20px" type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                                                </div>
                                            </div>
                                            <div class="grid md:grid-cols-2 md:gap-6">
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rol: <span style="color: red">*</span></label>
                                                    <select style="font-size: 20px" id="tipo" name="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                        <option value="Docente">Docente</option>
                                                        <option value="Coordinador">Coordinador</option>
                                                        <option value="Administrativo">Administrativo</option>
                                                    </select>
                                                </div>
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área: <span style="color: red">*</span></label>
                                                    <select style="font-size: 20px" id="area" name="area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <button style="font-size: 20px" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
                                            <a id="cerrar" style="font-size: 20px"  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>    
                `;
        $('body').append(resultado);
        llenarSelect();
    });

    $(document).on('submit', '#fmrAgregar', function (e) {
        var estado = true;
        if ($('#nombre').val() == "") {
            console.log("no hay nombre");
            estado = false;
        } else {
            let texto = $('#nombre').val();
            let validar = /^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$/;
            if (!validar.test(texto)) {
                console.log("nombre incorrecto");
                estado = false;
            }
        }
        if ($('#apellido').val() == "") {
            console.log("no hay apellido");
            estado = false;
        } else {
            let texto = $('#apellido').val();
            let validar = /^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$/;
            if (!validar.test(texto)) {
                console.log("apellido incorrecto");
                estado = false;
            }
        }
        if ($('#password').val() == "") {
            console.log("no hay contraseña");
            estado = false;
        } else {
            let texto = $('#password').val();
            let validar = /^[a-zA-Z\s0-9._]{3,}$/;
            if (!validar.test(texto)) {
                console.log("contraseña incorrecta");
                estado = false;
            }
        }
        if ($('#usuario').val() == "") {
            console.log("no hay usuario");
            estado = false;
        } else {
            let texto = $('#usuario').val();
            let validar = /^[a-zA-Z0-9\._-]+@[cdb]+\.[edu]+\.s+v$/;
            if (!validar.test(texto)) {
                console.log("usuario incorrecto");
                estado = false;
            }
        }
        if (estado == true) {
            $("#agg").remove();
            let password = $(this).find("#password").val();
            let nombre = $(this).find("#nombre").val();
            let apellido = $(this).find("#apellido").val();
            let usuario = $(this).find("#usuario").val();
            let tipo = $(this).find("#tipo").val();
            let area = $(this).find("#area").val();
            let action = "agregar";
            $.ajax({
                url: 'modelo/class.personal.php',
                type: 'POST',
                data: {
                    action: action,
                    password: password,
                    nombre: nombre,
                    apellido: apellido,
                    usuario: usuario,
                    tipo: tipo,
                    area: area
                },
                success: function (respuesta) {
                    var mensaje = JSON.parse(respuesta);
                    if (mensaje.status == false) {
                        console.log(mensaje.msg);
                        var modal = "";
                        modal += `
                    <div id="error" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-x-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ha ocurrido un error. Por favor intente de nuevo</h3>
                                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        $("body").append(modal);
                    } else {
                        var modal = "";
                        modal += `
                    <div id="success" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-check-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¡El trabajador ha sido ingresado con éxito!</h3>
                                    <button id="cerrar" style="font-size: 20px" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        $("body").append(modal);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        e.preventDefault();
    });

    $(document).on('click', '.eliminar', function () {
        let id = $(this).attr("data_id");
        var modal = "";
        modal += `
        <div z-50 id='fondoM' modal-backdrop='' class='bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40'></div>
        <div id="question" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full items-center justify-center" >
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-6 text-center">
                    <i class='bx bx-question-mark' style='color:#2a3891; font-size: 50px' ></i>                
                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Está seguro(a) de eliminar al personal con id: `+ id + `?</h3>
                    <button id="borrar" data-id="`+ id + `" style="font-size: 20px"  type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Aceptar</button>
                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancelar</button>
                </div>
            </div>
        </div>
        `;
        $("body").append(modal);
    });

    $(document).on('click', '#borrar', function () {
        $("#question").remove();
        let action = "eliminar";
        let id = $(this).attr("data-id");
        $.ajax({
            url: 'modelo/class.personal.php',
            type: 'POST',
            data: {
                action: action,
                id: id
            },
            success: function (respuesta) {
                var area = JSON.parse(respuesta);
                if (area.status == false) {
                    var modal = "";
                    modal += `
                    <div id="error" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-x-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ha ocurrido un error. Por favor intente de nuevo</h3>
                                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    $("body").append(modal);
                } else {
                    var modal = "";
                    modal += `
                    <div id="success" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-check-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¡Personal eliminado con éxito!</h3>
                                    <button id="cerrar" style="font-size: 20px" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    $("body").append(modal);
                }
            }
        });
        mostrarPersonal();
    });

    $(document).on('click', '.editar', function () {
        let id = $(this).attr("data_id");
        let action = "ficha";
        $.ajax({
            url: 'modelo/class.personal.php',
            type: 'POST',
            data: {
                action: action,
                id: id
            },
            success: function (respuesta) {
                var resultado = "";
                var tipo = "";
                var personal = JSON.parse(respuesta);
                if (personal.status == false) {
                    resultado += `
                    <div z-50 id='fondoM' modal-backdrop='' class='bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40'></div>
                    <div id="error" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-x-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ha ocurrido un error. Por favor intente de nuevo</h3>
                                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                } else {
                    personal.data.forEach(usuario => {
                        tipo = usuario.Tipo;
                        area = usuario.Area;
                        resultado += `
                        <div z-50 id='fondoM' modal-backdrop='' class='bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40'></div>
                        <div id="edit" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h1 class="text-5xl font-extrabold dark:text-white"><span style="color: #2a3891;">Información del</span> <span style="color: #4d227c;"> trabajador</span></h1>
                                    </div>
                                    <!--Fomrulario-->
                                    <div class="p-6 space-y-6">
                                        <form id="editar" data_id="${usuario.Id_personal}">
                                            <div class="grid md:grid-cols-2 md:gap-6">
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre: <span style="color: red">*</span></label>
                                                    <input value="${usuario.Nombre}" style="font-size: 20px" type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                                                </div>
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apellido: <span style="color: red">*</span></label>
                                                    <input value="${usuario.Apellido}" style="font-size: 20px" type="text" id="apellido" name="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <label style="font-size: 20px" for="usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usuario: <span style="color: red">*</span></label>
                                                <input value="${usuario.Usuario}" style="font-size: 20px" type="text" id="usuario" name="usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                                            </div>
                                            <div class="grid md:grid-cols-2 md:gap-6">
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rol: <span style="color: red">*</span></label>
                                                    <select style="font-size: 20px" id="tipo" name="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                        <option value="Docente">Docente</option>
                                                        <option value="Coordinador">Coordinador</option>
                                                        <option value="Administrativo">Administrativo</option>
                                                    </select>
                                                </div>
                                                <div class="mb-6">
                                                    <label style="font-size: 20px" for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área: <span style="color: red">*</span></label>
                                                    <select style="font-size: 20px" id="area" name="area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                            
                                                    </select>
                                                </div>
                                            </div>
                                            <button style="font-size: 20px" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
                                            <a id="cerrar" style="font-size: 20px"  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        `;
                    }); 
                }
                $('body').append(resultado);
                selectedOp(area);
                $("#tipo").val(tipo);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    $(document).on('submit', '#editar', function (e) {
        var estado = true;
        if ($('#nombre').val() == "") {
            console.log("no hay nombre");
            estado = false;
        } else {
            let texto = $('#nombre').val();
            let validar = /^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$/;
            if (!validar.test(texto)) {
                console.log("nombre incorrecto");
                estado = false;
            }
        }
        if ($('#apellido').val() == "") {
            console.log("no hay apellido");
            estado = false;
        } else {
            let texto = $('#apellido').val();
            let validar = /^[a-zA-zÁáÉéÍíÓóÚú\s]{3,}$/;
            if (!validar.test(texto)) {
                console.log("apellido incorrecto");
                estado = false;
            }
        }
        if ($('#usuario').val() == "") {
            console.log("no hay usuario");
            estado = false;
        } else {
            let texto = $('#usuario').val();
            let validar = /^[a-zA-Z0-9\._-]+@[cdb]+\.[edu]+\.s+v$/;
            if (!validar.test(texto)) {
                console.log("usuario incorrecto");
                estado = false;
            }
        }
        if (estado == true) {
            $("#edit").remove();
            let id = $(this).attr("data_id");
            let nombre = $(this).find("#nombre").val();
            let apellido = $(this).find("#apellido").val();
            let usuario = $(this).find("#usuario").val();
            let tipo = $(this).find("#tipo").val();
            let area = $(this).find("#area").val();
            let action = "editar";
            $.ajax({
                url: 'modelo/class.personal.php',
                type: 'POST',
                data: {
                    action: action,
                    id: id,
                    nombre: nombre,
                    apellido: apellido,
                    usuario: usuario,
                    tipo: tipo,
                    area: area
                },
                success: function (respuesta) {
                    var mensaje = JSON.parse(respuesta);
                    if (mensaje.status == false) {
                        console.log(mensaje.msg);
                        var modal = "";
                        modal += `
                    <div id="error" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-x-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ha ocurrido un error. Por favor intente de nuevo</h3>
                                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        $("body").append(modal);
                    } else {
                        var modal = "";
                        modal += `
                    <div id="success" aria-modal="true" role="dialog" tabindex="-1" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-check-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¡El trabajador ha sido editado con éxito!</h3>
                                    <button id="cerrar" style="font-size: 20px" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        $("body").append(modal);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        e.preventDefault();
    });

    $(document).on('click', '.contra', function () {
        let id = $(this).attr("data_id");
        var modal = "";
        modal += `
            <div z-50 id='fondoM' modal-backdrop='' class='fondo bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-50'></div>
                        <div id="contrasena" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h1 class="text-5xl font-extrabold dark:text-white"><span style="color: #2a3891;">Resetear</span> <span style="color: #4d227c;"> contraseña</span></h1>
                                    </div>
                                    <!--Fomrulario-->
                                    <div class="p-6 space-y-6">
                                        <form id="fmrContra" data_id="${id}">
                                            <div class="mb-6">
                                                <label style="font-size: 20px" for="contraNueva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contraseña Nueva: <span style="color: red">*</span></label>
                                                <input style="font-size: 20px" type="password" id="contraNueva" name="contraNueva" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                            </div>
                                            <div class="mb-6">
                                                <label style="font-size: 20px" for="contraConf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirmar contraseña: <span style="color: red">*</span></label>
                                                <input style="font-size: 20px" type="password" id="contraConf" name="contraConf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                                            </div>
                                            <button style="font-size: 20px" type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
                                            <a id="cerrar" style="font-size: 20px"  class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>   
        `;
        $("body").append(modal);
    });

    $(document).on('submit', '#fmrContra', function (e) {
        let id = $(this).attr("data_id");
        var estado = true;
        if ($('#contraNueva').val() == "") {
            console.log("Constraseña vacia");
            estado = false;
        } else {
            let texto = $('#contraNueva').val();
            let validar = /^[a-zA-Z\s0-9._]{3,}$/;
            if (!validar.test(texto)) {
                console.log("contraseña incorrecta");
                estado = false;
            }
        }
        if ($('#contraConf').val() == "") {
            console.log("Contraseña vacia");
            estado = false;
        } else {
            let texto = $('#contraConf').val();
            let validar = /^[a-zA-Z\s0-9._]{3,}$/;
            if (!validar.test(texto)) {
                console.log("contraseña incorrecta");
                estado = false;
            }
        }
        
        if (estado == true) {
            $("#contrasena").remove();
            let contraNueva = $(this).find("#contraNueva").val();
            let contraConf = $(this).find("#contraConf").val();
            let action = "contrasena";
            $.ajax({
                url: 'modelo/class.personal.php',
                type: 'POST',
                data: {
                    action: action,
                    contraNueva: contraNueva,
                    contraConf: contraConf,
                    id: id
                },
                success: function (respuesta) {
                    var mensaje = JSON.parse(respuesta);
                    if (mensaje.status == false) {
                        console.log(mensaje.msg);
                        var modal = "";
                        modal += `
                    <div id="error" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-x-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Ha ocurrido un error. Por favor intente de nuevo</h3>
                                    <button id="cerrar" style="font-size: 20px"  type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        $("body").append(modal);
                    } else {
                        var modal = "";
                        modal += `
                    <div id="success" aria-modal="true" role="dialog" tabindex="-1" class="fondo flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="p-6 text-center">
                                    <i class='bx bx-check-circle' style='color:#2a3891; font-size: 50px' ></i>                
                                    <h3 style="font-size: 25px"  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¡El trabajador ha sido ingresado con éxito!</h3>
                                    <button id="cerrar" style="font-size: 20px" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        $("body").append(modal);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        e.preventDefault();
    });

    $(document).on('click', '#cerrar', function () {
        $("#question").remove();
        $("#fondoM").remove();
        $("#error").remove();
        $("#success").remove();
        $("#edit").remove();
        $("#agg").remove();
        $("#contrasena").remove();
        mostrarPersonal()
    });

});