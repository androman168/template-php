<?php


//Retorla la url del proyecto
function base_url()
{
    return BASE_URL;
}

function headertemplate($data = "")
{
    $view_header = "Views/Layout/header.php";
    require_once($view_header);
}

function title($data = "")
{
    $view_title = "Views/Layout/title.php";
    require_once($view_title);
}

function footertemplate($data = "")
{
    $view_footer = "Views/Layout/footer.php";
    require_once($view_footer);
}

//Muestra información formateada
function dep($data)
{
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

function dump($data)
{

    var_dump($data);
    die();
}

// Redireccion
// function redirect($route, $params="")
// {
//     header("Location: " . BASE_URL . '/' . $route . '/' . $params);
//     exit();
// }

function redirect($url, $permanent = false)
{
    header('Location: ' . BASE_URL . '/' . $url, true, $permanent ? 301 : 302);

    exit();
}

function showErrorForm($class="", $data=""){
    echo '<span class="' . $class . '">';
        echo '<strong>' . $data . '</strong>';
    echo '</span>';
}


//Elimina exceso de espacios entre palabras
function strClean($strCadena)
{
    $string = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $strCadena);
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    $string = str_ireplace("<script>", "", $string);
    $string = str_ireplace("</script>", "", $string);
    $string = str_ireplace("<script src>", "", $string);
    $string = str_ireplace("<script type=>", "", $string);
    $string = str_ireplace("SELECT * FROM", "", $string);
    $string = str_ireplace("DELETE FROM", "", $string);
    $string = str_ireplace("INSERT INTO", "", $string);
    $string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
    $string = str_ireplace("DROP TABLE", "", $string);
    $string = str_ireplace("OR '1'='1", "", $string);
    $string = str_ireplace('OR "1"="1"', "", $string);
    $string = str_ireplace('OR ´1´=´1´', "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("LIKE '", "", $string);
    $string = str_ireplace('LIKE "', "", $string);
    $string = str_ireplace("LIKE ´", "", $string);
    $string = str_ireplace("OR 'a'='a", "", $string);
    $string = str_ireplace('OR "a"="a', "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("--", "", $string);
    $string = str_ireplace("^", "", $string);
    $string = str_ireplace("[", "", $string);
    $string = str_ireplace("]", "", $string);
    $string = str_ireplace("==", "", $string);
    return $string;
}

function validateDate($date){
	$values = explode('/', $date);
	if(count($values) == 3 && checkdate($values[0], $values[1], $values[2])){
		return true;
    }
	return false;
}

