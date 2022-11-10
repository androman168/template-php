<?php
require_once('Config/Config.php');
require_once 'Helpers/Helpers.php';
require_once 'Helpers/Session.php';


$ruta = !empty($_GET['url']) ? $_GET['url'] : CONTROLLER_DEFAULT . "/" . METHOD_DEFAULT;
$array = explode("/", $ruta);
$controller = $array[0];

$method = METHOD_DEFAULT;
$parameter = "";
if (!empty($array[1])) {
    if (!empty($array[1] != "")) {
        $method = $array[1];
    }
}
if (!empty($array[2])) {
    if (!empty($array[2] != "")) {
        for ($i = 2; $i < count($array); $i++) {
            $parameter .= $array[$i] . ",";
        }
        $parameter = trim($parameter, ",");
    }
}

require_once 'Config/App/Autoload.php';

$dirController = CONTROLLER . "/" . ucwords($controller) . ".php";
$errorController = CONTROLLER . "/" . CONTROLLER_ERROR. ".php";

if (file_exists($dirController)) {
    require_once $dirController;
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        $controller->$method($parameter);
    } else {
        require_once $errorController;
        $controller = new Error404;
        $controller->index();
    }
} else {
    require_once $errorController;
    $controller = new Error404;
    $controller->index();
}