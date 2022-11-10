<?php
const BASE_URL = 'http://localhost/proyectos/php/template-php/';

define('SITE_LANG', 'es');

/* ----------------------------------------------------- */
/*             CONSTANTES PARA CONEXION DB                  */
/* ----------------------------------------------------- */

const DB_HOST = "localhost";
const DB_NAME = "inventary";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";

/* ----------------------------------------------------- */
/*             INFORMACION DEL SITIO                  */
/* ----------------------------------------------------- */
define('SITE_CHARSET', 'UTF-8');
define('SITE_NAME', 'Bodega de inventario');
// define('SITE_VERSION', '1.0.0');
// define('SITE_LOGO', 'gsflogo.svg');
// define('SITE_FAVICON', 'android-icon-48x48.png');
// define('SITE_DESC', 'GSF FRAMEWORK');
// define('SITE_LOGO_MAIN', 'main.logo.png');

/* ----------------------------------------------------- */
/*             DIRECTORIOS DE LA APP                    */
/* ----------------------------------------------------- */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('CONTROLLER', ROOT . DS . 'Controllers');
define('VIEW', ROOT . DS . "Views");
define('TEMPLATE', VIEW . DS . "Templates");
define('IMAGE_PATH', ROOT . DS . "Assets" . DS . "img" . DS);

/* ----------------------------------------------------- */
/*             ARCHIVOS PUBLICOS                         */
/* ----------------------------------------------------- */
define('ASSETS', BASE_URL . '/Assets');
define('CSS', ASSETS . "/app/css");
define('JS', ASSETS . "/app/js");
define('PLUGINS', ASSETS . "/plugins");
define('FAVICON', ASSETS . "/favicon/");
define('FONTS', ASSETS . "/font-awesome");
define('IMG', ASSETS . "/app/img");
define('UPLOADS', ASSETS . "/uploads/images/");


/* ----------------------------------------------------- */
/*              CONTROLLER - METHOD - ERORR DEFAULT              */
/* ----------------------------------------------------- */

define('CONTROLLER_DEFAULT', 'Home');
// const CONTROLLER_DEFAULT = 'Home';
define('METHOD_DEFAULT', 'index');
define('CONTROLLER_ERROR', 'Error404');

const IVA = 0.13;
