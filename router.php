<?php
require_once 'home.php';
require_once 'inmuebles.php';
require_once 'inmueble.php';
require_once 'about.php';
require_once 'login.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] .
 dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto

if (!empty($_GET["action"])){
    $action = $_GET["action"];
} else {
    $action = "home";
}

// parsea la accion Ej about/juan
$params = explode("/",$action);

switch ($params[0]) {
    case "home":
        home();
        break;
    case "inmuebles":
        showInmuebles();
            break;
    case "inmueble":
        if(isset($params[1])){
            showInmuebleById($params[1]);
        }else{
            showInmuebles();
        }
        break;
        case "about":
            if(empty($params[1])){
                showAbout();
            }
            else{
                showAbout($params[1]);
            }
        break;
        case "login":
            showLogin();
            break;
    default:
        echo "Error 404";
    }