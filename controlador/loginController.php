<?php
include_once '../Modelo/Usuario.php';
// tiempo activa de la sesión en segundos
$lifetime = 1800; /*30 min */
session_set_cookie_params($lifetime);

session_start();//inicia sesion

//Obteniendo los valores enviados de POST
$user = $_POST["user"];
$pass = $_POST["pass"];

$usuario = new Usuario();

if (!empty($_SESSION['tipo'])) {//si hay una sesion activada
    /*session_destroy();*/

    switch ($_SESSION['tipo']) {//se redirige al usuario a la página correspondiente.
        case 1:
            header('Location: ../vista/adm_menu.php');
            break;
    }
} else {
    $usuario->Loguearse($user, $pass);//sino se realiza el met login
    if (!empty($usuario->objetos)) {// si se encontraron resultados en la consulta (credenciales válidas)
        foreach ($usuario->objetos as $objeto) {//recorre los result de la consult
            $_SESSION['usuario'] = $objeto->iduser;//almacenan info en la sesión
            $_SESSION['tipo'] = $objeto->id_tipo;
            $_SESSION['nombre'] = $objeto->usuario;
        }
        switch ($_SESSION['tipo']) {//redirigiendo segun tipo
            case 1:
                header('Location: ../vista/adm_menu.php');
                break;
        }
    } else {
        header('Location: ../vista/login.php');//sino se redirige a la vista login
    }
}
