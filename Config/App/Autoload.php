<?php

spl_autoload_register(function ($class) {

    $sources = array("Config/App/$class.php", "Models/$class.php", "Controllers/$class"."php");

    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});
