<?php
require 'Medoo.php';
require_once '_db.php';

if($_POST){
    switch($_POST['accion']) {
        case 'login': login();
        break;
        default:
        break;
    }
}

function login(){
    global $db;
    $respuesta = [];
    $usuario = $db->get("usuarios", "*", ["correo" => $_POST['usuario']]);

    if ($_POST['usuario'] != "") {

        if ($usuario) {
            if ($usuario = $db->get("usuarios", "*", ["AND" => ["correo" => $_POST['usuario'], "password"=> $_POST['password']]])) {

                session_start();
                error_reporting(0);
                $respuesta["texto"] = "Si existe";
                $respuesta["status"] = 1;
                $_SESSION['id'] = $usuario["id"];
                $_SESSION['nombre'] = $usuario["nombre"];
                $_SESSION['correo'] = $usuario["correo"];
                $_SESSION['status'] = $usuario["status"];
                $_SESSION['nivel'] = $usuario["nivel"];
                
            } else {
                $respuesta["texto"] = "Contraseña incorrecta";
                $respuesta["status"] = 2;
            }
        } else {
            $respuesta["texto"] = "No existe";
            $respuesta["status"] = 0;
        }
    }else{
        $respuesta["texto"] = "No usuario";
        $respuesta["status"] = 3;
    }
    echo json_encode($respuesta);
}
?>