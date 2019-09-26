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
    
    if($usuario){

        if($db->get("usuarios","*", ["AND" => ["correo" => $_POST['usuario'], "password"=> $_POST['password']]])){

            session_start();
            $respuesta["texto"] = "Si existe";
            $_SESSION['id'] = $usuario["id"];
            $_SESSION['nombre'] = $usuario["nombre"];
            $_SESSION['email'] = $usuario["correo"];
            $_SESSION['status'] = $usuario["status"];
            $_SESSION['nivel'] = $usuario["nivel"];
            $respuesta["status"] = 1;
            
        }else{
                $respuesta["texto"] = "Contraseña incorrecta";
                $respuesta["status"] = 2;
            }
    }else{
        $respuesta["texto"] = "No existe";
        $respuesta["status"] = 0;
    }

    echo json_encode($respuesta);
}
?>