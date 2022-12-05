<?php
    if(isset($_GET['cerrar'])){
        session_start();
        $tipo = $_SESSION['tipo'];
        $_SESSION['id'] = NULL;
        $_SESSION['tipo'] = NULL;
        $_SESSION['nombre'] = NULL;
        unset($_SESSION['id']);
        unset($_SESSION['tipo']);
        unset($_SESSION['nombre']);
        session_destroy();

        if($tipo == "trabajador"){
            header("Location: ../loginTrabajadores.php");
        }
        else{
            header("Location: ../loginPersonal.php");
        }
    }
?>