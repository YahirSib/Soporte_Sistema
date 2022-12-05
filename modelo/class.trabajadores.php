    
    <?php

    require_once("class.conexion.php");

    $action = $_POST["action"];
    $json = array();

    if($action == "login"){
            $usuario = $_POST["usuario"];
            $pass = $_POST["contra"];
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if($db){
                $stmt = $db->prepare( "CALL Login_Trabajadores (?)");
                $stmt->bindParam( 1 , $usuario, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($count > 0){
                    $encriptada = $data[0]["Contrasena"];
                    if(password_verify($pass, $encriptada)){
                        $json['status'] = true;
                        $json['data'] = $data;
                        session_start();
                        $_SESSION['id'] = $data[0]["Id_trabajador"];
                        $_SESSION['tipo'] = "trabajador";
                        $_SESSION['nombre'] = $data[0]["Nombre"];
                    }
                    else{
                        $json['status'] = false;
                        $json['msg'] = '<h1 id="mensaje"> Error en ingreso de sesión, por favor revise sus credenciales </h1>';
                    }
                }
                else{
                    $json['status'] = false;
                    $json['msg'] = '<h1 id="mensaje"> Error en ingreso de sesión, por favor revise sus credenciales </h1>';
                } 
            }else{
                $json['status'] = false;
                $json['msg'] = '<h1 id="mensaje"> No hay conexión </h1>';
            }
            echo json_encode($json);
    }

    if($action == "mostrar"){
        $modelo = new Conexion;
        $db = $modelo->get_conexion();
        if($db){
            $stmt = $db->prepare( "CALL Ver_trabajadores ();");
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($data){
                $json['status'] = true;
                $json['data'] = $data;
            }else{
                $json['status'] = false;
                $json['msg'] = '<h1 id="mensaje"> No existen trabajadores en el sistema</h1>';
            }
        }else{
            $json['status'] = false;
            $json['msg'] = '<h1 id="mensaje"> No hay conexion </h1>';
        }
        echo json_encode($json);
    }

    if($action == "eliminar"){
        $id = $_POST['id'];
        $modelo = new Conexion;
        $db = $modelo->get_conexion();
        if($db){ 
            $stmt = $db->prepare( "CALL Eliminar_trabajador (?)");
            $stmt->bindParam( 1 , $id, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count > 0){
                $json['status'] = true;
            }else{
                $json['status'] = false;
            }
        }else{
            $json['status'] = false;
        }
        echo json_encode($json);
    }
    
    if($action == "ficha"){
        $id = $_POST['id'];
        $modelo = new Conexion;
        $db = $modelo->get_conexion();
        if($db){ 
            $stmt = $db->prepare( "CALL Ficha_trabajador (?)");
            $stmt->bindParam( 1 , $id, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($count > 0){
                $json['status'] = true;
                $json['data'] = $data;
            }else{
                $json['status'] = false;
            }
        }else{
            $json['status'] = false;
        }
        echo json_encode($json);
    }
    
    if($action == "editar"){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];
        $tipo = $_POST["tipo"];
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if($db){ 
                $stmt = $db->prepare( "CALL Editar_trabajador (?,?,?,?,?)");
                $stmt->bindParam( 1 , $id, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 2 , $nombre, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 3 , $apellido, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 4 , $usuario, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 5 , $tipo, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0){
                    $json['status'] = true;
                }else{
                    $json['status'] = false;
                    $json['msg'] = "ERROR AL EDITAR";
                }
            }else{
                $json['status'] = false;
                $json['msg'] = "ERROR EN LA BD";
            }
        echo json_encode($json);
    }

    if($action == "agregar"){
        $password = $_POST['password'];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];
        $tipo = $_POST["tipo"];
        $encriptada = password_hash($password, PASSWORD_BCRYPT);
            $modelo = new Conexion;
            $db = $modelo->get_conexion();
            if($db){ 
                $stmt = $db->prepare( "CALL Agregar_trabajador (?,?,?,?,?)");
                $stmt->bindParam( 1 , $nombre, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 2 , $apellido, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 3 , $usuario, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 4 , $encriptada, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 5 , $tipo, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0){
                    $json['status'] = true;
                }else{
                    $json['status'] = false;
                    $json['msg'] = "ERROR AL AGREGAR";
                }
            }else{
                $json['status'] = false;
                $json['msg'] = "CON LA DB";
            }
        echo json_encode($json);
    }

    if($action == "contrasena"){
        $id = $_POST['id'];
        $contraNueva = $_POST['contraNueva'];
        $contraConf = $_POST['contraConf'];
        $modelo = new Conexion;
        $db = $modelo->get_conexion();
        if($contraNueva == $contraNueva){
            if($db){
                $encriptada = password_hash($contraNueva, PASSWORD_BCRYPT); 
                $stmt = $db->prepare( "CALL Restaurar_contra (?,?)");
                $stmt->bindParam( 1 , $id, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->bindParam( 2 , $encriptada, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $count = $stmt->rowCount();
                if($count > 0){
                    $json['status'] = true;
                }else{
                    $json['status'] = false;
                }
            }else{
                $json['status'] = false;
            }
        }else{
            $json['status'] = false;
        }
        
        echo json_encode($json);
    }

    if($action == "cambiarContra"){
        $id = $_POST['id'];
        $contraVieja = $_POST['contraVieja'];
        $modelo = new Conexion;
        $db = $modelo->get_conexion();
            if($db){
                $encriptada = password_hash($contraVieja, PASSWORD_BCRYPT); 
                $stmt = $db->prepare( "CALL Consultar_contra2(?)");
                $stmt->bindParam( 1 , $id, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 4000);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
                if($count > 0){
                    $encriptada = $data[0]["Contrasena"];
                    if(password_verify($contraVieja, $encriptada)){
                        $json['status'] = true;
                    }else{
                        $json['status'] = false;
                    }
                }else{
                    $json['status'] = false;
                    $json["msg"] = "NO HAY PERSONAL";
                }
            }else{
                $json['status'] = false;
                $json["msg"] = "DB NO CONECTADA";
            }
        
        echo json_encode($json);
    }

    ?>